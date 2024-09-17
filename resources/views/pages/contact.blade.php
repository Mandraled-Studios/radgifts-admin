<x-app-layout>
    <section class="pb-6">
        <figure class="about-banner h-64 relative mb-10" style="background-image: url({{asset('images/about-banner.png')}}); background-size:cover;">
            <div class="ms-container">
                <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-semibold mb-4 pt-20"> Contact Us </h1>
                <p class="text-white lg:w-1/2"> Have a question about our products, hampers or a recent order? 
                    Click here to check out our <a class="text-white underline" href="{{route('pages.contact.faq')}}">FAQ page</a>. If you don't find an answer to your question there, feel free to shoot us a message. </p>
            </div>
        </figure>
        
        <div class="ms-container">
            <h2 class="text-teal-450 text-center text-3xl md:text-4xl mb-12  font-semibold"> Send A Message </h2>
            <form action="" method="POST">
                @csrf
                <div class="md:row justify-center mb-6">
                    <div class="md:w-1/2 lg:w-1/3 px-6 mb-4">
                        <input placeholder="Name" type="text" name="name" class="w-full px-2 py-4 border border-transparent border-b-teal-450 focus:border-b-purple-450">
                    </div>
                    <div class="md:w-1/2 lg:w-1/3 px-6 mb-4">
                        <input placeholder="Email" type="email" name="email" class="w-full px-2 py-4 border border-transparent border-b-teal-450 focus:border-b-purple-450">
                    </div>
                </div> 
                <div class="md:row justify-center mb-6">
                    <div class="md:w-1/2 lg:w-1/3 px-6 mb-4">
                        <input placeholder="Phone" type="text" name="phone" class="w-full px-2 py-4 border border-transparent border-b-teal-450 focus:border-b-purple-450">
                    </div>
                    <div class="md:w-1/2 lg:w-1/3 px-6 mb-4">
                        <input placeholder="City" type="text" name="city" class="w-full px-2 py-4 border border-transparent border-b-teal-450 focus:border-b-purple-450">
                    </div>
                </div> 
                <div class="row justify-center mb-6">
                    <div class="lg:w-2/3 px-6">
                        <textarea placeholder="Message" class="w-full px-2 py-4 border border-transparent border-b-teal-450 focus:border-b-purple-450" name="message"></textarea>
                    </div>
                </div>   
                <div class="flex justify-center">
                    <input type="submit" value="Send Message" class="cursor-pointer px-6 py-3 bg-purple-450 text-white rounded-full hover:bg-purple-750">    
                </div>        
            </form>
            </div>
        </div>
        
        <div class="ms-container">
            <div class="lg:row flex-wrap lg:flex-nowrap mb-6 py-24">
                <div class="lg:w-2/6 flex flex-col justify-end">
                    <div class="border-l-2 border-purple-450 pl-6">
                        <h4 class="text-purple-450 uppercase font-semibold mb-2"> Phone </h4>
                        <p class="mb-8"> <a href="tel:{{$company->phone}}"> {{$company->phone}}</a> </p>
                    </div>
                    <div class="border-l-2 border-purple-450 pl-6">
                        <h4 class="text-purple-450 uppercase font-semibold mb-2"> Email </h4>
                        <p class="mb-8"> <a href="mailto:{{$company->email}}"> {{$company->email}} </a> </p>
                    </div>
                    <div class="border-l-2 border-purple-450 pl-6">
                        <h4 class="text-purple-450 uppercase font-semibold mb-2"> Address </h4>
                        <p class="mb-5 leading-loose"> {{$company->address->building_no}}, {{$company->address->street}}, {{$company->address->area}}, {{$company->address->city}}, <br/> {{$company->address->state}} - {{$company->address->zipcode}} </p>
                    </div>
                </div>
                <div class="lg:w-4/6 lg:pl-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.3049142133252!2d80.26768177418559!3d13.060489398790669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266188a22388d%3A0x4ba10895a52a8058!2sVN%20Doss%20Rd%2C%20Padupakkam%2C%20Royapettah%2C%20Chennai%2C%20Tamil%20Nadu%20600014!5e0!3m2!1sen!2sin!4v1658265263736!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    @isset($message)
        @if($message="sent")
             <div x-data="{open: true}" class="fixed z-30 bottom-6 left-10">
                <div x-show="open" class="bg-purple-450 text-white px-6 py-4 flex justify-between shadow-lg">
                    <p class="mr-8"> Your message has been sent successfully! We'll reach out to you shortly </p>
                    <div>
                        <button x-on:click="open=false" class="justify-self-end self-end border border-white rounded-full w-8 h-8 p-1 bg-transparent"> x </button>
                    </div>
                </div>    
            </div>
        @else
            <div x-data="{open: true}" class="fixed z-30 bottom-6 left-10">
                <div x-show="open" class="bg-purple-450 text-white px-6 py-4 flex justify-between shadow-lg">
                    <p class="mr-8"> Message could not be sent! Please try again. </p>
                    <div>
                        <button x-on:click="open=false" class="justify-self-end self-end border border-white rounded-full w-8 h-8 p-1 bg-transparent"> x </button>
                    </div>
                </div>    
            </div>
        @endif
    @endisset
</x-app-layout>