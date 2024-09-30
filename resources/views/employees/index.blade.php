<!-- resources/views/employees/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
<h1>Daftar Karyawan</h1>
    <div class="mb-3">
        <a href="{{ route('employees.create') }}" class="btn btn-primary">Tambah Karyawan</a> <!-- Tombol Tambah Karyawan -->
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Jabatan</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>
                        <!-- Tombol untuk melihat vCard -->
                        <a href="{{ url('/v/' . $employee->name) }}" class="btn btn-primary">View Card</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
