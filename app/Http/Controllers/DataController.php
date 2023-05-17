<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    //tampilin card
    public function card(){
        $data = Data::all();
        return view('testimonial', compact('data'));

    }
    public function view($id){
        $data = Data::findOrFail($id);
        return view('blog.view', compact('data'));
    }
    //untuk store
    public function store(Request $request){

        //nyimpan
        $data = new Data();
        $data->title = $request->title;
        $data->content = $request->content;

        $data->save();
        return view('testimonial');
    }

    
}
