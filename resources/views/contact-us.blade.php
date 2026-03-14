<x-navbar />

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
✦ Contact Us — Uttaranchal Travels
</span>

<h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">
Get In <span class="text-[#F97316]">Touch With Us</span>
</h1>

<p class="text-gray-300 max-w-lg mx-auto text-base">
Char Dham Yatra, vehicle rental, hotel booking — kisi bhi sawaal ke liye hum available hain 24/7.
</p>

</div>

</section>

{{-- CONTACT INFO + FORM --}}
<section class="bg-gray-50 py-20">

<div class="text-center mb-10">
<span class="text-[#F97316] italic font-semibold text-sm">✦ Contact Details</span>
<h2 class="text-2xl font-extrabold text-gray-900 mt-2 mb-2">We're Always Here to Help</h2>
<p class="text-gray-500 text-sm">Apni travel query, vehicle booking ya hotel booking ke liye seedha hamse contact karein.</p>
</div>

<div class="max-w-7xl mx-auto px-6 lg:mt-20">
<div class="grid lg:grid-cols-2 gap-12 items-start">

{{-- LEFT: Info --}}
<div class="space-y-6">

@foreach([
['fa-solid fa-phone','Call Us','+91 95480 39959','tel:+919548039959'],
['fa-brands fa-whatsapp','WhatsApp','+91 95480 39959','https://wa.me/919548039959'],
['fa-solid fa-envelope','Email Us','info@uttaranchaltravels.com','mailto:info@uttaranchaltravels.com'],
['fa-solid fa-location-dot','Our Office','Rishikesh, Uttarakhand, India','#'],
] as $c)

<a href="{{ $c[3] }}" class="flex items-start gap-4 p-5 bg-white rounded-2xl border border-gray-100 hover:shadow-md hover:border-[#00A63E]/30 transition group">

<div class="w-12 h-12 rounded-full bg-[#00A63E]/10 flex items-center justify-center  group-hover:bg-[#00A63E] transition">
<i class="{{ $c[0] }} text-[#00A63E] group-hover:text-white transition"></i>
</div>

<div>
<p class="text-xs text-gray-400 font-semibold uppercase tracking-wide">{{ $c[1] }}</p>
<p class="text-gray-800 font-semibold text-sm mt-0.5">{{ $c[2] }}</p>
</div>

</a>

@endforeach

</div>

{{-- RIGHT: Form --}}
<div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">

<h3 class="text-xl font-extrabold text-gray-900 mb-6">Send Us a Message</h3>

<form action="{{ route('contact.message') }}" method="POST">
@csrf

<div class="grid sm:grid-cols-2 gap-4">

<div>
<label class="text-xs font-semibold text-gray-600 mb-1 block">Your Name</label>
<input type="text" name="name" required placeholder="Ashish Panwar"
class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#00A63E] transition">
</div>

<div>
<label class="text-xs font-semibold text-gray-600 mb-1 block">Phone Number</label>
<input type="tel" name="phone" required placeholder="+91 XXXXX XXXXX"
class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#00A63E] transition">
</div>

</div>

<div>
<label class="text-xs font-semibold text-gray-600 mb-1 block">Email Address</label>
<input type="email" name="email" placeholder="you@email.com"
class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#00A63E] transition">
</div>

<div>
<label class="text-xs font-semibold text-gray-600 mb-1 block">Service Required</label>
<select name="service" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-gray-600 focus:outline-none focus:border-[#00A63E] transition">
<option value="">-- Select Service --</option>
<option>Car Rental</option>
<option>Tempo Traveller</option>
<option>Bus Rental</option>
<option>Bike / Scooty</option>
<option>Char Dham Yatra Package</option>
<option>Hotel Booking</option>
<option>Other</option>
</select>
</div>

<div>
<label class="text-xs font-semibold text-gray-600 mb-1 block">Your Message</label>
<textarea name="message" rows="4" placeholder="Apna sawaal ya booking detail yahan likhein..."
class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#00A63E] transition resize-none"></textarea>
</div>

<button type="submit"
class="w-full bg-[#F97316] hover:bg-[#00A63E] text-white font-bold py-3 rounded-xl transition-all duration-300 text-sm">
<i class="fa-solid fa-paper-plane mr-2"></i> Send Message
</button>

</form>

</div>

</div>
</div>
</section>

{{-- MAP --}}
<section class="bg-white py-10">
<div class="max-w-7xl mx-auto px-6">
<div class="rounded-2xl overflow-hidden border border-gray-100 shadow-sm h-72">
<iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55871.99!2d78.2676!3d30.0869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929c356c888af%3A0x8234f4e2342a5c16!2sRishikesh%2C+Uttarakhand!5e0!3m2!1sen!2sin!4v1"
width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
</iframe>
</div>
</div>
</section>

<x-footer />