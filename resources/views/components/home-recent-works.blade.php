<section id="recent-works" class="py-12">
    <div class="ms-container">
        <div class="flex justify-between">
            <h2 class="font-bold text-2xl md:text-3xl mb-3 text-accent"> Our Recent Works </h2>
            <a class="uppercase inline-flex items-center text-accent" href="{{route('pages.works')}}"> View All <img class="w-4" src="{{ asset('images/icons/right-arrow.svg') }}"> </a>
        </div>

        <!-- Works Grid -->
        <div class="py-2 sm:px-3 sm:py-4 mb-8">

            <div class="mt-2 grid grid-cols-1 gap-x-2 gap-y-4 lg:grid-cols-3">
                
                @foreach ($works as $work)
                    <div class="ms-recent-work-item rounded-xl overflow-hidden group bg-white relative">
                        <div
                            class="ms-recent-work-bg rounded-xl overflow-hidden bg-gray-200 group-hover:opacity-75 lg:h-80 mx-4 my-4">
                            @php
                                $workMedia = $work->media;
                                if(count($workMedia) > 0) {
                                    $workImg = $workMedia->first()->path;
                                } else {
                                    $workImg = null;
                                }
                                if($workImg) {
                                    $workImg = 'storage/'.$workImg;
                                } else {
                                    $workImg = 'images/static/default-work.jpg';
                                }
                            @endphp
                            <img src="{{ asset($workImg) }}"
                                alt="{{$work->title}}"
                                class="block h-full w-full object-cover object-center rounded-xl overflow-hidden mx-auto">
                        </div>
                        <div class="px-4 py-4">
                            <p class="text-lg lg:text-xl mb-2 font-semibold text-accent-dark">
                                <a href="{{route('pages.works.details', ['work' => $work->slug])}}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{$work->title}}
                                </a>
                            </p>
                            <p class="text-sm font-medium text-gray-900">
                                {!! implode(' ', array_slice(explode(' ', $work->description), 0, 12)) !!} ... <span class="text-accent-dark font-semibold underline">(Read More)</span>
                            </p>
                        </div>
                    </div>
                @endforeach
        
                <!-- More products... -->
            </div>
        </div>
        <!-- End of Product Grid -->
    </div>
</section>