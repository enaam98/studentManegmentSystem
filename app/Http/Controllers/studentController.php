<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s = student::all();
        return view(
            'student',
            ['students' => $s, 'layout' => 'index']
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $s = student::all();
        return view(
            'student',
            ['students' => $s, 'layout' => 'create']
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s = new student();
        $s ->firstname= $request->input('firstname');
        $s ->secondname= $request->input('secondname');
        $s ->age= $request->input('age');
        $s ->speciality= $request->input('speciality');
        $s ->address= $request->input('address');
        $s->save();
        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s = student::find($id);
        $student = student::all();
        return view('s',['student'=>$student,'s'=>$s,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s = student::find($id);
        $student = student::all();
        return view('s',['student'=>$student,'s'=>$s,'layout'=>'edit']);
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
        $s = student::find($id);
        $s ->firstname= $request->input('firstname');
        $s ->secondname= $request->input('secondname');
        $s ->age= $request->input('age');
        $s ->speciality= $request->input('speciality');
        $s ->address= $request->input('address');
        $s->save();
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $s = student::find($id);
        $s->delete();
        return redirect('/student');

    }
}
