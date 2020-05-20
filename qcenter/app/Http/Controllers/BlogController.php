<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct(){
         $this->middleware("auth");
     }

     

    public function index(Request $request)
    {
        //
        $search = $request->input('search');

        $blogs = Blog::latest()->search($search)->paginate(3);
        return view('blogs.index',compact('blogs','search'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'name' => 'required|min:4|max:30',
            'nrc' => 'required|min:4|max:30',
            'address' => 'required|min:4|max:30',
            'center' => 'required|min:4|max:30'
        ]);
        Blog::create($validateData);
        return redirect()->route('blogs.index')->with('success','new volunteer created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blogs = Blog::find($id);
        return view('blogs.show',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blogs = Blog::find($id);
        return view('blogs.edit',compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validateData = $request->validate([
            'name' => 'required|min:4|max:30',
            'nrc' => 'required|min:4|max:30',
            'address' => 'required|min:4|max:30',
            'center' => 'required|min:4|max:30'
        ]);
        $blogs = Blog::find($id);
        $blogs->name = $request->get('name');
        $blogs->nrc = $request->get('nrc');
        $blogs->address = $request->get('address');
        $blogs->center = $request->get('center');
        $blogs->save();
        return redirect()->route('blogs.index')
                        ->with('success ','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blogs = Blog::find($id);
        $blogs->delete();
        return redirect()->route('blogs.index')
                        ->with('success','deleted successfully!');
    }
}
