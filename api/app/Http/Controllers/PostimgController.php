<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Postimg;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostimgRequest;
use App\Http\Requests\UpdatePostimgRequest;

class PostimgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Postimg::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            $fields = $request->validate([
                'title' => 'required|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',//2048
                'body' => 'required'

            ]);

            //return "Ok";
            $postimg = Postimg::create($fields);

            //return ['post' => $post ];
            return $postimg;

    }

    /**
     * Display the specified resource.
     */
    public function show(Postimg $postimg)
    {
        //
       // return $postimg;
       /* if(!$postimg)
        {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json($postimg);*/
        return response()->json($postimg);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Postimg $postimg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Postimg $postimg)
    {
        //
    }
}
