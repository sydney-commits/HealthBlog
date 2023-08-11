<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use DB;
use Illuminate\Support\Str;
use URL;

class PostController extends Controller
{

    public function homePage(){

        $latest_posts = Post::orderBy('id','desc')->take(3)->get();

        return view ('blog.index',
    [
        'latest_posts' =>$latest_posts
    ]);
    }
    public function blogpage(){


        $posts = Post::orderBy('id','desc')->paginate(12);



        return view('blog.blog',['posts' => $posts,
]);
    }


    public function show($slug)
    {
      //  $post = Post::findorFail($id);
        $post = Post::where('slug', $slug)->first();
        $title = $post->title;
        $currentURL = URL::current();
         $tag = Tag::where('id',$post->tag_id)->first();
        $previous_post = Post::take(3)->get()->first();
         $next_post = Post::take(5)->get()->last();
        $related_posts = DB::table('posts')->where('category_id', $post->category_id)->take(3)->get();
         $latest_posts = Post::orderBy('id','desc')->take(6)->get();
      $shareButtons1 = \Share::currentPage($post->title)
      ->facebook()
      ->twitter()
      ->linkedin($post->title)
      ->whatsapp()
      ->telegram()
      ->pinterest();

        return view ('blog.blog-item',[
            'post'=>$post,
            "currentURL" =>$currentURL,
            "title" => $title,
            'previous_post'=>$previous_post,
            'next_post' =>$next_post,
            'related_posts'=>$related_posts,
            'tag' =>$tag,
            'latest_posts'=>$latest_posts,


            // 'related_posts'=>$related_posts,
            // 'categories'=> $categories,
            // 'latest_posts'=> $latest_posts,
            "shareButtons1" => $shareButtons1,
            // 'links' => $links,
            // 'title'=> $title,
            // 'title1'=> $title1,

            // 'excerpt'=>$excerpt,
            // 'currentURL' => $currentURL


        ]);
    }

    public function showCategory($slug){

        $category = Category::where('slug', $slug)->first();

        // $posts = Post::orderBy('id','desc')->paginate(12);

        $posts = Post::where('category_id',$category->id)->paginate(12);

        return view('blog.categories',[
            'posts'=> $posts
        ]);


    }
}
