@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto py-12 px-4 grid lg:grid-cols-3 gap-10">

<!-- LEFT CONTENT -->
<div class="lg:col-span-2">

<!-- Back Button -->
 <a href="{{ url()->previous() }}"
class="inline-flex items-center gap-2 mb-6 text-sm font-semibold text-[#00A63E] hover:text-[#F97316] transition">

<i class="fa-solid fa-arrow-left"></i>
Back to Tours

</a>

<!-- TITLE -->
<h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">
{{ $tour['title'] }}
</h1>

<!-- IMAGE -->
<div class="rounded-xl overflow-hidden shadow-lg mb-10">
<img src="{{ asset('Tour-Image/'.$tour['image']) }}" class="w-full h-[350px] object-cover">
</div>

<!-- ABOUT -->
<div class="mb-10">
<h2 class="text-2xl font-bold flex items-center gap-2 mb-3">
<i class="fa-solid fa-circle-info text-[#00A63E]"></i>
About This {{ $tour['title'] }}
</h2>

<p class="text-gray-600 leading-relaxed">
{{ $tour['about'] }}
</p>
</div>


<!-- HIGHLIGHTS -->
<div class="mb-10">

<h2 class="text-2xl font-bold flex items-center gap-2 mb-4">
<i class="fa-solid fa-star text-[#00A63E]"></i>
Package Highlights
</h2>

<div class="grid md:grid-cols-2 gap-3">

@foreach($tour['highlights'] as $item)

<div class="flex items-start gap-2 bg-green-50 p-3 rounded-lg border border-green-100">
<i class="fa-solid fa-circle-check text-[#00A63E] mt-1"></i>
<span class="text-gray-700 text-sm">{{ $item }}</span>
</div>

@endforeach

</div>

</div>


<!-- ITINERARY -->
<div class="mb-10">

<h2 class="text-2xl font-bold flex items-center gap-2 mb-5">
<i class="fa-solid fa-route text-[#00A63E]"></i>
Tour Itinerary
</h2>

<div class="space-y-6">

@foreach($tour['itinerary'] as $day)

<div class="bg-white border border-gray-100 rounded-xl p-5 shadow-sm">

<h3 class="font-semibold text-lg mb-2 text-[#00A63E]">
<i class="fa-solid fa-calendar-day mr-2"></i>
{{ $day['day'] }} – {{ $day['title'] }}
</h3>

<p class="text-gray-600 text-sm leading-relaxed">
{{ $day['desc'] }}
</p>

</div>

@endforeach

</div>

</div>


<!-- INCLUSIONS -->
<div class="mb-10">

<h2 class="text-2xl font-bold flex items-center gap-2 mb-4">
<i class="fa-solid fa-circle-check text-[#00A63E]"></i>
Inclusions
</h2>

<div class="grid md:grid-cols-2 gap-3">

@foreach($tour['inclusions'] as $item)

<div class="flex items-center gap-2 text-gray-700 text-sm">
<i class="fa-solid fa-check text-[#00A63E]"></i>
{{ $item }}
</div>

@endforeach

</div>

</div>


<!-- EXCLUSIONS -->
<div class="mb-10">

<h2 class="text-2xl font-bold flex items-center gap-2 mb-4">
<i class="fa-solid fa-circle-xmark text-red-500"></i>
Exclusions
</h2>

<div class="grid md:grid-cols-2 gap-3">

@foreach($tour['exclusions'] as $item)

<div class="flex items-center gap-2 text-gray-700 text-sm">
<i class="fa-solid fa-xmark text-red-500"></i>
{{ $item }}
</div>

@endforeach

</div>

</div>


<!-- REQUIREMENTS -->
<div class="mb-10">

<h2 class="text-2xl font-bold flex items-center gap-2 mb-4">
<i class="fa-solid fa-bag-shopping text-[#00A63E]"></i>
Things to Know / Requirements
</h2>

<div class="grid md:grid-cols-2 gap-3">

@foreach($tour['requirements'] as $item)

<div class="flex items-center gap-2 text-gray-700 text-sm">
<i class="fa-solid fa-circle-check text-[#00A63E]"></i>
{{ $item }}
</div>

@endforeach

</div>

</div>


<!-- TERMS -->
<div class="mb-6">

<h2 class="text-2xl font-bold flex items-center gap-2 mb-4">
<i class="fa-solid fa-file-contract text-[#00A63E]"></i>
Terms & Conditions
</h2>

<div class="space-y-2">

@foreach($tour['terms'] as $item)

<div class="flex items-start gap-2 text-gray-700 text-sm">
<i class="fa-solid fa-circle-check text-[#00A63E] mt-1"></i>
<span>{{ $item }}</span>
</div>

@endforeach

</div>

</div>

</div>


<!-- RIGHT SIDE (UNCHANGED) -->
<div class="lg:col-span-1 lg:mt-16">

<div class="sticky top-24">

@include('forms.tour-booking')

</div>

</div>

</div>

@endsection