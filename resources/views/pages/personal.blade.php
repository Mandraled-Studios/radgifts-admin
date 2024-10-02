<x-app-layout>

    <div class="">
        <main>
            <div class="bg-white">
                <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 border-b border-gray-200">
                    <p class="ms-super-header text-lg font-bold text-center"> </p>
                    <h1 class="text-3xl font-bold tracking-tight text-primary text-center">Personal Gifting</h1>
                    <p class="mt-4 max-w-3xl mx-auto text-sm text-gray-700 text-center">Be it a festive season, a corporate gathering, or a milestone celebration, we have ideal gift choices for all occasions. From ready-to-go gift baskets and sets to tailor-made gifts designed for businesses, we offer a diverse range of options to cater to various needs. </p>
                </div>
            </div>

            <!-- Product grid -->
            <section class="ms-container mx-auto px-4 pb-16 pt-12 sm:pb-24 sm:pt-16">
                <h2 class="sr-only">Products</h2>

                <div
                    class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    
                    @foreach ($gifts as $gift)
                        <a href="#{{$gift->slug}}" class="group">
                            <div
                                class="w-full h-80 overflow-hidden rounded-lg bg-gray-200 mb-3">
                                <img src="storage/{{$gift->thumbnail}}"
                                    alt="{{$gift->title}}"
                                    class="h-full w-full mb-2 object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-1 text-lg font-medium text-primary mb-2">{{$gift->title}}</h3>
                            <p class="text-sm font-light">{{$gift->excerpt}}</p>
                        </a>
                    @endforeach
                </div>
            </section>
        </main>
    </div>

</x-app-layout>
