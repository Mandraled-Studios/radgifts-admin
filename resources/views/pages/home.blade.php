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
    <x-home-featured-personal />
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
            {{--
            <div class="py-6 grid grid-cols-1 gap-x-2 gap-y-2 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-4 lg:gap-y-4">
                @for ($l = 1; $l <= 8; $l++)
                    <div class="bg-gray-100 px-4 py-4 h-80"></div>
                @endfor
            </div>
            
            <div data-name="onstipe" class="wbctA" style="width:100%;height:100%;overflow:hidden;">
                <script defer src="https://onstipe.com/web/js/webembed.js" type="text/javascript"></script>
                <div class="wbctB" data-val="rvc41"></div>
            </div>
            --}}
            <x-insta-feed> </x-insta-feed>
        </div>
    </section>
    <section id="features" class="py-12">
        <div class="ms-container lg:max-w-4xl lg:mx-auto">
            <div class="bg-accent grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 items-center gap-4 px-4 py-8">
                <div class="relative">
                    <img class="w-full h-40 mx-auto absolute -top-28 object-contain"
                        src="{{ asset('images/static/gift-stack.png') }}" alt="">
                </div>
                <div class="text-white">
                    <p class="uppercase"> We don't create hampers, <br /> we create joy! </p>
                </div>
                <div class="text-white">
                    <a class="bg-white rounded-full px-6 py-3 text-accent hover:bg-primary hover:text-white"
                        href="{{ route('pages.contact') }}"> Curate Your Hamper </a>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews" class="py-12">
        <div class="ms-container grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-6">
            <div class="px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Rajavel Subramanian </h4>
                <p class="mb-6"> Can't find a better partner for creating customised gifting solutions for your
                    corporate gifting needs. Worked on multiple occasions for different types of gifting needs for our
                    company and really appreciated their flexibility to work around our needs, creative collaboration
                    and they ended up exceeding expectations every time. Highly recommended. </p>
                <img class="h-12" src="{{ asset('images/clients/facilio.jpg') }}" alt="Facilio Logo">
                <p class="uppercase text-gray-500 font-thin"> Facilio Pvt Ltd </p>
            </div>
            <div class="px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Siddharth Rangan </h4>
                <p class="mb-6"> Rad gifts are one stop solution for corporate gifts. We reached the RAD for a
                    corporate gift and they suggested multiple options. We had an excellent experience with them. Below
                    is my rating for their service. Quality: 5/5, Turn around time : 5/5, Delivery: very smooth,
                    delivery process 5/5. Overall I would rate 5* for Rad team </p>
                <img class="h-12" src="{{ asset('images/clients/Miratech.jpg') }}" alt="Miratech Logo">
                <p class="uppercase text-gray-500 font-thin"> Miratech Pvt Ltd </p>
            </div>
            <div class="px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Vidhya Madhusudan </h4>
                <p class="mb-6"> Our team is super happy with the Diwali hamper . Though it was last minute order you
                    made sure everything was perfect. Thank you so much . Will strongly recommend your work. And you'll
                    be Rocketlane's fav vendor. </p>
                <img class="h-12" src="{{ asset('images/clients/Rocketlane.jpg') }}" alt="Rocketlane Logo">
                <p class="uppercase text-gray-500 font-thin"> Rocketlane Pvt Ltd </p>
            </div>
            <div class="px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Swathi </h4>
                <p class="mb-6"> I had a fantastic experience with Rad gifts. Sobna was professional and helpful. The products were high-quality and unique. The vendor was reliable and met tight deadlines. Sobna provided multiple samples for testing. We'll definitely use Rad gifts again for our corporate gifting needs. </p>
                <img class="h-12" src="{{ asset('images/clients/Next-Billion-AI.jpg') }}" alt="Next Billion AI Logo">
                <p class="uppercase text-gray-500 font-thin"> Next Billion AI Pvt Ltd </p>
            </div>
            <div class="px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Sai Prasanna </h4>
                <p class="mb-6"> Rad Gifts was our choice for providing onboarding gifts to our new employees and I was extremely impressed by their level of service. Their attention to detail was exceptional, and they helped us choose the ideal gifts for our staff. The quality of their products was outstanding, and I would highly recommend them to anyone seeking a reliable and top-notch corporate gifting vendor. Overall, we were extremely pleased with our experience with Rad Gifts and their exceptional service.</p>
                <img class="h-12" src="{{ asset('images/clients/zipstack.jpg') }}" alt="Zipstack Logo">
                <p class="uppercase text-gray-500 font-thin"> Zipstack Pvt Ltd </p>
            </div>
            <div class="px-4 py-4 border border-solid border-gray-300">
                <h4 class="text-primary font-semibold text-lg lg:text-xl mb-4"> Karthick Raj </h4>
                <p class="mb-6"> Corporate Gifting - I was referred by one of my friends to RAD Gifts. They are new to the business, But they don't look like.
                    Their ideas are unique and they customise based on our need. They understand our requirements and come up with more options for us with flexibility. Finally, The products are amazing and exceeded our expectations.
                    Keep up your good work, Team.
                    I would highly recommend RAD gifts for corporate gifting </p>
                <img class="h-8" src="{{ asset('images/clients/infoview.jpg') }}" alt="Infoview Logo">
                <p class="uppercase text-gray-500 font-thin"> Infoview Pvt Ltd </p>
            </div>
        </div>
    </section>
</x-app-layout>
