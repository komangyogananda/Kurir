@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-10 m-3">
            <div class="card">
                <div class="card-body">
                    
                    <h1>Table yang ingin anda lihat.</h1><br>

                    <a href="{{route ('table_cabang')}}">Cabang</a><br>
                    <a href="{{route ('table_detail_barang')}}">Detail Barang</a><br>
                    <a href="{{route ('table_jenis_pegawai')}}">Jenis Pegawai</a><br>
                    <a href="{{route ('table_kategori_barang')}}">Kategori Barang</a><br>
                    <a href="{{route ('table_kecamatan')}}">Kecamatan</a><br>
                    <a href="{{route ('table_kelurahan')}}">Kelurahan</a><br>
                    <a href="{{route ('table_kota')}}">Kota</a><br>
                    <a href="{{route ('table_kurir')}}">Kurir</a><br>
                    <a href="{{route ('table_pegawai')}}">Pegawai</a><br>
                    <a href="{{route ('table_penerima')}}">Penerima</a><br>
                    <a href="{{route ('table_pengirim')}}">Pengirim</a><br>
                    <a href="{{route ('table_provinsi')}}">Provinsi</a><br>
                    <a href="{{route ('table_tipe_jasa')}}">Tipe Jasa</a><br>
                    <a href="{{route ('table_tracking')}}">Tracking</a><br>
                    <a href="{{route ('table_transaksi')}}">Transaksi</a><br>
                </div>
            </div>
        </div>
    </div>

@endsection