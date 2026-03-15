<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Uttaranchal Travels</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&family=Pacifico&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<style>

.nav-font{
font-family:'Montserrat', sans-serif;
}

.heading-font{
font-family:'Montserrat', sans-serif;
}

.script-font{
font-family:'Kaushan Script', cursive;
}

.content-font{
font-family:'Poppins', sans-serif;
}

</style>

</head>

<body class="bg-gray-50">

<nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">

<div class="max-w-7xl mx-auto px-4">

<div class="flex justify-between items-center h-20">

<!-- Logo -->

<div class="flex items-center">

<a href="/">

<img src="{{ asset('My-Images/Uttaranchal-removebg-preview.png') }}" class="lg:h-40 lg:w-40 lg:mt-6 h-28 mt-2" alt="logo">

</a>

</div>

<!-- Desktop Menu -->

<div class="hidden md:flex items-center space-x-20 ">

<a href="/" class="text-gray-700 hover:text-orange-400 font-medium hover:underline nav-font">
Home
</a>

<a href="/packages" class="text-gray-700 hover:text-orange-400 hover:underline font-medium nav-font">
Packages
</a>

<a href="/rental" class="text-gray-700 hover:text-orange-400 font-medium hover:underline nav-font">
Rentals
</a>

<a href="/about" class="text-gray-700 hover:text-orange-400 font-medium hover:underline nav-font">
About
</a>

<a href="/blog" class="text-gray-700 hover:text-orange-400 font-medium hover:underline nav-font">
Blog 
</a>

<a href="/contact-us" class="text-gray-700 hover:text-orange-400 font-medium hover:underline nav-font">
Contact
</a>

</div>

<!-- Book Now Button -->

<div class="hidden md:block">

<a href="/booking"
class="bg-orange-400 hover:bg-[#00A63E] text-white px-5 py-2 rounded-lg font-semibold transition nav-font">

Book Now

</a>

</div>

<!-- Mobile Menu Button -->

<div class="md:hidden">

<button id="menu-btn">

<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" stroke="currentColor">

<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4 6h16M4 12h16M4 18h16"/>

</svg>

</button>

</div>

</div>

</div>


<!-- Mobile Menu -->

<div id="mobile-menu" class="hidden md:hidden bg-white border-t py-2">

<a href="/" class="block px-4 py-3 hover:text-orange-400">Home</a>

<a href="/packages" class="block px-4 py-3 hover:text-orange-400">Packages</a>

<a href="/rental" class="block px-4 py-3 hover:text-orange-400">Rentals</a>

<a href="/about" class="block px-4 py-3 hover:text-orange-400">About</a>

<a href="/blog" class="block px-4 py-3 hover:text-orange-400">Blog</a>

<a href="/contact-us" class="block px-4 py-3 hover:text-orange-400">Contact</a>

<a href="/booking"
class="block m-4 text-center bg-orange-400 text-white py-2 rounded-lg hover:bg-[#00A63E]">

Book Now

</a>

</div>

<script>

const btn = document.getElementById('menu-btn');
const menu = document.getElementById('mobile-menu');

btn.addEventListener('click', () => {
menu.classList.toggle('hidden');
});

</script>

</nav>
