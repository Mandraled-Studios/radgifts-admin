<section id="curate-your-hampers" class="bg-gray-100/[60] py-12">
    <div class="ms-container text-center lg:max-w-2xl lg:mx-auto">
        <h2 class="text-primary font-semibold text-lg sm:text-xl lg:text-2xl xl:text-3xl mb-4"> Curate Your Hamper </h2>
        <p> Curating a personalized hamper doesn't have to be complicated. With our simple steps and expert assistance, you can easily create a thoughtful and customized gift that will be cherished by the recipient. Whether it's for a friend, family member, or colleague, a curated hamper from us is sure to make a lasting impression. </p>
    </div>
    <div class="ms-container py-10">
        <div class="mt-2 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-6">
            @php 
                $curationSteps = [
                    [
                        'image' => 'images/static/step-1.png', 
                        'title' => 'Ping Us!', 
                        'desc' => 'Reach out to us and we will curate exclusive gift hampers based on your Budget , Time Frame, Occasion, Quantity & theme', 
                    ],
                    [
                        'image' => 'images/static/step-2.png', 
                        'title' => 'Customize Hampers!', 
                        'desc' => 'Choose from 400+ products for unique gifts. Personalize hampers & packaging to showcase your brand. ', 
                    ],
                    [
                        'image' => 'images/static/step-3.png', 
                        'title' => 'Safe & Sound Warehouse', 
                        'desc' => 'Don\'t stress about storage space for hampers. We offer secure warehouse storage and shipping services.', 
                    ],
                    [
                        'image' => 'images/static/step-4.png', 
                        'title' => 'Worldwide Delivery', 
                        'desc' => 'We ensure timely delivery of goods. Trust us to manage your freight with transparent warehousing and global shipping.', 
                    ],
                ];
            @endphp
            @for ($k=0; $k<=3; $k++)
                <div class="p-3 bg-white cursor-pointer hover:bg-gradient-to-r hover:from-primary/10 hover:via-transparent hover:to-primary/10 rounded-md shadow-lg relative">
                    <div class="bg-orange-500 text-white absolute top-0 left-4 px-2 pt-4 pb-2 text-xl lg:text-2xl font-bold"> {{ $k+1 }} </div>
                    <img class="w-full" src="{{asset($curationSteps[$k]['image'])}}" alt="">
                    <h3 class="text-primary font-semibold text-lg"> {{ $curationSteps[$k]['title'] }}</h3>
                    <p> {{ $curationSteps[$k]['desc'] }} </p>
                </div>
            @endfor
        </div>
    </div>
</section>