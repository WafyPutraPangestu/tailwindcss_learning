<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
</head>
<body>
     <header class="container">
        <nav class="flex justify-between items-center p-5 ">
            <div class="">
                <a href="#">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="w-full">
                </a>
            </div>
            <ul class="flex gap-4">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Promotions</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="flex gap-4">
                <a href="#" class="text-sm px-2 py-2">Masuk</a>
                <a href="#" class="text-sm px-5 py-2 bg-avocado-500 text-white font-bold rounded-2xl">Daftar Akun</a>
            </div>
        </nav>
     </header>
     <main>
        <section class="container ">
            <div class="grid md:grid-cols-2  items-center justify-between gap-4"> 
                <div class="flex flex-col gap-5">
                    <div class="max-w-[400px] space-y-8">
                        <h1 class="text-6xl font-bold text-avocado-500">Good Food Us Good Mood</h1>
                        <p>I would think that conserving our natural resources should be a conservative position: Not to waste food, and not to throw away a lot of the food that we buy.</p>
                    </div>
                    <div class="space-x-4">
                        <a href="">Daftar Sekarang</a>
                        <a href="">About Us</a>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('storage/images/food/big-green-salad-tomato.png') }}" alt="food" class="w-full border-30 border-gray-200/95 rounded-full">
                    <div class="bg-white/70 rounded-xl px-8 py-4 absolute bottom-0 left-0 ">
                        <div class="flex justify-between items-center gap-10">
                            <img src="{{ asset('storage/images/food/green-salad-tomato.png') }}" alt="food" class="w-full ">
                            <div class="">
                                <h1 class="min-w-[200px] font-bold">
                                    Green Salad Tomato
                                </h1>
                                <p>
                                    Tomato
                                </p>
                                <div class="flex gap-2 mt-2">
                                @php
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                                    }
                                @endphp
                                    <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- BAGIAN YANG CATEGORY --}}
        <section class="mt-20">
            <div class="container ">
                <h1 class="text-4xl max-w-[600px] font-bold ">Browser Our Category
                    <h1 class="text-4xl max-w-[600px] font-bold text-avocado-500/80">Receipt</h1>
                </h1>
            </div>
            <div class="flex items-center gap-5 mt-10 overflow-x-auto container scrollbar-none">
                <div class="bg-avocado-500/20 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl   ">
                    <div class="container">
                        <div class="">
                            <img src="{{ asset('storage/icons/cupcake.png') }}" alt="">
                        </div>
                        <h1>TEST</h1>
                    </div>
                </div>
                <div class="bg-blue-500 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl">
                    <div class="container">
                        <img src="{{ asset('storage/icons/pizza.png') }}" alt="">
                        <h1>TEST</h1>

                    </div>
                </div>
                <div class="bg-blue-500/20 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl">
                    <div class="container">
                        <img src="{{ asset('storage/icons/kebab.png') }}" alt="">
                        <h1>TEST</h1>

                    </div>
                </div>
                <div class="bg-pink-500 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl   ">
                    <div class="container">
                        <img src="{{ asset('storage/icons/salmon.png') }}" alt="">
                        <h1>TEST</h1>
                    </div>
                </div>
                <div class="bg-blue-300 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl ">
                    <div class="container">
                        <img src="{{ asset('storage/icons/doughnut.png') }}" alt="">
                        <h1>Donat</h1>
                    </div>
                </div>
            </div>
        </section>

        {{-- bagian paling bawah yang trending --}}
        <section>
            <div class="container mt-5">
                <div class="">
                    <h1 class="text-4xl max-w-[600px] font-bold ">Browser Our Trending
                        <h1 class="text-4xl max-w-[600px] font-bold text-avocado-500/80">Receipt</h1>
                    </h1>
                </div>
            </div>
            <div class="grid md:grid-cols-3 gap-4 mt-10 container">
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/images/food/pizza-pepperoni.png') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1>TEST</h1>
                        <div class="flex gap-2">
                             @php
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                                    }
                                @endphp
                                    <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/images/food/pizza-meat.png') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1>TEST</h1>
                        <div class="flex gap-2">
                             @php
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                                    }
                                @endphp
                                    <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/images/food/doner-kebab.png') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1>TEST</h1>
                        <div class="flex gap-2">
                            @php
                        for ($i = 0; $i < 4; $i++) {
                            echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                        }
                        @endphp
                        <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                    </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/images/food/salmon-roll.png') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1>TEST</h1>
                        <div class="flex gap-2">
                             @php
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                                    }
                                @endphp
                                    <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/images/food/cupcake-choco.png') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1>TEST</h1>
                        <div class="flex gap-2">
                             @php
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                                    }
                                @endphp
                                    <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                        </div>
                         
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/images/food/doughnut-milk.png') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1>TEST</h1>
                        <div class="flex gap-2">
                             @php
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                                    }
                                @endphp
                                    <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/images/food/doughnut-unicorn.png') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1>TEST</h1>
                        <div class="flex gap-2">
                             @php
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                                    }
                                @endphp
                                    <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                        </div>
                         
                    </div>
                </div>
                <div class="">
                    <div class="">
                        <img src="{{ asset('storage/images/food/kathi-kebab.png') }}" alt="">
                    </div>
                    <div class="flex flex-col gap-2">
                        <h1>TEST</h1>
                        <div class="flex gap-2">
                             @php
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '<img src="' . asset('storage/images/yellow-star.png') . '" alt="">';
                                    }
                                @endphp
                                    <img src="{{ asset('storage/images/white-star.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
     </main>
</body>
</html>