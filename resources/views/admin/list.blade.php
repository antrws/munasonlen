@extends('layouts.backend.master')
@section('title', 'Control All Users')
@section('content')
<div class="section">
    <div class="section-header">
        <h1>Daftar data User</h1>
    </div>
    <div class="section-body">
        <div class="section-title">
            <h4>Detail</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('export.excel') }}" class="btn btn-primary">Export Excel</a>
                        <a type="button" href="{{ route('import.excel') }}" class="btn btn-primary" data-toggle="modal" data-target="#importData">Import Excel</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" style="width:100%" id="datatable">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Tanggal Lahir</th>
                                <th>Jk</th>
                                <th>Alamat</th>
                                <th>Jurusan</th>
                                <th>Prodi</th>
                                <th>Perguruan</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($user as $user)
                            <tr>
                                <td>{!! $user['name'] !!}</td>
                                <td>{!! $user['biodata']['nim'] !!}</td>
                                <td>{!! $user['biodata']['ttl'] !!}</td>
                                <td>{{$user['biodata']['jk']}}</td>
                                <td>{{$user['biodata']['alamat']}}</td>
                                <td>{{$user['biodata']['jurusan']}}</td>
                                <td>{{$user['biodata']['prodi']}}</td>
                                <td>{{$user['biodata']['perguruan']}}</td>
                                <td>
                                    <form method="POST" action="{{ route('delete.user', [$user->uuid]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-danger" value="Delete user" onclick="return confirm('Yakin ingin menghapus?')">
                                    </div>
                                </form>

                                </td>
                            </tr>
                            @empty
                            <p class="alert alert-danger">Tidak ada data!!!</p>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="importData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'import.excel', 'class' => 'form-horizontal','enctype' => 'multipart/form-data']) !!}

        {!! Form::file('dataPenduduk') !!}
      </div>
      <div class="modal-footer">
        <input type="submit" value="Import" class="btn btn-primary">
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
            var user = $(this).attr('user');
            Swal.fire({
              title: 'Yakin?',
              text: "Mau dihapus user dengan id "+user+" ??",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes'
            }).then((result) => {
              if (result.value) {
                window.location = "datadelete/"+user+"/";
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
