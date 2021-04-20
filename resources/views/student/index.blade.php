@extends('layout.app')
@section('content')
	
	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible">
            <span>{{ session('success' )}}</span>
            <button class="close" data-dismiss="alert">&times;</button>
		</div>
	@endif

<div id="alert"></div>

<div class="card shadow">
    <div class="card-header py-2 d-flex justify-content-between align-items-center">
        <h2 class="h6 m-0 font-weight-bold text-primary"><img alt="image" src="assets/images/logo-wk.png" class="logo" style="width: 55px">
        Data Pendaftaran Siswa Baru</h2>
        <div class="row">
            <a href="{{ route('student.create') }}"  class="btn btn-success"><i class="fa fa-plus-square"></i>Tambah Data</a>
           
        </div>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NoReg</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Asal Sekolah</th>
                        <th>Minat Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ( $student as $data )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->no_reg}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->jk}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->agama}}</td>
                            <td>{{$data->asal_sekolah}}</td>
                            <td>{{$data->minat_jurusan}}</td>
                            <td>
                                <a href="{{route('student.edit', $data->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="{{route('student.cetak', $data->id)}}" class="btn px-2 btn-sm btn-primary shadow"><i class="fa fa-print"></i></a>
                                <form action="{{route('student.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Apakah yakin data akan di hapus ?')"type="submit"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              
            </table>
            <!--<a href="{{ route('landing') }}" class="btn btn-secondary shadow"><i class="fa fa-backward"></i>Back To Home</a>-->
        </div>
    </div>
</div>
@endsection