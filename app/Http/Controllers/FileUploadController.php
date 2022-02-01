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
            'user_img' => 'required |array| max:1000 | min:2' ,
            'user_img.*' => 'required | mimes:png,jpg,jpeg' ,

        //     // 'user_img' => 'required | mimes:png,jpeg,doc,docx,pdf,jpg,gif |max:1000 | min:2'
        //     // 'user_img' => 'required | mimes:png'
        ]);

        // $validator = Validator::make($request->all(), [
        //     "names"    => "required|array|min:3",
        //     "names.*"  => "required|string|distinct|min:3",
        // ]);
        

        
        if (request()->hasFile('user_img'))  //if file available
        {
            $destinationPath = 'uploads'; // this path is public/uploads  
            
            $all_file = request()->file('user_img');
            // error check
            // dd(request()->all());
            // dd(count($all_file));

            foreach($all_file as $file)
            {
                $extension = $file->getClientOriginalExtension(); //
                // $file_name = rand(). "." . $extension;
                $file_name = uniqid(). "." . $extension;
                
                $file->move($destinationPath, $file_name);
            }
            return back();
        }
    }

}
