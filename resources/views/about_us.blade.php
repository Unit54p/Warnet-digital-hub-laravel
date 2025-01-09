@extends('layouts/layout')

{{-- navbar --}}
<x-navbar />
{{-- end navbar --}}

@section('title', 'Warnet Digital Hub')

{{-- Body --}}
@section('content')
    <style>
        .bg-pict {
            background-image: url("{{ asset('img/dekstop1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 500px; /* Atur tinggi sesuai kebutuhan */
            width: 100%; /* Lebar 100% */
            display: flex; /* Jika ingin konten di tengah */
            justify-content: center;
            align-items: center;
            color: white; /* Agar teks terlihat */
        }
    </style>

    <main>
        {{-- layout 1 --}}
        <div class="bg-pict">
            <h1>Selamat Datang di Warnet Digital Hub</h1> <!-- Ganti dengan konten sesuai kebutuhan -->
        </div>
    </main>
@endsection
