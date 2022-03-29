<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        $data['rows']=User::all();
        return view('backend.user.profile',compact('data'));

    }

    public function profiles(){
        $data['rows']=User::all();
        return view('User_backend.user.profile',compact('data'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows']=User::all();

        return view('backend.user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/user'), $fileName);
            $request->request->add(['image' => $fileName]);
        }


        $row = User::create($request->all());
        if($row){
            $request->session()->flash('success','User Created Successfully');
        } else{
            $request->session()->flash('error','User Creation failed');

        }
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['rows']=User::find($id);
        return view('backend.user.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = User::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('backend.user.index');
        }
        return view('backend.user.edit', compact('data'));

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
        $data['row'] = User::find($id);

        if (!$data['row']) {
            request()->session()->flash('error', 'Invalid request');
            return redirect()->route('user.index');
        }
        $file = $request->file('image_file');

        if ($request->hasfile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/user'), $fileName);
            $request->request->add(['image' => $fileName]);
        }
        if ($data['row']->update($request->except(['_token']))) {

            $request->session()->flash('success', 'User Profile updated Successfully');
        } else {
            $request->session()->flash('error', 'User Profile update failed');
        }


        return redirect()->back();
    }
}
