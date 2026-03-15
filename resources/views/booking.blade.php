@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden pt-12">

<div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
style="background-image: url('{{ asset('My-Images/Contact-hero.webp') }}');">
</div>

<div class="absolute inset-0 bg-black/60"></div>

<div class="relative max-w-7xl mx-auto px-6 py-20 text-center">

<span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full mb-5 border border-[#F97316]/30">
✦ Book Your Plan
</span>

<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Get In <span class="text-[#F97316]">Touch With Us</span>
</h1>

</div>
</section>



{{-- CONTACT + FORM SECTION --}}
<section class="max-w-7xl mx-auto px-4 py-20">

<div class="grid md:grid-cols-2 gap-12 items-start">


{{-- FORM (Mobile me upar) --}}
<div class="order-1 md:order-2">

<!-- <h2 class="text-2xl font-bold mb-6 text-center">
Book Your Tour
</h2> -->

@include('forms.tour-booking')

</div>



{{-- CONTACT DETAILS --}}
<div class="order-2 md:order-1 space-y-8 bg-white p-8 rounded-2xl shadow-lg">

<h2 class="text-3xl font-bold">
Contact Details
</h2>

<p class="text-gray-600">
Have questions about Char Dham Yatra or Uttarakhand tour packages? 
Contact our travel experts and plan your journey easily.
</p>


{{-- PHONE --}}
<div class="flex items-start gap-4">

<div class="w-12 h-12 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-phone text-[#00A63E]"></i>
</div>

<div>
<h3 class="font-semibold">Call Us</h3>
<p class="text-gray-600">+91 7505748554</p>
</div>

</div>



{{-- WHATSAPP --}}
<div class="flex items-start gap-4">

<div class="w-12 h-12 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-brands fa-whatsapp text-[#00A63E]"></i>
</div>

<div>
<h3 class="font-semibold">WhatsApp</h3>
<p class="text-gray-600">+91 9456132650</p>
</div>

</div>



{{-- EMAIL --}}
<div class="flex items-start gap-4">

<div class="w-12 h-12 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-envelope text-[#00A63E]"></i>
</div>

<div>
<h3 class="font-semibold">Email</h3>
<p class="text-gray-600">uttaranchaltravel.in@gmail.com</p>
</div>

</div>



{{-- LOCATION --}}
<div class="flex items-start gap-4">

<div class="w-12 h-12 flex items-center justify-center rounded-full bg-green-100">
<i class="fa-solid fa-location-dot text-[#00A63E]"></i>
</div>

<div>
<h3 class="font-semibold">Office Address</h3>
<p class="text-gray-600">
Uttarakhand Travels, Haridwar, Uttarakhand, India
</p>
</div>

</div>


{{-- CTA BUTTON --}}
<a href="https://wa.me/919456132650"
target="_blank"
class="inline-flex items-center gap-2 bg-[#F97316] hover:bg-[#00A63E] text-white px-6 py-3 rounded-xl font-semibold transition">

<i class="fa-brands fa-whatsapp"></i>
Chat on WhatsApp

</a>
</div>

</div>

</section>

@endsection