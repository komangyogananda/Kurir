@extends('layouts.master')

@section('content')

<div class="col-12">
    <div class="card m-3">
        <div class="card-body">
            <div class="text-center">
                <h1>Edit Transaksi</h1>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row m-3">
        <div class="col-6">
            <div class="card m-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3>Pengirim</h3>
                            </div>
                            <div>
                                <ul class="social">
                                    <li>
                                        Nama
                                        <span class="float-right mt-2 font-weight-bold">{{ $pengirim->nama_pengirim }}</span>
                                    </li>
                                    <li>
                                        Alamat
                                        <span class="float-right mt-2 font-weight-bold">{{ $pengirim->alamat_pengirim }}</span>
                                    </li>
                                    <li>
                                        Kelurahan
                                        <span class="float-right mt-2 font-weight-bold">{{ $pengirim->kelurahan->nama_kelurahan }}</span>
                                    </li>
                                    <li>
                                        Kecamatan
                                        <span class="float-right mt-2 font-weight-bold">{{ $pengirim->kecamatan->nama_kecamatan }}</span>
                                    </li>
                                    <li>
                                        Kota
                                        <span class="float-right mt-2 font-weight-bold">{{ $pengirim->kota->nama_kota }}</span>
                                    </li>
                                    <li>
                                        Provinsi
                                        <span class="float-right mt-2 font-weight-bold">{{ $pengirim->provinsi->nama_provinsi }}</span>
                                    </li>
                                    <li>
                                        No HP
                                        <span class="float-right mt-2 font-weight-bold">A{{ $pengirim->no_hp_pengirim }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3>Penerima</h3>
                            </div>
                            <div>
                                <ul class="social">
                                    <li>
                                        Nama
                                        <span class="float-right mt-2 font-weight-bold">{{ $penerima->nama_penerima }}</span>
                                    </li>
                                    <li>
                                        Alamat
                                        <span class="float-right mt-2 font-weight-bold">{{ $penerima->alamat_penerima }}</span>
                                    </li>
                                    <li>
                                        Kelurahan
                                        <span class="float-right mt-2 font-weight-bold">{{ $penerima->kelurahan->nama_kelurahan }}</span>
                                    </li>
                                    <li>
                                        Kecamatan
                                        <span class="float-right mt-2 font-weight-bold">{{ $penerima->kecamatan->nama_kecamatan }}</span>
                                    </li>
                                    <li>
                                        Kota
                                        <span class="float-right mt-2 font-weight-bold">{{ $penerima->kota->nama_kota }}</span>
                                    </li>
                                    <li>
                                        Provinsi
                                        <span class="float-right mt-2 font-weight-bold">{{ $penerima->provinsi->nama_provinsi }}</span>
                                    </li>
                                    <li>
                                        No HP
                                        <span class="float-right mt-2 font-weight-bold">A{{ $penerima->no_hp_pengirim }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3>Detail barang</h3>
                            </div>
                            <div>
                                <ul class="social">
                                    <li>
                                        Deskripsi Barang
                                        <span class="float-right mt-2 font-weight-bold">{{ $detail_barang->deskripsi_barang}}</span>
                                    </li>
                                    <li>
                                        Berat
                                        <span class="float-right mt-2 font-weight-bold">{{ $detail_barang->berat }}</span>
                                    </li>
                                    <li>
                                        Panjang
                                        <span class="float-right mt-2 font-weight-bold">{{ $detail_barang->panjang }}</span>
                                    </li>
                                    <li>
                                        Lebar
                                        <span class="float-right mt-2 font-weight-bold">{{ $detail_barang->lebar }}</span>
                                    </li>
                                    <li>
                                        Tinggi
                                        <span class="float-right mt-2 font-weight-bold">{{ $detail_barang->tinggi }}</span>
                                    </li>
                                    <li>
                                        Jenis Barang
                                        <span class="float-right mt-2 font-weight-bold">{{ $detail_barang->kategori_barang->nama_kategori }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3>Edit Detail barang</h3>
                            </div>
                            <div>
                                <form action="" method="post">
                                {{ csrf_field() }}
                                    <input type="hidden" name="tipe" value="1">
                                    <div class="form-group col-6 focused">
                                        <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $detail_barang->deskripsi_barang }}">
                                    </div>
                                    <div class="form-group col-6 focused">
                                        <label for="berat" class="col-form-label">Berat</label>
                                        <input type="number" class="form-control" id="berat" name="berat" value="{{ $detail_barang->berat }}">
                                    </div>
                                    <div class="form-group col-6 focused">
                                        <label for="panjang" class="col-form-label">Panjang</label>
                                        <input type="number" class="form-control" id="panjang" name="panjang" value="{{ $detail_barang->panjang }}">
                                    </div>
                                    <div class="form-group col-6 focused">
                                        <label for="lebar" class="col-form-label">Lebar</label>
                                        <input type="number" class="form-control" id="lebar" name="lebar" value="{{ $detail_barang->lebar }}">
                                    </div>
                                    <div class="form-group col-6 focused">
                                        <label for="tinggi" class="col-form-label">Tinggi</label>
                                        <input type="number" class="form-control" id="tinggi" name="tinggi" value="{{ $detail_barang->tinggi }}">
                                    </div>
                                    <div class="form-group col-6 focused">
                                        <label for="kategoriBarang" class="col-form-label">Kategori Barang</label>
                                        <select id="kategoriBarang" name="kategoriBarang" class="form-control">
                                            <option value="1">Elektronik</option>
                                            <option value="2">Dokumen dan Surat</option>
                                            <option value="3">Makanan dan Minuman</option>
                                            <option value="4">Logam Mulia</option>
                                            <option value="5">Pecah Belah</option>
                                            <option value="6">Barang Rumah Tangga</option>
                                            <option value="7">Barang Besar</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3>Lokasi Saat Ini</h3>
                            </div>
                            <div>
                                <ul class="social">
                                    <li>
                                        Provinsi
                                        <span class="float-right mt-2 font-weight-bold">{{ $cabang->provinsi->nama_provinsi }}</span>
                                    </li>
                                    <li>
                                        Kota/Kabupaten
                                        <span class="float-right mt-2 font-weight-bold">{{ $cabang->kota->nama_kota }}</span>
                                    </li>
                                    <li>
                                        Kecamatan
                                        <span class="float-right mt-2 font-weight-bold">{{ $cabang->kecamatan->nama_kecamatan }}</span>
                                    </li>
                                    <li>
                                        Kelurahan
                                        <span class="float-right mt-2 font-weight-bold">{{ $cabang->kelurahan->nama_kelurahan }}</span>
                                    </li>
                                    <li>
                                        Nama Cabang
                                        <span class="float-right mt-2 font-weight-bold">{{ $cabang->nama_cabang }}</span>
                                    </li>
                                    <li>
                                        Alamat Cabang
                                        <span class="float-right mt-2 font-weight-bold">{{ $cabang->alamat_cabang }}</span>
                                    </li>
                                    <li>
                                        Status
                                        @if ($items->status == 1)
                                            <span class="float-right mt-2 font-weight-bold">On Progress</span>
                                        @elseif ($items->status == 2)
                                            <span class="float-right mt-2 font-weight-bold">Telah Sampai</span>
                                        @else
                                            <span class="float-right mt-2 font-weight-bold">Dibatalkan</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card m-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3>Perbaharui Kondisi</h3>
                            </div>
                            <div>
                                <form action="" method="post">
                                {{ csrf_field() }}
                                    <input type="hidden" name="tipe" value="2">
                                    <div class="form-group col-10 focused">
                                        <label for="provinsi" class="col-form-label">Provinsi</label>
                                        <select id="provinsi" name="provinsi" class="form-control">
                                            <option>Provinsi</option>
                                            @foreach ($provinsi as $pro)
                                                <option value="{{$pro->id}}">{{$pro->nama_provinsi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-10 focused">
                                        <label for="kota" class="col-form-label">Kabupaten/Kota</label>
                                        <select id="kota" name="kota" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group col-10 focused">
                                        <label for="kecamatan" class="col-form-label">Kecamatan</label>
                                        <select id="kecamatan" name="kecamatan" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group col-10 focused">
                                        <label for="kelurahan" class="col-form-label">Kelurahan</label>
                                        <select id="kelurahan" name="kelurahan" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group col-10 focused">
                                        <label for="cabang" class="col-form-label">Cabang</label>
                                        <select id="cabang" name="cabang" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group col-10 focused">
                                        <label for="status" class="col-form-label">Status</label>
                                        <select id="status" name="status" class="form-control">
                                            <option value="1">On Progress</option>
                                            <option value="2">Selesai</option>
                                            <option value="3">Dibatalkan</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

    $('select[name="provinsi"]').on('change', function(){
        var provinsiId = $(this).val();
        if(provinsiId) {
            $.ajax({
                url: '/kota/get/'+provinsiId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="kota"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="kota"]').append('<option value="'+ value +'">' + key + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kota"]').empty();
        }

    });

    $('select[name="kota"]').on('change', function(){
        var kotaId = $(this).val();
        if(kotaId) {
            $.ajax({
                url: '/kecamatan/get/'+kotaId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="kecamatan"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="kecamatan"]').append('<option value="'+ value +'">' + key + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kecamatan"]').empty();
        }

    });

    $('select[name="kecamatan"]').on('change', function(){
        var kecamatanId = $(this).val();
        if(kecamatanId) {
            $.ajax({
                url: '/kelurahan/get/'+kecamatanId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="kelurahan"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="kelurahan"]').append('<option value="'+ value +'">' + key + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kelurahan"]').empty();
        }

    });

    $('select[name="kelurahan"]').on('change', function(){
        var kelurahanId = $(this).val();
        if(kelurahanId) {
            $.ajax({
                url: '/cabang/get/'+kelurahanId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="cabang"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="cabang"]').append('<option value="'+ value +'">' + key + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="cabang"]').empty();
        }

    });

});
</script>


@endsection