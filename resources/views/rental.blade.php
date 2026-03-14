<x-navbar />

{{-- HERO --}}
<section class="relative overflow-hidden bg-gray-900 flex items-center">

<!-- Background Image -->
<div class="absolute inset-0 bg-cover md:bg-cover bg-center md:bg-center bg-no-repeat"
style="background-image: url('{{ asset('My-Images/Rent-page.webp') }}');">
</div>

<!-- Gradient Overlay -->
<div class="absolute inset-0 bg-black/60"></div>

<div class="relative max-w-7xl mx-auto px-6 py-16 text-center">

<span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full mb-5 border border-[#F97316]/30">
✦ Rental Services — Uttaranchal Travels
</span>

<h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-5">
Rent Vehicles for Your <span class="text-[#F97316]">Uttarakhand Journey</span>
</h1>

<p class="text-gray-300 max-w-xl mx-auto text-sm md:text-base mb-8">
Car, Bus, Tempo Traveller, Bike & Scooty rental services available for Char Dham Yatra,
Kedarnath trip and all Uttarakhand travel routes.
</p>

<a href="#vehicles"
class="inline-block bg-[#F97316] hover:bg-[#00A63E] text-white font-bold px-8 py-3 rounded-full transition shadow-lg">
Explore Vehicles
</a>

</div>

</section>


{{-- WHY CHOOSE US --}}
<section class="bg-white py-14">

<div class="max-w-7xl mx-auto px-6">

<div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

@foreach([
['fa-shield-halved','Safe Travel','All vehicles verified'],
['fa-indian-rupee-sign','Best Price','Affordable pricing'],
['fa-clock','24/7 Support','Always available'],
['fa-map-location-dot','All Routes','Across Uttarakhand'],
] as $f)

<div class="p-5 rounded-2xl border border-gray-100 hover:shadow-md transition">

<div class="w-12 h-12 bg-[#00A63E]/10 rounded-full flex items-center justify-center mx-auto mb-3">
<i class="fa-solid {{ $f[0] }} text-[#00A63E] text-lg"></i>
</div>

<h4 class="font-bold text-gray-800 text-sm mb-1">{{ $f[1] }}</h4>

<p class="text-gray-500 text-xs">{{ $f[2] }}</p>

</div>

@endforeach

</div>

</div>

</section>



{{-- VEHICLES --}}
<section id="vehicles" class="bg-gray-50 py-20">
<div class="max-w-7xl mx-auto px-6">

<div class="text-center mb-12">
<span class="text-[#F97316] italic font-semibold text-sm">✦ Our Fleet</span>
<h2 class="text-3xl font-extrabold text-gray-900 mt-2">Vehicles Available for Rent</h2>
<p class="text-gray-500 mt-2 text-sm max-w-md mx-auto">
Choose from our well-maintained fleet — perfect for every group size and terrain.
</p>
</div>

@php
$vehicles = [

[
'icon' => 'fa-motorcycle',
'name' => 'Scooty Rental',
'seats' => '1–2 Person',
'badge' => 'Budget Friendly',
'badge_color' => 'bg-purple-500',
'features' => ['Easy Ride', 'Fuel Efficient', 'City & Hills', 'Comfortable Travel'],
],
[
'icon' => 'fa-motorcycle',
'name' => 'Bike Rental',
'seats' => '1–2 Person',
'badge' => 'Adventure Ride',
'badge_color' => 'bg-blue-500',
'features' => ['Helmet Included', 'Mountain Ready', 'Petrol Efficient', 'Easy Travel'],
],
[
'icon' => 'fa-car',
'name' => 'Car Rental',
'seats' => 'Sedan / SUV',
'badge' => 'Most Booked',
'badge_color' => 'bg-[#F97316]',
'features' => ['Local & Outstation', 'Comfortable Ride', 'Professional Driver', 'Perfect for Family'],
],

[
'icon' => 'fa-van-shuttle',
'name' => 'Tempo Traveller',
'seats' => '9–14 Seater',
'badge' => 'Most Popular',
'badge_color' => 'bg-[#F97316]',
'features' => ['AC / Non-AC', 'Push-back Seats', 'Music System', 'Ideal for Groups'],
],

[
'icon' => 'fa-bus',
'name' => 'Bus Rental',
'seats' => '20–45 Seater',
'badge' => 'Best for Yatra',
'badge_color' => 'bg-[#00A63E]',
'features' => ['AC / Non-AC', 'Luggage Space', 'Experienced Driver', 'Long Route Ready'],
],
];
@endphp


<div class="grid md:grid-cols-3 gap-8">

@foreach($vehicles as $v)

<div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group border border-gray-100">

{{-- Top --}}
<div class="bg-gradient-to-br from-gray-900 to-gray-800 p-8 text-center relative">

<span class="absolute top-4 right-4 {{ $v['badge_color'] }} text-white text-xs font-bold px-3 py-1 rounded-full">
{{ $v['badge'] }}
</span>

<div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
<i class="fa-solid {{ $v['icon'] }} text-[#00A63E] text-3xl"></i>
</div>

<h3 class="text-white font-extrabold text-xl">{{ $v['name'] }}</h3>
<p class="text-gray-400 text-sm mt-1">{{ $v['seats'] }}</p>

</div>


{{-- Body --}}
<div class="p-6">

<ul class="space-y-2 mb-6">

@foreach($v['features'] as $feat)

<li class="flex items-center gap-2 text-sm text-gray-600">
<i class="fa-solid fa-circle-check text-[#00A63E] text-xs"></i>
{{ $feat }}
</li>

@endforeach

</ul>


<a href="#booking"
class="block text-center bg-[#F97316] hover:bg-[#00A63E] text-white font-bold py-2.5 rounded-xl transition-all duration-300 text-sm">
Book Now
</a>

</div>

</div>

@endforeach

</div>

</div>
</section>



{{-- BOOKING FORM --}}
<section id="booking" class="py-20 bg-white">

<div class="max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-2 gap-12 items-start">

{{-- LEFT SIDE FORM --}}
<div>
@include('forms.transport-booking')

</div>


{{-- RIGHT SIDE DETAILS --}}
<div class="bg-gray-50 p-8 rounded-2xl border border-gray-100">

<h3 class="text-2xl font-bold text-gray-900 mb-6">
Why Book With <span class="text-[#00A63E]">Uttaranchal Travels</span>
</h3>

<div class="space-y-5">

<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-[#00A63E]/10 flex items-center justify-center">
<i class="fa-solid fa-car text-[#00A63E]"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Wide Range of Vehicles</h4>
<p class="text-sm text-gray-500">Cars, Tempo Travellers, Buses, Bikes and Scooty available for every travel need.</p>
</div>
</div>


<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-[#00A63E]/10 flex items-center justify-center">
<i class="fa-solid fa-user-shield text-[#00A63E]"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">Experienced Drivers</h4>
<p class="text-sm text-gray-500">Professional drivers with excellent knowledge of Uttarakhand routes.</p>
</div>
</div>


<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-[#00A63E]/10 flex items-center justify-center">
<i class="fa-solid fa-clock text-[#00A63E]"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">24/7 Support</h4>
<p class="text-sm text-gray-500">Our team is available anytime to assist you during your journey.</p>
</div>
</div>


<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-[#00A63E]/10 flex items-center justify-center">
<i class="fa-solid fa-map-location-dot text-[#00A63E]"></i>
</div>
<div>
<h4 class="font-semibold text-gray-800">All Uttarakhand Routes</h4>
<p class="text-sm text-gray-500">Char Dham Yatra, Kedarnath, Badrinath, Gangotri, Yamunotri and hill stations.</p>
</div>
</div>

</div>


{{-- Contact Box --}}
<div class="mt-8 p-5 bg-[#00A63E] text-white rounded-xl text-center">

<p class="text-sm mb-2">Need instant booking?</p>

<a href="https://wa.me/919548039959"
class="inline-flex items-center gap-2 font-semibold">

<i class="fa-brands fa-whatsapp"></i>
Chat on WhatsApp

</a>

</div>

</div>

</div>

</div>

</section>


<x-footer />