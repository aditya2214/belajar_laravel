<?php

namespace App\Http\Controllers;

use App\Student; //memanggil model dengan metode use
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(){

        //bisa juga dengan
        //(( $student_data = \App\Studentall(); )) karna (( \App )) itu adalah namespace dari student
        // Tapi tidak perlu (( use App\Student )) seperti yang ada di baris (5).

        $student_data = Student::orderBy('nama_depan','desc')->get();//kita urutkan berdasarkan nama depan desc. desc dari z-a asc dari a-z
        //ini maksudnya adalah kita membuat variable $student_data yang berisi
        //model model tersebutkan terhubung dengan database dan panggil all dengan (( :: )) static model
        return  view('siswa.index', compact('student_data')); //bisa juga menggunakan asosiatif array (( return view ('siswa.index',['student_data' => $student_Data] ))
        // adalah dengan artian kembali menampilkan file index yang berada pada resources/views/siswa/index . 
    }

    public function create(Request $request){ 
    //kenapa kita harus menggunaka request. karna request tersebut terhubung dengan form yang dengan method post.
    // (( return $request; ))//jika kita jalankan perintah tersebut kita akan mendapatkan apa yang kita input dari form.
    Student::create($request->all());
    //nah jika kita memanggil model dengan static function dengan method create didalamnya kita request all. kita tau bahwa yang kita request adalah array dengan banyak property jadi kita request all.
    // dengan method create kita juga harus mendeklarasikan filed apa saja yang harus di isi di dalam model.
    //jika kita perhatikan yang kita request itu ada tokennya, sedangkan kita tidak memiliki field token di database.
     return redirect('/siswa')->with('sukses','Data Berhasil Disimpan'); //kita redirect with pesan data berhasil disimpan. di mana kita membuat pesan itu,, ya di index.
     //nah perbedaan antara redirect dan return view
     // 1. Redirect adalah kembali ke url yang di tunjuk
     // 2. kalau return view adalah menuju ke folder siswa dan ke file yang bernama index
     // sebenarnya sama saja
     //tapi jika kita return view, view itu ada variable dengan nama $student_data dia akan mencari student_data sedangkan di function create tidak ada variable student_data itu. maka akan error
    }


        
}
