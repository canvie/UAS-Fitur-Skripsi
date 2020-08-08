@extends('layouts.app')

@section("title",'Halaman Kerja Praktek')
@section("bread1",'Kerja Praktek')
@section("bread2",'daftar')

@section('content')
    <h2> Daftar Kerja Praktek </h2>
    <p><a href="/kp/create" class="btn btn-success btn-sm">Tambah</a></p>
    @include('layouts.alert')
    
    <table class="table table-striped" id="kp-table">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Judul KP</th>
                <th>Tempat Penelitian</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        $(function () {
            $('#kp-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('kp_list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'id', name: 'id'},
                    {data: 'nim', name: 'nim'},
                    {data: 'nama_mahasiswa', name: 'nama_mahasiswa' },
                    {data: 'judul_kp', name: 'judul_kp'},
                    {data: 'tempat_penelitian', name: 'tempat_penelitian'},
                    {data: 'alamat', name: 'alamat' },
                    {data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });

        });
    </script>

@endsection