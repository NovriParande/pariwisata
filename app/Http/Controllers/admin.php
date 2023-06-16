<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\objects;
class admin extends Controller
{
    function index () {
    return view('admin.index');
    }

    function objects () {
        $objects = objects::all();
        return view ('admin.objects', [

            'objects'=>$objects
        ]);
    }

    function add_objects () {
        return view ('admin.add_objects');
    }

    function save_objects (Request $request) 
    {
        $objects = new objects;
        $objects->title = $request->title;
        $objects->location = $request->location;
        $objects->description = $request->description;
        $objects->image = $request->image;
        $objects->save();
        return redirect('admin/objects');
    }

    function edit_objects ($id) 
    {
        $objects = objects::find($id);
        return view ('admin.edit_objects', 
        [
            'objects'=>$objects
        ]);
    }
    function update_objects($id, Request $request)
    {
        $objects = objects::find($id);
        $objects->title = $request-> input('title');
        $objects->location = $request-> input('location');
        $objects->description = $request-> input('description');
        $objects->image = $request-> input('image');
        $objects->save();
        return redirect('admin/objects');
    }

    function delete_objects ($id) 
    {
        $objects = objects::find($id);
        $objects->delete();
        return redirect('admin/objects');
    }
}