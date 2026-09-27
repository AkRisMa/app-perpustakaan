<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan')</title>

    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background: #f5f7fb;
        color: #1f2937;
    }

    nav {
        background: #1e3a8a;
        color: white;
        padding: 16px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    nav .brand {
        font-size: 20px;
        font-weight: bold;
    }

    nav ul {
        list-style: none;
        display: flex;
        gap: 24px;
        margin: 0;
        padding: 0;
    }

    nav a {
        color: white;
        text-decoration: none;
        font-weight: 500;
    }

    nav a:hover,
    nav a.active {
        text-decoration: underline;
    }

    main {
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 24px;
    }

    h1 {
        margin-bottom: 24px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
        background: white;
        border-radius: 8px;
        overflow: hidden;
    }

    th {
        background: #e5e7eb;
        font-weight: bold;
    }

    th, td {
        border: 1px solid #d1d5db;
        padding: 12px;
        text-align: left;
    }

    tr:hover {
        background: #f9fafb;
    }

    .btn {
        display: inline-block;
        padding: 9px 16px;
        background: #2563eb;
        color: white;
        text-decoration: none;
        border-radius: 6px;
    }

    .btn:hover {
        background: #1d4ed8;
    }

    .success {
        background: #d1fae5;
        color: #065f46;
        padding: 12px 16px;
        border-radius: 6px;
        margin-bottom: 20px;
    }

    form.inline {
    display: inline;
    background: transparent;
    padding: 0;
    box-shadow: none;
    max-width: none;
}

    form {
    background: white;
    padding: 24px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    max-width: 600px;
}

label {
    display: block;
    margin-top: 16px;
    margin-bottom: 6px;
    font-weight: bold;
}

input,
textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-family: inherit;
    font-size: 14px;
}

input:focus,
textarea:focus {
    outline: none;
    border-color: #2563eb;
}

.error {
    color: #b91c1c;
    font-size: 14px;
    margin-top: 5px;
}

form .btn {
    margin-top: 20px;
    border: none;
    cursor: pointer;
}

    footer {
        max-width: 1200px;
        margin: 40px auto 0;
        padding: 20px 24px;
        color: #6b7280;
        text-align: center;
    }
</style>
</head>
<body>

    @include('partials.navbar')

    @include('partials.flash')

    <main>
    @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>