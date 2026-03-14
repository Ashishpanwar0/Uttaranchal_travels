<div class="max-w-md mx-auto bg-white shadow-xl rounded-2xl p-6 border border-green-100">

<h3 class="text-2xl font-bold text-[#00A63E] mb-4 flex items-center gap-2">
<i class="fa-solid fa-car text-[#00A63E]"></i> Book Transport
</h3>

<form action="{{ route('transport.booking') }}" method="POST" class="space-y-4">
@csrf

<!-- Name -->
<div class="relative">
<i class="fa-solid fa-user absolute left-3 top-3 text-[#00A63E]"></i>
<input type="text" name="name" placeholder="Your Name"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Phone -->
<div class="relative">
<i class="fa-solid fa-phone absolute left-3 top-3 text-[#00A63E]"></i>
<input type="text" name="phone" placeholder="Phone Number"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Pickup -->
<div class="relative">
<i class="fa-solid fa-location-dot absolute left-3 top-3 text-[#00A63E]"></i>
<input type="text" name="pickup_location" placeholder="Pickup Location"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Drop -->
<div class="relative">
<i class="fa-solid fa-map-location-dot absolute left-3 top-3 text-[#00A63E]"></i>
<input type="text" name="drop_location" placeholder="Drop Location"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Date -->
<div class="relative">
<i class="fa-solid fa-calendar-days absolute left-3 top-3 text-[#00A63E]"></i>
<input type="date" name="travel_date"
class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00A63E]">
</div>

<!-- Submit -->
<button class="w-full bg-[#F97316] hover:bg-[#00A63E] text-white py-2.5 rounded-lg font-semibold transition flex items-center justify-center gap-2">
<i class="fa-solid fa-paper-plane"></i>
Book Transport
</button>

</form>

<!-- Divider -->
<div class="text-center my-4 text-gray-400 text-sm">OR</div>

<!-- WhatsApp Button -->
<a href="https://wa.me/919548039959"
class="flex items-center justify-center gap-2 w-full bg-[#F97316] hover:bg-[#00A63E] text-white py-2.5 rounded-lg font-semibold transition">

<i class="fa-brands fa-whatsapp text-lg text-white"></i>
Book via WhatsApp

</a>

</div>