<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = JobCategory::latest()->where('created_by',Auth::id())->get();
        return view('user_backend.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user_backend/category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $row = JobCategory::create($request->all());
        if($row){
            $request->session()->flash('success','Category Created Successfully');
        } else{
            $request->session()->flash('error','Category Creation failed');

        }
        return redirect()->route('category.index')->with('success'.'done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = JobCategory::where('created_by',Auth::id())->find($id);
        return view('user_backend.category.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = JobCategory::where('created_by',Auth::id())->find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('category.index');
        }
        return view('user_backend.category.edit', compact('data'));
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
        $data['row'] = JobCategory::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('category.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Category update Successfully');
        } else {
            $request->session()->flash('error', 'Category Update failed');

        }
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] =JobCategory::where('created_by',Auth::id())->find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Category Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Category Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('category.index');
    }
}
