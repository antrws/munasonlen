@extends('layouts.frontend.master')
@section('isi', 'Payment')
@section('title', 'Payment')
@section('content')
@if (session('success')) {!! session('success') !!} @endif

@if(auth()->user()->pembayaran == 0)
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Payment</h4>
                </div>
                <form action="{{ route('payment.update', [$user->uuid])  }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="uuid" value="{{ $user->uuid }}">
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pengirim</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="nama_pengirim" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Rek Tujuan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="number" class="form-control" name="no_tujuan" value="733701004373" readonly="">
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Berkas</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="form-control">
                                <input type="file" name="berkas" id="file-upload" value="berkas">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endif
@if(auth()->user()->pembayaran == 3)
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Payment</h4>
                </div>

            </div>
        </div>
    </div>
@endif
@stop
