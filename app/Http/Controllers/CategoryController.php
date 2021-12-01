<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Madel;
use App\Models\Order;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('admin.categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name_en' => 'required',
            'name_ru' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->image) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories/'), $profileImage);
            $input['image'] = "$profileImage";
        }

        Category::create($input);

        return redirect()->route('categories.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('id', $id)->get();
        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = category::where('id', $id)->get();
        return view('admin.categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'image' => 'required',
            'name_en' => 'required',
            'name_ru' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->image) {
            unlink(public_path('uploads/categories/'.$category->image));
            $destinationPath = 'uploads/categories/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $category->update($input);

        return redirect()->route('categories.index')->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success','Category deleted successfully');
    }

    // FRONT // FRONT // FRONT //

    public function main()
    {
        $categories = Category::all();
        return view('front.main.main',compact('categories'));
    }

    public function menu()
    {
        $categories = Category::all();
        return view('front.layouts.app',compact('categories'));
    }

    public function show_category($id)
    {
        $categories = Category::all();
        $madels = Madel::where('category_id', $id)->get();
        return view('front.main.models',compact('categories', 'madels'));
    }

    public function show_category_id($id)
    {
        $category_id = Category::where('id', $id)->get();
        return view('admin.categories.show',compact('category_id'));
    }

    public function anketa()
    {
        $categories = Category::all();
        return view('front.main.become', compact('categories'));
    }

    public function storeOrder(Request $request)
    {
        $anketa = new Order();
        $anketa->fname = $request->fname;
        $anketa->lname = $request->lname;
        $anketa->gender = $request->gender;
        $anketa->phone = $request->phone;
        $anketa->age = $request->age;
        $anketa->height = $request->height;
        $anketa->weight = $request->weight;
        $anketa->bust = $request->bust;
        $anketa->waist = $request->waist;
        $anketa->hips = $request->hips;
        $anketa->shoe = $request->shoe;
        $anketa->eyes_color = $request->eyes_color;
        $anketa->hair_color = $request->hair_color;
        if ($request->image != null) {

            $imageName = asset("anketa/" . time() . '.' . $request->image->extension());

            $request->image->move(public_path('anketa/'), $imageName);
            $anketa->image = $imageName;
        }
        $anketa->save();

        return redirect('/')->with('success','Category deleted successfully');
    }

    public function school()
    {
        $categories = Category::all();

        return view('front.main.school', compact('categories'));
    }

    public function about()
    {
        $categories = Category::all();

        return view('front.main.about', compact('categories'));
    }

    public function contact()
    {
        $categories = Category::all();

        return view('front.main.contact', compact('categories'));
    }
}
