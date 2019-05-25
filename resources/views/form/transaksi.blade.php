@extends('layouts.master')

@section('content')

<div class="col-8">
    <div class="card m-3">
        <div class="card-body b b">
            <h3>Transaksi Baru</h3>
            <div class="row clearfix">
                <div class="col-11 m-3">
                    <form method="POST" enctype="multipart/form-data" action="{{ action('create@storeTransaksi') }}">
                        {{ csrf_field() }}
                        <div class="form-group m-4">
                            <h4>Pengirim</h4>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Nama Pengirim" name="nama_pengirim" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="No Hp Pengirim" name="no_hp_pengirim" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Alamat Pengirim" name="alamat_pengirim" required>
                            </div>
                            <div class="form-line m-2">
                                <select id="provinsi" class="form-control" name="provinsi_pengirim" required>
                                    <option>Provinsi</option>
                                    @foreach ($provinsi as $pro)
                                        <option value="{{$pro->id}}">{{$pro->nama_provinsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kota" class="form-control" name="kota_pengirim" required>
                                    <option>Kabupaten/Kota</option>
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kecamatan" class="form-control" name="kecamatan_pengirim" required>
                                    <option>Kecamatan</option>
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kelurahan" class="form-control" name="kelurahan_pengirim" required>
                                    <option>Kelurahan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-4">
                            <h4>Penerima</h4>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Nama Penerima" name="nama_penerima" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="No Hp Penerima" name="no_hp_penerima" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Alamat Penerima" name="alamat_penerima" required>
                            </div>
                            <div class="form-line m-2">
                                <select id="provinsi" class="form-control" name="provinsi_penerima" required>
                                    <option>Provinsi</option>
                                    @foreach ($provinsi as $pro)
                                        <option value="{{$pro->id}}">{{$pro->nama_provinsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kota" class="form-control" name="kota_penerima" required>
                                    <option>Kabupaten/Kota</option>
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kecamatan" class="form-control" name="kecamatan_penerima" required>
                                    <option>Kecamatan</option>
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kelurahan" class="form-control" name="kelurahan_penerima" required>
                                    <option>Kelurahan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-4">
                            <h4>Detail Order</h4>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Id Cabang" name="id_cabang" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Id Kurir" name="id_kurir" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Id Pegawai" name="id_pegawai" required>
                            </div>
                            <div class="form-line m-2">
                                <select id="tipeJasa" class="form-control" name="tipe_jasa" required>
                                    <option>Tipe Jasa</option>
                                    @foreach ($tipe_jasa as $tj)
                                        <option value="{{$tj->id}}">{{$tj->nama_jasa}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <select id="kategori_barang" class="form-control" name="kategori_barang" required>
                                    <option>Kategori Barang</option>
                                    @foreach ($kategori_barang as $kb)
                                        <option value="{{$kb->id}}">{{$kb->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-line m-2">
                                <input type="text" class="form-control" placeholder="Deskripsi Barang" name="deskripsi_barang" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="Berat Barang" name="berat_barang" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="Panjang Barang" name="panjang_barang" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="Lebar Barang" name="lebar_barang" required>
                            </div>
                            <div class="form-line m-2">
                                <input type="number" class="form-control" placeholder="Tinggi Barang" name="tinggi_barang" required>
                            </div>
                        </div>
                        <div class="form-group m-4">
                            <button type="submit" class="btn btn-success" value="Simpan Data">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection