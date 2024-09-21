<section id="personal-gifting" class="bg-primary-light py-20">
    <div class="ms-container">
        <div class="lg:max-w-3xl lg:mx-auto text-center">
            <h2 class="text-primary font-semibold text-xl md:text-2xl xl:text-3xl mb-4"> Personal Gifting </h2>
            <p class="mb-4">
                Personal gifting creates a deeper connection because it shows thoughtfulness and effort.Studies have shown that giving and receiving personalized gifts activates areas of the brain associated with reward and pleasure, enhancing the emotional impact. Personal gifts reflect the unique relationship you have with your loved ones making the gesture more memorable and meaningful.
            </p>
        </div>

        <!-- Product Grid -->
        <div class="py-2 sm:px-3 sm:py-4 mb-8">

            <div class="mt-2 grid grid-cols-1 gap-x-2 gap-y-4 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-2">
                
                @for ($i=0; $i<=7; $i++)
                    <div class="ms-featured-collection-item group relative">
                        <div
                            class="ms-featured-collection-bg rounded-xl overflow-hidden aspect-h-1 aspect-w-1 bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 mx-4 my-4">
                            <img src="{{ asset('images/featured-collection-item.png') }}"
                                alt=""
                                class="block h-full w-5/6 object-contain object-center mx-auto rounded-xl overflow-hidden lg:h-full lg:w-5/6">
                        </div>
                        <div class="px-4 py-2">
                            <p class="text-lg uppercase font-semibold text-gray-800 mb-2 text-center">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </p>
                        </div>
                    </div>
                @endfor
        
                <!-- More products... -->
            </div>
        </div>
        <!-- End of Product Grid -->

        <div class="flex justify-center">
            <a href="#" class="text-lg py-3 px-5 text-white bg-primary rounded-full font-semibold">
                Explore Personal Gifting
            </a>
        </div>
    </div>
</section>