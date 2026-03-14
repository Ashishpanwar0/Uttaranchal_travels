<form action="{{ route('quick.enquiry') }}" method="POST" class="space-y-3 heading-font">
@csrf

<input type="text" name="name" placeholder="Name"
class="w-full bg-white/20 border border-white/30 text-white placeholder-gray-200 rounded-lg px-4 py-2">

<input type="text" name="phone" placeholder="Phone"
class="w-full bg-white/20 border border-white/30 text-white placeholder-gray-200 rounded-lg px-4 py-2">

<input type="text" name="destination" placeholder="Destination"
class="w-full bg-white/20 border border-white/30 text-white placeholder-gray-200 rounded-lg px-4 py-2">

<button type="submit"
class="w-full bg-orange-500 hover:bg-[#00A63E] text-white py-2 rounded-lg font-semibold">
Send Enquiry
</button>

</form>