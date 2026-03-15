<x-navbar />

<section class="relative overflow-hidden pt-12">

<!-- Background Image -->
<div class="absolute inset-0 bg-cover md:bg-center bg-top bg-no-repeat"
style="background-image: url('{{ asset('My-Images/Contact-hero.webp') }}');">
</div>

<!-- Gradient Overlay -->
<div class="absolute inset-0  bg-black/60"></div>

<div class="relative max-w-7xl mx-auto px-6 py-20 text-center">

<span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full mb-5 border border-[#F97316]/30">
✦ Packages — Uttaranchal Travels
</span>

<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Uttarakhand<span class="text-[#F97316]"> Tour Packages</span>
</h1>

<p class="text-gray-300 max-w-lg mx-auto text-base">
Discover the best Char Dham Yatra and Uttarakhand tour packages for a comfortable Himalayan journey.
</p>

</div>

</section>

<div class="max-w-7xl mx-auto lg:px-4 py-10 ">
@include('tours.packages', ['tours' => $tours])
</div>

<x-footer />