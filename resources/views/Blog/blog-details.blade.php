<head>

<title>{{ $blog['title'] }}</title>

<meta name="description" content="{{ $blog['short_desc'] }}">

</head>


<!-- HERO IMAGE -->

<div class="relative h-[450px]">

<img 
src="{{ asset('blog-images/'.$blog['image']) }}"
class="w-full h-full object-cover"
>

<div class="absolute inset-0 bg-black/50 flex items-center justify-center text-center">

<div class="text-white max-w-3xl px-4">

<h1 class="text-4xl font-bold mb-4">
{{ $blog['title'] }}
</h1>

<p class="text-lg">
{{ $blog['short_desc'] }}
</p>

<p class="mt-4 text-sm">

By {{ $blog['author'] }} • {{ $blog['date'] }}

</p>

</div>

</div>

</div>



<!-- BLOG CONTENT -->

<div class="max-w-4xl mx-auto px-4 py-12">

<div class="prose max-w-none">

{!! $blog['content'] !!}

</div>

</div>