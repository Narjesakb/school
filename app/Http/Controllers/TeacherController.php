<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index=teacher::all();
        return response()->json($index);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name=$request->get('name');
        $birthdate=$request->get('birthdate');
        $nationality=$request->get('nationality');
        $mobile=$request->get('mobile');
        $address=$request->get('address');
        $gender=$request->get('gender');
        $expertise=$request->get('expertise');
        $salary=$request->get('salary');
        $education=$request->get('education');
        $profile=$request->get('profile');

       $teacher=teacher::create([

        'name'=>$name,
        'birthdate'=>$birthdate,
        'nationality'=>$nationality,
        'mobile'=>$mobile,
        'address'=>$address,
        'gender'=>$gender,
        'expertise'=>$expertise,
        'salary'=>$salary,
        'education'=>$education,
        'profile'=>$profile,
           ]);
       return response()->json($teacher);
    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher,$id)
    {
        $up=teacher::find($id);
        if (!$up){
            return response()->json('message:id not found');
        }
        $name=$request->get('name');
        $birthdate=$request->get('birthdate');
        $nationality=$request->get('nationality');
        $mobile=$request->get('mobile');
        $address=$request->get('address');
        $gender=$request->get('gender');
        $expertise=$request->get('expertise');
        $salary=$request->get('salary');
        $education=$request->get('education');
        $profile=$request->get('profile');
        $up->update([
            'name'=>$name,
            'birthdate'=>$birthdate,
            'nationality'=>$nationality,
            'mobile'=>$mobile,
            'address'=>$address,
            'gender'=>$gender,
            'expertise'=>$expertise,
            'salary'=>$salary,
            'education'=>$education,
            'profile'=>$profile
        ]);
        return response()->json($up);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher,$id)
    {
        $de=teacher::find($id);
        $de->delete();
        return response()->json(['message'=>'delete is sucssful']);
    }
}
