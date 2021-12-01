<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('admin.blogs.index',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
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
            'title_en' => 'required',
            'text_en' => 'required',
            'description_en' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'description_ru' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/blogs/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Blog::create($input);

        return redirect()->route('blogs.index')
                        ->with('success','Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::where('id', $id)->get();
        return view('admin.blogs.show',compact('blogs'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::where('id', $id)->get();
        return view('admin.blogs.edit',compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title_en' => 'required',
            'text_en' => 'required',
            'description_en' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'description_ru' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            unlink(public_path('uploads/blogs/'.$blog->image));
            $destinationPath = 'uploads/blogs/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $blog->update($input);

        return redirect()->route('blogs.index')
                        ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success','Blog deleted successfully');
    }

    // FRONT // FRONT // FRONT //

    public function blogs()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        return view('front.main.blogs',compact('blogs', 'categories'));
    }

    public function show_blog($id)
    {
        $categories = Category::all();
        $blogs = Blog::where('id', $id)->get();
        return view('front.main.show_blog',compact('blogs', 'categories'));
    }

}
