<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logo.png" type="image/x-icon">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <title>Flora AI</title>
</head>
<body>
    <header class="flex justify-around">
        <!-- Adding The Logo Here -->
        <div>
            <img src="images/Logo.png" alt="Logo" class="w-20 h-20">  
        </div>

        <!-- NavBars -->
        <nav>
            <ul class="flex space-x-8 mt-5">
                <li><a href="#" class="text-lg text-[#1E1E1E]">Home</a></li>
                <li><a href="#" class="text-lg text-[#1E1E1E]">Products</a></li>
                <li><a href="#" class="text-lg text-[#1E1E1E]">Contacts</a></li>
            </ul>
        </nav>

        <!-- Extra Functionality -->
        <!-- <div class="flex mt-5 space-x-4">
            <img src="images/cart.png" alt="" class="w-6 h-4">
            <img src="images/person.png" alt="" class="w-6 h-4">
            <img src="images/menu.png" alt="" class="w-6 h-4">
        </div> -->
    </header>

    <main>
        <section class="bg-[#C1DCDC] md:ml-20 md:mr-20 rounded-lg md:px-8 md:py-8 md:flex md:justify-around">
            <article class="px-15 py-5">
                <h1 class="font-bold text-6xl">Buy your <br> dream plants</h1>
                <div class="flex gap-10">
                    <div class="flex flex-col mt-10">
                        <h2 class="text-3xl font-bold">50+</h2>
                        <p class="text-lg mt-2">Plant Species.</p>
                    </div>

                    <div>
                        <img src="images/line.png" alt="Line" class="h-20 mt-10">
                    </div>

                    <div class="flex flex-col mt-10">
                        <h2 class="text-3xl font-bold">100+</h2>
                        <p class="text-lg mt-2">Customers.</p>
                    </div>
                </div>

                <!-- AI Input -->
                <div class="md:flex">
                    <img src="images/search.png" alt="" class="w-6 h-6 mt-13 absolute ml-80 bg-[#1E1E1E] rounded-full">
                    <input type="text" name="plant" id="plant" placeholder="Search for your plant..." class="mt-10 p-2 rounded-lg rounded bg-white w-90">
                    <img src="images/vector(1).png" alt="Vector" class="ml-5">
                </div>
            </article>

            <article class="md:mr-100 md:block hidden">
                <img src="images/vector.png" alt="" class="absolute md:ml-95 ml-83">
                <img src="images/bg.png" alt="Background" class="w-96 h-96 absolute md:mt-4">
                <img src="images/banner.png" alt="Banner Image" class="w-96 h-96 absolute md:mt-4">
            </article>
        </section>




        <!-- BEST SELLING PLANTS -->
        <section class="mt-30 ml-20 mr-20 md:flex gap-10">
            <div class="mt-10">
                <h1 class="text-3xl font-bold">Best Selling <br> Plants</h1>
                <p class="text-[#1E1E1E] mt-5"> Nature’s beauty is timeless.<br>From blooming flowers to towering trees, the world<br> around us is a masterpiece.<br>Take a moment to appreciate the wonders of the earth.
                <button class="bg-[#C1DCDC] mt-5 w-50 h-10 rounded-lg">See More</button>
            </div>

            <article class="md:flex gap-2 md:mt-0 mt-10">
                <div>
                    <img src="images/Frame 7.png" alt="">
                    <h1 class="text-[#1E1E1E] text-center mt-3 mb-2">Artificial Plant</h1>
                    <p class="text-[#1E1E1E] opacity-50 text-center md:mb-0 mb-5">$40</p>
                </div>
                
                <div>
                    <img src="images/Frame 8.png" alt="">
                    <h1 class="text-[#1E1E1E] text-center mt-3 mb-2">Artificial Plant</h1>
                    <p class="text-[#1E1E1E] opacity-50 text-center md:mb-0 mb-5">$40</p>
                </div>

                <div>
                    <img src="images/Frame 9.png" alt="">
                    <h1 class="text-[#1E1E1E] text-center mt-3 mb-2">Artificial Plant</h1>
                    <p class="text-[#1E1E1E] opacity-50 text-center md:mb-0 mb-5">$40</p>
                </div>
            </article>
        </section>



        <!-- ABOUT US -->
        <section class="mt-30 ml-20 mr-20">
            <h1 class="text-3xl font-bold text-center">About Us</h1>     
            <p class="text-[#1E1E1E] opacity-50 text-center mt-5">Order now and appreciate the beauty of nature</p>
        <div class="overflow-x-auto md:flex md:justify-around">
            <article class="flex justify-around md:flex-wrap flex-nowrap space-x-3 md:w-400 w-200 gap-10 mt-10 mb-5 ml-3">
                <div>
                    <img src="images/plant.png" alt="Plant" class="bg-[#C1DCDC] p-3 rounded-full px-7 md:ml-34 ml-17">
                    <h1 class="text-center font-bold text-xl mt-2 mb-3">Large Assoortment</h1>
                    <p class="text-[#1E1E1E] opacity-50 text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Lorem ipsum dolor sit amet consectetur.</p>
                </div>

                <div>
                    <img src="images/shipping.png" alt="Plant" class="bg-[#C1DCDC] p-3 rounded-full px-7 md:ml-34 ml-17">
                    <h1 class="text-center font-bold text-xl mt-2 mb-3">Fast & Free Shipping</h1>
                    <p class="text-[#1E1E1E] opacity-50 text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Lorem ipsum dolor sit amet consectetur.</p>
                </div>

                <div>
                    <img src="images/contact.png" alt="Plant" class="bg-[#C1DCDC] p-3 rounded-full px-7 md:ml-34 ml-17">
                    <h1 class="text-center font-bold text-xl mt-2 mb-3">24/7 Support</h1>
                    <p class="text-[#1E1E1E] opacity-50 text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
            </article>
        </div>
        </section> 

        <!-- CATEGORIES -->
        <section class="bg-[#C1DCDC] mt-30 py-10">
            <h1 class="text-3xl font-bold text-center">Categories</h1>     
            <p class="text-[#1E1E1E] opacity-50 text-center mt-2">Find what you are looking for</p>

        <div class="overflow-x-auto md:flex md:justify-around">
            <article class="flex justify-around md:flex-wrap flex-nowrap space-x-3 md:w-400 w-200 gap-10 mb-5 ml-20 mr-20">
                <div class="md:mt-0 mt-5">
                    <img src="images/Frame 36.png" alt="Frame 36">
                    <h1 class="font-bold text-xl mt-2 text-center">Natural Plants</h1>
                </div>

                <div class="mt-10">
                    <img src="images/Frame 38.png" alt="Frame 36">
                    <h1 class="font-bold text-xl mt-2 text-center">Plant Accessories</h1>
                    <p class="text-[#1E1E1E] opacity-50 text-center mt-2">Lorem ipsum dolor sit amet consectetur.<br>Lorem ipsum dolor sit.</p>
                    <button class="rounded-lg bg-white md:ml-18 ml-4 h-10 mt-5 w-50">Explore</button>
                </div>

                <div class="md:mt-0 mt-5">
                    <img src="images/Frame 37.png" alt="Frame 36">
                    <h1 class="font-bold text-xl mt-2 text-center">Natural Plants</h1>
                </div>
            </article>
        </div>
        </section>


        <!-- FEEDBACKS -->
        <section class="mt-30 md:ml-20 md:mr-20">
            <h1 class="text-3xl font-bold text-center">Flora AI</h1>     
            <p class="text-[#1E1E1E] opacity-50 text-center mt-2">What our customers say</p>

            <article class="md:flex mt-10 ml-20 mr-20 gap-10">
                <div class="mt-10 bg-[#C1DCDC] px-5 py-5 rounded-lg">
                    <p class="text-[#1E1E1E] opacity-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, esse pariatur.<br> Accusamus fugiat iste aliquam eum nulla autem similique deleniti<br>recusandae exercitationem, corrupti obcaecati reprehenderit non atque adipisci aut ut?</p>
                    <div class="flex gap-5">
                        <img src="images/person!.png" alt="Frame 40">
                        <h1 class="font-bold text-xl mt-20 text-center">John Doe</h1>
                    </div>
                </div>

                <div class="mt-10 bg-[#C1DCDC] px-5 py-5 rounded-lg">
                    <p class="text-[#1E1E1E] opacity-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, esse pariatur.<br> Accusamus fugiat iste aliquam eum nulla autem similique deleniti<br>recusandae exercitationem, corrupti obcaecati reprehenderit non atque adipisci aut ut?</p>
                    <div class="flex gap-5">
                        <img src="images/person!!.png" alt="Frame 41">
                        <h1 class="font-bold text-xl mt-20 text-center">Michael Trump</h1>
                    </div>
                </div>

                <div class="mt-10 bg-[#C1DCDC] px-5 py-5 rounded-lg">
                    <p class="text-[#1E1E1E] opacity-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, esse pariatur.<br> Accusamus fugiat iste aliquam eum nulla autem similique deleniti<br>recusandae exercitationem, corrupti obcaecati reprehenderit non atque adipisci aut ut?</p>
                    <div class="flex gap-5">
                        <img src="images/person!!.png" alt="Frame 41">
                        <h1 class="font-bold text-xl mt-20 text-center">Michael Trump</h1>
                    </div>
                </div>
            </article>


            <footer class="md:flex md:justify-between md:ml-20 md:mr-20 mt-30">
                <div class="ml-2">
                    <h1 class="text-3xl font-bold mb-3 ml-5 md:text-start text-center">Flora AI</h1>
                    <p class="text-[#1E1E1E] opacity-50 mb-3 ml-5 md:text-start text-center">We help you find <br> your dream plant</p>
                    <div class="flex gap-2 ml-34">
                        <img src="images/facebook.png" alt="Facebook">
                        <img src="images/insta.png" alt="Instagram">
                        <img src="images/x.png" alt="X">
                    </div>
                </div>

                <div class="md:grid hidden">
                    <h1 class="text-2xl font-bold mb-3">Information</h1>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3">About</a>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3">Product</a>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3">Blog</a>
                </div>

                <div class="md:grid hidden">
                    <h1 class="text-2xl font-bold mb-3">Company</h1>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3">Community</a>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3">Career</a>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3">Our story</a>
                </div>

                <!-- FOR MOBILE -->
                <article class="flex gap-7 justify-around mt-8 mb-8">
                    <div class="grid md:hidden">
                        <h1 class="text-2xl font-bold mb-3">Information</h1>
                        <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 text-center">About</a>
                        <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 text-center">Product</a>
                        <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 text-center">Blog</a>
                    </div>

                    <div class="grid md:hidden">
                        <h1 class="text-2xl font-bold mb-3">Company</h1>
                        <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 text-center">Community</a>
                        <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 text-center">Career</a>
                        <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 text-center">Our story</a>
                    </div>
                </article>

                <div class="grid ml-2">
                    <h1 class="text-2xl font-bold mb-3 text-center">Contact</h1>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 md:text-start text-center">Getting Started</a>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 md:text-start text-center">Pricing</a>
                    <a href="#" class="text-[#1E1E1E] opacity-50 mb-3 md:text-start text-center">Resources</a>
                </div>
            </footer>
 
            <h1 class="text-[#1E1E1E] opacity-50 text-center mt-10 mb-2">2025 all Right Reserved Term of use Flora AI</h1>
    </main>

</body>
</html>