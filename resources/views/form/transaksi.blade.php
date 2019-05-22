@extends('layouts.master')

@section('content')

<div class="col-8">
    <div class="card m-3">
        <div class="card-body b b">
            <h3>Transaksi Baru</h3>
            <div class="row clearfix">
                <div class="col-11 m-3">
                    <div class="form-group m-4">
                        <h4>Pengirim</h4>
                        <div class="form-line m-2">
                            <input type="text" class="form-control" placeholder="Nama Pengirim">
                        </div>
                        <div class="form-line m-2">
                            <input type="number" class="form-control" placeholder="No Hp Pengirim">
                        </div>
                        <div class="form-line m-2">
                            <input type="text" class="form-control" placeholder="Alamat Pengirim">
                        </div>
                        <div class="form-line m-2">
                            <select id="provinsi" class="form-control">
                                <option>Provinsi</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-line m-2">
                            <select id="kota" class="form-control">
                                <option>Kabupaten/Kota</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-line m-2">
                            <select id="kelurahan" class="form-control">
                                <option>Kelurahan</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-4">
                        <h4>Penerima</h4>
                        <div class="form-line m-2">
                            <input type="text" class="form-control" placeholder="Nama Penerima">
                        </div>
                        <div class="form-line m-2">
                            <input type="number" class="form-control" placeholder="No Hp Penerima">
                        </div>
                        <div class="form-line m-2">
                            <input type="text" class="form-control" placeholder="Alamat Penerima">
                        </div>
                        <div class="form-line m-2">
                            <select id="provinsi" class="form-control">
                                <option>Provinsi</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-line m-2">
                            <select id="kota" class="form-control">
                                <option>Kabupaten/Kota</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-line m-2">
                            <select id="kelurahan" class="form-control">
                                <option>Kelurahan</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-4">
                        <h4>Detail Order</h4>
                        <div class="form-line m-2">
                            <input type="text" class="form-control" placeholder="Id Pegawai">
                        </div>
                        <div class="form-line m-2">
                            <select id="tipeJasa" class="form-control">
                                <option>Tipe Jasa</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-line m-2">
                            <select id="kota" class="form-control">
                                <option>Kategori Barang</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-line m-2">
                            <input type="text" class="form-control" placeholder="Deskripsi Barang">
                        </div>
                        <div class="form-line m-2">
                            <input type="number" class="form-control" placeholder="Berat Barang">
                        </div>
                        <div class="form-line m-2">
                            <input type="number" class="form-control" placeholder="Panjang Barang">
                        </div>
                        <div class="form-line m-2">
                            <input type="number" class="form-control" placeholder="Lebar Barang">
                        </div>
                        <div class="form-line m-2">
                            <input type="number" class="form-control" placeholder="Tinggi Barang">
                        </div>
                    </div>
                </div>
                <div class="form-group m-4">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection