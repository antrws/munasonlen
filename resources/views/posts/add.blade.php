@extends('layouts.backend.master')
@section('title', 'Create Post')
@section('content')

<div class="section">
    <div class="section-header">
        <h1>Create New Post</h1>
    </div>
    <div class="section-body">
        <div class="section-title">
            <h4>New Post</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="" class="btn btn-primary">Add New Posts</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <form action="" method="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                      <label for="title">Title</label>
                                        <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                </form>
                            </div>
                            <div class="col-12 col-md-4">
                                thumbnail
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop