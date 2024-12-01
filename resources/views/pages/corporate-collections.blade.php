<x-app-layout>

    <x-slot:seo> 
        <x-seosnippet :title="$title" :metadesc="$metadesc" :canonical="$canonical" :keywords="$keywords"> </x-seosnippet>
    </x-slot>

    <div class="">
        <main>
            <div class="bg-white">
                <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 border-b border-gray-200">
                    <p class="ms-super-header text-lg font-bold text-center"> </p>
                    <h1 class="text-3xl font-bold tracking-tight text-primary text-center">Corporate Gifting</h1>
                    <p class="mt-4 max-w-3xl mx-auto text-sm text-gray-700 text-center">Corporate gifting is a powerful tool to build brand affinity and establish long-lasting business relationships. Gifting is not just limited to festivals, but can be given for various occasions like onboarding, farewells, birthdays, promotions, organisational milestones and individual achievements. A good quality corporate gift shows that you're invested in your stakeholder's experience and you should choose a gift that reflects your brand and we are here to curate the best quality hampers to showcase the brand and improve employee engagement and satisfaction. </p>
                </div>
            </div>

            <!-- Product grid -->
            <section class="ms-container mx-auto px-4 pb-16 pt-12 sm:pb-24 sm:pt-16">
                <h2 class="sr-only">Products</h2>

                <div
                    class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    
                    @foreach ($corporate_collections as $collection)
                        <a href="/corporate-gifting/{{$collection->slug}}" class="group">
                            <div
                                class="w-full h-80 overflow-hidden rounded-lg bg-gray-200 mb-3">
                                <img src="{{asset('storage/'.$collection->thumbnail)}}"
                                    alt="{{$collection->title}}"
                                    class="h-full w-full mb-2 object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-1 text-lg font-medium text-primary mb-2">{{$collection->title}}</h3>
                            <p class="text-sm font-light">{{$collection->excerpt}}</p>
                        </a>
                    @endforeach
                </div>
            </section>
        </main>
    </div>

</x-app-layout>
