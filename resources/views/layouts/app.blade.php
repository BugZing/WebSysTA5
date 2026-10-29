<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') | SwiftPOS</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f3f4f6; color: #1f2937; }
        header { background: #1e3a8a; color: white; padding: 20px; }
        .brand { margin: 0 0 16px; font-size: 24px; font-weight: bold; }
        nav { display: flex; flex-wrap: wrap; gap: 12px; }
        nav a { color: white; text-decoration: none; padding: 8px 12px; border-radius: 6px; }
        nav a:hover, nav a.active { background: #172554; }
        a:focus-visible { outline: 3px solid #f59e0b; outline-offset: 3px; }
        main { max-width: 1100px; margin: 30px auto; padding: 0 20px; }
        .card { background: white; padding: 24px; border-radius: 10px; box-shadow: 0 2px 8px #00000012; }
        h1 { margin-top: 0; }
        p { line-height: 1.6; }
        .button { display: inline-block; margin: 8px 8px 0 0; padding: 12px 18px; background: #1e3a8a; color: white; text-decoration: none; border-radius: 6px; }
        .table-wrapper { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { padding: 12px; border-bottom: 1px solid #d1d5db; text-align: left; }
        th { background: #e5e7eb; }
        footer { text-align: center; padding: 24px; color: #6b7280; }
    </style>
</head>
<body>
    <header>
        <p class="brand">SwiftPOS</p>
        <nav aria-label="Main navigation">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('customers.index') }}" class="{{ request()->routeIs('customers.index') ? 'active' : '' }}">Customer Accounts</a>
            <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.index') ? 'active' : '' }}">User Accounts</a>
        </nav>
    </header>

    <main>
        <div class="card">
            @yield('content')
        </div>
    </main>

    <footer>&copy; {{ date('Y') }} SwiftPOS</footer>
</body>
</html>
