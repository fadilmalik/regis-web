<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SELAMAT DATANG</h2>
    <ul>
        <li>
            <a href="{{ url('/') }}">Home</a>
        </li>
        <li>
            <a href="{{ ('siswa/form') }}">Form</a>
        </li>
        <li>
            <a href="{{ ('siswa/list') }}">List</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>