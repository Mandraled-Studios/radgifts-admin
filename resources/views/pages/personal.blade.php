<x-app-layout>
    <x-slot:seo> 
        <x-seosnippet :title="$title" :metadesc="$metadesc" :canonical="$canonical" :keywords="$keywords"> </x-seosnippet>
    </x-slot>
    <div class="">
        <main>
            <div class="bg-white">
                <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 border-b border-gray-200">
                    <p class="ms-super-header text-lg font-bold text-center"> </p>
                    <h1 class="text-3xl font-bold tracking-tight text-primary text-center">Personal Gifting</h1>
                    <p class="mt-4 max-w-3xl mx-auto text-sm text-gray-700 text-center">Personal gifting creates a deeper connection because it shows thoughtfulness and effort.Our repertoire of curated, personalized gifts offer a wide array of solutions for all your gifting needs and occasions. From elegant wedding favors to heartfelt birthday surprises, we design gifts that resonate with your loved ones. Whether celebrating milestones such as anniversaries, engagements, baby showers, corporate achievements, or graduations, our custom-made hampers beautifully tell your story, leaving a lasting impression. Our exquisite range of eco-friendly gifts is perfect for conscious consumers, offering a unique collection to explore. Special events like Women's Day, Diwali, Christmas, Bakrid, and corporate functions can be customized with meaningful, culturally inspired gifts. Be it Valentine's Day, Mother's Day, or even a housewarming, each gift reflects care, thoughtfulness, and individuality. Elevate every occasion with our premium gifting solutions, tailored to make every event truly memorable </p>
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
                                <img src="{{asset('storage/'.$gift->media->first()->path)}}"
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
