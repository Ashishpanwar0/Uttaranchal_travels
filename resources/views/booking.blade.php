@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden">

<!-- Background Image -->
<div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
style="background-image: url('{{ asset('My-Images/Contact-hero.webp') }}');">
</div>

<!-- Gradient Overlay -->
<div class="absolute inset-0  bg-black/60"></div>

<div class="relative max-w-7xl mx-auto px-6 py-20 text-center">

<span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full mb-5 border border-[#F97316]/30">
✦ Book Your Plan
</span>

<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Get In <span class="text-[#F97316]">Touch With Us</span>
</h1>
</div>

</section>

<div class="max-w-5xl mx-auto py-20 text-center">

<h1 class="text-3xl font-bold mb-6">
Book Your Tour
</h1>

@include('forms.tour-booking')

</div>

@endsection