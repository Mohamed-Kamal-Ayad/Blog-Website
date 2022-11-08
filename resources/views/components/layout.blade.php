<!doctype html>
<html>
<head>
<title>Kimya Blog</title>
<link rel="icon" type="image/x-icon" href="/images/blogger-4-16.ico">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .clamp {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .clamp.one-line {
            -webkit-line-clamp: 1;
        }
        .clamp.multi-line {
            -webkit-line-clamp: 2;
        }
    </style>
</head>



<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div class="">
            <a href="/">
                <img src="/images/blogger-4-256.png" alt="My Blog Logo" class=" float-left" width="50" height="16">
                <h1 class="text-blue-500 text-4xl mt-1 ml-2 float-right">BLOG</h1>
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center">
            @auth
                @admin
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold mt-1 uppercase">Welcome, {{auth()->user()->name}}!</button>
                    </x-slot>
                    <x-slot name="items">
                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')" >Dashboard</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                    </x-slot>
                </x-dropdown>
                @endadmin


                <form method="POST" action="/logout" class="text-s font-bold text-red-500 ml-6">
                    @csrf
                    <button type="submit" class="">Log Out</button>
                </form>
            @else
                <a href="/register" class=" text-xs font-bold uppercase">REGISTER</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase">Log IN</a>
            @endauth

            <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        </div>
    </nav>

    {{$slot}}

    <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="/newsletter" class="lg:flex text-sm">
                    @csrf

                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>

                        <div>
                            <input id="email" type="text" name="email" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                            @error('email')
                            <span class="text-xs text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>

<x-flash/>
</body>
</html>


