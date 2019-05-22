<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tracking extends Controller
{
    public function getTracking($id)
    {
        $query = DB::select('call Tracking(?)', array($id));
        $data['data'] = $query;
        $data['pengirim'] = $query[0]->nama_pengirim;
        $data['penerima'] = $query[0]->nama_penerima;
        $data['status'] = $query[0]->status;
        return view('form.hasil_tracking', $data);
    }
}
