<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App Laravel</title>
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li><a href="#"><span class="material-icons">theaters</span></li>
                <li class="md:ml-16 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">Movies</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">TV Shows</a></li>
                <li class="md:ml-6 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">Actors</a></li>
            </ul>
            <div class="flex flex-col md:flex-row mt-2 md:mt-0 items-center">
                <div class="relative w-80">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Seach">
                    <div class="absolute top-0"><span class="material-icons fill-current text-gray-500 mt-1 ml-1" >search</span></div>
                </div>
                <div class="md:ml-4 mt-2 md md:mt-0"><a href="#"><img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8"></a></div>
            </div>
        </div>
    </nav><!--end nav-->
        @yield('content')
    
</body>
</html>