<section id="gifting-categories" class="pt-6 pb-12">
    <div class="ms-container">
        <h2 class="text-center text-primary font-semibold text-xl lg:text-2xl mb-4"> Gifting Categories </h2>
        <div class="flex flex-col lg:max-w-5xl lg:flex-row gap-8 justify-center items-center mx-auto">
            <div class="w-1/2">
                <a href="{{route('pages.corporate')}}" class="card block rounded-md bg-primary transition-all duration-300 hover:scale-105 hover:bg-primary/75 cursor-pointer px-6 py-4">
                    <div class="flex items-end">
                        <div class="w-1/2">
                            <p class="text-white font-bold text-lg"><strong>Corporate Gifting</strong></p>
                        </div>
                        <div class="w-1/2">
                            <img class="w-full relative top-4" src="{{ asset('images/corporate-gifting.png') }}"
                                alt="corporate gifting category">
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-1/2">
                <a href="{{route('pages.personal')}}" class="card block rounded-md bg-accent transition-all duration-300 hover:scale-105 hover:bg-accent/75 cursor-pointer px-6 py-4">
                    <div class="flex items-end">
                        <div class="w-1/2">
                            <p class="text-white font-bold text-lg"><strong>Personal Gifting</strong></p>
                        </div>
                        <div class="w-1/2">
                            <img class="w-full relative top-4" src="{{ asset('images/personal-gifting.png') }}"
                                alt="personal gifting category">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>