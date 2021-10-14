<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    public function create()
    {
        return view('backend.post_create');
    }


    public function show_post()
    {
        $post = Post::all();
        return view('backend.show_post', ['post' => $post]);

    }


    //This function validate post data, store post data after that  redirect to post show paage 
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'photo' => 'required | mimes:jpg,png,jpeg|max:5048'
        ]);
        
        //create instance of MemberController for calling imageNameSet method
        $memberController = new MemberController();
       
        //postImageName 
         $postImageName = time().'-'.$memberController->imageNameSet($request->title). '.' .$request->photo->extension();
        
         //photo save in public folder
         $savePhotoPublicFolder = $request->photo->move(public_path('images'), $postImageName);
        
         //store database
         //take current login user reference 
         $user = $request->User();
         $post = new Post();
         $post->post_title = $request->title;
         $post->post_body = $request->body;
         $post->post_photo = $postImageName;
         $user->post()->save($post);

         //redirect show member page after save data
         return redirect(route('admin.post.show'))->with('status', 'New Post Added');


    }


    //This function is for editing form
    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.post_edit', ['post' => $post]);
    }

    //This function is for updating post data
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'photo' => 'mimes:jpg,png,jpeg|max:5048'
        ]);
     

         //check either photo is need to update or not
        

         if($request->photo)
         {
            //create instance of MemberController for calling imageNameSet method
             $memberController = new MemberController();
       
            //postImageName 
            $postImageName = time().'-'.$memberController->imageNameSet($request->title). '.' .$request->photo->extension();
        
            //photo save in public folder
            $savePhotoPublicFolder = $request->photo->move(public_path('images'), $postImageName);
         }
         else
         {
            $postImageName = $post->post_photo;
         }

         //updaet data to database
        
         $post->post_title = $request->title;
         $post->post_body = $request->body;
         $post->post_photo = $postImageName;
         $post->save();

         if($post)
         {
             return redirect(route('admin.post.show'))->with('status', 'Post updated Successfully');
         }
         else 
         {
             return redirect(route('admin.post.show'))->with('status', 'Something is wrong');
         }

    }

    //This function is for deleted post

    public function destroy($id)
    {
        $deletePost = Post::destroy($id);
        if($deletePost)
        {
            return redirect(route('admin.post.show'))->with('status', 'Post deleted Successfully');

        }
        else
        {
            return redirect(route('admin.post.show'))->with('status', 'Something is wrong');

        }
    }
}
