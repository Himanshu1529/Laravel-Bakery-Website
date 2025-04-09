<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $data['header_title'] = 'Client Reviews';
        $data['getReview'] = Reviews::getReview();
        return view('admin.review.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        $data['header_title'] = 'Client Reviews';
        return view('review.create',$data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image format
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('reviews'), $imageName);
            $imagePath = 'reviews/' . $imageName; // Store the relative path
        }

        Reviews::create([
            'name' => $request->name,
            'image' => $imagePath,
            'message' => $request->message,
        ]);

        return redirect('/')->with('success', 'Review added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewsRequest $request, Reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Reviews $reviews)
    {
        $brand = Reviews::getSingle($id);
        $brand->is_delete = 1;
        $brand->save();
        return  redirect()->back()->with('success',"Brand Successfully Deleted ");
    }
}
