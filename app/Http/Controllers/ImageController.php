<?php

namespace App\Http\Controllers;

use App\Models\Madel;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.madels.show', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'madel_id' => 'required',
        ]);

        // $input = $request->all();

        if ($request->file('image')) {
            $image = $request->file('image');
            $destinationPath = 'uploads/madels/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }
        $imageDb = new Image();
        $imageDb->madel_id = $request->madel_id;
        $imageDb->name = $profileImage;
        $imageDb->save();


        return redirect()->back()
                        ->with('success','Image added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $madels = Madel::where('id', $id)->get();
        $images = Image::where('id', $id)->get();
        return view('front.brand.compcard',compact('images', 'madels'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->back()->with('success','Image deleted successfully');
    }
}
