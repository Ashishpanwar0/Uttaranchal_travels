<div class="max-w-md mx-auto bg-white border border-gray-100 shadow-xl rounded-2xl p-6">

<h3 class="text-xl font-bold text-gray-800 mb-5 flex items-center gap-2">
<i class="fa-solid fa-paper-plane text-[#00A63E]"></i>
Book This Tour
</h3>

<form action="{{ route('tour.booking') }}" method="POST" class="space-y-4">

@csrf

<!-- Name -->
<div class="relative">
<i class="fa-solid fa-user absolute left-3 top-3 text-[#00A63E]"></i>
<input type="text" name="name" placeholder="Your Name"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Email -->
<div class="relative">
<i class="fa-solid fa-envelope absolute left-3 top-3 text-[#00A63E]"></i>
<input type="email" name="email" placeholder="Email Address"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Phone -->
<div class="relative">
<i class="fa-solid fa-phone absolute left-3 top-3 text-[#00A63E]"></i>
<input type="text" name="phone" placeholder="Phone Number"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Tour Name -->
<div class="relative">
<i class="fa-solid fa-map-location-dot absolute left-3 top-3 text-[#00A63E]"></i>
<input type="text" name="tour_name" placeholder="Tour Name"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Date -->
<div class="relative">
<i class="fa-solid fa-calendar-days absolute left-3 top-3 text-[#00A63E]"></i>
<input type="date" name="travel_date"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Submit -->
<button
class="w-full bg-[#F97316] hover:bg-[#00A63E] text-white py-2.5 rounded-lg font-semibold transition flex items-center justify-center gap-2">

<i class="fa-solid fa-paper-plane"></i>
Book Tour

</button>

</form>

<!-- Divider -->
<div class="text-center my-4 text-gray-400 text-sm">
OR
</div>

<!-- WhatsApp -->
<a href="https://wa.me/919456132650"
class="flex items-center justify-center gap-2 w-full bg-green-500 hover:bg-green-600 text-white py-2.5 rounded-lg font-semibold transition">

<i class="fa-brands fa-whatsapp text-lg"></i>
Chat on WhatsApp

</a>

</div>