<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function create()
    {
        return view('fileup');
    }
    public function store()
    {
        request()->validate([
            'user_img' => 'required | image | max:1000 | min:10'
            // 'user_img' => 'required | mimes:png,jpeg,doc,docx,pdf,jpg,gif'
            // 'user_img' => 'required | mimes:png'
        ]);

        
        if (request()->hasFile('user_img'))  //if file available
        {
            $destinationPath = 'uploads'; // this path is public/uploads  

            $extension = request()->file('user_img')->getClientOriginalExtension(); //
            // $file_name = rand(). "." . $extension;
            $file_name = uniqid(). "." . $extension;
            request()->file('user_img')->move($destinationPath, $file_name);

            return back();
        }
    }

}
