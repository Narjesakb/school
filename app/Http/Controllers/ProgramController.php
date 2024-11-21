<?php

namespace App\Http\Controllers;

use App\Models\program;
use App\Models\school;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $index=program::all();
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
        $lesson=$request->get('lesson');
        $start_of=$request->get('start_of');
        $end_of=$request->get('end_of');
        $day=$request->get('day');
        $class_number=$request->get('class_number');
        $program=program::create([
            'lesson'=>$lesson,
            'start_of'=>$start_of,
            'end_of'=>$end_of,
            'day'=>$day,
            'class_number'=>$class_number,
        ]);
        return response()->json($program);

    }

    /**
     * Display the specified resource.
     */
    public function show(program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, program $program ,$id)
    {
        $up =program::find($id);
        if (!$up) {
            return response()->json('message:id not found');
        }
        $lesson=$request->get('lesson');
        $start_of=$request->get('start_of');
        $end_of=$request->get('end_of');
        $day=$request->get('day');
        $class_number=$request->get('class_number');

        $up->update([
            'lesson'=>$lesson,
            'start_of'=>$start_of,
            'end_of'=>$end_of,
            'day'=>$day,
            'class_number'=>$class_number,

        ]);
        return response()->json($up);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(program $program,$id)
    {
        $de = program::find($id);
        $de->delete();
        return response()->json(['message' => 'delete is sucssful']);
    }
}
