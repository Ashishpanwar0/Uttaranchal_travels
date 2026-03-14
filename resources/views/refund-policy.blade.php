@extends('layouts.app')

@section('content')

<section class="bg-gray-50 py-16">

<div class="max-w-5xl mx-auto px-6">
<a href="/"
class="inline-flex items-center gap-2 mb-8 text-sm font-semibold text-[#00A63E] hover:text-[#F97316] transition">

<i class="fa-solid fa-arrow-left"></i>
Back to Home

</a>
<div class="text-center mb-12">

<span class="text-[#F97316] italic font-semibold text-sm">
✦ Refund Policy
</span>

<h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-2">
Refund & Cancellation Policy
</h1>

<p class="text-gray-500 text-sm mt-3 max-w-xl mx-auto">
Our refund policy explains how cancellations and refunds are handled for tour bookings.
</p>

</div>


<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 space-y-10">


<!-- Cancellation -->
<div>

<h2 class="text-xl font-bold flex items-center gap-2 mb-3">
<i class="fa-solid fa-ban text-[#00A63E]"></i>
Cancellation Policy
</h2>

<ul class="text-gray-600 text-sm space-y-2">

<li class="flex gap-2">
<i class="fa-solid fa-check text-[#00A63E] mt-1"></i>
Cancellation before 15 days – Partial refund may be provided.
</li>

<li class="flex gap-2">
<i class="fa-solid fa-check text-[#00A63E] mt-1"></i>
Cancellation within 7 days – Limited or no refund depending on booking status.
</li>

<li class="flex gap-2">
<i class="fa-solid fa-check text-[#00A63E] mt-1"></i>
No refund will be provided for last-minute cancellations.
</li>

</ul>

</div>


<!-- Advance -->
<div>

<h2 class="text-xl font-bold flex items-center gap-2 mb-3">
<i class="fa-solid fa-money-bill text-[#00A63E]"></i>
Advance Payment
</h2>

<p class="text-gray-600 text-sm">
Advance booking payments are generally non-refundable as they are used to confirm hotels, vehicles, and travel arrangements.
</p>

</div>


<!-- Natural Issues -->
<div>

<h2 class="text-xl font-bold flex items-center gap-2 mb-3">
<i class="fa-solid fa-cloud-showers-heavy text-[#00A63E]"></i>
Weather & Natural Conditions
</h2>

<p class="text-gray-600 text-sm">
In case of extreme weather conditions, landslides, road closures, or government restrictions, refunds may not be possible. However, we will try to provide alternative travel options.
</p>

</div>


<!-- Processing -->
<div>

<h2 class="text-xl font-bold flex items-center gap-2 mb-3">
<i class="fa-solid fa-clock text-[#00A63E]"></i>
Refund Processing
</h2>

<p class="text-gray-600 text-sm">
Approved refunds will usually be processed within 7-10 working days depending on payment method and banking procedures.
</p>

</div>


<!-- Contact -->
<div>

<h2 class="text-xl font-bold flex items-center gap-2 mb-3">
<i class="fa-solid fa-envelope text-[#00A63E]"></i>
Need Help?
</h2>

<p class="text-gray-600 text-sm">
For cancellation or refund related queries, please contact our support team.
</p>

<p class="text-sm mt-2">

📧 uttaranchaltravels.in@gamil.com <br>
📞 +91 75057 48554
<br>
📞 +91 95480 39959

</p>

</div>

</div>

</div>

</section>

@endsection