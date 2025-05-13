<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="index.css">  
    <link rel="icon" href="images/logo(1).png">  
    <title>Flora AI</title>
</head>
<body>
    <!-- The Class from nav to banner section -->
    <main class="nav-bann bg-[#004F44]">
        <section class="flex justify-around gap-14 nav">
            <!-- For Desktop -->
            <nav>
                <ul class="md:flex gap-5 mt-5 text-lg text-white hidden">
                    <li><a href="#" class="hover:text-green-300 transition duration-300">AI Flower Care</a></li>
                    <li><a href="#" class="hover:text-green-300 transition duration-300">Shop Flowers/Garden Tools</a></li>
                    <li><a href="#" class="hover:text-green-300 transition duration-300">Hire a Gardener</a></li>
                    <li><a href="#" class="hover:text-green-300 transition duration-300">Contact</a></li>
                </ul>
            </nav>

            <!-- LOGO -->
            <img src="images/logo(1).png" alt="" class="w-18 h-18 hidden md:block cursor-pointer" onclick="location.reload()">

            <article class="flex gap-5 mt-1">
                <img src="images/search.png" alt="Search" class="w-5 h-5 mt-5 cursor-pointer">
                <img src="images/person.png" alt="Person" class="w-5 h-5 mt-5 cursor-pointer">
                <img src="images/cart.png" alt="Cart" class="w-5 h-5 mt-5 cursor-pointer">
            </article>
        </section>

        <section class="flex justify-around mt-20">
            <article>
                <h1 class="text-7xl text-white font-bold">Happiness<br>blooms from<br>within</h1>
                <p class="text-gray-100 mt-7 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ratione!<br>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <div class="flex gap-8 mt-10">
                    <button class="bg-white text-black p-2 px-5 rounded-sm hover:bg-gray-100 cursor-pointer">Shop Now</button>
                    <div class="flex gap-5 mt-2">
                        <a href="#" class="text-gray-100">Explore Our AI</a>
                        <img src="images/arrow.png" alt="Arrow" class="w-4 h-2 mt-2.5 cursor-pointer">
                    </div>
                </div>
            </article>

            <article class="flex gap-2">
                <div>
                    <div>
                        <button class="bg-[#004F44] text-white rounded-sm absolute mt-3 ml-3 px-3 py-1 hover:bg-green-800">New</button>
                        <img src="images/image 3.png" alt="Image 1" class="w-3xs h-3xs hidden md:block">
                    </div>
                    <div>
                        <button class="bg-[#004F44] text-white rounded-sm absolute mt-3 ml-3 px-3 py-1 hover:bg-green-800">New</button>

                        <img src="images/image 2.png" alt="Image 2" class="w-3xs h-3xs hidden md:block">
                    </div>
                </div>

                    <button class="bg-[#004F44] text-white rounded-sm absolute mt-3 ml-3 px-3 py-1 hover:bg-green-800">New</button>
                    <img src="images/image 1.png" alt="Image 3" class="w-sm h-sm hidden md:block">
            </article>
        </section>
    </main>

    <script src="main.js"></script>
</body>
</html>