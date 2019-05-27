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
                                <th scope="col">Name_Kategori</th>
                                <th scope="col">Jumlah Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ans as $value)
                            <tr>
                                <td>{{ $value->nama_kategori }}</td>
                                <td>{{ $value->jumlah_transaksi }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection