@extends('layouts.app')

@section('title', 'Dashboard')


@section('content')

    <div class="dashboard-title">
        <h1>Selamat Datang, Suta!</h1>
        <p>Selamat datang di sistem pembelajaran Laravel.</p>
    </div>

    <div class="stats">

        <div class="stat-card">
            <p>Menu Belajar</p>
            <h2>6</h2>
            <p>Menu tersedia</p>
        </div>

        <div class="stat-card">
            <p>Materi Praktik</p>
            <h2>5</h2>
            <p>Materi pembelajaran</p>
        </div>

        <div class="stat-card">
            <p>Project</p>
            <h2>1</h2>
            <p>Project Laravel</p>
        </div>

    </div>

@endsection
