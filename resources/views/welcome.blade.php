@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Selamat datang di Aplikasi Kartu Nama Digital!</h1>
        <a href="{{ route('employees.index') }}" class="btn btn-primary">Lihat Karyawan</a>
    </div>
@endsection
