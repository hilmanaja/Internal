@extends('layout.app')
@section('content');
<div class="section-body">
    <div class="row">
        <div class="col-lg-6 mx-auto">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('student.update', [$student->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-header py-3">
                        <h2 class="h6 m-0 font-weight-bold text-primary">
                        Edit Data Siswa Baru</h2>
                    </div>
                    
                  <div class="card-body">
                    <div class="form-group">
                        <label @error('nama') class="text-danger"
                        @enderror>Nama @error('nama')
                            {{ message }}
                        @enderror
                        </label>
                        <input id="nama" type="text" name="nama" class="form-control" value="{{ $student->nama }}">
                    </div>

                    <div class="form-group">
                        <label @error('jk') class="text-danger" 
                            @enderror>Jenis Kelamin @error('jk')
                                    {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="jk" id="jk">
                            <option value disable>Pilih Opsi</option>
                            <option value="Pria"@if($student ->jk == 'Pria') selected @endif)>Pria</option>
                                <option value="Wanita"@if($student ->jk == 'Wanita') selected @endif>Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label @error('alamat') class="text-danger" 
                            @enderror>Alamat @error('alamat')
                             {{ $message }}
                            @enderror
                        </label>
                        <textarea id="alamat" name="alamat" class="form-control">{{ $student->alamat }}</textarea>
                      </div>

                    <div class="form-group">
                        <label @error('agama') class="text-danger" 
                            @enderror>Agama @error('agama')
                                    {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="agama" id="agama">
                            <option value disable>Pilih Opsi</option>
                                <option value="Islam"@if($student ->agama == 'Islam') selected @endif)>Islam</option>
                                <option value="Kristen Protesta"@if($student ->agama == 'Kristen Protesta') selected @endif)>Kristen Protesta</option>
                                <option value="Kristen Katolik"@if($student ->agama == 'Kristen Katolik') selected @endif)>Kristen Katolik</option>
                                <option value="Hindu"@if($student ->agama == 'Hindu') selected @endif)>Hindu</option>
                                <option value="Buddha"@if($student ->agama == 'Buddha') selected @endif)>Buddha</option>
                                <option value="Konghucu"@if($student ->agama == 'Konghucu') selected @endif)>Konghucu</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label @error('asal_sekolah') class="text-danger"
                        @enderror>Nama @error('asal_sekolah')
                            {{ message }}
                        @enderror
                        </label>
                        <input id="asal_sekolah" type="text" name="asal_sekolah" class="form-control" value="{{ $student->asal_sekolah }}">
                    </div>

                    <div class="form-group">
                        <label @error('minat_jurusan') class="text-danger" 
                            @enderror>Minat Jurusan @error('minat_jurusan')
                                    {{ $message }}
                            @enderror
                        </label>
                        <select class="form-control" name="minat_jurusan" id="minat_jurusan">
                            <option value disable>Pilih Opsi</option>
                                <option value="Otomatisasi dan Tata Kelola Perkantoran"@if($student ->minat_jurusan == 'Otomatisasi dan Tata Kelola Perkantoran') selected @endif)>Otomatisasi dan Tata Kelola Perkantoran</option>
                                <option value="Rekayasa Perangkat Lunak"@if($student->minat_jurusan == 'Rekayasa Perangkat Lunak') selected @endif>Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Komputer Jaringan"@if($student->minat_jurusan == 'Teknik Komputer Jaringan') selected @endif>Teknik Komputer Jaringan</option>
                                <option value="Multimedia"@if($student->minat_jurusan == 'Multimedia') selected @endif>Multimedia</option>
                                <option value="Bisnis Daring Dan pemasaran"@if($student->minat_jurusan == 'Bisnis Daring Dan pemasaran') selected @endif>Bisnis Daring Dan pemasaran</option>
                                <option value="Perhotelan"@if($student->minat_jurusan == 'Perhotelan') selected @endif>Perhotelan</option>
                                <option value="Tata Boga"@if($student->minat_jurusan == 'Tata Boga') selected @endif>Tata Boga</option>
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

@endsection