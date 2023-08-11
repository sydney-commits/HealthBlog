<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Str;
use App\Models\Contact;


class AdminController extends Controller
{

    public function homepage(){

        $posts = Post::all();
        $categories = Category::all();

        return view('au.home',
    ['posts' => $posts,
    'categories' => $categories]);
    }
    public function sample(){

         $category = Post::find(3)->category;

         $post = Category::find(1)->post;

        $posts = Post::find(3);

        dd($post);

    }

    public function createCategory(){

        return view('au.createCategory');
    }

    public function storeCategory(Request $request){
        $category = new Category();

        $category->name = $request->input('name');
        $category->image = $request->input('image');
        $category->slug = Str::slug($category->name);

        $category->save();

        return redirect('adminh');

    }


    public function create()
    {

        $categorys= Category::all();
        $tags = Tag::all();
        return view ('au.create',[
            'categories' => $categorys,
            'tags' => $tags
        ]);
    }


    public function store(Request $request)
    {
        $post = new Post();

        $post->author = $request->input('author');
        $post->title = $request->input('title');
        $post->title1 = $request->input('title1');

        $post->slug = Str::slug($post->title);

        $post->body = $request->input('body');
        $post->excerpt = $request->input('excerpt');

        $post->category_id = $request->input('category_id');
        $post->tag_id = $request->input('tag_id');

        $post->featured = 0;
        $post->image = $request->input('image');

         $post->save();

        return redirect('adminh');

    }

    public function store_review(Request $request){
        $contact = new Contact();

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('contact');

        $contact->save();

        return back()->with('success','Thanks For your Review');

    }


}
