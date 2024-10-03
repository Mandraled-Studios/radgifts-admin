<x-app-layout>
    <section id="our-works" class="py-20">
        <div class="ms-container">
            <div class="lg:max-w-3xl lg:mx-auto text-center">
                <span class="ms-super-header"> </span>
                <h2 class="text-primary font-semibold text-xl md:text-2xl mb-4"> Our Portfolio </h2>
                <p class="mb-4">
                    Each and every client represents a significant milestone for us. Below is a glimpse of our past work.
                </p>
            </div>
            <div class="mt-2 grid grid-cols-1 gap-x-2 gap-y-4 sm:grid-cols-2 sm:mx-auto sm:justify-center lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-2">
                @foreach ($works as $work)
                    <div class="group bg-white relative cursor-pointer">
                        <div
                            class="aspect-h-1 aspect-w-1 lg:aspect-none group-hover:opacity-75 lg:h-80 mx-4 my-4">
                            @if (count($work->media) > 0)
                                <img src="{{ '/storage/'.$work->media->first()->path}}"
                                    alt="{{ $work->title }}"
                                    class="block h-full object-contain object-center mx-auto lg:h-full rounded-lg overflow-hidden">
                            @else
                                <img src="{{ asset('/images/static/default-work.jpg') }}"
                                    alt="{{ $work->title }}"
                                    class="block h-full object-contain object-center mx-auto lg:h-full rounded-lg overflow-hidden">
                            @endif
                            
                        </div>
                        <div class="px-4 py-4">
                            <p class="text-center font-medium text-gray-700 text-lg lg:text-2xl">
                                <a href="{{route('pages.works.details', ['work' => $work->slug])}}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $work->title }}
                                </a>
                            </p>
                            {{-- 
                            <p class="text-center text-gray-900"> {{ $work->excerpt }} </p>
                            --}}
                            <p class="text-center py-4">
                                <a class="text-center px-2 py-1 rounded-full bg-primary text-white hover:bg-primary-dark"> Know More </a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>