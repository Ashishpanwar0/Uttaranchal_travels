<x-navbar />

{{-- HERO --}}
<section class="relative overflow-hidden pt-12">

<!-- Background Image -->
<div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
style="background-image: url('{{ asset('My-Images/About-page.webp') }}');">
</div>

<!-- Gradient Overlay -->
<div class="absolute inset-0  bg-black/60"></div>

<div class="relative max-w-7xl mx-auto px-6 py-20 text-center">

<span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full mb-5 border border-[#F97316]/30">
✦ About Us — Uttaranchal Travels
</span>

<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Your Trusted Travel Partner in <span class="text-[#F97316]">Uttarakhand</span>
        </h1>
</h1>

<p class="text-gray-300 max-w-xl mx-auto text-base">
            From Char Dham Yatra to beautiful hill stations — we make every journey safe, comfortable and memorable.
        </p>

</div>

</section>
{{-- WHO WE ARE --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-14 items-center">

            {{-- Left Image --}}
            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="/My-Images/about-travel.jpg" alt="Uttaranchal Travels"
                        class="w-full h-80 object-cover">
                </div>

                <!-- <div class="absolute -bottom-5 -right-5 bg-[#F97316] text-white rounded-2xl px-6 py-4 shadow-xl text-center">
                    <p class="text-3xl font-extrabold leading-none">10+</p>
                    <p class="text-xs font-semibold mt-1">Years of Experience</p>
                </div> -->
            </div>

            {{-- Right Content --}}
            <div>
                <span class="text-[#F97316] italic font-semibold text-sm">✦ Who We Are</span>
                <h2 class="text-3xl font-extrabold text-gray-900 mt-2 mb-4 leading-snug">
                    Uttaranchal Travels — <span class="text-[#00A63E]">Travel With Trust</span>
                </h2>

                <p class="text-gray-500 text-sm leading-relaxed mb-4">
                    We are a trusted travel company in Uttarakhand providing reliable travel services for Char Dham Yatra, Kedarnath, Badrinath, Gangotri, Yamunotri and many beautiful hill stations.
                </p>

                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    Our team includes experienced drivers, well-maintained vehicles and dedicated support staff who ensure that your journey is smooth, comfortable and completely hassle-free.
                </p>

                <!-- <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['5000+','Happy Travelers'],
                        ['10+','Years Experience'],
                        ['50+','Vehicles in Fleet'],
                        ['100+','Routes Covered'],
                    ] as $stat)
                    <div class="bg-gray-50 rounded-xl p-4 border border-gray-100 text-center">
                        <p class="text-2xl font-extrabold text-[#F97316]">{{ $stat[0] }}</p>
                        <p class="text-xs text-gray-500 mt-1 font-medium">{{ $stat[1] }}</p>
                    </div>
                    @endforeach
                </div> -->

            </div>
        </div>
    </div>
</section>


{{-- OUR MISSION & VISION --}}
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <span class="text-[#F97316] italic font-semibold text-sm">✦ Our Values</span>
            <h2 class="text-3xl font-extrabold text-gray-900 mt-2">Mission, Vision & Values</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['fa-bullseye','Our Mission','bg-[#F97316]','To provide every traveler with a safe, affordable and comfortable travel experience.'],
                ['fa-eye','Our Vision','bg-[#00A63E]','To become the most trusted travel company in Uttarakhand.'],
                ['fa-heart','Our Values','bg-blue-500','Honesty, safety, dedication and excellent service are our core values.'],
            ] as $mv)

            <div class="bg-white rounded-2xl p-8 border border-gray-100 hover:shadow-lg transition text-center">

                <div class="w-14 h-14 {{ $mv[2] }}/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fa-solid {{ $mv[0] }} {{ str_replace('bg-', 'text-', $mv[2]) }} text-xl"></i>
                </div>

                <h3 class="font-extrabold text-gray-900 text-lg mb-3">{{ $mv[1] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $mv[3] }}</p>

            </div>

            @endforeach
        </div>
    </div>
</section>


{{-- WHAT WE OFFER --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <span class="text-[#F97316] italic font-semibold text-sm">✦ Our Services</span>
            <h2 class="text-3xl font-extrabold text-gray-900 mt-2">What We Offer</h2>
            <p class="text-gray-500 mt-2 text-sm max-w-md mx-auto">
                From transportation to accommodation — everything you need for your journey in one place.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

            @foreach([
                ['fa-van-shuttle','Tempo Traveller','9–14 Seater group travel'],
                ['fa-bus','Bus Rental','20–45 Seater yatra buses'],
                ['fa-car','Car Rental','Sedan & SUV for families'],
                ['fa-motorcycle','Bike & Scooty','Adventure rides'],
                ['fa-hotel','Hotel Booking','Budget to luxury stays'],
                ['fa-map-location-dot','Char Dham Yatra','Complete pilgrimage packages'],
                ['fa-mountain-sun','Hill Stations','Mussoorie, Nainital & more'],
                ['fa-phone-volume','24/7 Support','Always here to help you'],
            ] as $s)

            <div class="p-5 rounded-2xl border border-gray-100 hover:border-[#00A63E]/30 hover:shadow-md transition text-center group">

                <div class="w-12 h-12 bg-[#00A63E]/10 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-[#00A63E] transition">
                    <i class="fa-solid {{ $s[0] }} text-[#00A63E] group-hover:text-white transition text-lg"></i>
                </div>

                <h4 class="font-bold text-gray-800 text-sm mb-1">{{ $s[1] }}</h4>
                <p class="text-gray-400 text-xs">{{ $s[2] }}</p>

            </div>

            @endforeach
        </div>
    </div>
</section>


{{-- CTA --}}
<section class="bg-gray-900 py-14">

<div class="max-w-3xl mx-auto px-6 text-center">

<h2 class="text-2xl md:text-3xl font-extrabold text-white mb-3">
Ready for Your Next <span class="text-[#F97316]">Uttarakhand Journey?</span>
</h2>

<p class="text-gray-400 text-sm mb-8">
Contact us today and start planning your trip to Char Dham, Kedarnath, Badrinath or any destination in Uttarakhand.
</p>

<div class="flex flex-col sm:flex-row gap-4 justify-center">

<a href="/contact-us"
class="bg-[#F97316] hover:bg-[#00A63E] text-white font-bold px-8 py-3 rounded-full transition text-sm">
<i class="fa-solid fa-envelope mr-2"></i> Contact Us
</a>

<a href="https://wa.me/919548039959"
class="bg-white/10 hover:bg-[#00A63E] text-white font-bold px-8 py-3 rounded-full transition text-sm border border-white/20">
<i class="fa-brands fa-whatsapp mr-2"></i> WhatsApp Now
</a>

</div>

</div>

</section>

<x-footer />