<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Jtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = Jtype::latest()->where('created_by',Auth::id())->get();
        return view('user_backend.jtype.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user_backend/jtype/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $row = Jtype::create($request->all());
        if($row){
            $request->session()->flash('success','Job type Created Successfully');
        } else{
            $request->session()->flash('error','Job type Creation failed');

        }
        return redirect()->route('jtype.index')->with('success'.'done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = Jtype::where('created_by',Auth::id())->find($id);
        return view('user_backend.jtype.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Jtype::where('created_by',Auth::id())->find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('jtype.index');
        }
        return view('user_backend.jtype.edit', compact('data'));
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
        $data['row'] = Jtype::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('jtype.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Job type update Successfully');
        } else {
            $request->session()->flash('error', 'job type Update failed');

        }
        return redirect()->route('jtype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] =Jtype::where('created_by',Auth::id())->find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Job type Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Job type Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('jtype.index');
    }
}
