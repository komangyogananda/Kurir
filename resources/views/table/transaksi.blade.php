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
                <th scope="col">ID Transaksi</th>
                <th scope="col">ID Cabang</th>
                <th scope="col">ID Kurir</th>
                <th scope="col">ID Pegawai</th>
                <th scope="col">ID Tipe Jasa</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->cabang_id }}</td>
                <td>{{ $value->kurir_id }}</td>
                <td>{{ $value->pegawai_id }}</td>
                <td>{{ $value->tipe_jasa_id }}</td>
                <td>{{ $value->harga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    Halaman : {{ $data->currentPage() }} <br/>
	Jumlah Data : {{ $data->total() }} <br/>
	Data Per Halaman : {{ $data->perPage() }} <br/>
 
 
	{{ $data->links() }}
@endsection