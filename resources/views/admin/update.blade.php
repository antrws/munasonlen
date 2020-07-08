@extends('layout.admin')
@section('title', 'Configurasi Admin')
@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title animated slideInLeft">Configurasi</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BORDERED TABLE -->
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Berita</h3>
								</div>
								<form action="admin-setting" method="post">
									{{ @csrf_field() }}
									<input type="hidden" name="user_id" value="{{ Auth::id() }}">
								<div class="panel-body">
									<input type="text" class="form-control" name="title" placeholder="Masukkan Judul">
									<br>
									<textarea class="form-control" name="isi" placeholder="Masukkan Isi Berita" rows="4"></textarea>
									<br>
									<tr>
										<button class="btn btn-primary" type="submit">Kirim</button>
									</tr>
								
								</div>
								</form>
							</div>
							<!-- END BORDERED TABLE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

@stop