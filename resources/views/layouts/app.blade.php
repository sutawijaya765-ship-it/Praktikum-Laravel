<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Laravel Dashboard')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #263247;
        }

        /* Layout utama */
        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #172554;
            color: white;
            padding: 25px 18px;
            flex-shrink: 0;
        }

        .sidebar h2 {
            font-size: 21px;
            margin-bottom: 35px;
            padding-left: 10px;
        }

        .sidebar a {
            display: block;
            color: #cbd5e1;
            text-decoration: none;
            padding: 13px 12px;
            border-radius: 7px;
            margin-bottom: 8px;
            transition: 0.2s;
        }

        .sidebar a:hover {
            background: #2563eb;
            color: white;
        }

        .sidebar a.active {
            background: #2563eb;
            color: white;
            font-weight: bold;
        }

        .sidebar a span {
            margin-right: 10px;
        }

        /* Area utama */
        .main-area {
            flex: 1;
            min-width: 0;
        }

        /* Header */
        .topbar {
            background: white;
            padding: 22px 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .topbar h3 {
            font-size: 20px;
        }

        /* Konten */
        .container {
            padding: 30px;
        }
    .content {
    background: white;
    padding: 25px;
    border-radius: 10px;
    min-height: 300px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.04);
}
        
    /* Judul dashboard */
    .dashboard-title {
        margin-bottom: 25px;
    }

    .dashboard-title h1 {
        font-size: 26px;
        margin-bottom: 8px;
    }

    .dashboard-title p {
        color: #64748b;
    }

    /* Kartu statistik */
    .stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 25px;
    }

    .stat-card {
        background: white;
        padding: 25px;
        border-radius: 10px;
        border-left: 5px solid #2563eb;
        box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    }

    .stat-card h2 {
        font-size: 28px;
        margin: 12px 0;
    }

    .stat-card p {
        color: #64748b;
    }

@media (max-width: 768px) {
    .stats {
        grid-template-columns: 1fr;
    }
}


        footer {
            text-align: center;
            padding: 20px;
            color: #777;
        }

        /* Tampilan HP */
        @media (max-width: 768px) {
            .sidebar {
                width: 180px;
                padding: 20px 10px;
            }

            .container {
                padding: 15px;
            }

            .topbar {
                padding: 18px;
            }
        }

        @media (max-width: 480px) {
            .dashboard {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .sidebar h2 {
                margin-bottom: 15px;
            }
        }

        html,
        body {
            margin: 0;
            min-height: 100%;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        .main-area {
            display: flex;
            flex-direction: column;
            flex: 1;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        .footer {
            margin-top: auto;
            width: 100%;
            box-sizing: border-box;
        }
        /* Footer Styling */

        .footer {
            margin-top: auto;
            padding: 20px 30px;
            background-color: #ffffff;
            border-top: 1px solid #e5e7eb;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer p {
            margin: 0;
            color: #6b7280;
            font-size: 14px;
        }

        .footer-links {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        .footer-links a {
            text-decoration: none;
            color: #6b7280;
            font-size: 14px;
        }

    </style>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body>

    <div class="dashboard">

        @include('layouts.partials.sidebar')

        <div class="main-area">

            @include('layouts.partials.navbar')

            <main class="container">
                @yield('content')
            </main>

            @include('layouts.partials.footer')

        </div>

    </div>
     @stack('scripts')
</body>
</html>