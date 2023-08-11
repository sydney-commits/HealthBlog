<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function create(){

        return view('au.create-tag');

    }

    public function store(Request $request){

        $input = [
            'slug' => 'slug',
            'name' => $request->input('name'),
        ];

        $tag = Tag::create($input);

        dd($tag->name);

//         $tag = new Tag();

//         $tag->name = $request->input('name');
//         $tag->slug = $request->input('slug');



//         dd($tag->name)
// ;


//         $input = [
//             'title' => 'Demo Title',
//             'data' => [
//                 '1' => 'One',
//                 '2' => 'Two',
//                 '3' => 'Three'
//             ]
//         ];

//         $item = Item::create($input);

//         dd($item->data);
    }
}
