@extends('layouts.backend.master')
@section('title', 'Send Pesan')
@section('content')
<div class="section">
    <div class="section-header">
        <h1>Email</h1>
    </div>
    <div class="section-body">
        <div class="section-title">
            <h2>Create New Email</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Send Email Form User</h4>
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                            {{ csrf_field() }}
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" placeholder="your name">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="email" placeholder="your email address">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Message</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<script>
    @if(Session::has('success'))
            iziToast.success({
                title: "Sukses",
                message: "{{ Session::get('success') }}",
                position: "topRight"
              });
        @endif
</script>