<section id="corporate-gifting" class="py-12">
    <div class="ms-container text-center lg:max-w-4xl lg:mx-auto">
        <span class="ms-super-header"> </span>
        <h2 class="text-primary font-semibold text-xl lg:text-2xl mb-6"> Corporate Gifting </h2>
        <p class="mb-6"> Corporate gifting is a powerful tool to build brand affinity and establish long-lasting business relationships. Gifting is not just limited to festivals, but can be given for various occasions like onboarding, farewells, birthdays, promotions, organisational milestones and individual achievements. A good quality corporate gift shows that you’re invested in your stakeholder’s experience and you should choose a gift that reflects your brand and we are here to curate the best quality hampers to showcase the brand and improve employee engagement and satisfaction. </p>
    </div>
    <div class="bg-primary-light py-12">
        <div class="ms-container">
            <div class="lg:max-w-3xl lg:mx-auto text-center">
                <h4 class="text-primary font-light uppercase text-lg"> Featured Collections </h4>
            </div>

            <!-- Product Grid -->
            <div class="py-2 sm:px-3 sm:py-4 mb-8">

                <div class="mt-2 mb-6 {{ count($featuredCorporate) != 0 ? 'grid grid-cols-1 gap-x-2 gap-y-4 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-2' : 'flex justify-center'}}">
                    @if (count($featuredCorporate) != 0)
                        @foreach ($featuredCorporate as $fc)
                            <div class="ms-featured-collection-item group bg-white relative">
                                <div
                                    class="ms-featured-collection-bg overflow-hidden group-hover:opacity-75 lg:h-80 px-3 py-3 relative">
                                    <img src="{{ asset($fc->thumbnail) }}"
                                        alt="{{ $fc->title }}"
                                        class="block h-full w-full object-cover object-center mx-auto">
                                </div>
                                <div class="px-4 py-4">
                                    <p class="text-lg uppercase font-semibold text-gray-800 mb-2">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{ $fc->title }}
                                        </a>
                                    </p>
                                    <p class="text-sm font-medium text-gray-700">
                                        {{ $fc->excerpt }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center"> No Featured Collections To Show At The Moment </p>
                    @endif
                    <!-- More products... -->
                </div>

                <div class="flex justify-center">
                    <a href="{{route('pages.corporate')}}" class="py-2 px-4 text-white bg-primary rounded-full font-semibold">
                        View All Collections
                    </a>
                </div>
            </div>
            <!-- End of Product Grid -->

            {{-- 
            <h4 class="text-center text-primary font-light uppercase text-lg mb-6"> More Collections </h4>

            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="py-2 px-4 text-primary bg-white rounded-full font-semibold">
                    Eco-Friendly
                </a>
                <a href="#" class="py-2 px-4 text-primary bg-white rounded-full font-semibold">
                    Rewards & Recognition 
                </a>
                <a href="#" class="py-2 px-4 text-primary bg-white rounded-full font-semibold">
                    Festive
                </a>
                <a href="#" class="py-2 px-4 text-primary bg-white rounded-full font-semibold">
                    Customisation & Packaging 
                </a>
                <a href="#" class="py-2 px-4 text-primary bg-white rounded-full font-semibold">
                    Gift Vouchers
                </a>
                <a href="#" class="py-2 px-4 text-primary bg-white rounded-full font-semibold">
                    24 Hours Gifting
                </a>
                <a href="#" class="py-2 px-4 text-primary bg-white rounded-full font-semibold">
                    Gourmet
                </a>
            </div>
            --}}
        </div>
    </div>
</section>