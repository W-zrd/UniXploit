<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('event', [
            "data" => Post::latest()->filter(request(['search']))->get()
        ]);
    }

    public function userUploadedPosts(){
        return view('admin.admin-dashboard', ["data" => Post::all()]);
    }

    public function showCreateForm()
    {
        return view('admin.admin-create-event');
    }

    public function showCreateForms()
    {
        return view('admin.admin-event');
    }

    public function storeNewPost(Request $request)
    {
        $adminId = 1;
        $incomingFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'kategori' => 'required',
            'tema' => 'required',
            'content' => 'required',
            'url_event' => 'required',
            'guidebook' => 'file', // Add file validation rule
            'banner_img' => 'image|file|max:5120', // Max uploaded img = 5MB
        ]);

        // Handle file uploads
        if ($request->hasFile('guidebook')) {
            $incomingFields['guidebook'] = $request->file('guidebook')->store('guidebooks');
        }

        if ($request->hasFile('banner_img')) {
            $incomingFields['banner_img'] = $request->file('banner_img')->store('banners');
        }
        $incomingFields['admin_id'] = $adminId;

        Post::create($incomingFields);
    }


    public function viewPost($id){
    
        $post = Post::find($id);
        if (!$post) {
            return view('event-post');
        } else {
            $post->formatted_date = $post->updated_at->format('d F Y');
            return view('event-post', ["post" => $post]);
        }
    
        
    }
    
    public function deletePost($id){
        $data = Post::find($id);
        $data -> delete();
        return redirect()->route('admin');
    }

    public function updatePost(Request $request, $id){
        $data =  Post::find($id);
        $data -> update($request->all());
        return redirect()->route('admin');
    }
}
