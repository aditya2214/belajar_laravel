@extends('master')

@section('judul_halaman')

@section('konten')
<div class="container">
    @if(session('sukses'))
    <!-- ini maksudnya adalah jika saat kita redirect ada class masage sukses maka akan menampilkan alert tersebut -->
    <div class="alert alert-success" role="alert">
       {{session('sukses')}}
    </div>
    @endif
    <div class="row">
        <div class="col-md-8 offset-md-1">
            <h3>Data Siswa</h3>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 offset-md-1">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
            Create a student new
            </button>

            <hr>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create a new student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/siswa/create" method="post" > 
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Nama Depan</label>
                                    <input name="nama_depan" type="text" class="form-control" placeholder="Nama Depan">
                                </div>
                                <div class="form-group">
                                    <label>Nama Belakang</label>
                                    <input name="nama_belakang" type="text" class="form-control" placeholder="Nama Belakang">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="L" >Laki-laki</option>
                                        <option value="p" >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control">
                                        <option value="Islam" >Islam</option>
                                        <option value="Kristen" >Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Katolik">Katolik</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                        </div>   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-10 offset-md-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NAMA DEPAN</th>
                        <th>NAMA BELAKANG</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student_data as $students) 
                    <tr>
                        <td>{{$students->nama_depan}}</td>
                        <td>{{$students->nama_belakang}}</td>
                        <td>{{$students->jenis_kelamin}}</td>
                        <td>{{$students->agama}}</td>
                        <td>{{$students->alamat}}</td>
                        <td><a href="#" class="btn btn-warning" >Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>
</div>


   
@endsection
        
    