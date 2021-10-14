<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;
class MemberController extends Controller
{
    //return blade page where  can add member
    public function create()
    {
        return view('backend.add');
    }

    //function for show data and retrieve data from database
    public function show_member()
    {
        $member =  Member::all();
        
        return view('backend.showmember', ['member' => $member]);

    }

    //validate data and store data to database
    public function store(Request $request)
    {
        // dd($request->user()->name);
        //dd($request->all());
        //validate data
        $request->validate([
            'name' => 'required',
            'number' => 'required | min:11| max:12',
            'address' => 'required',
            'father_name' => 'required',
            'designation' => 'required',
            'current_job' => 'required',
            'photo' => 'required | mimes:jpg,png,jpeg|max:5048'
        ]);
        
        //image unique name 
       $newImageName = time(). '-' .$this->imageNameSet($request->name) .'.'.$request->photo->extension();
       
       //make auto folder and store image in public 
       $test = $request->photo->move(public_path('images'), $newImageName);

        //store data
        ////take current login user reference for one to many relationshiop
        $user = $request->user();
        $member = new Member();
        $member->member_name = $request->name;
        $member->member_phone_number = $request->number;
        $member->member_address = $request->address;
        $member->member_father_name = $request->father_name;
        $member->member_designation = $request->designation;
        $member->member_current_job = $request->current_job;
        $member->member_photo = $newImageName;
        $user->member()->save($member);

        //redirect show Member page
        return redirect(route('admin.member.show'))->with('status', 'New Member Added');
      
        
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('backend.editmember', ['member' => $member]);
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        
         //validate data
         $request->validate([
            'name' => 'required',
            'number' => 'required | min:11| max:12',
            'address' => 'required',
            'father_name' => 'required',
            'designation' => 'required',
            'current_job' => 'required',
            'photo' => 'mimes:jpg,png,jpeg|max:5048'
        ]);

      
        //check either photo is update or not
        if($request->photo)
        {
             //image unique name 
            $uniqueImageName = time(). '-' .$this->imageNameSet($request->name) .'.'.$request->photo->extension();
           
            //make auto folder and store image in public 
            $test = $request->photo->move(public_path('images'), $uniqueImageName);
        }else{
            $uniqueImageName = $member->member_photo;
        }

       //updated data to database
        $member->member_name = $request->name;
        $member->member_phone_number = $request->number;
        $member->member_address = $request->address;
        $member->member_father_name = $request->father_name;
        $member->member_designation = $request->designation;
        $member->member_current_job = $request->current_job;
        $member->member_photo = $uniqueImageName;
        $member->save();
        
        if($member)
        {
            //redirect to showmember page
            return redirect(route('admin.member.show'))->with('status', 'Member updated Successfully');
        }
        else 
        {
            return redirect(route('admin.member.show'))->with('status', 'Something is wrong');
        }

    }


    public function destroy($id)
    {
        $deleteMember = Member::destroy($id);

        if($deleteMember)
        {
            return redirect(route('admin.member.show'))->with('status', 'Member deleted successfully');
        }
        else 
        {
            return redirect(route('admin.member.show'))->with('status', 'Not deleted');

        }
    }


    //this function take input all string and return string as single word by concatinate
    public function imageNameSet($name)
    {
        //convert input string to array
        $array_name = explode(" ",$name);
        //take empty variable for storing array of string
        $newName = "";
        //loop for storing name from array and concat all name  to $newName bariable 
        for($i = 0; $i<count($array_name); $i++)
        {
            $newName .= $array_name[$i];

        }

        return $newName;

    }


}
