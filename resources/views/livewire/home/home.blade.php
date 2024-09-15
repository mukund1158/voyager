@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/home/style.css') }}">
@endpush

<div>
    <div class="relative bg-cover bg-center h-screen"
        style="background-image: url('{{ asset('frontend/images/hero-area.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
            <h1 class="text-6xl font-bold mb-4 animate-fade-in animate-typing pb-1"
                style="text-shadow: 2px 2px rgba(0,0,0,0.2);">
                Explore The World with <span class="text-yellow-400 animate-text-color">EcoVoyagers</span>
            </h1>
            <p class="text-xl mb-8 animate-fade-in-delay">Explore with Confidence, Plan with Experience​</p>
            <form method="post" action="{{ route('home') }}"
                class="w-full max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg animate-fade-in-delay-2">
                @csrf
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full sm:w-1/3 px-2 mb-4">
                        <label for="origin" class="block text-gray-700 text-sm font-bold mb-2">Your Origin</label>
                        <select name="origin" id="origin"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Select</option>
                            {{-- @foreach ($origin as $key => $origin)
                                <option value="{{ $key }}">{{ $origin }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="w-full sm:w-1/3 px-2 mb-4">
                        <label for="destination" class="block text-gray-700 text-sm font-bold mb-2">Your
                            Destination</label>
                        <select name="destination" id="destination"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Select</option>
                            {{-- @foreach ($destination as $key => $destination)
                                <option value="{{ $key }}">{{ $destination }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="w-full sm:w-1/3 px-2 mb-4">
                        <label for="start-date" class="block text-gray-700 text-sm font-bold mb-2">Start Date</label>
                        <input type="text" id="start-date" name="start_date"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            placeholder="Select date">
                    </div>
                    <div class="w-full sm:w-1/3 px-2 mb-4">
                        <label for="end-date" class="block text-gray-700 text-sm font-bold mb-2">End Date</label>
                        <input type="text" id="end-date" name="end_date"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            placeholder="Select date">
                    </div>
                    <div class="w-full sm:w-1/3 px-2 mb-4">
                        <label for="budget" class="block text-gray-700 text-sm font-bold mb-2">Budget (₹)</label>
                        <input type="text" id="budget" name="cost"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            placeholder="20000">
                    </div>
                    <div class="w-full sm:w-1/3 px-2 mb-4 flex items-end">
                        <button type="submit"
                            class="w-full bg-yellow-500 text-white font-bold py-3 px-4 rounded hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @livewire('popular-place.popular-place')
    @livewire('user-itinerary.user-itinerary')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swipers = document.querySelectorAll('.swiper-container');
        swipers.forEach(function(swiperContainer) {
            new Swiper(swiperContainer, {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        });
    });
</script>
