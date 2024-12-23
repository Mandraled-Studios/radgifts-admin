<x-app-layout>
    <x-slot:seo> 
        <x-seosnippet :title="$title" :metadesc="$metadesc" :canonical="$canonical" :keywords="$keywords"> </x-seosnippet>
    </x-slot>
    <x-home-hero />
    <section id="clientele" class="bg-gray-100 py-6 mb-6">
        <div class="ms-container">
            <h2 class="text-center text-dark-grey text-lg lg:text-xl mb-6"> Trusted & Loved by 50+ Clientele </h2>
        </div>

        <div id="ms-infinite-carousel" class="mb-8">
            <div class="ms-carousel-inner">
                @foreach ($clients as $client)
                    <img class="h-12 object-contain object-center border-2 border-primary shadow-lg" src="{{ asset($client->logo) }}" alt="">
                @endforeach
            </div>
            <div class="ms-carousel-inner">
                @foreach ($clients as $client)
                    <img class="h-12 object-contain object-center border-2 border-primary shadow-lg" src="{{ asset($client->logo) }}" alt="">
                @endforeach
            </div>
        </div>
    </section>
    <x-home-featured-corporate :featuredCorporate="$featuredCorporate" />
    <section id="stats" class="py-8 ms-gift-bg">
        <div class="ms-container lg:max-w-3xl lg:mx-auto">
            <p class="text-center text-gray-800 mb-8"> Proudly catered to clients in 50 plus countries and delivered
                more than 20000 plus hampers. </p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-4">
                <div class="flex flex-col items-center">
                    <p class="text-accent-dark font-semibold text-xl md:text-2xl xl:text-3xl mb-2"> <strong> 50000+
                        </strong> </p>
                    <p class="uppercase text-accent-dark text-sm"> Hampers Delivered </p>
                </div>
                <div class="flex flex-col items-center">
                    <p class="text-accent-dark font-semibold text-xl md:text-2xl xl:text-3xl mb-2"> <strong> 50+
                        </strong> </p>
                    <p class="uppercase text-accent-dark text-sm"> Countries </p>
                </div>
                <div class="flex flex-col items-center">
                    <p class="text-accent-dark font-semibold text-xl md:text-2xl xl:text-3xl mb-2"> <strong> 50+
                        </strong> </p>
                    <p class="uppercase text-accent-dark text-sm"> Customers </p>
                </div>
            </div>
        </div>
    </section>
    <x-home-recent-works :works="$recentWorks" />
    <x-home-featured-personal :featuredPersonal="$featuredPersonal" />
    <x-home-curation-steps />
    <section id="highlights" class="py-12">
        <div class="ms-container text-center lg:max-w-3xl lg:mx-auto">
            <h2 class="text-primary font-semibold text-lg sm:text-xl lg:text-2xl xl:text-3xl mb-4"> What Sets Us Apart
            </h2>
            <p class="mb-6">
                At Rad we don't create hampers, we create joy! Your reputation and goodwill is our responsibility, as we
                give
                utmost attention to detail and make sure the corporate gifts we make for your business are of the best
                value
                and ensure recipient satisfaction. Rad brings your thoughts into action because <strong> it's the
                    Thought that counts </strong>.
                We are a comprehensive gifting solution provider that takes care in sourcing best quality products from
                reliable vendors
                tagged with eco friendly packaging and personalisation.
            </p>
        </div>
        <div class="text-center lg:max-w-4xl lg:mx-auto">
            <div
                class="grid grid-cols-1 gap-x-1 gap-y-4 sm:grid-cols-2 sm:gap-x-2 sm:gap-y-2 md:gap-x-4 lg:grid-cols-4 lg:gap-x-6 justify-center">
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto"
                        src="{{ asset('images/icons/no-moq.png') }}" alt="No Minimum Order Quantity">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> No Minimum Order Quantity </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto"
                        src="{{ asset('images/icons/on-time-delivery.png') }}" alt="On time delivery">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> On Time Delivery </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto"
                        src="{{ asset('images/icons/highlight-3.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Warehouse Facility </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto"
                        src="{{ asset('images/icons/highlight-1.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Bespoke Collections </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto"
                        src="{{ asset('images/icons/highlight-5.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Eco-friendly Packaging </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto"
                        src="{{ asset('images/icons/customer-support.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Exceptional Customer Service </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto"
                        src="{{ asset('images/icons/flexible-pricing.png') }}" alt="flexible-pricing">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Flexible Pricing </p>
                </div>
                <div class="text-center">
                    <img class="w-24 h-24 object-contain object-center mx-auto"
                        src="{{ asset('images/icons/database-management.png') }}" alt="">
                    <p class="uppercase text-primary font-semibold leading-relaxed"> Database Management </p>
                </div>

            </div>
        </div>
    </section>
    <section id="insta-feed" class="py-12">
        <div class="ms-container text-center">
            <span class="ms-super-header"> Check Our Recent Stories </span>
            <h2 class="text-primary font-semibold text-xl lg:text-2xl mb-6"> Trending From Instagram </h2>
            <div class="py-6 grid grid-cols-1 gap-x-2 gap-y-2 sm:mx-auto sm:grid-cols-2 sm:max-w-3xl lg:grid-cols-3 lg:max-w-4xl lg:gap-x-4 lg:gap-y-4 xl:max-w-5xl">
                @foreach ($instaposts as $instapost)
                    <a target="_blank" href="{{$instapost->post_url}}" class="block bg-gray-100 h-80 mx-auto">
                        <img class="object-cover object-center" src="storage/{{$instapost->post_image}}" alt="">
                    </a>
                @endforeach
            </div>
            <p class="text-center py-4">
                <a href="https://www.instagram.com/radgifts_india" class="inline-flex items-center justify-center text-center px-5 py-3 rounded-full bg-primary text-white hover:bg-primary-dark"> 
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                        <g id="Group_230" data-name="Group 230" transform="translate(0 0)">
                        <path id="Path_6" data-name="Path 6" d="M30.135,60.912a1.348,1.348,0,1,0,1.348,1.348,1.348,1.348,0,0,0-1.348-1.348" transform="translate(-12.545 -56.805)" fill="#FFF"></path>
                        <path id="Path_7" data-name="Path 7" d="M18.59,63.572a5.664,5.664,0,1,0,5.664,5.665,5.671,5.671,0,0,0-5.664-5.665m0,9.293a3.628,3.628,0,1,1,3.628-3.628,3.633,3.633,0,0,1-3.628,3.628" transform="translate(-6.995 -57.736)" fill="#FFF"></path>
                        <path id="Path_8" data-name="Path 8" d="M19.893,77.594H10.711A6.917,6.917,0,0,1,3.8,70.685V61.5a6.917,6.917,0,0,1,6.909-6.909h9.182A6.916,6.916,0,0,1,26.8,61.5v9.183a6.916,6.916,0,0,1-6.909,6.909M10.711,56.758A4.749,4.749,0,0,0,5.967,61.5v9.183a4.749,4.749,0,0,0,4.745,4.745h9.182a4.75,4.75,0,0,0,4.745-4.745V61.5a4.75,4.75,0,0,0-4.745-4.745Z" transform="translate(-3.802 -54.594)" fill="#FFF"></path>
                        </g>
                    </svg>
                    <span> 
                        VIEW RAD GIFTS ON INSTAGRAM 
                    </span>
                </a>
            </p>
            {{--
            <div data-name="onstipe" class="wbctA" style="width:100%;height:100%;overflow:hidden;">
                <script defer src="https://onstipe.com/web/js/webembed.js" type="text/javascript"></script>
                <div class="wbctB" data-val="rvc41"></div>
            </div>
            --}}
        </div>
    </section>
    <section id="features" class="py-12">
        <div class="ms-container lg:max-w-4xl lg:mx-auto">
            <div class="bg-accent grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 items-center gap-4 px-4 py-8">
                <div class="relative">
                    <img class="w-full h-40 mx-auto absolute -top-28 object-contain"
                        src="{{ asset('images/static/gift-stack.png') }}" alt="">
                </div>
                <div class="text-white text-center md:text-left pt-12 pb-6 md:py-0">
                    <p class="uppercase"> We don't create hampers, <br /> we create joy! </p>
                </div>
                <div class="text-white text-center md:text-left">
                    <a class="bg-white rounded-full px-6 py-3 text-accent hover:bg-primary hover:text-white"
                        href="{{ route('pages.contact') }}"> Curate Your Hamper </a>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews" class="carousel max-w-5xl mx-auto py-12">
        <div class="carousel-inner">
            <div class="carousel-item active px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Rajavel Subramanian </h4>
                <p class="mb-6"> Can't find a better partner for creating customised gifting solutions for your
                    corporate gifting needs. Worked on multiple occasions for different types of gifting needs for our
                    company and really appreciated their flexibility to work around our needs, creative collaboration
                    and they ended up exceeding expectations every time. Highly recommended. </p>
                <img class="h-12" src="https://radgifts.in/storage/media/client-logo-facilio.jpg" alt="Facilio Logo">
            </div>
            <div class="carousel-item px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Siddharth Rangan </h4>
                <p class="mb-6"> Rad gifts are one stop solution for corporate gifts. We reached the RAD for a
                    corporate gift and they suggested multiple options. We had an excellent experience with them. Below
                    is my rating for their service. Quality: 5/5, Turn around time : 5/5, Delivery: very smooth,
                    delivery process 5/5. Overall I would rate 5* for Rad team </p>
                <img class="h-12" src="https://radgifts.in/storage/media/client-logo-miratech.jpg" alt="Miratech Logo">
            </div>
            <div class="carousel-item px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Vidhya Madhusudan </h4>
                <p class="mb-6"> Our team is super happy with the Diwali hamper . Though it was last minute order you
                    made sure everything was perfect. Thank you so much . Will strongly recommend your work. And you'll
                    be Rocketlane's fav vendor. </p>
                <img class="h-12" src="https://radgifts.in/storage/media/client-logo-rocketlane.jpg" alt="Rocketlane Logo">
            </div>
            <div class="carousel-item px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Swathi </h4>
                <p class="mb-6"> I had a fantastic experience with Rad gifts. Sobna was professional and helpful. The products were high-quality and unique. The vendor was reliable and met tight deadlines. Sobna provided multiple samples for testing. We'll definitely use Rad gifts again for our corporate gifting needs. </p>
                <img class="h-12" src="https://radgifts.in/storage/media/client-logo-next-billion-ai.jpg" alt="Next Billion AI Logo">
            </div>
            <div class="carousel-item px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Sai Prasanna </h4>
                <p class="mb-6"> Rad Gifts was our choice for providing onboarding gifts to our new employees and I was extremely impressed by their level of service. Their attention to detail was exceptional, and they helped us choose the ideal gifts for our staff. The quality of their products was outstanding, and I would highly recommend them to anyone seeking a reliable and top-notch corporate gifting vendor. Overall, we were extremely pleased with our experience with Rad Gifts and their exceptional service.</p>
                <img class="h-12" src="https://radgifts.in/storage/media/client-logo-zipstack.jpg" alt="Zipstack Logo">
            </div>
            <div class="carousel-item px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Karthick Raj </h4>
                <p class="mb-6"> Corporate Gifting - I was referred by one of my friends to RAD Gifts. They are new to the business, But they don't look like.
                    Their ideas are unique and they customise based on our need. They understand our requirements and come up with more options for us with flexibility. Finally, The products are amazing and exceeded our expectations.
                    Keep up your good work, Team.
                    I would highly recommend RAD gifts for corporate gifting </p>
                <img class="h-8" src="https://radgifts.in/storage/media/client-logo-infoview.jpg" alt="Infoview Logo">
            </div>
        </div>
        <a href="reviews" id="carouselPrev" class="carousel-control carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="reviews" id="carouselNext" class="carousel-control carousel-control-next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </section>
</x-app-layout>
