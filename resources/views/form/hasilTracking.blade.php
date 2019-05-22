@extends('layouts.master')

@section('content')
<h1><span class="badge badge-primary m-4">Hasil Track</span></h1>

<div class="container">
    <div class="row">
        <div class="col-6 m-4">
            <div class="card">
                <div class="card-header white">
                    <strong> Status Barang </strong>
                </div>
                <div class="card-body">
                    <ul class="social">
                        <li>
                            Lokasi Terakhir
                            <span class="float-right mt-2 font-weight-bold">Jakarta</span>
                        </li>
                        <li>
                            Status
                            <span class="float-right mt-2 font-weight-bold">OnProgress</span>
                        </li>
                        <li>
                            Pengirim
                            <span class="float-right mt-2 font-weight-bold">Joni Hermana</span>
                        </li>
                        <li>
                            Penerima
                            <span class="float-right mt-2 font-weight-bold">Ahmad Syaud</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="invoice shadow white">
        <div class="p-5">
            <h2>Detail Tracking</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Cabang</th>
                        <th>Tanggal</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                            21 Mei 2019
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Clean database</td>
                        <td>
                            22 Mei 2019
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Cron job running</td>
                        <td>
                            23 Maret 2019
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>
                        <td>
                            Apagitu
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection