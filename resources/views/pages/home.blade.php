@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Jual Tanah')

@push('styles')
    {{-- Tambahkan Tailwind CSS dari CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">

    {{-- Flowbite CSS --}}
    <link rel="stylesheet" href="{{ asset('style/flowbite.min.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('style/style-rian.css') }}">
@endpush


@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Datang</h1>
    <p class="mb-4">Berikut adalah daftar tanah yang tersedia untuk Anda miliki hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/tanah1.jpg',
        'title' => 'Tanah Strategis di Batam',
        'desc' => 'Luas 300m², cocok untuk rumah atau investasi.',
        'button' => 'Lihat Detail'
    ])
@endsection
