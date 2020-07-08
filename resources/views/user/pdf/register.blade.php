<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<style>
    .wrapper {
  display: flex;
  flex-flow: row wrap;
  font-weight: bold;
  text-align: center;
}

.wrapper > * {
  padding: 10px;
  flex: 1 100%;
}

.header {
  background: tomato;
}

.footer {
  background: lightgreen;
}

.main {
  text-align: center;
}



@media all and (min-width: 600px) {
  .aside { flex: 1 0 0; }
}

@media all and (min-width: 800px) {
  .main    { flex: 3 0px; }
  .aside-1 { order: 1; }
  .main    { order: 2; }
  .aside-2 { order: 3; }
  .footer  { order: 4; }
}

body {
  padding: 2em;
}


.p {
	float: right;
	margin: -1px;
}

.aside-1 {
	float: left;
	width: 97px
	height:50px;
}

  </style>
	<div class="wrapper">
  <article class="main"> 
  	<h3>BUKTI PENDAFTARAN ONLINE</h5>
  	<h4>MUSYAWARAH NASIONAL FKMPI-XXI</h5>
    <h3>POLITEKNIK PERTANIAN SAMARINDA</h4>
    	<hr>
    	<p class="p">{{ $user->created_at }}</p>
  </article>
  
</div>
</div>


	<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>{{$user->name}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>{{$user->email}}</td>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td>{{$user->biodata->nim}}</td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td>{{$user->kontak}}</td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td>:</td>
				<td>{{$user->biodata->ttl}}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>{{$user->biodata->jk}}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{$user->biodata->alamat}}</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>{{$user->biodata->jurusan}}</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>{{$user->biodata->prodi}}</td>
			</tr>
			<tr>
				<td>Perguruan Tinggi</td>
				<td>:</td>
				<td>{{$user->biodata->perguruan}}</td>
			</tr>
			<tr>
				<td>Maksud minta surat keterangan</td>
				<td>:</td>
				<td>Untuk melengkapi persyaratan kerja</td>
			</tr>

	</table>
	<p><b>NOTE :</b></p> Bawalah bukti pendaftaran online ini saat menyerahkan ke admin MUNAS sebagai bukti registrasi. Terimakasih
</body>
</html>
