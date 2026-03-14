{{-- Testimonials Section --}}
<section class="bg-[linear-gradient(135deg,#f0fdf4_0%,#fff7ed_100%)] font-[Segoe_UI]">
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-16 items-center">

            {{-- Left --}}
            <div>

                <span class="text-orange-500 font-semibold text-[13px] italic block mb-3">
                    <i class="fa-brands fa-google"></i> Google Reviews
                </span>

                <h2 class="text-3xl font-extrabold text-gray-900 leading-snug mb-4">
                    Words of Appreciation <br> from Our Happy Travelers
                </h2>

                <p class="text-gray-500 leading-7 mb-7 text-[15px]">
                    Read genuine reviews from pilgrims and travelers who completed their 
                    <strong>Char Dham Yatra, Kedarnath Yatra, and Uttarakhand tours</strong> 
                    with <strong>Uttaranchal Travels</strong>. Our guests share their real 
                    experiences about comfortable travel, reliable services, and a smooth 
                    spiritual journey to <strong>Kedarnath, Badrinath, Gangotri, and Yamunotri</strong>.
                </p>

                <a href="#" class="inline-block bg-[#00A63E] text-white px-7 py-3 rounded-md font-semibold text-[13px] tracking-wide hover:bg-orange-500 transition">
                    <i class="fa-brands fa-google"></i> View All Google Reviews
                </a>

            </div>

            {{-- Right Slider --}}
            <div class="relative testi-wrap">

                <div class="relative h-[290px] testi-slider">

                    @php
                    $reviews = [
                        ['title' => 'Amazing Kedarnath Trip', 'text' => 'Our Kedarnath journey was very smooth and comfortable. Taxi service and hotel booking were perfectly managed. Highly recommended travel agency for Char Dham Yatra.', 'name' => 'Rahul Sharma', 'city' => 'Delhi, India'],
                        ['title' => 'Best Char Dham Experience', 'text' => 'Very professional service for Char Dham Yatra. Driver was experienced and journey was safe. We will definitely travel again with Uttaranchal Travels.', 'name' => 'Priya Verma', 'city' => 'Lucknow, India'],
                        ['title' => 'Excellent Travel Support', 'text' => 'Booking process was easy and support team helped us during the entire trip. Hotels and vehicle were great. Best travel agency in Uttarakhand.', 'name' => 'Amit Joshi', 'city' => 'Dehradun, India'],
                    ];
                    @endphp

                    @foreach($reviews as $i => $r)
                    <div class="testi-slide absolute inset-0 transition-opacity duration-500 {{ $i === 0 ? 'opacity-100 pointer-events-auto' : 'opacity-0 pointer-events-none' }}">

                        <div class="bg-white rounded-2xl p-8 shadow-lg h-[260px] flex flex-col justify-between bg-[url('/My-Images/google-review.png')] bg-cover bg-center">

                            <div class="flex items-center justify-center w-[42px] h-[42px] rounded-full bg-orange-500 text-white mx-auto mb-3 text-sm">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>

                            <h4 class="text-orange-500 font-bold text-[16px] text-center mb-2">
                                {{ $r['title'] }}
                            </h4>

                            <p class="text-gray-700 text-[14px] leading-6 text-center">
                                {{ $r['text'] }}
                            </p>

                            <div class="flex items-center gap-3 mt-4">

                                <div class="w-[38px] h-[38px] rounded-full bg-[linear-gradient(135deg,#00A63E,#F97316)] text-white flex items-center justify-center font-bold text-[15px]">
                                    {{ substr($r['name'],0,1) }}
                                </div>

                                <div>
                                    <strong class="block text-gray-900 text-[14px]">{{ $r['name'] }}</strong>
                                    <span class="text-blue-500 text-[13px]">{{ $r['city'] }}</span>
                                </div>

                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>

                {{-- Smile Icon --}}
                <div class="text-center text-[40px] text-[#00A63E] mt-4">
                    <i class="fa-regular fa-face-smile"></i>
                </div>

                {{-- Arrows --}}
                <div class="flex justify-center gap-3 mt-4">

                    <button onclick="prevTesti()" class="rounded-full border w-10 h-10 border-gray-300 bg-white flex items-center justify-center text-gray-700 hover:bg-[#00A63E] hover:text-white hover:border-[#00A63E] transition">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>

                    <button onclick="nextTesti()" class="rounded-full border border-gray-300 w-10 h-10 bg-white flex items-center justify-center text-gray-700 hover:bg-[#00A63E] hover:text-white hover:border-[#00A63E] transition">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>

                </div>

            </div>

        </div>
    </div>
</section>

<script>
(function(){
    let cur = 0;
    const slides = document.querySelectorAll('.testi-slide');

    function goTo(n) {
        slides[cur].classList.remove('opacity-100','pointer-events-auto');
        slides[cur].classList.add('opacity-0','pointer-events-none');

        cur = (n + slides.length) % slides.length;

        slides[cur].classList.remove('opacity-0','pointer-events-none');
        slides[cur].classList.add('opacity-100','pointer-events-auto');
    }

    window.nextTesti = () => goTo(cur + 1);
    window.prevTesti = () => goTo(cur - 1);

    setInterval(() => goTo(cur + 1), 4500);
})();
</script>