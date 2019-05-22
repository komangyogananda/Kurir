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
                            Status
                            @if ($status == 1)
                                <span class="float-right mt-2 font-weight-bold">On Progress</span>
                            @elseif ($status == 2)
                                <span class="float-right mt-2 font-weight-bold">Telah Sampai</span>
                            @else
                                <span class="float-right mt-2 font-weight-bold">Dibatalkan</span>
                            @endif
                        </li>
                        <li>
                            Pengirim
                            <span class="float-right mt-2 font-weight-bold">{{ $pengirim }}</span>
                        </li>
                        <li>
                            Penerima
                            <span class="float-right mt-2 font-weight-bold">A{{ $penerima }}</span>
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
                        <th>Cabang</th>
                        <th>Tanggal</th>
                    </tr>
                    @foreach ($data as $value)
                        <tr>
                            <td>{{ $value->nama_cabang }}</td>
                            <td>{{ $value->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection