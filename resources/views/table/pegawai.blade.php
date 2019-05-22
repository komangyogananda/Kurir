@extends('layouts.master')

@section('content')
    <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
    </style>
    <table class="table table-striped table-bordered table-paginate">
        <thead>
            <tr>
                <th scope="col">ID Pegawai</th>
                <th scope="col">ID Jenis Pegawai</th>
                <th scope="col">ID Cabang</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">No. HP</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->jenis_pegawai_id }}</td>
                <td>{{ $value->cabang_id }}</td>
                <td>{{ $value->nama_pegawai }}</td>
                <td>{{ $value->no_hp_pegawai }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->password }}</td>
                <td>
                    <a href=""><i class="fas fa-edit"></i></a>
                    <a href="/table/pegawai/hapus/{{ $value->id }}"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    Halaman : {{ $data->currentPage() }} <br/>
	Jumlah Data : {{ $data->total() }} <br/>
	Data Per Halaman : {{ $data->perPage() }} <br/>
 
 
	{{ $data->links() }}
@endsection