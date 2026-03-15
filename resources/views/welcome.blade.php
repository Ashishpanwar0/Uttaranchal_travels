<x-navbar />

@yield('content')
<x-hero-section/>

<section class="bg-[linear-gradient(135deg,#f0fdf4_0%,#fff7ed_100%)]">

<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="text-center mb-14">

<h2 class="text-3xl md:text-4xl font-bold mb-3">
Our Services
</h2>

<p class="text-gray-600 max-w-2xl mx-auto">
We provide tour packages, vehicle rentals and travel guides to make your Uttarakhand journey comfortable and memorable.
</p>

</div>


<div class="grid md:grid-cols-3 gap-8">


<!-- Tour Packages -->

<div class="group bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-2xl transition duration-300">

<div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full bg-green-100 group-hover:bg-[#00A63E] transition">

<i class="fa-solid fa-mountain-sun text-2xl text-[#00A63E] group-hover:text-white"></i>

</div>

<h3 class="text-xl font-semibold mb-3">
Tour Packages
</h3>

<p class="text-gray-600 mb-6 text-sm">
Explore Char Dham, Kedarnath and other spiritual journeys with comfortable hotels and safe transport services.
</p>

<a href="/packages" class="inline-flex items-center gap-2 text-[#F97316] font-semibold hover:text-[#00A63E] transition">

View Packages
<i class="fa-solid fa-arrow-right"></i>

</a>

</div>



<!-- Vehicle Rentals -->

<div class="group bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-2xl transition duration-300">

<div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full bg-green-100 group-hover:bg-[#00A63E] transition">

<i class="fa-solid fa-van-shuttle text-2xl text-[#00A63E] group-hover:text-white"></i>

</div>

<h3 class="text-xl font-semibold mb-3">
Vehicle Rentals
</h3>

<p class="text-gray-600 mb-6 text-sm">
Book taxi, tempo traveller or bus for your Uttarakhand trip with affordable pricing and experienced drivers.
</p>

<a href="/rentals" class="inline-flex items-center gap-2 text-[#F97316] font-semibold hover:text-[#00A63E] transition">

Book Vehicle
<i class="fa-solid fa-arrow-right"></i>

</a>

</div>



<!-- Travel Blog -->

<div class="group bg-white rounded-2xl shadow-md p-8 text-center hover:shadow-2xl transition duration-300">

<div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center rounded-full bg-green-100 group-hover:bg-[#00A63E] transition">

<i class="fa-solid fa-book-open text-2xl text-[#00A63E] group-hover:text-white"></i>

</div>

<h3 class="text-xl font-semibold mb-3">
Travel Guide
</h3>

<p class="text-gray-600 mb-6 text-sm">
Read helpful travel guides for Kedarnath, Badrinath and Char Dham Yatra with route and budget tips.
</p>

<a href="/blog" class="inline-flex items-center gap-2 text-[#F97316] font-semibold hover:text-[#00A63E] transition">

Read Blog
<i class="fa-solid fa-arrow-right"></i>

</a>

</div>


</div>
</div>

</section>

<!-- Chardham Section Start here -->
<div class="text-center max-w-3xl mx-auto lg:px-4 py-14 space-y-3">
    <span class="script-font text-green-500 mb-5">Popular Packages</span>
    <h1 class="text-3xl font-bold">Char Dham Yatri Packages 2026</h1>
    <p class="">Join Char Dham Yatra 2026 with our unbeatable deal. Visit holy places with all comforts, guides, meals, and travel included. Safe, easy, and affordable. Don't miss this special offer—book your spiritual journey today!</p>
</div>

<div>
    @include('tours.packages', ['tours' => $homeTours])
</div>


<!-- CTC Button Start Here  -->

<section class="max-w-7xl mx-auto px-4 py-16">

<div class="relative rounded-3xl overflow-hidden">

<!-- Background Image -->

<img 
src="{{ asset('My-Images/Uttaranchal-travels-cta.webp') }}"
class="absolute inset-0 w-full h-full object-cover"
/>

<!-- Overlay -->

<div class="absolute inset-0 bg-black/60"></div>


<!-- Content -->

<div class="relative z-10 p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-10 text-white">

<!-- LEFT CONTENT -->

<div class="max-w-xl">

<h2 class="text-3xl md:text-4xl font-bold mb-4">
Plan Your Uttarakhand Journey Today
</h2>

<p class="opacity-90 text-sm md:text-base mb-6">
Book your Char Dham Yatra, Kedarnath trip or adventure activities with our trusted travel services. 
Comfortable hotels, experienced drivers and best prices guaranteed.
</p>

<!-- Buttons -->

<div class="flex gap-4 flex-wrap">

<a href="/contact"
class="bg-[#F97316] hover:bg-[#00A63E] px-6 py-3 text-white rounded-xl flex items-center gap-2 font-semibold transition">

<i class="fa-solid fa-calendar-check"></i>
Book Now

</a>

<a href="/packages"
class="bg-white text-black hover:bg-[#00A63E] hover:text-white px-6 py-3 rounded-xl flex items-center gap-2 font-semibold transition">

<i class="fa-solid fa-map-location-dot"></i>
Explore Tours

</a>

</div>

</div>


<!-- RIGHT SIDE CONTACT BOX -->

<div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 shadow-xl flex flex-col gap-4">

<h3 class="text-lg font-semibold mb-2 text-center">
Quick Contact
</h3>

<!-- Call -->

<a href="tel:+91 7505748554"
class="flex items-center gap-3 bg-[#F97316] hover:bg-[#00A63E] px-5 py-3 rounded-xl transition">

<i class="fa-solid fa-phone text-white"></i>
<span>Call Now</span>

</a>

<!-- WhatsApp -->

<a href="https://wa.me/919456132650"
target="_blank"
class="flex items-center gap-3 bg-[#00A63E] hover:bg-[#F97316] px-5 py-3 rounded-xl transition">

<i class="fab fa-whatsapp text-white"></i>
<span>WhatsApp Chat</span>

</a>

<!-- Email -->

<a href="mailto:uttaranchaltravel.in@gmail.com"
class="flex items-center gap-3 bg-white text-black hover:bg-[#F97316] hover:text-white px-5 py-3 rounded-xl transition">

<i class="fa-solid fa-envelope"></i>
<span>Email Us</span>

</a>

</div>

</div>

</div>

</section>


<!-- Activity Section Start Here -->
<div class="text-center max-w-3xl mx-auto lg:px-4 py-14 space-y-3">

<span class="script-font text-green-500 mb-5">
Popular Activities
</span>

<h2 class="text-3xl font-bold">
Top Adventure & Spiritual Activities in Uttarakhand
</h2>

<p>
Experience the best activities in Uttarakhand including Kedarnath Trek, 
River Rafting in Rishikesh, Camping in the Himalayas, and many more exciting adventures. 
Enjoy spiritual journeys and thrilling experiences surrounded by beautiful mountains.
</p>

</div>

<div>
@include('tours.activities', ['tours' => $activityTours])
</div>

<x-review/>


<!-- FAQ Section Start -->
<section class="bg-[linear-gradient(135deg,#f0fdf4_0%,#fff7ed_100%)] py-16">

<div class="max-w-4xl mx-auto px-4">

<div class="text-center mb-12">

<span class="script-font text-[#00A63E]">FAQs</span>

<h2 class="text-3xl font-bold mt-2">
Frequently Asked Questions
</h2>

<p class="text-gray-600 mt-2">
Find answers to common questions about Char Dham Yatra, tour packages and travel services in Uttarakhand.
</p>

</div>


<div class="space-y-4">


<!-- FAQ 1 -->

<details class="group bg-white rounded-2xl shadow-md p-6 cursor-pointer hover:shadow-xl transition">

<summary class="flex justify-between items-center font-semibold text-lg">

<div class="flex items-center gap-3">

<div class="w-9 h-9 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-circle-question text-[#00A63E]"></i>
</div>

When is the best time for Char Dham Yatra?

</div>

<i class="fa-solid fa-chevron-down text-[#F97316] transition group-open:rotate-180"></i>

</summary>

<p class="text-gray-600 mt-4 text-sm pl-12">
The best time for Char Dham Yatra is from May to June and September to October when the weather is pleasant and roads remain open for travel.
</p>

</details>


<!-- FAQ 2 -->

<details class="group bg-white rounded-2xl shadow-md p-6 cursor-pointer hover:shadow-xl transition">

<summary class="flex justify-between items-center font-semibold text-lg">

<div class="flex items-center gap-3">

<div class="w-9 h-9 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-car text-[#00A63E]"></i>
</div>

Do you provide taxi and vehicle rental services?

</div>

<i class="fa-solid fa-chevron-down text-[#F97316] transition group-open:rotate-180"></i>

</summary>

<p class="text-gray-600 mt-4 text-sm pl-12">
Yes, we provide taxi, tempo traveller and bus rental services for Char Dham Yatra, Kedarnath trip and other Uttarakhand tours.
</p>

</details>


<!-- FAQ 3 -->

<details class="group bg-white rounded-2xl shadow-md p-6 cursor-pointer hover:shadow-xl transition">

<summary class="flex justify-between items-center font-semibold text-lg">

<div class="flex items-center gap-3">

<div class="w-9 h-9 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-hotel text-[#00A63E]"></i>
</div>

Are hotels included in tour packages?

</div>

<i class="fa-solid fa-chevron-down text-[#F97316] transition group-open:rotate-180"></i>

</summary>

<p class="text-gray-600 mt-4 text-sm pl-12">
Most of our Char Dham and Uttarakhand tour packages include hotel accommodation, meals and comfortable transport services.
</p>

</details>


<!-- FAQ 4 -->

<details class="group bg-white rounded-2xl shadow-md p-6 cursor-pointer hover:shadow-xl transition">

<summary class="flex justify-between items-center font-semibold text-lg">

<div class="flex items-center gap-3">

<div class="w-9 h-9 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-route text-[#00A63E]"></i>
</div>

How many days are required for Char Dham Yatra?

</div>

<i class="fa-solid fa-chevron-down text-[#F97316] transition group-open:rotate-180"></i>

</summary>

<p class="text-gray-600 mt-4 text-sm pl-12">
Normally Char Dham Yatra takes around 10–12 days depending on your travel plan, route and sightseeing activities.
</p>

</details>


<!-- FAQ 5 -->

<details class="group bg-white rounded-2xl shadow-md p-6 cursor-pointer hover:shadow-xl transition">

<summary class="flex justify-between items-center font-semibold text-lg">

<div class="flex items-center gap-3">

<div class="w-9 h-9 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-calendar-check text-[#00A63E]"></i>
</div>

How can I book a tour package?

</div>

<i class="fa-solid fa-chevron-down text-[#F97316] transition group-open:rotate-180"></i>

</summary>

<p class="text-gray-600 mt-4 text-sm pl-12">
You can book your Char Dham or Uttarakhand tour package by calling us, contacting on WhatsApp or filling the booking form on our website.
</p>

</details>


<!-- FAQ 6 -->

<details class="group bg-white rounded-2xl shadow-md p-6 cursor-pointer hover:shadow-xl transition">

<summary class="flex justify-between items-center font-semibold text-lg">

<div class="flex items-center gap-3">

<div class="w-9 h-9 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-map-location-dot text-[#00A63E]"></i>
</div>

Which places are included in Uttarakhand tours?

</div>

<i class="fa-solid fa-chevron-down text-[#F97316] transition group-open:rotate-180"></i>

</summary>

<p class="text-gray-600 mt-4 text-sm pl-12">
Our Uttarakhand tour packages include popular destinations like Kedarnath, Badrinath, Gangotri, Yamunotri, Rishikesh, Mussoorie and many more.
</p>

</details>


</div>

</div>

</section>
<!-- FAQ Section End -->
<x-footer />