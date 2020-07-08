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
                        <a href="{{ route('add.post') }}" class="btn btn-primary">Add New Posts</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered nowrap" style="width:100%" id="datatable">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Akun</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post as $post)
                            <tr>
                                <td>{!! $post->title !!}</td>
                                <td><p class="badge badge-info">{!! $post->admin->name !!}</p></td>
                                <td>
                                	<a target="_blank" href="{{ route('singlepost', $post->slug) }}" class="btn btn-warning btn-sm">View</a>
                                	<a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop