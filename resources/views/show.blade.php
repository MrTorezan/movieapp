@extends('layouts.main')
@section('content')
    <div class="movie-info mx-auto px-4 py-16 flex flex-col md:flex-row border-b border-gray-800">
        <img src="/img/parasite.jpg" alt="parasite" class="mx-auto w-96">
        <div class="ml-24">
            <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
            <div class="flex items-center text-gray-400 text-sm mt-2">
                <span class="material-icons text-orange-400">star</span>
                <span class="ml-1">84%</span>
                <span class="mx-2">|</span>
                <span>Feb 20, 2020</span>
                <span class="mx-2">|</span>
                <span class="ml-1">Action, Thriller and Drama</span>
            </div>
            <p class="text-gray300 mt-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quam vero nemo, doloremque consectetur aperiam exercitationem obcaecati dolorem eveniet amet possimus sapiente blanditiis nisi ducimus culpa autem! Eveniet nulla adipisci temporibus maiores distinctio accusantium beatae voluptate nemo et! Quo deserunt, rerum tempora eveniet necessitatibus sit est! Labore soluta ipsa perspiciatis.
            </p>
            <div class="mt-12">
                <h4 class="flex mt-4">
                    Featured Cast
                </h4>
                <div class="flex mt-4">
                    <div>
                        Bong Joon-ho
                        <div class="text-sm text-gray-400">
                            Screenplay, Director, Story
                        </div>
                    </div>
                    <div class="ml-8">
                        Han Jin-won
                        <div class="text-sm text-gray-400">
                            Screenplay
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                    <span class="material-icons mr-2">play_circle_outline</span>
                    Play Trailer
                </button>
            </div>
        </div>
    </div><!--end movie info!-->
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">
            Cast
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            <div class="mt-8">
                <a href="#"><img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-15" srcset=""></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                    <div class="flex items-center text-gray-400 text-sm mt-2">
                        <span class="material-icons text-orange-400">star</span>
                        <span class="ml-1">84%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-15" srcset=""></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                    <div class="flex items-center text-gray-400 text-sm mt-2">
                        <span class="material-icons text-orange-400">star</span>
                        <span class="ml-1">84%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-15" srcset=""></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                    <div class="flex items-center text-gray-400 text-sm mt-2">
                        <span class="material-icons text-orange-400">star</span>
                        <span class="ml-1">84%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-15" srcset=""></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                    <div class="flex items-center text-gray-400 text-sm mt-2">
                        <span class="material-icons text-orange-400">star</span>
                        <span class="ml-1">84%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="#"><img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-15" srcset=""></a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                    <div class="flex items-center text-gray-400 text-sm mt-2">
                        <span class="material-icons text-orange-400">star</span>
                        <span class="ml-1">84%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection