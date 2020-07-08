@extends('layouts.frontend.master')

@section('content')
@section('title', 'Update Profile')
<form action="{{ route('updateprofile',$user->biodata->uuid)  }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="uuid" value="{{ $user->uuid }}">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Lengkapi Profil Anda</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" readonly="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly="">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Hp</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="kontak" value="{{ $user->kontak }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nim</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="nim" value="{{ $user->biodata->nim }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                        <div class="col-sm-12 col-md-7">
                           <select class="form-control" name="agama">
                          <option value="Islam" {{ $user->biodata->agama == 'Islam' ? 'selected' : ''}} name="agama">Islam</option>
                          <option value="Kristen" {{ $user->biodata->agama == 'Kristen' ? 'selected' : ''}} name="agama">Kristen</option>
                          <option value="Katolik" {{ $user->biodata->agama == 'Katolik' ? 'selected' : ''}} name="agama">Katolik</option>
                          <option value="Budha" {{ $user->biodata->agama == 'Budha' ? 'selected' : ''}} name="agama">Budha</option>
                          <option value="Konghucu" {{ $user->biodata->agama == 'Konghucu' ? 'selected' : ''}} name="agama">Konghucu</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control" name="ttl" value="{{ $user->biodata->ttl }}">
                        </div>
                    </div>
                    <div class="custom-radio row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                        <div class="form-group">
                        <div class="col-sm-12">
                            <div class="form-check">
                                <input id="L" class="form-check-input" @if ($user->biodata->jk == 'L') checked ? : '' @endif type="radio" name="jk" id="jkl" value="L">
                                <label class="form-check-label" for="L">
                                    Laki Laki
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="form-check">
                                <input id="P" class="form-check-input" @if ($user->biodata->jk == 'P') checked ? : '' @endif type="radio" name="jk" id="jkl" value="P">
                                <label class="form-check-label" for="P">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat Sekarang</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea type="text" class="form-control" name="alamat" value="{{ $user->biodata->alamat }}" >{{ $user->biodata->alamat }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jurusan/Fakultas</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="jurusan" value="{{ $user->biodata->jurusan }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Program Studi</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="prodi" value="{{ $user->biodata->prodi }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Perguruan Tinggi</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="perguruan" value="{{ $user->biodata->perguruan }}">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Image</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar">
                            @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            <a href="{{ url('/home') }}" class="btn btn-danger btn-sm mr-1"><i class="fa fa-times"> Batal</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop
