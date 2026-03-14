<div class="max-w-7xl mx-auto px-4 py-8">

<div class="swiper activitySwiper relative">

<div class="swiper-wrapper">

@foreach($tours as $slug => $tour)

<div class="swiper-slide">

<a href="/tour/{{ $slug }}" class="relative block rounded-3xl overflow-hidden shadow-lg group">

<!-- Image -->

<img
src="{{ asset('Tour-Image/'.$tour['image']) }}"
class="w-full h-[500px] object-cover object-center transition duration-700 group-hover:scale-110"
/>

<!-- Overlay -->

<div class="absolute inset-0 bg-gradient-to from-black/80 via-black/30 to-transparent"></div>

<!-- Badge -->

<div class="absolute top-4 left-4">

<span class="flex items-center gap-2 bg-white px-3 py-1 rounded-full text-xs font-semibold shadow">

<i class="fa-solid fa-mountain text-[#00A63E]"></i>
Adventure

</span>

</div>

<!-- Content -->

<div class="absolute bottom-6 left-6 right-6 text-white">

<h3 class="text-2xl font-bold mb-2">
{{ $tour['title'] }}
</h3>

<p class="text-sm opacity-90">
{{ $tour['short_desc'] }}
</p>

<div class="flex items-center gap-4 mt-3 text-sm text-[#00A63E]">

<span class="flex items-center gap-1">
<i class="fa-solid fa-clock"></i>
{{ $tour['duration'] }}
</span>

<span class="flex items-center gap-1">
<i class="fa-solid fa-location-dot"></i>
Uttarakhand
</span>

</div>

<div class="mt-4">

<span class="inline-flex items-center gap-2 hover:bg-[#00A63E] px-4 py-2 rounded-lg text-sm font-semibold bg-[#F97316] transition">

<i class="fa-solid fa-arrow-right"></i>
View Details

</span>

</div>

</div>

</a>

</div>

@endforeach

</div>

<!-- Pagination -->

<div class="swiper-pagination"></div>

</div>

</div>