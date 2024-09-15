<x-app-layout>
    <x-home-hero />
    <section id="clientele" class="bg-white py-6">
        <div class="ms-container">
            <h2 class="text-center text-dark-grey text-lg lg:text-xl mb-6"> Trusted & Loved by 50+ Clientele </h2>
        </div>

        <div id="ms-infinite-carousel" class="mb-10">
            <div class="ms-carousel-inner">
                @foreach ($clients as $client)
                    <img class="h-12 object-contain object-center" src="{{ asset($client->logo) }}" alt="">
                @endforeach
            </div>
            <div class="ms-carousel-inner">
                @foreach ($clients as $client)
                    <img class="h-12 object-contain object-center" src="{{ asset($client->logo) }}" alt="">
                @endforeach
            </div>
        </div>
    </section>
    <x-gifting-categories />
    <x-home-featured-corporate :featuredCorporate="$featuredCorporate" />
    <section id="stats" class="py-8 ms-gift-bg">
        <div class="ms-container lg:max-w-3xl lg:mx-auto">
            <p class="text-center text-gray-800 mb-8"> Proudly catered to clients in 50 plus countries and delivered more than 20000 plus hampers. </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-4">
                <div class="flex flex-col items-center">
                    <p class="text-accent-dark font-semibold text-xl mb-2"> <strong> 50000+ </strong> </p>
                    <p class="uppercase text-accent-dark text-sm"> Hampers Delivered </p>
                </div>
                <div class="flex flex-col items-center">
                    <p class="text-accent-dark font-semibold text-xl mb-2"> <strong> 50+ </strong> </p>
                    <p class="uppercase text-accent-dark text-sm"> Countries </p>
                </div>
                <div class="flex flex-col items-center">
                    <p class="text-accent-dark font-semibold text-xl mb-2"> <strong> 50+ </strong> </p>
                    <p class="uppercase text-accent-dark text-sm"> Customers </p>
                </div>
            </div>
        </div>
    </section>
    <x-home-recent-works :works="$recentWorks" />
    <section id="personal-gifting" class="bg-primary-light py-20">
        <div class="ms-container">
            <div class="lg:max-w-3xl lg:mx-auto text-center">
                <span class="ms-super-header"> For Unforgettable Moments </span>
                <h2 class="text-primary font-semibold text-xl mb-4"> Corporate Gifting Collections </h2>
                <p class="mb-4">
                    Unique Hampers filled with happiness and crafted with love and care for your special ones for every occasion.
                </p>
            </div>

            <!-- Product Grid -->
            <div class="py-2 sm:px-3 sm:py-4 mb-8">

                <div class="mt-2 grid grid-cols-1 gap-x-2 gap-y-4 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-2">
                    
                    @for ($i=0; $i<=7; $i++)
                        <div class="ms-featured-collection-item group bg-white relative">
                            <div
                                class="ms-featured-collection-bg aspect-h-1 aspect-w-1 bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 mx-4 my-4">
                                <img src="{{ asset('images/featured-collection-item.png') }}"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="block h-full w-5/6 object-contain object-center mx-auto lg:h-full lg:w-5/6">
                            </div>
                            <div class="px-4 py-4">
                                <p class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </p>
                                <p class="text-sm font-medium text-gray-900"> One line description or short quote </p>
                            </div>
                        </div>
                    @endfor
            
                    <!-- More products... -->
                </div>
            </div>
            <!-- End of Product Grid -->

            <div class="flex justify-center">
                <a href="#" class="py-2 px-4 text-white bg-primary rounded-full font-semibold">
                    Explore Personal Gifting
                </a>
            </div>
        </div>
    </section>
    <x-home-curation-steps />
    <section id="highlights" class="py-12">
        <div class="ms-container text-center lg:max-w-3xl lg:mx-auto">
            <p class="mb-6"> At Rad we don't create hampers, we create joy! Your reputation and 
                goodwill is our responsibility, as we give utmost attention to detail 
                and make sure the corporate gifts we make for your business are of the 
                best value and ensure recipient satisfaction. Rad brings your thoughts 
                into action because <strong> it's the Thought that Counts. </strong> We are a comprehensive 
                gifting solution provider that takes care in sourcing best quality products 
                from reliable vendors tagged with eco friendly packaging and personalisation. 
            </p>
        </div>
        <div class="text-center lg:max-w-4xl lg:mx-auto">
            <div class="grid grid-cols-1 gap-x-1 gap-y-4 sm:grid-cols-2 sm:gap-x-2 sm:gap-y-2 md:grid-cols-3 md:gap-x-4 lg:grid-cols-5 lg:gap-x-6 justify-center">
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto" src="{{ asset('images/icons/highlight-1.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Customizable Hampers </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto" src="{{ asset('images/icons/highlight-2.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Quality Products &amp; Vendors </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto" src="{{ asset('images/icons/highlight-3.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Warehouse Facility </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto" src="{{ asset('images/icons/highlight-4.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Shipping Across The World </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto" src="{{ asset('images/icons/highlight-5.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Eco-friendly Packaging </p>
                </div>
            </div>
        </div>
    </section>
    <section id="insta-feed" class="py-12">
        <div class="ms-container text-center">
            <span class="ms-super-header"> Check Our Recent Stories </span>
            <h2 class="text-primary font-semibold text-xl lg:text-2xl mb-6"> Trending From Instagram </h2>
            <div class="py-6 grid grid-cols-1 gap-x-2 gap-y-2 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-4 lg:gap-y-4">
                @for ($l=1; $l<=8; $l++)
                    <div class="bg-gray-100 px-4 py-4 h-80"></div>
                @endfor
            </div>
        </div>
    </section>
    <section id="features" class="py-12">
        <div class="ms-container text-center lg:max-w-4xl lg:mx-auto">
            <div class="bg-accent grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 items-center gap-4 px-4 py-8">
                <div class="relative">
                    <img class="w-full h-40 mx-auto absolute -top-28 object-contain" src="{{ asset('images/static/gift-stack.png') }}" alt="">
                </div>
                <div class="text-white">
                    <p class="font-semibold"> Home Delivery </p>
                    <p class="uppercase"> For Wedding & Birthday </p>
                </div>
                <div class="text-white">
                    <p class="font-semibold"> No Limits </p>
                    <p class="uppercase"> No Minimum Order Quantity </p>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews" class="py-12">
        <div class="ms-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
            @for ($m=1; $m<=6; $m++)
                <div class="px-4 py-4 border border-solid border-gray-300">
                    <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Perfect Customised Corporate Gift </h4>
                    <p class="mb-6"> Rad Gifts was our choice for providing onboarding gifts to our new employees and I was extremely impressed by their level of service. </p>
                    <p class="uppercase text-gray-500 font-thin"> Infosys Ltd </p>
                </div>
            @endfor
        </div>
    </section>
</x-app-layout>
