<?php

namespace App\Http\Controllers;

//use app\Models\Class_room;
use Illuminate\Http\Request;

class Class_room extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index=\App\Models\Class_room::all();
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
        $capacity=$request->get('capacity');
        $classnumber=$request->get('classnumber');
        $number=$request->get('number');
        $level=$request->get('level');

            $Class_room=\App\Models\Class_room::create([

            'capacity'=>$capacity,
            'classnumber'=>$classnumber,
            'number'=>$number,
            'level'=>$level,
                ]);
             return response()->json($Class_room);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Class_room $class_room,$id)
    {
        $up=\App\Models\Class_room::find($id);
        if (!$up) {
            return response()->json('message:id not found');
        }
            $capacity=$request->get('capacity');
            $classnumber=$request->get('classnumber');
            $number=$request->get('number');
            $level=$request->get('level');

        $up->update([

                'capacity'=>$capacity,
                'classnumber'=>$classnumber,
                'namber'=>$number,
                'level'=>$level,
            ]);
             return response()->json($up);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Class_room $Class_room, $id)
    {
        $de=\App\Models\Class_room::find($id);
        $de->delete();
        return response()->json(['message'=>'delete is sucssful']);
    }
}
