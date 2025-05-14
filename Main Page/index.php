<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="index.css">  
    <link rel="icon" href="images/logo(3).png">  
    <title>Flora AI</title>
</head>
<body>
    <!-- The Class from nav to banner section -->
    <main class="nav-bann bg-[#004F44]">
        <section class="flex justify-around gap-14 nav">
            <!-- LOGO -->
            <img src="images/logo(2).png" alt="" class="w-18 h-18 hidden md:block cursor-pointer" onclick="location.reload()">
            <!-- For Desktop -->
            <nav>
                <ul class="md:flex gap-5 mt-5 text-lg text-white hidden">
                    <li><a href="#" class="hover:text-green-300 transition duration-300">AI Flower Care</a></li>
                    <li><a href="shop" class="hover:text-green-300 transition duration-300">Shop Flowers/Garden Tools</a></li>
                    <li><a href="#" class="hover:text-green-300 transition duration-300">Hire a Gardener</a></li>
                </ul>
            </nav>

            <article class="flex gap-5 mt-1">
                <img src="images/search 1.png" alt="Search" class="w-5 h-5 mt-5 cursor-pointer">
                <img src="images/person 1.png" alt="Person" class="w-5 h-5 mt-5 cursor-pointer">
                <img src="images/cart 2.png" alt="Cart" class="w-6 h-5 mt-5 cursor-pointer">
            </article>
        </section>

        <section class="flex justify-around mt-20 main">
            <article>
                <h1 class="text-7xl text-white header">Happiness<br>blooms from<br>within</h1>
                <p class="text-gray-100 mt-7 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ratione!<br>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <div class="flex gap-8 mt-10">
                    <button class="bg-white text-black p-2 px-5 rounded-sm hover:bg-gray-100 cursor-pointer"><a href="#shop">Shop Now</a></button>
                    <div class="flex gap-5 mt-2">
                        <a href="#" class="text-gray-100">Explore Our AI</a>
                        <img src="images/arrow.png" alt="Arrow" class="w-4 h-2 mt-2.5 cursor-pointer">
                    </div>
                </div>
            </article>
            <!-- Pattern -->
            <img src="images/pattern.png" alt="Pattern" class="absolute mt-130 ml-15">
            <article class="flex gap-2">
                <div>
                    <div>
                        <button class="bg-[#004F44] text-white rounded-sm absolute mt-3 ml-3 px-3 py-1 hover:bg-green-800 cursor-pointer">New</button>
                        <img src="images/image 3.png" alt="Image 1" class="w-3xs h-3xs hidden md:block">
                    </div>
                    <div>
                        <img src="images/image 2.png" alt="Image 2" class="w-3xs h-3xs hidden md:block relative">
                    </div>
                </div>
                <div>
                    <button class="bg-[#004F44] text-white rounded-sm absolute mt-3 ml-3 px-3 py-1 hover:bg-green-800 cursor-pointer">Featured</button>
                    <h1 class="text-3xl text-black ml-20 absolute mt-118">Anthurium Flower</h1>
                    <p class="text-black absolute ml-2 mt-127 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing<Br> elit. Dignissimos, exercitationem.Lorem ipsum<br> dolor sit, amet consectetur<Br></p>
                    <img src="images/dark.png" alt="Dark Image" class="w-sm absolute mt-77">
                    <img src="images/image 1.png" alt="Image 3" class="w-sm h-157 hidden md:block">
                </div>
            </article>
        </section>
    </main>

    <!-- RIGHT AND LEFT IMAGES -->
    <div class="flex justify-between">
        <img src="images/left.png" alt="" class="absolute">
        <img src="images/right.png" alt="" class="absolute ml-[850px] sm:ml-[950px] md:ml-[1050px] lg:ml-[1150px] xl:ml-[1270px]">
    </div>

    <!-- FEATURED ITEMS -->
    <section class="md:ml-50 md:mr-50" id="shop ">
        <article class="flex justify-between mt-30">
            <h1 class="text-4xl text-[#004F44]">Shop Flowers</h1>
            <span class="text-xl text-[#004F44] cursor-pointer mt-2">view all</span>
        </article>

        <article class="flex justify-between mt-10">
            <div>
                <img src="images/image 8.png" alt="Image" class="w-3xs h-3xs">
                <div class="flex justify-between mt-5">
                    <h1 class="text-2xl text-[#004F44]">Anthurium Flower</h1>
                    <span class="text-2xl text-[#004F44]">$20.00</span>
                </div>

                <div class="flex justify-between mt-5">
                    <div> 
                        <span class="text-[#9EA9A7]">Pat Colors</span>
                        <img src="images/colours.png" alt="Colours">
                    </div>
                    <button class="px-5 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer">Buy</button>
                </div>
            </div>

            <div>
                <img src="images/image 10.png" alt="Image" class="w-3xs h-3xs">
                <div class="flex justify-between mt-5">
                    <h1 class="text-2xl text-[#004F44]">Anthurium Flower</h1>
                    <span class="text-2xl text-[#004F44]">$16.00</span>
                </div>

                <div class="flex justify-between mt-5">
                    <div> 
                        <span class="text-[#9EA9A7]">Pat Colors</span>
                        <img src="images/colours.png" alt="Colours">
                    </div>
                    <button class="px-5 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer">Buy</button>
                </div>
            </div>

            <div>
                <img src="images/image 9.png" alt="Image" class="w-3xs h-3xs">
                <div class="flex justify-between mt-5">
                    <h1 class="text-2xl text-[#004F44]">Anthurium Flower</h1>
                    <span class="text-2xl text-[#004F44]">$30.00</span>
                </div>

                <div class="flex justify-between mt-5">
                    <div> 
                        <span class="text-[#9EA9A7]">Pat Colors</span>
                        <img src="images/colours.png" alt="Colours">
                    </div>
                    <button class="px-5 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer">Buy</button>
                </div>
            </div>

            <div>
                <img src="images/image 11.png" alt="Image" class="w-3xs h-3xs">
                <div class="flex justify-between mt-5">
                    <h1 class="text-2xl text-[#004F44]">Anthurium Flower</h1>
                    <span class="text-2xl text-[#004F44]">$30.00</span>
                </div>

                <div class="flex justify-between mt-5">
                    <div> 
                        <span class="text-[#9EA9A7]">Pat Colors</span>
                        <img src="images/colours.png" alt="Colours">
                    </div>
                    <button class="px-5 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer">Buy</button>
                </div>
            </div>
        </article>
    </section>


    <!-- Shipping -->
    <section class="shipping mt-40 ml-50 mr-50 py-35 mb-20">
        <h1 class="text-[#9C6955] text-5xl ml-10">Free Shipping Services</h1>
        <span class="text-[#9C6955] ml-10">*only for the same region</span>

        <div class="flex gap-3 mt-5 ml-11">
            <img src="images/contact.png" alt="Contact" class="w-5 h-5">
            <span class="text-[#9C6955]"> +383 049 232 423</span>
        </div>

        <div class="flex gap-3 mt-5 ml-11">
            <img src="images/order.png" alt="Contact" class="w-5 h-4 mt-1   ">
            <span class="text-[#9C6955]"> durgutisylejman00@gmail.com</span>
        </div>
    </section>
    
    <!-- Left Hanger -->
    <img src="images/left(1).png" alt="Left Hanger" class="absolute ml-0">

    <!-- Shop Garden Tools  -->
    <section class="md:ml-50 md:mr-50" id="shop ">
        <article class="flex justify-between mt-30">
            <h1 class="text-4xl text-[#004F44]">Shop Garden Tools</h1>
            <span class="text-xl text-[#004F44] cursor-pointer mt-2">view all</span>
        </article>

        <article class="flex justify-between mt-10">
            <div>
                <img src="images/image 7.png" alt="Image" class="w-3xs h-3xs">
                <div class="flex justify-between mt-5">
                    <h1 class="text-2xl text-[#004F44]">Hanger Hooks</h1>
                    <span class="text-2xl text-[#004F44]">$0.50</span>
                </div>

                <div class="flex justify-between mt-5">
                    <div> 
                        <span class="text-[#9EA9A7]">Pat Colors</span>
                        <img src="images/colours.png" alt="Colours">
                    </div>
                    <button class="px-5 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer">Buy</button>
                </div>
            </div>

            <div>
                <img src="images/cultivator.jpg" alt="Cultivator" class="w-3xs h-82">
                <div class="flex justify-between mt-5">
                    <h1 class="text-2xl text-[#004F44]">Cultivator</h1>
                    <span class="text-2xl text-[#004F44]">$34.00</span>
                </div>

                <div class="flex justify-between mt-5">
                    <div> 
                        <span class="text-[#9EA9A7]">Pat Colors</span>
                        <img src="images/colours.png" alt="Colours">
                    </div>
                    <button class="px-5 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer">Buy</button>
                </div>
            </div>

            <div>
                <img src="images/leg.jpg" alt="Leg Helper" class="w-3xs h-82">
                <div class="flex justify-between mt-5">
                    <h1 class="text-2xl text-[#004F44]">Leg Helper</h1>
                    <span class="text-2xl text-[#004F44]">$4.00</span>
                </div>

                <div class="flex justify-between mt-5">
                    <div> 
                        <span class="text-[#9EA9A7]">Pat Colors</span>
                        <img src="images/colours.png" alt="Colours">
                    </div>
                    <button class="px-5 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer">Buy</button>
                </div>
            </div>

            <div>
                <img src="images/planter.jpg" alt="Image" class="w-3xs h-82">
                <div class="flex justify-between mt-5">
                    <h1 class="text-2xl text-[#004F44]">Flower Planter</h1>
                    <span class="text-2xl text-[#004F44]">$2.00</span>
                </div>

                <div class="flex justify-between mt-5">
                    <div> 
                        <span class="text-[#9EA9A7]">Pat Colors</span>
                        <img src="images/colours.png" alt="Colours">
                    </div>
                    <button class="px-5 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer">Buy</button>
                </div>
            </div>
        </article>
    </section>

    <!-- Right/Left Hanger -->
    <article class="flex justify-between">
        <img src="images/right.png" alt="Right Hanger" class="absolute ml-[850px] sm:ml-[950px] md:ml-[1050px] lg:ml-[1150px] xl:ml-[1270px]">
        <img src="images/leaf.png" alt="Left Hanger" class="absolute ml-0 mt-40">
    </article>

    <!-- AI FOR FLOWER CARE -->
    <section class="mt-40 ml-50 mr-50">
        <h1 class="text-4xl text-center text-[#004F44]">Flora AI</h1>
        <p class="text-[#9EA9A7] text-center">Want to take of your flowers, but don't know how?<Br> You have came in the right website.<br>We have Flora AI that will help you to take care of them, in just a minute of explaining</p>
        
        <!-- INPUT FOR RESEARCH  -->
        <button class="absolute ml-[850px] sm:ml-[950px] md:ml-[1050px] lg:ml-[1150px] xl:ml-[770px] bg-gray-300 mt-15 py-1 px-2 rounded-lg cursor-pointer">Search</button>
        <button class="absolute ml-[850px] sm:ml-[950px] md:ml-[1050px] lg:ml-[1150px] xl:ml-[840px] bg-gray-300 mt-15 py-1 px-2 rounded-lg cursor-pointer">Research</button>

        <input type="text" placeholder="Ask Anything About Flowers" class="w-1/2 xl:w-[690px] h-15 mt-10 lg:ml-90 xl:ml-[248px] p-2 border border-gray-300 rounded-md relative">
        <div class="flex justify-center mt-10">
            <button class="bg-[#004F44] text-white p-2 px-5 rounded-sm hover:bg-green-800 cursor-pointer"><a href="#">Try Flora AI</a></button>
        </div>
    </section>


    <!-- Hire Gardeners -->
    <section class="mt-40 ml-50 mr-50">
        <div class="flex justify-between">
            <h1 class="text-4xl text-[#004F44]">Want to Hire Gardeners?</h1>
            <span class="text-xl text-[#004F44] cursor-pointer mt-2">Those are our most rated gardeners</span>
        </div>

        <article class="flex mt-10 justify-around">
            <div>
                <img src="images/person(1).jpg" alt="Kai Trump" class="w-65 h-80 rounded">
                <div class="flex justify-between mt-3">
                    <h1 class="text-2xl mt-2.5">Kai Trump</h1>
                    <div class="flex gap-2 mt-4">
                        <img src="images/star.png" alt="Star" class="w-4 h-4 mt-1">
                        <span class="mt-0.8">4.8</span>
                    </div>
                </div>
                <div class="flex justify-between mt-1">
                    <button class="px-5 py-1 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer mt-2">Hire</button>
                    <h1 class="mt-3 font-bold text-green-500">14$/hour</h1>
                </div>
            </div>

            <div>
                <img src="images/person(2).jpg" alt="Maria Mari" class="w-65 h-80 rounded">
                <div class="flex justify-between mt-3">
                    <h1 class="text-2xl mt-2.5">Maria Mari</h1>
                    <div class="flex gap-2 mt-4">
                        <img src="images/star.png" alt="Star" class="w-4 h-4 mt-1">
                        <span class="mt-0.8">4.5</span>
                    </div>
                </div>
                <div class="flex justify-between mt-1">
                    <button class="px-5 py-1 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer mt-2">Hire</button>
                    <h1 class="mt-3 font-bold text-green-500">12$/hour</h1>
                </div>
            </div>

            <div>
                <img src="images/person(3).jpg" alt="Joe Kai" class="w-65 h-80 rounded">
                <div class="flex justify-between mt-3">
                    <h1 class="text-2xl mt-2.5">Joe Kai</h1>
                    <div class="flex gap-2 mt-4">
                        <img src="images/star.png" alt="Star" class="w-5 h-5">
                        <span class="mt-0.8">5.0</span>
                    </div>
                </div>
                <div class="flex justify-between mt-1">
                    <button class="px-5 py-1 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer mt-2">Hire</button>
                    <h1 class="font-bold text-red-500 mt-3">20$/hour</h1>
                </div>
            </div>

            <div>
                <img src="images/person(4).jpg" alt="John Johny" class="w-65 h-80 rounded">
                <div class="flex justify-between mt-3">
                    <h1 class="text-2xl mt-2.5">John Johny</h1>
                    <div class="flex gap-2 mt-4">
                        <img src="images/star.png" alt="Star" class="w-5 h-5">
                        <span class="mt-0.8">4.7</span>
                    </div>
                </div>
                <div class="flex justify-between mt-1">
                    <button class="px-5 py-1 bg-[#004F44] hover:bg-green-800 text-white cursor-pointer mt-2">Hire</button>
                    <h1 class="mt-3 font-bold text-green-500">8$/hour</h1>
                </div>
            </div>
        </article>
    </section>


    <!-- Contact Us -->
    <!-- Left Hanger -->
    <img src="images/left(1).png" alt="Left Hanger" class="absolute ml-0">
    <section class="mt-40 ml-50 mr-50">
        <h1 class="text-[#000000] text-center text-5xl">Contact Us</h1>
        <p class="text-[#818181] text-center text-lg">Get attachment with us</p>

        <article class="bg-[#F2F8EC] rounded-xl ml-30 mr-30">
            <div class="flex justify-around mt-10 p-5">
                <input type="text" placeholder="Name" class="border border-[#BBB5B5] rounded-xl bg-[#FFFFFF] px-2 py-1 text-[#847C7C]">
                <input type="email" placeholder="E-Mail" class="border border-[#BBB5B5] rounded-xl bg-[#FFFFFF] px-2 py-1 text-[#847C7C]">
            </div>
            <div class="mt-10 p-4 ml-30 mr-30">
                <input type="text" placeholder="Message" class="border w-155 h-50 border-[#BBB5B5] rounded-xl bg-[#FFFFFF] px-2 py-1 text-[#847C7C]">
            </div>
        </article>
    </section>
    <script src="main.js"></script>
</body>
</html>