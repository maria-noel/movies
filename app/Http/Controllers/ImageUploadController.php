<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;


class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function imageUpload()
    {
        return view('images/index');
    }

/**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $data = ['src' => public_path('images'). $imageName  ];

        // Save in database
        $img = Image::create($data);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    



}
