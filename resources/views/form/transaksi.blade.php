@extends('layouts.master')

@section('content')

<div class="col-8">
    <div class="card m-3">
        <div class="card-body b b">
            <h3>Transaksi Baru</h3>
            <div class="row clearfix">
                <div class="col-11 m-3">
                    <form action="" method="POST" enctype="multipart/form-data"></form>
                        {{ csrf_field() }}
                        <div class="form-group m-4">
                            <h4>Pengirim</h4>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Nama Pengirim" name="nama_pengirim">
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="No Hp Pengirim" name="no_hp_pengirim">
                            </div>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Alamat Pengirim" name="alamat_pengirim">
                            </div>
                            <div class="form-line m-2">
                                <select id="provinsi" class="form-control" name="provinsi_pengirim">
                                    <option>Provinsi</option>
                                    @foreach ($provinsi as $pro)
                                        <option value="{{$pro->id}}">{{$pro->nama_provinsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kota" class="form-control" name="kota_pengirim">
                                    <option>Kabupaten/Kota</option>
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kelurahan" class="form-control" name="kelurahan_pengirim">
                                    <option>Kelurahan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-4">
                            <h4>Penerima</h4>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Nama Penerima" name="nama_penerima">
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="No Hp Penerima" name="no_hp_penerima">
                            </div>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Alamat Penerima" name="alamat_penerima">
                            </div>
                            <div class="form-line m-2">
                                <select id="provinsi" class="form-control" name="provinsi_penerima">
                                    <option>Provinsi</option>
                                    @foreach ($provinsi as $pro)
                                        <option value="{{$pro->id}}">{{$pro->nama_provinsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kota" class="form-control" name="kota_penerima">
                                    <option>Kabupaten/Kota</option>
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kelurahan" class="form-control" name="kelurahan_penerima">
                                    <option>Kelurahan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-4">
                            <h4>Detail Order</h4>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Id Pegawai" name="id_pegawai">
                            </div>
                            <div class="form-line m-2">
                                <select id="tipeJasa" class="form-control" name="tipe_jasa">
                                    <option>Tipe Jasa</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kategori_barang" class="form-control" name="kategori_barang">
                                    <option>Kategori Barang</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Deskripsi Barang" name="deskripsi_barang">
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="Berat Barang" name="berat_barang">
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="Panjang Barang" name="panjang_barang">
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="Lebar Barang" name="lebar_barang">
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="Tinggi Barang" name="tinggi_barang">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-group m-4">
                    <button type="submit" class="btn btn-success" value="Simpan Data">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection