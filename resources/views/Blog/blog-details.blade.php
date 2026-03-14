@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-4 py-12 grid lg:grid-cols-3 gap-10">

<!-- LEFT BLOG CONTENT -->
<div class="lg:col-span-2">
<a href="{{ url()->previous() }}"
class="inline-flex items-center gap-2 mb-6 text-sm font-semibold text-[#00A63E] hover:text-[#F97316] transition">

<i class="fa-solid fa-arrow-left"></i>
Back to Tours

</a>
<!-- TITLE -->
<h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 leading-snug">
{{ $blog['title'] }}
</h1>


<!-- META -->
<div class="flex items-center gap-6 text-sm text-gray-500 mb-6">

<span class="flex items-center gap-1">
<i class="fa-solid fa-user text-[#00A63E]"></i>
{{ $blog['author'] }}
</span>

<span class="flex items-center gap-1">
<i class="fa-solid fa-calendar text-[#00A63E]"></i>
{{ $blog['date'] }}
</span>

<span class="flex items-center gap-1">
<i class="fa-solid fa-eye text-[#00A63E]"></i>
{{ $blog['views'] }} Views
</span>

</div>


<!-- HERO IMAGE -->
<div class="rounded-xl overflow-hidden shadow-lg mb-10">

<img 
src="{{ asset('blog-images/'.$blog['image']) }}"
class="w-full h-[380px] object-cover">

</div>


<!-- BLOG CONTENT -->
<div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 md:p-10">

<div class="blog-content">

{!! $blog['content'] !!}

</div>

</div>


<!-- CTA -->
<div class="mt-10 bg-[#00A63E] rounded-2xl p-8 text-white text-center">

<h3 class="text-2xl font-bold mb-3">
Plan Your Uttarakhand Journey
</h3>

<p class="text-sm mb-6">
Book Char Dham Yatra, Kedarnath tour, Badrinath trip or Uttarakhand travel packages with our trusted travel services.
</p>

<a href="/booking"
class="inline-flex items-center gap-2 bg-[#F97316] hover:bg-white hover:text-[#F97316] text-white font-semibold px-6 py-3 rounded-lg transition">

<i class="fa-solid fa-paper-plane"></i>
Book Your Tour

</a>

</div>

</div>



<!-- RIGHT SIDE BOOKING FORM -->
<div class="lg:col-span-1 lg:mt-16">

<div class="sticky top-24">

@include('forms.tour-booking')

</div>

</div>


</div>


<style>

/* BLOG CONTENT STYLING */

.blog-content h2{
font-size:28px;
font-weight:700;
margin-top:30px;
margin-bottom:15px;
color:#111827;
border-left:4px solid #00A63E;
padding-left:10px;
}

.blog-content p{
color:#4B5563;
line-height:1.8;
margin-bottom:16px;
font-size:16px;
}

.blog-content ul{
margin:15px 0;
padding-left:0;
list-style:none;
}

.blog-content ul li{
position:relative;
padding-left:28px;
margin-bottom:10px;
color:#374151;
font-size:15px;
}

.blog-content ul li:before{
content:"✔";
position:absolute;
left:0;
top:0;
color:#00A63E;
font-weight:bold;
}

.blog-content h3{
font-size:22px;
font-weight:700;
margin-top:25px;
margin-bottom:10px;
}

</style>

@endsection