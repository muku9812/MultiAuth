<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\JobCategory;
use App\Models\Jobs;
use App\Models\Jtype;
use App\Models\Qualification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['rows']=Jobs::where('created_by',Auth::id())->get();
        return view('user_backend.job.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['country']=Country::where('status','1')->get();
        $data['qualification']=Qualification::where('status','1')->get();
        $data['row']=JobCategory::where('created_by',Auth::id())->where('status','1')->get();
        $data['jtype']=Jtype::where('created_by',Auth::id())->where('status','1')->get();
        return view('user_backend/job/create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('cv');
        if ($request->hasFile("cv")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/document/jobs'), $fileName);
            $request->request->add(['document' => $fileName]);
        }

                $row = Jobs::create($request->all());
            if($row){
                $request->session()->flash('success','Job Created Successfully');
            } else{
                $request->session()->flash('error','Job Creation failed');

            }
            return redirect()->route('job.index')->with('success'.'done');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = Jobs::find($id);
        return view('user_backend.job.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = Jobs::find($id);
        $data['jtype']=Jtype::where('created_by',Auth::id())->where('status','1')->get();

        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('job.index');
        }
        return view('user_backend.job.edit', compact('data'));
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
        $data['row'] = Jobs::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('job.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Job update Successfully');
        } else {
            $request->session()->flash('error', 'Job Update failed');

        }
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] =Jobs::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Jobs Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Jobs Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('job.index');
    }
}
