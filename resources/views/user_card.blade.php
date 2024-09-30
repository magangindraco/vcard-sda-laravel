<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vCard {{ $employee->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .vcard-container {
            max-width: 400px;
            margin: 0 auto;
            border-radius: 0px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .vcard-header {
            background-color: #800000; /* Warna maroon */
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .vcard-header img.logo {
            display: block;
            margin: 0 auto 10px;
            width: 120px;
        }

        .photo-container {
            background-color: #ddd; /* Background placeholder jika tidak ada foto */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin: 10px auto;
            overflow: hidden;
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .vcard-header h2 {
            margin: 5px 0;
            font-size: 18px; /* Ukuran font lebih kecil */
        }

        .vcard-header p {
            margin: 5px 0;
            font-size: 14px; /* Ukuran font lebih kecil */
        }

        .separator {
            border-top: 1px solid white; /* Garis pemisah putih */
            margin: 1px 0; /* Jarak antara garis dan tombol */
            width : 350px
        }

        .vcard-buttons {
            display: flex;
            justify-content: space-between; /* Sejajarkan tombol ke kiri dan kanan */
            margin-top: 10px; /* Margin di atas tombol */
            padding: 0 10px; /* Padding horizontal */
        }

        .vcard-buttons a {
            background-color: #800000; /* Warna maroon untuk tombol */
            color: white; /* Warna teks putih */
            padding: 8px 5px; /* Ukuran padding lebih kecil */
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 12px; /* Ukuran font lebih kecil */
            display: flex; /* Untuk menyelaraskan ikon dan teks */
            flex-direction: column; /* Menempatkan ikon di atas teks */
            align-items: center; /* Untuk menyelaraskan ikon di tengah */
            flex: 1; /* Menjaga ukuran tombol agar sama */
            margin: 0 5px; /* Jarak antara tombol */
        }

        /* Styling untuk ikon */
        .vcard-buttons img {
            max-width: 20px; /* Ukuran maksimum untuk ikon */
            margin-bottom: 3px; /* Jarak antara ikon dan teks */
        }

        .vcard-buttons a:hover {
            background-color: #FFD700; /* Warna gold */
            color: #800000;
        }

        .vcard-body {
            background-color: white;
            padding: 15px; /* Padding lebih kecil */
            color: black;
            font-size: 12px; /* Ukuran font lebih kecil */
        }

        .vcard-body .icon {
            margin-right: 10px;
            color: #800000; /* Warna maroon untuk ikon */
            font-size: 14px; /* Ukuran font ikon lebih kecil */
        }

        .vcard-footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 8px; /* Padding lebih kecil */
            font-size: 10px; /* Ukuran font lebih kecil */
        }

        .button-separator {
            border-left: 1px solid white; /* Garis pemisah putih antara tombol */
            height: 60px; /* Tinggi garis pemisah */
            margin: 0 0px; /* Jarak antara garis pemisah dan tombol */
        }
    </style>
</head>
<body>
    <div class="vcard-container">
        <div class="vcard-header">
            <img src="{{ asset('images/sda.png') }}" alt="SDA Global Logo" class="logo">

            <div class="photo-container">
                @if($employee->photo && file_exists(public_path('storage/' . $employee->photo)))
                    <img src="{{ asset('storage/' . $employee->photo) }}" alt="{{ $employee->name }}">
                @else
                    <img src="{{ asset('images/oci.jpg') }}" alt="No Image">
                @endif
            </div>

            <h2>{{ $employee->name }}</h2>
            <p>PT. SDA Global</p>
            <p>{{ $employee->position }}</p>

            <div class="separator"></div> <!-- Garis pemisah di atas tombol -->
            <div class="vcard-buttons">
                <a href="https://sda.co.id" target="_blank">
                    <img src="{{ asset('images/website_icon.png') }}" alt="Website Icon"> 
                    Website
                </a>
                <div class="button-separator"></div> <!-- Garis pemisah di tengah -->
                <a href="{{ asset('storage/' . $employee->vcf_file) }}" download>
                    <img src="{{ asset('images/save_contact_icon.png') }}" alt="Save Contact Icon"> 
                    Save Contact
                </a>
            </div>
     
        </div>

        <div class="vcard-body">
            <p><i class="fas fa-phone icon"></i> Phone: {{ $employee->phone }}</p>
            <p><i class="fas fa-envelope icon"></i> Email: <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a></p>
            <p><i class="fas fa-map-marker-alt icon"></i> Alamat: {{ $employee->address }}</p>
        </div>

        <div class="vcard-footer">
            Copyright &copy; 2024 SDA. All Rights Reserved
        </div>
    </div>
</body>
</html>
