@extends('layout.app')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-6 mx-auto">
           <div class="card">
                <div class="card-header py-3">
                    <h2 class="h6 m-0 font-weight-bold text-primary">Tambah Data Siswa Baru</h2>
                </div>
               <div class="card-body">
                <form action="{{ route('student.store') }}" method="POST">
                   @csrf
                
                <div class="card-body">
                    <div class="form-group">
                        <label @error('nama') class="text-danger"
                        @enderror>Nama @error('nama')
                            {{ message }}
                        @enderror
                        </label>
                        <input id="nama" type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                    </div>

                    <div class="form-group">
                        <label @error('jk') class="text-danger" 
                            @enderror>Jenis Kelamin @error('jk')
                                 {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="jk" id="jk">
                            <option value disable>Pilih Opsi</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label @error('alamat') class="text-danger" 
                            @enderror>Alamat @error('alamat')
                             {{ $message }}
                            @enderror
                        </label>
                        <textarea id="alamat" type="textarea" name="alamat" class="form-control" value="{{ old('alamat') }}"></textarea>
                    </div>

                    <div class="form-group">
                        <label @error('agama') class="text-danger" 
                            @enderror>Agama @error('agama')
                                 {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="agama" id="agama">
                            <option value disable>Pilih Opsi</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protesta">Kristen Protesta</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label @error('asal_sekolah') class="text-danger"
                        @enderror>Asal Sekolah @error('asal_sekolah')
                            {{ message }}
                        @enderror
                        </label>
                        <input id="asal_sekolah" type="text" name="asal_sekolah" class="form-control" value="{{ old('asal_sekolah') }}">
                    </div>

                    <div class="form-group">
                        <label @error('minat_jurusan') class="text-danger" 
                            @enderror>Minat Jurusan @error('minat_jurusan')
                                 {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="minat_jurusan" id="minat_jurusan">
                            <option value disable>Pilih Opsi</option>
                                <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="Bisnis Daring Dan pemasaran">Bisnis Daring Dan pemasaran</option>
                                <option value="Perhotelan">Perhotelan</option>
                                <option value="Tata Boga">Tata Boga</option>
                        </select>
                    </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                            <a href="{{ route('student.index') }}" class="btn btn-secondary shadow">Back</a>
                        </div>
                </form>
             </div>
        </div>
    </div>
</div>
