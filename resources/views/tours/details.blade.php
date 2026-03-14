<div class="max-w-5xl mx-auto py-10 px-4">

<h1 class="text-3xl font-bold mb-6">
{{ $tour['title'] }}
</h1>

<img src="{{ asset('Tour-Images/'.$tour['image']) }}" class="rounded-lg mb-8">

<!-- ABOUT -->

<h2 class="text-2xl font-semibold mb-3">
About This {{ $tour['title'] }}
</h2>

<p class="mb-6 text-gray-700">
{{ $tour['about'] }}
</p>


<!-- HIGHLIGHTS -->

<h2 class="text-2xl font-semibold mb-3">
Package Highlights
</h2>

<ul class="list-disc pl-6 mb-8">

@foreach($tour['highlights'] as $item)

<li>{{ $item }}</li>

@endforeach

</ul>


<!-- ITINERARY -->

<h2 class="text-2xl font-semibold mb-4">
Tour Itinerary
</h2>

@foreach($tour['itinerary'] as $day)

<div class="mb-6">

<h3 class="font-semibold text-lg">
{{ $day['day'] }} – {{ $day['title'] }}
</h3>

<p class="text-gray-700">
{{ $day['desc'] }}
</p>

</div>

@endforeach


<!-- INCLUSIONS -->

<h2 class="text-2xl font-semibold mb-3">
Inclusions
</h2>

<ul class="list-disc pl-6 mb-8">

@foreach($tour['inclusions'] as $item)

<li>{{ $item }}</li>

@endforeach

</ul>


<!-- EXCLUSIONS -->

<h2 class="text-2xl font-semibold mb-3">
Exclusions
</h2>

<ul class="list-disc pl-6 mb-8">

@foreach($tour['exclusions'] as $item)

<li>{{ $item }}</li>

@endforeach

</ul>


<!-- REQUIREMENTS -->

<h2 class="text-2xl font-semibold mb-3">
Things to Know / Requirements
</h2>

<ul class="list-disc pl-6 mb-8">

@foreach($tour['requirements'] as $item)

<li>{{ $item }}</li>

@endforeach

</ul>


<!-- TERMS -->

<h2 class="text-2xl font-semibold mb-3">
Terms & Conditions
</h2>

<ul class="list-disc pl-6">

@foreach($tour['terms'] as $item)

<li>{{ $item }}</li>

@endforeach

</ul>

</div>