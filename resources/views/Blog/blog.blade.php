<div class="max-w-7xl mx-auto px-4 py-10">
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

@foreach($blogs as $slug => $blog)

<div class="bg-white rounded-xl shadow hover:shadow-2xl transition overflow-hidden">

<!-- Image -->

<div class="relative">

<img 
src="{{ asset('blog-images/'.$blog['image']) }}"
alt="{{ $blog['title'] }}"
class="w-full h-56 object-cover"
>

<!-- Category -->

<span class="absolute top-3 left-3 bg-[#00A63E] text-white text-xs px-3 py-1 rounded-full">

{{ $blog['category'] }}

</span>

</div>

<!-- Content -->

<div class="p-5">

<h2 class="text-lg font-semibold mb-2">
{{ $blog['title'] }}
</h2>

<p class="text-gray-500 text-sm mb-4">
{{ $blog['short_desc'] }}
</p>

<!-- Meta -->

<div class="flex items-center justify-between text-xs text-gray-500 mb-8">

<span>{{ $blog['author'] }}</span>

<span>{{ $blog['date'] }}</span>

<span>{{ $blog['views'] }} Views</span>

</div>

<a 
href="/blog/{{ $slug }}"
class="text-white font-semibold hover:bg-[#00A63E] bg-[#F97316] px-3 py-3 rounded-xl"
>

Read Full Blog →

</a>

</div>

</div>

@endforeach

</div>

</div>