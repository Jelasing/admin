<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Intervention\Image\Imagemanager;
use Image;

class ImageController extends Controller
{

	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImage()
    {
    	return view('imagess.resizeImage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
    	

	    $this->validate($request, [
	    	  'imageName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('imageName');
        $input['imagename'] = $image->getClientOriginalName();
     
   
        $destinationPath = public_path('/thumnail');
        $img = \Image::make($image->getRealPath());
        $img->resize(150,150, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imagename']);


		$destinationPath = public_path('/timeline');
        $img = \Image::make($image->getRealPath());
        $img->resize(640, 360, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);


        return back()
        	->with('success','Image Upload successful')
        	->with('imageName',$input['imagename']);
    }

}
