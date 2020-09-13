<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function edit($id){
        return view('user.edit')->with('user',User::findOrFail($id));
    }
    /**
     * update
     */
    public function update(Request $request,$id){
        $data=$request->only([
            'name',
            'email',
            'password',
            'image' ,
        ]);
 
        $user = User::findOrFail($id);

        if($request->hasFile('image')){  
            
            $image = $data['image']->store($data['name'],'public'); //hash generate
            //example: raju/vagdvuavscygauyscvabvcuh.jpg
            
            // check user has already a image
            if($user->image_id){
                $photo =Image::findOrFail($user->image_id);
                Storage::disk('public')->delete($user->image->path);
                $photo->update(['path'=>$image]);
            }else{
    
            //store in image table
               $image = Image::create([
                   'path'=>$image
               ]);
               $data['image_id']=$image->id;
            }
           
        }
        $user->update($data);
        Session::flash('success','UPDATED SUCCESSFULY');
        return redirect()->route('pizza.index');
    }
}
