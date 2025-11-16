@extends('layouts.app')

@section('sidebar')
<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('masterproduk.index') }}">
                    <i class="fas fa-box"></i> Master Produk
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('uploadpesanan.index') }}">
                    <i class="fas fa-upload"></i> Upload Pesanan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('instok.index') }}">
                    <i class="fas fa-warehouse"></i> In Stok
                </a>
            </li>
        </ul>
    </div>
</nav>
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="card">
    <div class="card-body">
        {{ __('You are logged in!') }}
    </div>
</div>
@endsection
