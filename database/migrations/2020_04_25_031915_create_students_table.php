<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
             //contoh membuat field dengan type data int dan autoincerments
            $table->string('nama_depan');
             //contoh membuat field dengan type data string
            $table->string('nama_belakang');
             //contoh membuat field dengan type data string
            $table->string('jenis_kelamin');
             //contoh membuat field dengan type data string
            $table->string('agama');
             //contoh membuat field dengan type data string
            $table->text('alamat');
             //contoh membuat field dengan type data text
            $table->timestamps();
             //contoh membuat field dengan type data timestamps
             //di database nya akan terbuat otomatis (( created_at )) dan (( updated_at ))
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
