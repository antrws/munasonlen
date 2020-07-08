@extends('layouts.frontend.master')

@section('content')
@section('title', 'Edit User')
@if (session('success')) {!! session('success') !!} @endif
<form action="{{ route('user.update',$user->uuid) }}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                        <input type="text" class="form-control" name="kontak" value="{{ $user->kontak }}" readonly="">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label for="nim" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nim</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" id="nim" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan Nim" required autocomplete="nim" autofocus>
                      </div>
                      @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" name="agama">
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Budha">Budha</option>
                          <option value="Konghucu">Konghucu</option>
                        </select>
                      </div>
                      @error('agama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="ttl" value="{{ old('ttl') }}">
                      </div>
                    </div>

                      <div class="custom-radio row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                      <div class="form-group">
                        <div class="col-sm-12">
                      <div class="form-check">
                        <input id="L" type="radio" class="form-check-input" name="jk" value="L">
                        <label class="form-check-label" for="L">
                          Laki-Laki
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                      <div class="form-check">
                        <input id="P" type="radio" class="form-check-input" name="jk" value="P">
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
                        <textarea type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" placeholder="Alamat Sekarang" >{{ old('alamat') }}</textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jurusan/Fakultas</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan Jurusan/Fakultas">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Program Studi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="prodi" value="{{ old('prodi') }}" placeholder="Masukkan Program Studi">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Perguruan Tinggi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="perguruan" value="{{ old('perguruan') }}" placeholder="Masukkan Perguruan Tinggi">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </form>
@stop
