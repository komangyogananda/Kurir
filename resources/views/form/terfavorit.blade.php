@extends('layouts.master')

@section('content')
<h1><span class="badge badge-primary m-4">Daerah Terfavorit</span></h1>

<div class="container">
    <div class="row">
        <div class="col-6 m-4">
            <div class="card">
                <div class="card-header white">
                    <strong> Pilih Provinsi </strong>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-line m-2">
                            <select id="provinsi" class="form-control" name="provinsi" required>
                                <option>Provinsi</option>
                                @foreach ($provinsi as $pro)
                                    <option value="{{$pro->id}}">{{$pro->nama_provinsi}}</option>
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
                                <th>Kelurahan</th>
                                <th>Total Transaksi</th>
                            </tr>
                            @foreach ($hasil as $ans)
                                <tr>
                                    <td>{{$ans->nama_kelurahan}}</td>
                                    <td>{{$ans->Total}}</td>
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