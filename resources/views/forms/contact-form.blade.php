<form action="{{ route('contact.message') }}" method="POST" class="space-y-3">
@csrf

<input type="text" name="name" placeholder="Name" class="input">

<input type="email" name="email" placeholder="Email" class="input">

<input type="tel" name="phone" placeholder="Phone Number" class="input">

<textarea name="message" placeholder="Message"
class="w-full border p-2 rounded"></textarea>

<button class="bg-orange-500 text-white px-4 py-2 rounded w-full">
Send Message
</button>

</form>