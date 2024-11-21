<?php

namespace App\Http\Controllers;

use App\Models\school;
use App\Models\teacher;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index=school::all();
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
    $owner=$request->get('owner');
    $name=$request->get('name');
    $logo=$request->get('logo');
    $address=$request->get('address');
    $contact=$request->get('contact');
    $school=school::create([
        'owner'=>$owner,
        'name'=>$name,
        'logo'=>$logo,
        'address'=>$address,
        'contact'=>$contact,
    ]);
    return response()->json($school);
    }

    /**
     * Display the specified resource.
     */
    public function show(school $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(school $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  school $school,$id)
    {
        $up =school::find($id);
        if (!$up) {
            return response()->json('message:id not found');
        }
            $owner = $request->get('owner');
            $name = $request->get('name');
            $logo = $request->get('logo');
            $address = $request->get('address');
            $contact = $request->get('contact');
        $up->update([
                'owner' => $owner,
                'name' => $name,
                'logo' => $logo,
                'address' => $address,
                'contact' => $contact,
            ]);
            return response()->json($up);
        }


        /**
         * Remove the specified resource from storage.
         */
        public
        function destroy(school $school, $id)
        {
            $de = school::find($id);
            $de->delete();
            return response()->json(['message' => 'delete is sucssful']);
        }

    }
