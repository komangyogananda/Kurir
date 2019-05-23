@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-10 m-3">
            <div class="card">
                <div class="card-body">
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
                <th scope="col">ID Barang</th>
                <th scope="col">ID Kategori Barang</th>
                <th scope="col">Deskripsi Barang</th>
                <th scope="col">Berat</th>
                <th scope="col">Tinggi</th>
                <th scope="col">Lebar</th>
                <th scope="col">Panjang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->kategori_barang_id }}</td>
                <td>{{ $value->deskripsi_barang }}</td>
                <td>{{ $value->berat }}</td>
                <td>{{ $value->tinggi }}</td>
                <td>{{ $value->lebar }}</td>
                <td>{{ $value->panjang }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    Halaman : {{ $data->currentPage() }} <br/>
	Jumlah Data : {{ $data->total() }} <br/>
	Data Per Halaman : {{ $data->perPage() }} <br/>
 
 
	{{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection