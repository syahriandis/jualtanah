@extends('layout.list')

@section('content')
    <h2 style="color:red;">Daftar Tanah Dijual</h2>
    <img src="{{ asset('images/tanah1.jpg') }}" style="width: 300px;">
    <img src="{{ asset('images/tanah2.jpg') }}" style="width: 300px;">
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>Lokasi</th>
            <th>Luas</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td>Jakarta Selatan</td>
            <td>200 m2</td>
            <td>1 Miliar</td>
        </tr>
        <tr>
            <td>Bandung</td>
            <td>150 m2</td>
            <td>750 Juta</td>
        </tr>
        <tr>
            <td>Surabaya</td>
            <td>300 m2</td>
            <td>1.5 Miliar</td>
        </tr>
    </table>
@endsection
