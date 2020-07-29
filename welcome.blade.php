<!DOCTYPE html>
<html>
<head>
	<title> laravel_test</title>
</head>
<body>
	<h3>Data mahasiswa</h3>

	<a href="/mahasiswa/tambah"> + Tambah mahasiswa Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>prodi</th>
			<th>umur</th>
			<th>alamat</th>
            <th>opsi</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->mahasiswa_id }}</td>
			<td>{{ $p->mahasiswa_nama }}</td>
			<td>{{ $p->mahasiswa_prodi }}</td>
			<td>{{ $p->mahasiswa_umur }}</td>
            <td>{{ $p->mahasiswa_alamat }}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $p->mahasiswa_id }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $p->mahasiswa_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>