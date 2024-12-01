<x-app-layout>
    <x-slot:seo> 
        <x-seosnippet :title="$title" :metadesc="$metadesc" :canonical="$canonical" :keywords="$keywords"> </x-seosnippet>
    </x-slot>
    <section class="pb-0 lg:pb-3">
        <figure class="about-banner h-56 relative mb-10 lg:mb-32" style="background-image: url({{asset('images/about-banner.png')}}); background-size:cover;">
            <div class="ms-container">
                <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-semibold mb-4 absolute bottom-4"> Our Story </h1>
            </div>
        </figure>
        <div class="container leading-loose">
            <div class="lg:w-10/12 mx-auto">
                <div class="">
                    <div class="mb-8">
                        <img src="{{asset("images/shobana.jpg")}}" class="w-full max-w-md mb-10" alt="">
                    </div>
                    <div class="ml-4 mr-4 lg:mr-4 mb-8 lg:pl-4">
                        <h4 class="text-purple-450 text-xl lg:text-2xl xl:text-3xl font-semibold">Sobna Kamakshee</h4>
                        <p class="text-lg text-teal-450 uppercase mb-8">Co-founder, Rad Gifts & Jucoholic.</p>
                        <p class="mb-6"> Art has always been my forte and my interests were largely creatively inclined. 
                            When I first embarked my journey with Jucoholic in 2012, I wanted to break the thought of 'old school' 
                            equating to jute. I knew I could bring so much colour to the 'golden fibre' by just changing the 
                            outlook and designs coupled with different fabric combinations, printing lucid colours and exploring 
                            metallic prints on the fabric that had many restrictions due to its texture and all of that clicked; 
                            we brought a big change in the market in terms of the outlook and sustainable alternatives.</p>
                        <p class="mb-6"> Earning the trust of some big names and pocketing quite a few corporates entrusted 
                            additional responsibility to meet their requirements. Afterall, filling the void of our customer 
                            requirements is quintessential and the bedrock of every business is customer satisfaction. 
                            Aligning to this core principle, and obliging to customers' needs, I extended my wings to corporate 
                            gifting that led to the advent of Rad Gifts.</p>
                    </div>
                </div>


                <div class="">
                    <div class="mb-8">
                        <img src="{{asset("images/bhuvaneshwari.jpg")}}" class="w-full max-w-md mb-10" alt="">
                    </div>
                    <div class="ml-4 mr-4 lg:mr-4 mb-8">
                        <h4 class="text-purple-450 text-xl lg:text-2xl xl:text-3xl font-semibold">Bhuvaneshwari</h4>
                        <p class="text-lg text-teal-450 uppercase mb-8">Co-founder, Rad Gifts</p>
                        <p class="mb-6">
                            Little did I know that working in a fortune 500 company to up-scaling in a Saas start-up, 
                            my on-field experience played a crucial role in the inception of “Radgifts” – a comprehensive 
                            solution for your gifting needs. As an HR, I had the opportunity to interact with top management 
                            and the operations team, giving me the privilege to understand concepts of budgeting, resource 
                            allocation, constraints, approval matrix, policies framing and employee satisfaction. One of the 
                            vital findings during this process was corporate gifting and its compounding impact on employee 
                            motivation and recognising their efforts that led to better employee satisfaction and performance; 
                            it also reflects the company's brand image and their constant, varied approaches to surprise their 
                            employees to keep them upbeat. Working on such projects, gathering and collating these experiences, 
                            my venture into corporate gifting was fortified and having the paraphernalia of experience and 
                            customer satisfaction at the forefront, I confidently plunged into my maiden business. With the 
                            right amount of empathy and quick-witted approach, the whole idea of gifting can be elevated to a 
                            new level, providing joy, insight, recognition, motivation, thoughtfulness and creativity and combining 
                            this whole composition into a tangible, ever-lasting emotion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16">
        <div class="ms-container">
            <h2 class="mb-10 text-purple-450 font-semibold text-4xl"> About Rad </h2>
            <div class="">
                <p class="leading-loose mb-6"> We as a team knew with the right amount of creativity and understanding client's need and 
                    being resourceful; we would be able to carve a niche in the gifting gamut and give our customers a joyous experience 
                    while curating their hampers. </p>

                <p class="leading-loose mb-6">
                    Rad visualises the ideology of putting a smile on people's face through the act of gifting and creating memories for 
                    'the joy of gifting is an experience, not just an act'. The proposition we carry in this process is to surprise our 
                    clients through an array of assorted gifting articles that are quirky, unconventional, utilitarian, eco-conscious 
                    & exciting and hand pick each and every product from vendors who are genuine and committed. The miniscule gap between 
                    receiving and unravelling the mystery box- that adrenaline rush moment, anticipation and blind guesses that elegantly 
                    surprise the receiver keep us upbeat for the ongoing assignments.
                </p>
            </div>
        </div>
    </section>
</x-app-layout>