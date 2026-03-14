<div class="max-w-7xl mx-auto px-4 py-8">
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

@foreach($tours as $slug => $tour)

<div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl hover:-translate-y-2 transition duration-300 group">

<!-- Image -->
<div class="overflow-hidden">

<img 
src="{{ asset('Tour-Image/'.$tour['image']) }}"
alt="{{ $tour['title'] }}"
class="w-full h-56 object-cover group-hover:scale-110 transition duration-500"
>

</div>

<!-- Content -->
<div class="p-5">

<!-- Title -->
<h3 class="text-lg font-semibold text-gray-800 mb-3">
{{ $tour['title'] }}
</h3>

<!-- Tags -->
<div class="flex items-center justify-between mb-3">

<!-- Tag -->
<span class="border border-[#00A63E] text-[#00A63E] px-2 py-1 rounded-full text-xs">
yatra package
</span>

<!-- Features -->
<div class="flex items-center gap-4 text-gray-600 text-sm">

<span class="flex items-center gap-1">
<i class="fa-solid fa-hotel text-[#00A63E]"></i>
Hotel
</span>

<span class="flex items-center gap-1">
<i class="fa-solid fa-utensils text-[#00A63E]"></i>
Food
</span>

<span class="flex items-center gap-1">
<i class="fa-solid fa-car text-[#00A63E]"></i>
Taxi
</span>

</div>

</div>
<!-- Description -->
<p class="text-gray-500 text-sm mb-4 line-clamp-2">
{{ $tour['short_desc'] }}
</p>

<!-- Info -->
<div class="flex items-center justify-between text-sm text-gray-600 mb-4">

<span class="flex items-center gap-1">
<i class="fa-regular fa-clock text-[#00A63E]"></i>
{{ $tour['duration'] }}
</span>

<span class="flex items-center gap-1">
<i class="fa-solid fa-location-dot text-[#00A63E]"></i>
{{ $tour['route'] }}
</span>

</div>

<!-- Price + Button -->
<!-- Price + Button -->
<div class="flex items-center justify-between">

<div>

<del class="text-gray-400 text-sm">
₹{{ $tour['price'] }}
</del>

<p class="text-2xl font-bold text-[#00A63E]">
₹{{ $tour['discount_price'] }}
</p>

</div>

<a href="/tour/{{ $slug }}"
class="bg-[#F97316] text-white px-4 py-2 rounded-lg hover:bg-[#00A63E] transition">

See Details

</a>

</div>

</div>

</div>

@endforeach

</div>

</div>