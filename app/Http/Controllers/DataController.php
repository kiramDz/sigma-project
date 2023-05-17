<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

// berfunsi sebagai perantara anatar route dan logika dari website kami
class DataController extends Controller
{
    //tampilin card
    public function card(){ //mengambil semuda data dari model Data::all() serta  mengembalikan koleksi (collection) dari semua entitas dalam tabel data
        $data = Data::all();  
        return view('testimonial', compact('data')); //digunakan untuk mengembalikan tampilan (view) kepada pengguna.
        //Fungsi compact('data') digunakan untuk memasukkan variabel $data ke dalam tampilan sebagai data yang akan ditampilkan. 


        
    }
    public function view($id){ //memiliki parameter id, sehingga fungsi ini akan menerima data id
        $data = Data::findOrFail($id); //ddigunakan untuk mengembalikan tampilan (view) kepada pengguna.
        return view('blog.view', compact('data')); //igunakan untuk mengembalikan tampilan (view) dengan nama 'blog.view'
    } 

    //fungsi yang akan menerima objek request 
    public function store(Request $request){

        //nyimpan
        $data = new Data(); //Pada baris pertama, $data = new Data(); membuat instance baru dari model Data.
        $data->title = $request->title; //Pada baris kedua dan ketiga, nilai dari properti title dan content pada objek $data diisi dengan nilai yang diterima dari permintaan $request->title dan $request->content. Ini memungkinkan untuk menyimpan data yang dikirimkan oleh pengguna ke dalam objek model.
        $data->content = $request->content;

        $data->save(); //Pada baris keempat, $data->save(); digunakan untuk menyimpan objek $data ke dalam database. Ini akan melakukan operasi penyimpanan data ke tabel terkait.
        
        
        return redirect(url('/testimonial')); //Pada baris terakhir, return view('testimonial'); digunakan untuk mengembalikan tampilan (view) dengan nama 'testimonial'.
    }

    
}
