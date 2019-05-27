@extends('layouts.master')

@section('content')
<h1><span class="badge badge-primary m-4">Total Transaksi Tipe Jasa</span></h1>

<div class="container">
    <div class="row">
        <div class="col-6 m-4">
            <div class="card">
                <div class="card-header white">
                    <strong> Pilih Tipe Jasa </strong>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-line m-2">
                            <select id="tipe_jasa" class="form-control" name="tipe_jasa" required>
                                <option>Tipe Jasa</option>
                                @foreach ($tipe_jasa as $pro)
                                    <option value="{{$pro->id}}">{{$pro->nama_jasa}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success" value="Simpan Data">Check!</button>
                    </form>
                    @isset($hasil)
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>Total Transaksi</th>
                            </tr>
                            @foreach ($hasil as $ans)
                            <tr>
                                <td>{{$ans->total}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>

@endsection