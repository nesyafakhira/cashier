@extends('layout.index')

@section('title')
    <h4 class="text-center m-3">dashboard</h4>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="box-container">
            <div class="row text-center">
                <a href="https://example.com/1" class="box">Transaksi Penjualan</a>
                <a href="https://example.com/2" class="box">Transaksi Pembelian</a>
                <a href="https://example.com/3" class="box">Suplier</a>
            </div>
            <div class="row text-center">
                <a href="https://example.com/4" class="box">User</a>
                <a href="https://example.com/5" class="box">Barang</a>
                <a href="https://example.com/6" class="box">Laporan</a>
            </div>
        </div>
    </div>
@endsection