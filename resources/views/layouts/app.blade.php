<!DOCTYPE html>
<html>
<head>
    <title>VCard App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2; /* Warna latar belakang */
        }
        .navbar {
            background-color: #800000; /* Warna maroon untuk navbar */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important; /* Warna teks putih */
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border: none; /* Menghilangkan border default */
            border-radius: 10px; /* Menambahkan sudut melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan efek bayangan */
        }
        .card-header {
            background-color: #800000; /* Warna maroon untuk header kartu */
            color: white; /* Warna teks putih */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            background-color: #fff; /* Warna putih untuk konten kartu */
        }
        .btn-primary {
            background-color: #800000; /* Warna maroon untuk tombol utama */
            border-color: #800000; /* Warna border tombol utama */
        }
        .btn-primary:hover {
            background-color: #6f0000; /* Warna maroon gelap saat hover */
            border-color: #6f0000; /* Border saat hover */
        }
        .vcard {
            font-family: Arial, sans-serif;
        }

        .vcard .profile img {
            border: 3px solid white; /* Tambahkan border putih di sekitar gambar */
        }

        .vcard .contact-info a {
            text-decoration: none;
        }

        .vcard .btn:hover {
            background-color: #f0f0f0; /* Efek hover untuk tombol */
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">VCard App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
