<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Madel;
use Illuminate\Http\Request;

class MadelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $madels = Madel::latest()->paginate(5);
        return view('admin.madels.index',compact('madels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.madels.create', compact('categories'));
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
            'img_compcard' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'age' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'bust' => 'required',
            'waist' => 'required',
            'hips' => 'required',
            'shoe' => 'required',
            'eyes_color' => 'required',
            'hair_color' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/madels/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        if ($image = $request->file('img_compcard')) {
            $destinationPath = 'uploads/madels/';
            $profileImage = date('YmdHis') . "_compcard." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_compcard'] = "$profileImage";
        }

        Madel::create($input);

        return redirect()->route('madels.index')
                        ->with('success','Model created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = Image::where('madel_id', $id)->get();
        $madels = Madel::where('id', $id)->get();
        return view('admin.madels.show',compact('madels', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $madels = Madel::where('id', $id)->get();
        return view('admin.madels.edit',compact('madels', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Madel $madel)
    {
        $request->validate([
            'image' => 'required',
            'img_compcard' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'age' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'bust' => 'required',
            'waist' => 'required',
            'hips' => 'required',
            'shoe' => 'required',
            'eyes_color' => 'required',
            'hair_color' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            unlink(public_path('uploads/madels/'.$madel->image));
            $destinationPath = 'uploads/madels/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        if ($image = $request->file('img_compcard')) {
            unlink(public_path('uploads/madels/'.$madel->img_compcard));
            $destinationPath = 'uploads/madels/';
            $profileImage = date('YmdHis') . "_compcard." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_compcard'] = "$profileImage";
        }else{
            unset($input['img_compcard']);
        }

        $madel->update($input);

        return redirect()->route('madels.index')
                        ->with('success','Model updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Madel $madel)
    {
        $madel->delete();
        return redirect()->route('madels.index')->with('success','Model deleted successfully');
    }

    // FRONT // FRONT // FRONT //

    public function madels()
    {
        $madels = Madel::all();
        return view('front.main.madels',compact('madels'));
    }

    public function show_madel($id)
    {
        $madels = Madel::where('id', $id)->get();
        $categories = Category::all();
        $images = Image::where('madel_id', $id)->get();
        return view('front.main.show_madel',compact('madels', 'categories', 'images'));
    }
}
