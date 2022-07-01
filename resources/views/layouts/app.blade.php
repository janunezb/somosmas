<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="bg-black">
    <nav class="flex py-5 bg-pink-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">Somos Más<p>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if (auth()->check())

            {{-- <li class="mx-8">
                <p class="text-xl">Bienvenido <b> {{auth()->user()->name }}</b></p>
            </li>
            <li>
                <a href="{{route('login.destroy')}}" class="font-bold  py-2 px-4 rounded-md bg-red-500 hover:bg-red-600 hover:text-white">Cerrar Sesión</a>
            </li> --}}

            @endif
        </ul>

    </nav>
    @yield('content')


</body>
</html>
