
@extends('layouts.app')

@section('title', 'Belajar Laravel')

@section('content')

<div class="content">

    <h1>Materi Belajar Laravel</h1>

    <p>Selamat datang di halaman pembelajaran Laravel.</p>

    <br>

    <h3>Daftar Materi</h3>

    <br>

    <div class="stats">

        <div class="stat-card">
            <h2>01</h2>
            <p>Dasar Laravel</p>
        </div>

        <div class="stat-card">
            <h2>02</h2>
            <p>Routing</p>
        </div>

        <div class="stat-card">
            <h2>03</h2>
            <p>Controller</p>
        </div>

        <div class="stat-card">
            <h2>04</h2>
            <p>Blade Template</p>
        </div>

        <div class="stat-card">
            <h2>05</h2>
            <p>Database</p>
        </div>

        <div class="stat-card">
            <h2>06</h2>
            <p>CRUD</p>
        </div>

    </div>

</div>

@endsection
