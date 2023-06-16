<?php

namespace App\Http\Controllers;

use App\Models\objects;
use Illuminate\Http\Request;

class home extends Controller
{

    public function home () {       
        return view ('home', [
            "judul"=>"Project pariwisata",
        ]);
    }

    public function tourism () {
        $objects = objects::all();
        return view ('tourism', [
            "judul"=>"Tourism",
            'objects'=>$objects
        ]);
    }
}
