<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\Pengirim;
use App\Models\Penerima;
use App\Models\DetailBarang;

class create extends Controller
{
    public function formTransaksi()
    {
        $data['provinsi'] = DB::table('provinsi')->get();
        $data['tipe_jasa'] = DB::table('tipe_jasa')->get();
        $data['kategori_barang'] = DB::table('kategori_barang')->get();
        $a = 'a';
        return view('form.transaksi', $data);
    }

    public function storeTransaksi(Request $request)
    {
        $this->validate($request, [
            'nama_pengirim' => 'required',
            'no_hp_pengirim' => 'required',
            'alamat_pengirim' => 'required',
            'provinsi_pengirim' => 'required',
            'kota_pengirim' => 'required',
            'kecamatan_pengirim' => 'required',
            'kelurahan_pengirim' => 'required',
            'nama_penerima' => 'required',
            'no_hp_penerima' => 'required',
            'alamat_penerima' => 'required',
            'provinsi_penerima' => 'required',
            'kota_penerima' => 'required',
            'kecamatan_penerima' => 'required',
            'kelurahan_penerima' => 'required',
            'id_pegawai' => 'required',
            'tipe_jasa' => 'required',
            'kategori_barang' => 'required',
            'deskripsi_barang' => 'required',
            'berat_barang' => 'required',
            'panjang_barang' => 'nullable',
            'lebar_barang' => 'nullable',
            'tinggi_barang' => 'nullable',
        ]);
        $harga = $request->input('berat_barang') * $request->input('tinggi_barang') * $request->input('lebar_barang') * $request->input('panjang_barang') * $request->input('tipe_jasa');
        $query = "CALL `insert_transaksi`('".$request->input('kelurahan_pengirim')."','"
            .$request->input('nama_pengirim')."','".$request->input('alamat_pengirim')."','".$request->input('no_hp_pengirim')."','"
            .$request->input('kelurahan_penerima')."','".$request->input('nama_penerima')."','".$request->input('alamat_penerima')."','".$request->input('no_hp_penerima')."','"
            .$request->input('kategori_barang')."','".$request->input('deskripsi_barang')."','".$request->input('berat_barang')."','".$request->input('tinggi_barang')."','".$request->input('lebar_barang')."','".$request->input('panjang_barang')."','"
            .$request->input('id_cabang')."','".$request->input('id_kurir')."','".$request->input('id_pegawai')."',".$request->input('tipe_jasa').",1,".$harga;
        DB::statement($query);

        /*
        // Create Pengirim
        $pengirim = new Pengirim;
        $pengirim->kelurahan_id = $request->input('kelurahan_pengirim');
        $pengirim->nama_pengirim = $request->input('nama_pengirim');
        $pengirim->alamat_pengirim = $request->input('alamat_pengirim');
        $pengirim->no_hp_pengirim = $request->input('no_hp_pengirim');
        $pengirim->created_at = now();
        $pengirim->updated_at = now();
        $pengirim->save();

        // Create Penerima
        $penerima = new Penerima;
        $penerima->kelurahan_id = $request->input('kelurahan_penerima');
        $penerima->nama_penerima = $request->input('nama_penerima');
        $penerima->alamat_penerima = $request->input('alamat_penerima');
        $penerima->no_hp_penerima = $request->input('no_hp_penerima');
        $penerima->created_at = now();
        $penerima->updated_at = now();
        $penerima->save();

        // Create Detail Barang
        $detailBarang = new DetailBarang;

        // Create Transaksi
        $transaksi = new Transaksi;
        $transaksi->nama_pengirim =
        $items = new Item;
        $items->name = $request->input('name');
        $items->description = $request->input('description');
        $items->price = $request->input('price');
        $items->user_id = auth()->user()->id;
        $items->cover_image = $fileNameToStore;
        $items->save();*/

        return redirect('/table/transaksi')->with('success', 'Transaksi Created');
    }

    public function edit($id)
    {
        $items = Item::find($id);

        // Check for correct user
        if (auth()->user()->id !== $items->user->id) {
            return redirect('/items')->with('error', 'Unauthorized Page');
        }
        return view('items.edit')->with('items', $items);
    }
}
