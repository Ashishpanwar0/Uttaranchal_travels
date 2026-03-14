<x-navbar />
{{-- HERO --}}
<section class="relative bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to from-black via-gray-900 to-[#00A63E]/40"></div>
    <div class="relative max-w-7xl mx-auto px-6 py-20 text-center">
        <span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full mb-5 border border-[#F97316]/30">
            ✦ About Us — Uttaranchal Travels
        </span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
            Your Trusted Travel Partner in <span class="text-[#F97316]">Uttarakhand</span>
        </h1>
        <p class="text-gray-300 max-w-xl mx-auto text-base">
            From Char Dham Yatra to beautiful hill stations — we make every journey safe, comfortable and memorable.
        </p>
    </div>
    <div class="absolute -bottom-10 -left-10 w-48 h-48 rounded-full bg-[#00A63E]/10 blur-2xl"></div>
    <div class="absolute -top-10 -right-10 w-56 h-56 rounded-full bg-[#F97316]/10 blur-2xl"></div>
</section>
@include('blog.blog', ['blogs' => config('blogs')])

<x-footer />