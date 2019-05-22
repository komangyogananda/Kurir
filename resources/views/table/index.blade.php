@extends('layouts.master')

@section('content')
    <b>Table yang ingin anda lihat.</b><br>

    <a href="{{route ('table_cabang')}}" class="card">Cabang</a><br>
    <a href="{{route ('table_detail_barang')}}">Detail Barang</a><br>
    <a href="{{route ('table_jenis_pegawai')}}">Jenis Pegawai</a><br>
    <a href="{{route ('table_kategori_barang')}}">Kategori Barang</a><br>
    <a href="{{route ('table_kecamatan')}}">Kecamatan</a><br>
    <a href="{{route ('table_kelurahan')}}">Kelurahan</a><br>
    <a href="{{route ('table_kota')}}">Kota</a><br>
    <a href="{{route ('table_kurir')}}">Kurir</a><br>
    <a href="{{route ('table_pegawai')}}">Pegawai</a><br>
    <a href="{{route ('table_penerima')}}">Penrima</a><br>
    <a href="{{route ('table_pengirim')}}">Pengirim</a><br>
    <a href="{{route ('table_provinsi')}}">Provinsi</a><br>
    <a href="{{route ('table_tipe_jasa')}}">Tipe Jasa</a><br>
    <a href="{{route ('table_tracking')}}">Tracking</a><br>
    <a href="{{route ('table_transaksi')}}">Transaksi</a><br>

@endsection