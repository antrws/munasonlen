@extends('layouts.backend.master')
@section('title', 'Data Admin')
@section('isi', 'Data Admin')
@section('content')
<div class="section">
    <div class="section-header">
        <h1>Daftar data Admin</h1>
    </div>
    <div class="section-body">
        <div class="section-title">
            <h4>Admin</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List data Admin</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered nowrap" style="width:100%" id="datatable">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admin as $admin)
                            <tr>
                                <td>{!! $admin->name !!}</td>
                                <td>{!! $admin->email !!}</td>
                                <td><p class="badge badge-info">{!! $admin->role !!}</p></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm delete" admin="{{ $admin->id }}">Delete</a>
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
@endsection

@section('footer')
    <script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable( {
                responsive: true
            } );

            new $.fn.dataTable.FixedHeader( table );
        } );

        $('.delete').click(function(){
            var admin = $(this).attr('admin');
            Swal.fire({
              title: 'Yakin?',
              text: "Mau dihapus admin dengan id "+admin+" ??",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes'
            }).then((result) => {
              if (result.value) {
                window.location = "dataAdmin/"+admin+"/";
              }
            });
        });
    </script>
    <script>
        @if(Session::has('success'))
            iziToast.success({
                title: "Sukses",
                message: "{{ Session::get('success') }}",
                position: "topRight"
              });
        @endif
    </script>
@stop
