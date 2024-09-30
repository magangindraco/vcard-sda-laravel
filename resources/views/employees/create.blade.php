@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Karyawan</h1>
    <form action="{{ route('admin.employees.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Telepon</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <div class="form-group">
            <label for="vcf_file">Upload VCard (.vcf)</label>
            <input type="file" class="form-control" name="vcf_file" accept=".vcf">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
