<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function list()
    {
    	$data['header_title'] = 'Gallery List';
    	$data['getRecord'] = Gallery::getRecord();
   		return view('admin.gallery.list',$data);
    }

	public function add()
    {
    	$data['header_title'] = 'Add Photos';
   		return view('admin.gallery.add',$data);
    }

	public function insert(Request $request)
    {
    	$gallery = new Gallery();

	    if ($request->hasFile('image')) {
	  	        $image = $request->file('image');
	  	        $imageName = time() . '_image.' . $image->getClientOriginalExtension();
	  	        $image->move(public_path('gallery'), $imageName);
	  	        $gallery->image = $imageName; // Save the image name in the database
	  	}
      $gallery->status = $request->status;
      $gallery->save();

      return redirect('admin/gallery/list')->with('success', 'Gallery added successfully.');
    }

    

	public function edit()
    {
    	
    }

	public function update()
    {
    	
    }

	public function delete($id)
    {
    	$gallery = Gallery::getSingle($id);
        $gallery->is_delete = 1;
        $gallery->save();
        return  redirect()->back()->with('success',"Photos Successfully Deleted "); 
    }



}
