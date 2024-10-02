<x-app-layout>

    <div class="">
        <main>
            <div class="bg-white">
                <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 border-b border-gray-200">
                    <p class="ms-super-header text-lg font-bold text-center"> </p>
                    <h1 class="text-3xl font-bold tracking-tight text-primary text-center">{{$corporate_collection->title}}</h1>
                    <p class="mt-4 max-w-3xl mx-auto text-sm text-gray-700 text-center"> {{$corporate_collection->description}} </p>
                </div>
            </div>

            <!-- Product grid -->
            <section class="ms-container mx-auto px-4 pb-16 pt-12 sm:pb-24 sm:pt-16">
                <h2 class="sr-only">Products</h2>

                <div
                    class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    
                    @foreach ($corporate_collection->hampers as $hamper)
                        <a href="/corporate-gifting/{{$hamper->slug}}" class="group">
                            <div
                                class="w-full h-80 overflow-hidden rounded-lg bg-gray-200 mb-3">
                                <img src="{{asset('storage/'.$hamper->media->first()->path)}}"
                                    alt="{{$hamper->title}}"
                                    class="h-full w-full mb-2 object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-1 text-lg font-medium text-primary mb-2">{{$hamper->title}}</h3>
                            <p class="text-sm font-light">{{$hamper->excerpt}}</p>
                        </a>
                    @endforeach
                </div>
            </section>
        </main>
    </div>

</x-app-layout>
