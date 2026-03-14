<form action="{{ route('tour.booking') }}" method="POST" class="space-y-3">
@csrf

<input type="text" name="name" placeholder="Name" class="input">

<input type="email" name="email" placeholder="Email" class="input">

<input type="text" name="phone" placeholder="Phone" class="input">

<input type="text" name="tour_name" placeholder="Tour Name" class="input">

<input type="date" name="travel_date" class="input">

<button class="bg-orange-500 text-white px-4 py-2 rounded w-full">
Book Tour
</button>

</form>