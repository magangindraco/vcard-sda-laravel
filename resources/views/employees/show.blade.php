@extends('layouts.app')

@section('content')
<div class="container">
    <div class="vcard" style="background-color: maroon; color: white; border-radius: 10px; padding: 20px; max-width: 400px; margin: auto;">
        <div class="profile" style="text-align: center;">
            <img src="{{ asset('storage/photos/' . $employee->photo) }}" alt="Profile Photo" style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
            <h3>{{ $employee->name }}</h3>
            <p style="font-weight: bold;">{{ $employee->position }}</p>
        </div>
        <div class="contact-info" style="margin-top: 20px;">
            <p><strong>Telepon:</strong> {{ $employee->phone }}</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $employee->email }}" style="color: white;">{{ $employee->email }}</a></p>
            <p><strong>Alamat:</strong> {{ $employee->address }}</p>
            <p><strong>Website:</strong> <a href="https://sda.co.id" target="_blank" style="color: white;">sda.co.id</a></p>
        </div>
        <div class="buttons" style="margin-top: 20px; text-align: center;">
            <a href="https://sda.co.id" class="btn" style="background-color: white; color: maroon; padding: 10px 20px; border-radius: 5px; text-decoration: none; margin-right: 10px;">Website</a>
            <a href="{{ url('v/' . $employee->name) }}" class="btn" style="background-color: white; color: maroon; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Simpan Kontak</a>
        </div>
        
        @if($employee->vcf_file)
            <div class="vcard-file" style="margin-top: 20px;">
                <h5>File VCard</h5>
                <a href="{{ asset('storage/' . $employee->vcf_file) }}" class="btn btn-success" download style="background-color: white; color: maroon; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Download VCard (.vcf)</a>
            </div>
        @endif

        <div class="footer" style="margin-top: 20px; text-align: center;">
            <p style="font-size: 12px;">Copyright © {{ date('Y') }} SDA. All Rights Reserved.</p>
        </div>
    </div>
</div>
@endsection
