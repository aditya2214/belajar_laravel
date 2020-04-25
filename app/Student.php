<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat'];
    // isinya adalah berupa array karna field ada pada database lebih dari satu
    //array tersebut bertujuan dengan field mana saja sih yang harus diisi. nah kita menjelaskan nya kepada laravel adalah field diatas.
    //catatan field array tersebut harus sama dengan yang ada di database dan form atau inputan kita
    //maksudnya adalah agar terarah di form yang kita input akan masuk kemana sih 
}
