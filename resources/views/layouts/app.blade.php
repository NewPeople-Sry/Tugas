<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'DOEGAM')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fb;
            color: #333;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 122px;
            height: 100vh;
            background: white;
            border-right: 1px solid #e5e7eb;
            z-index: 100;
        }

        .sidebar-header {
            height: 70px;
            background: linear-gradient(135deg, #173b91, #294bb5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .sidebar-header .logo {
            font-size: 17px;
            font-weight: bold;
        }

        .sidebar-header small {
            font-size: 8px;
            opacity: .9;
        }

        .menu {
            padding-top: 10px;
        }

        .menu a {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 10px;
            color: #64748b;
            text-decoration: none;
            font-size: 10px;
            transition: .2s;
        }

        .menu a:hover {
            background: #eef3ff;
            color: #2145a5;
        }

        .menu a.active {
            background: #eef3ff;
            color: #2145a5;
            font-weight: bold;
            border-right: 3px solid #2145a5;
        }

        .menu-icon {
            width: 15px;
            text-align: center;
        }

        .main {
            margin-left: 122px;
            min-height: 100vh;
        }

        .topbar {
            height: 40px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 18px;
        }

        .page-title {
            font-size: 12px;
            font-weight: bold;
            color: #334155;
        }

        .page-subtitle {
            font-size: 8px;
            color: #94a3b8;
        }

        .datetime {
            font-size: 8px;
            color: #64748b;
        }

        .running-text {
            height: 28px;
            background: #132e75;
            color: white;
            overflow: hidden;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .running-track {
            display: flex;
            width: max-content;
            animation: runningText 15s linear infinite;
        }

        .running-track span {
            flex-shrink: 0;
            padding-right: 70px;
            font-size: 8px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        @keyframes runningText {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-75%);
            }
        }

        .content {
            min-height: calc(100vh - 68px);
            padding: 28px;
            background:
                linear-gradient(
                    rgba(255,255,255,.82),
                    rgba(255,255,255,.82)
                ),
                radial-gradient(
                    circle at 30% 50%,
                    #dbeafe,
                    transparent 40%
                );
        }

        .card {
            background: rgba(255,255,255,.95);
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 5px 20px rgba(15, 23, 42, .08);
        }

        .card h3 {
            font-size: 15px;
            margin-bottom: 5px;
            color: #1e293b;
        }

        .card p {
            color: #94a3b8;
            font-size: 10px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
        }

        th {
            background: #f8fafc;
            color: #475569;
            text-align: left;
            padding: 11px;
            border-bottom: 1px solid #e2e8f0;
        }

        td {
            padding: 11px;
            border-bottom: 1px solid #f1f5f9;
            color: #64748b;
        }

        tr:hover td {
            background: #f8fafc;
        }

        .btn-tambah,
        .btn-simpan {
            background: #2148b5;
            color: white;
            border: none;
            padding: 8px 13px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 10px;
            cursor: pointer;
        }

        .btn-tambah:hover,
        .btn-simpan:hover {
            background: #17398f;
        }

        .btn-edit {
            background: #f59e0b;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 10px;
        }

        .btn-hapus {
            background: #dc2626;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
            border: none;
            font-size: 10px;
            cursor: pointer;
            margin-left: 4px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 10px;
            color: #475569;
            margin-bottom: 6px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 9px 11px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            outline: none;
            font-size: 10px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #3157c7;
            box-shadow: 0 0 0 2px rgba(49,87,199,.1);
        }

        .form-action {
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            margin-top: 20px;
        }

        .btn-batal {
            padding: 8px 13px;
            background: #f1f5f9;
            color: #64748b;
            border-radius: 6px;
            text-decoration: none;
            font-size: 10px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 18px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 15px rgba(0,0,0,.05);
        }

        .stat-card .label {
            font-size: 9px;
            color: #94a3b8;
        }

        .stat-card .number {
            font-size: 23px;
            font-weight: bold;
            color: #1e3a8a;
            margin-top: 5px;
        }

        .stat-card .icon {
            float: right;
            font-size: 20px;
        }

        @media(max-width: 800px) {
            .sidebar {
                width: 90px;
            }

            .main {
                margin-left: 90px;
            }

            .dashboard-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .development-card {
            max-width: 650px;
            margin: 50px auto;
            text-align: center;
            padding: 40px;
        }

        .development-icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .development-card h3 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .development-card > p {
            font-size: 11px;
            color: #94a3b8;
            margin-bottom: 18px;
        }

        .development-status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 12px;
            border-radius: 20px;
            background: #fff7ed;
            color: #c2410c;
            font-size: 10px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            background: #f97316;
            border-radius: 50%;
        }

        .development-info {
            text-align: left;
            background: #f8fafc;
            border-radius: 8px;
            padding: 15px;
            font-size: 10px;
            color: #64748b;
        }

        .development-info strong {
            color: #334155;
        }

        .development-info ul {
            margin-top: 10px;
            padding-left: 18px;
        }

        .development-info li {
            margin-bottom: 6px;
        }

        .development-icon {
            font-size: 45px;
            margin-bottom: 15px;
            animation: floating 2.5s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }
    </style>
</head>

<body>
    <aside class="sidebar">

        <div class="sidebar-header">
            <div class="logo">DOEGAM</div>
            <small>SMKN 2 Jakarta</small>
        </div>

        <nav class="menu">

            <a href="/dashboard">
                <span class="menu-icon">⌂</span>
                Dashboard
            </a>

            <a href="/guru">
                <span class="menu-icon">♙</span>
                Data Guru
            </a>

            <a href="/siswa">
                <span class="menu-icon">♙</span>
                Data Siswa
            </a>

            <a href="/mapel">
                <span class="menu-icon">▤</span>
                Mata Pelajaran
            </a>

            <a href="/jadwal">
                <span class="menu-icon">◷</span>
                Jadwal
            </a>

            <a href="/nilai">
                <span class="menu-icon">▥</span>
                Nilai
            </a>

            <a href="/profil">
                <span class="menu-icon">♙</span>
                Profil
            </a>

        </nav>

    </aside>

    <main class="main">

        <header class="topbar">

            <div>
                <div class="page-title">
                    @yield('title', 'Dashboard')
                </div>

                <div class="page-subtitle">
                    Pencatatan dan pengelolaan data sekolah.
                </div>
            </div>

            <div class="datetime">
                ● 8 September 2026 | 15:00:00
            </div>

        </header>

        <div class="running-text">
            <div class="running-track">
                <span>WELCOME TO SMKN 2 JAKARTA • DOEGAM • DATABASE SEKOLAH •</span>
                <span>WELCOME TO SMKN 2 JAKARTA • DOEGAM • DATABASE SEKOLAH •</span>
                <span>WELCOME TO SMKN 2 JAKARTA • DOEGAM • DATABASE SEKOLAH •</span>
                <span>WELCOME TO SMKN 2 JAKARTA • DOEGAM • DATABASE SEKOLAH •</span>
            </div>
        </div>

        <section class="content">

            @yield('content')

        </section>

    </main>

</body>
</html>