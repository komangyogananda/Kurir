<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\Pengirim;
use App\Models\Penerima;
use App\Models\DetailBarang;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\KategoriBarang;
use App\Models\Cabang;
use Carbon\Carbon;

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
        //$harga = $request->input('berat_barang') * $request->input('tinggi_barang') * $request->input('lebar_barang') * $request->input('panjang_barang') * $request->input('tipe_jasa');
        $query = "CALL `insert_transaksi`('".$request->input('kelurahan_pengirim')."','"
            .$request->input('nama_pengirim')."','".$request->input('alamat_pengirim')."','".$request->input('no_hp_pengirim')."','"
            .$request->input('kelurahan_penerima')."','".$request->input('nama_penerima')."','".$request->input('alamat_penerima')."','".$request->input('no_hp_penerima')."','"
            .$request->input('kategori_barang')."','".$request->input('deskripsi_barang')."','".$request->input('berat_barang')."','".$request->input('tinggi_barang')."','".$request->input('lebar_barang')."','".$request->input('panjang_barang')."','"
            .$request->input('id_cabang')."','".$request->input('id_kurir')."','".$request->input('id_pegawai')."','".$request->input('tipe_jasa')."');";
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

    public function editGet($id)
    {
        $items = Transaksi::find($id);
        $tj = DB::table('tipe_jasa')->get();
        $kb = DB::table('kategori_barang')->get();
        $prov = DB::table('provinsi')->get();
        $pengirim = Pengirim::find($items->pengirim_id);
        $pengirim->kelurahan = Kelurahan::find($pengirim->kelurahan_id);
        $pengirim->kecamatan = Kecamatan::find($pengirim->kelurahan->kecamatan_id);
        $pengirim->kota = Kota::find($pengirim->kecamatan->kota_id);
        $pengirim->provinsi = Provinsi::find($pengirim->kota->provinsi_id);

        $penerima = penerima::find($items->penerima_id);
        $penerima->kelurahan = Kelurahan::find($penerima->kelurahan_id);
        $penerima->kecamatan = Kecamatan::find($penerima->kelurahan->kecamatan_id);
        $penerima->kota = Kota::find($penerima->kecamatan->kota_id);
        $penerima->provinsi = Provinsi::find($penerima->kota->provinsi_id);

        $detail_barang = DetailBarang::find($items->detail_barang_id);
        $detail_barang->kategori = KategoriBarang::find($detail_barang->kategori_barang_id);

        $cabang = Cabang::find($items->cabang_id);
        $cabang->kelurahan = Kelurahan::find($cabang->kelurahan_id);
        $cabang->kecamatan = Kecamatan::find($cabang->kelurahan->kecamatan_id);
        $cabang->kota = Kota::find($cabang->kecamatan->kota_id);
        $cabang->provinsi = Provinsi::find($cabang->kota->provinsi_id);
        // print_r($pengirim);
        // exit();
        return view('form.edit_transaksi')->with('items', $items)->with('tipe_jasa', $tj)->with('kategori_barang', $kb)->with('provinsi', $prov)->with('pengirim', $pengirim)->with('penerima', $penerima)->with('detail_barang', $detail_barang)->with('cabang', $cabang);
    }

    public function editPost($id)
    {
        $data = request()->all();
        $row = Transaksi::find($id);
        // print_r($data['cabang']);
        $row->cabang_id = $data['cabang'];
        $row->status = $data['status'];
        $row->save();
        return create::editGet($id);
    }
}
