<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index=student::all();
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
        $address=$request->get('address');
        $gender=$request->get('gender');
        $contact=$request->get('contact');
        $nationality=$request->get('nationality');
        $field=$request->get('field');
        $class=$request->get('class');
        $profile=$request->get('profile');

        $student=student::create([
            'name'=>$name,
            'birthdate'=>$birthdate,
            'address'=>$address,
            'gender'=>$gender,
            'contact'=>$contact,
            'nationality'=>$nationality,
            'field'=>$field,
            'class'=>$class,
            'profile'=>$profile,
        ]);
        return response()->json($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student,$id)
    {
        $up=student::find($id);
        if (!$up) {
            return response()->json('message:id not found');
        }
        $name=$request->get('name');
        $birthdate=$request->get('birthdate');
        $address=$request->get('address');
        $gender=$request->get('gender');
        $contact=$request->get('contact');
        $nationality=$request->get('nationality');
        $field=$request->get('field');
        $class=$request->get('class');
        $profile=$request->get('profile');

        $up->update([
            'name'=>$name,
            'birthdate'=>$birthdate,
            'address'=>$address,
            'gender'=>$gender,
            'contact'=>$contact,
            'nationality'=>$nationality,
            'field'=>$field,
            'class'=>$class,
            'profile'=>$profile,
        ]);
        return response()->json($up);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student,$id)
    {
        $de=student::find($id);
        $de->delete();
        return response()->json(['message'=>'delete is sucssful']);
    }
}
