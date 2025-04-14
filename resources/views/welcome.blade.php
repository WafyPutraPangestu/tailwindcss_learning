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
        <nav class="flex justify-between items-center p-5">
            <div>
                <a href="#">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="w-full">
                </a>
            </div>
            <ul class="flex gap-6 p-5">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li class="relative">
                    <a href="#">Promotions</a>
                    <span class="absolute bottom-5 -right-4 bg-red-500 text-white text-[10px] px-2 py-0.5 rounded-xl font-bold">HOT</span>
                </li>
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
                    <div class="max-w-[533px] space-y-8">
                        <h1 class="text-6xl font-bold text-avocado-500">Good Food Us Good Mood</h1>
                        <p>I would think that conserving our natural resources should be a conservative position: Not to waste food, and not to throw away a lot of the food that we buy.</p>
                    </div>
                    <div class="space-x-4">
                        <a href="" class="text-sm px-8 py-4 bg-avocado-500 text-white font-bold rounded-2xl">Daftar Sekarang</a>
                        <a href="" class="text-sm px-8 py-4 bg-gray-100 font-bold rounded-2xl">About Us</a>
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
            <div id="scrollable" class="flex items-center gap-5 mt-10 overflow-x-auto container scrollbar-none scroll-smooth">
                <div class="bg-avocado-500/20 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl   ">
                    <div class="container flex flex-col items-center">
                        <div class="">
                            <img src="{{ asset('storage/icons/cupcake.png') }}" alt="" class="w-10 mb-4">
                        </div>
                        <h1 class="mb-2">Cupcake</h1>
                        <h1>22 items</h1>
                    </div>
                </div>
                <div class="bg-blue-500 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl">
                    <div class="container flex flex-col items-center">
                        <img src="{{ asset('storage/icons/pizza.png') }}" alt="" class="w-10 mb-4">
                        <h1 class="mb-2">pizza</h1>
                        <h1>25 items</h1>

                    </div>
                </div>
                <div class="bg-blue-500/20 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl">
                    <div class="container flex flex-col items-center">
                        <img src="{{ asset('storage/icons/kebab.png') }}" alt="" class="w-10 mb-4">
                        <h1 class="mb-2">kebab</h1>
                        <h1>30 items</h1>

                    </div>
                </div>
                <div class="bg-pink-500 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl   ">
                    <div class="container flex flex-col items-center">
                        <img src="{{ asset('storage/icons/salmon.png') }}" alt="" class="w-10 mb-4">
                        <h1 class="mb-2">Salmon</h1>
                        <h1>20 items</h1>
                    </div>
                </div>
                <div class="bg-blue-300 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl ">
                    <div class="container flex flex-col items-center">
                        <img src="{{ asset('storage/icons/doughnut.png') }}" alt="" class="w-10 mb-4">
                        <h1 class="mb-2">Doughnut</h1>
                        <h1>10 items</h1>
                    </div>
                </div>
                <div class="bg-blue-300 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl ">
                    <div class="container flex flex-col items-center">
                        <img src="{{ asset('storage/icons/doughnut.png') }}" alt="" class="w-10 mb-4">
                        <h1 class="mb-2">Doughnut</h1>
                        <h1>10 items</h1>
                    </div>
                </div>
                <div class="bg-blue-300 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl ">
                    <div class="container flex flex-col items-center">
                        <img src="{{ asset('storage/icons/doughnut.png') }}" alt="" class="w-10 mb-4">
                        <h1 class="mb-2">Doughnut</h1>
                        <h1>10 items</h1>
                    </div>
                </div>
                <div class="bg-blue-300 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl ">
                    <div class="container flex flex-col items-center">
                        <img src="{{ asset('storage/icons/doughnut.png') }}" alt="" class="w-10 mb-4">
                        <h1 class="mb-2">Doughnut</h1>
                        <h1>10 items</h1>
                    </div>
                </div>
                <div class="bg-blue-300 py-5 px-5  flex shrink-0 w-full max-w-[240px] max-h-[175px] h-full rounded-2xl ">
                    <div class="container flex flex-col items-center">
                        <img src="{{ asset('storage/icons/doughnut.png') }}" alt="" class="w-10 mb-4">
                        <h1 class="mb-2">Doughnut</h1>
                        <h1>10 items</h1>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-5 gap-2">
                <button id="prevBtn" class="cursor-pointer flex items-center gap-2 py-4 px-6 bg-avocado-500 hover:bg-avocado-500/90 text-white font-bold rounded-4xl">
                    <span class="bg-white text-green-600 rounded-full w-8 h-8 flex items-center justify-center mr-2 text-lg">❮</span>
                    PREV
                </button>
                <button id="nextBtn" class="cursor-pointer flex items-center gap-2 py-4 px-6 bg-avocado-500 hover:bg-avocado-500/90 text-white font-bold rounded-4xl">
                    NEXT<span class="bg-white text-green-600 rounded-full w-8 h-8 flex items-center justify-center ml-2 text-lg">❯</span>
                    
                </button>
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
                <div class="bg-blue-500/20 rounded-lg px-4 py-8">
                    <div class="">
                        <img src="{{ asset('storage/images/food/pizza-pepperoni.png') }}" alt="">
                        <h1 class="text-2xl ">Pizza Pepperoni</h1>
                    </div>
                    <div class="flex flex-col gap-2 mt-5">
                        <h1 class="text-avocado-500 text-xl">Pizza Pepperoni</h1>
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
                <div class="bg-blue-300/20 rounded-lg px-4 py-8">
                    <div class="">
                        <img src="{{ asset('storage/images/food/pizza-meat.png') }}" alt="">
                        <h1 class="text-2xl ">Pizza Meat</h1>
                    </div>
                    <div class="flex flex-col gap-2 mt-5">
                        <h1 class="text-avocado-500 text-xl">Piza Meat</h1>
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
                <div class="bg-deep-rose-500/20 rounded-lg px-4 py-8">
                    <div class="">
                        <img src="{{ asset('storage/images/food/doner-kebab.png') }}" alt="">
                        <h1 class="text-2xl ">Doner Kebab</h1>
                    </div>
                    <div class="flex flex-col gap-2 mt-5">
                        <h1 class="text-avocado-500 text-xl">Doner Kebab</h1>
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
                <div class="bg-avocado-500/20 rounded-lg px-4 py-8">
                    <div class="">
                        <img src="{{ asset('storage/images/food/salmon-roll.png') }}" alt="">
                        <h1 class="text-2xl ">Salmon Roll</h1>
                    </div>
                    <div class="flex flex-col gap-2 mt-5">
                        <h1 class="text-avocado-500 text-xl">Salmon Roll</h1>
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
                <div class="bg-red-500/20 rounded-lg px-4 py-8">
                    <div class="">
                        <img src="{{ asset('storage/images/food/cupcake-choco.png') }}" alt="">
                        <h1 class="text-2xl ">Cupcake Choco</h1>
                    </div>
                    <div class="flex flex-col gap-2 mt-5">
                        <h1 class="text-avocado-500 text-xl">Cupcake Choco</h1>
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
                <div class="bg-green-500/20 rounded-lg px-4 py-8">
                    <div class="">
                        <img src="{{ asset('storage/images/food/doughnut-milk.png') }}" alt="">
                        <h1 class="text-2xl ">Doughnut Milk</h1>
                    </div>
                    <div class="flex flex-col gap-2 mt-5">
                        <h1 class="text-avocado-500 text-xl">Doughnut Milk</h1>
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
                <div class="bg-yellow-500/20 rounded-lg px-4 py-8">
                    <div class="">
                        <img src="{{ asset('storage/images/food/doughnut-unicorn.png') }}" alt="">
                        <h1 class="text-2xl ">Doughnut Unicorn</h1>
                    </div>
                    <div class="flex flex-col gap-2 mt-5">
                        <h1 class="text-avocado-500 text-xl">Doughnut Unicorn</h1>
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
                <div class="bg-pink-500/20 rounded-lg px-4 py-8">
                    <div class="">
                        <img src="{{ asset('storage/images/food/kathi-kebab.png') }}" alt="">
                        <h1 class="text-2xl ">Kathi Kebab</h1>
                    </div>
                    <div class="flex flex-col gap-2 mt-5">
                        <h1 class="text-avocado-500 text-xl">Kathi Kebab</h1>
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
            <div class="flex justify-center mt-10 "><button class="bg-avocado-500/85 hover:bg-avocado-500/70 transition-colors duration-300 px-8 py-2 rounded-2xl text-white font-bold cursor-pointer ">ALL Receipt</button></div>
        </section>

        {{-- BAGIAN FOOTER --}}

        <footer class="container mt-10 mb-10 ">
            <div class="bg-avocado-500/5 py-5 px-5 rounded-xl grid md:grid-cols-4 gap-2 mb-10">
                <div class="flex flex-col gap-5 p-5 text-sm text-black/50">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="" class="w-full max-w-[178px]">
                    <p class="">Jl. Prof. DR. Satrio No.7, RT.3/RW.3, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950</p>
                    <div class="flex gap-2 ">
                        <img src="{{ asset('storage/icons/white-mail.png') }}" alt="" class="py-2 px-2 rounded-full bg-avocado-500">
                        <img src="{{ asset('storage/icons/phone.png') }}" alt="" class="py-2 px-2">
                        <img src="{{ asset('storage/icons/instagram.png') }}" alt="" class="py-2 px-2">
                    </div>
                </div>
                <div class="flex flex-col gap-8 p-5 ">
                    <h1 class="font-bold text-xl">Categories</h1>
                    <ul class="flex flex-col gap-4 text-sm text-black/50">
                        <li><a href="#">Cupcake</a></li>
                        <li><a href="#">Pizza</a></li>
                        <li><a href="#">Kebab</a></li>
                        <li><a href="#">Salmon</a></li>
                        <li><a href="#">Doughnut</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-8 p-5 ">
                    <h1 class="font-bold text-xl">About Us</h1>
                    <ul class="flex flex-col gap-4 text-sm text-black/50">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Report Problem</a></li>
                </div>
                <div class="flex flex-col gap-5 pt-5">
                    <h1 class="font-bold text-xl mb-2">Newsletter</h1>
                    <p class="text-sm">Get now free 50% discount for alll products on your first order</p>
                    <div class="flex">
                        <input type="text" placeholder="your email address" class="border-1 border-black rounded-l-xl px-4 py-2">
                        <button type="submit" class="bg-avocado-500 py-2 px-3 text-white font-bold rounded-r-xl">SEND</button>
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="flex gap-2">
                            <img src="{{ asset('storage/icons/green-mail.png') }}" alt="">
                            <p class="font-bold text-sm">elemensid@gmail.com</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="{{ asset('storage/icons/phone.png') }}" alt="">
                            <p class="font-bold text-sm">0888 1111 2222</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-sm text-black/50">© 2021 Elemes id. All rights reserved</h1>
            </div>
        </footer>
     </main>
</body>
</html>