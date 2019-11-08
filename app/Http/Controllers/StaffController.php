<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();

        return view('list', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        $staff = new Staff();
        $staff->group = $request->input('group');
        $staff->name = $request->input('name');
        $staff->birthDay = $request->input('birthDay');
        $staff->gender= $request->input('gender');
        $staff->phone= $request->input('phone');
        $staff->cmnd = $request->input('cmnd');
        $staff->email = $request->input('email');
        $staff->address =$request->input('address');
        $staff->save();
        Session::flash('success','Them moi thanh cong');
        return redirect()->route('staffs.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $staff= Staff::findOrFail($id);
        return view('edit', compact('staff'));
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
        $staff = Staff::findOrFail($id);
        $staff->group = $request->input('group');
        $staff->name = $request->input('name');
        $staff->birthDay = $request->input('birthDay');
        $staff->gender= $request->input('gender');
        $staff->phone= $request->input('phone');
        $staff->cmnd = $request->input('cmnd');
        $staff->email = $request->input('email');
        $staff->address =$request->input('address');
        $staff->save();
        Session::flash('success','Cap nhat thanh cong');
        return redirect()->route('staffs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect()->route('staffs.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('staffs.index');
        }
        $staff = Staff::where('name', 'LIKE', '%' . $keyword . '%')->paginate(4);
//        $group = Group::all();
        return view('list', compact('staff'));
    }
}
