<section class="relative flex items-center min-h-[80vh] pt-12">

<!-- Background Image -->
<div class="absolute inset-0">
<img src="{{ asset('My-Images/hero-uttarakhand.jpg') }}"
alt="Uttarakhand travel transport taxi rental tours"
class="w-full h-full object-cover">

<div class="absolute inset-0 bg-black/60"></div>
</div>


<div class="relative max-w-7xl mx-auto px-6 py-20 w-full">

<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

<!-- LEFT CONTENT -->
<div class="text-white text-center lg:text-left">

<h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight heading-font">
<span class="text-[#F97316]">Explore</span> Uttarakhand <br>
Travel, Taxi & Tour Services
</h1>

<p class="text-gray-200 mb-6 text-base md:text-lg content-font">
Discover Uttarakhand with trusted taxi services, transport rental,
trekking trips, hill station tours and adventure travel packages.
Plan your perfect Himalayan journey with Uttaranchal Travels.
</p>

<div class="flex flex-wrap justify-center lg:justify-start gap-6 mb-8 text-sm content-font">

<span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full border border-[#F97316]/30">
<i class="fa-solid fa-taxi text-green-400"></i>
Taxi Service
</span>

<span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full border border-[#F97316]/30">
<i class="fa-solid fa-map-location-dot text-green-400"></i>
Tour Packages
</span>

<span class="inline-block bg-[#F97316]/20 text-[#F97316] text-sm font-semibold px-4 py-1.5 rounded-full border border-[#F97316]/30">
<i class="fa-solid fa-person-hiking text-green-400"></i>
Trekking
</span>

</div>


<div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">

<a href="/packages"
class="bg-orange-500 hover:bg-[#00A63E] px-6 py-3 rounded-lg font-semibold transition flex items-center justify-center gap-2">

<i class="fa-solid fa-earth-asia"></i>
Explore Tours

</a>


<a href="/rental"
class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-black transition flex items-center justify-center gap-2">

<i class="fa-solid fa-car"></i>
Taxi Service

</a>

</div>

</div>


<!-- RIGHT FORM -->

<div class="w-full max-w-md mx-auto">

<div class="border border-white/20 rounded-xl p-6 lg:ml-40 lg:w-[330px] bg-white/10 backdrop-blur">

<h3 class="text-xl font-semibold mb-4 text-center text-green-400 flex items-center justify-center gap-2">

<i class="fa-solid fa-paper-plane"></i>
Quick Enquiry

</h3>

@include('forms.quick-enquiry')

</div>

</div>

</div>

</div>

</section>  