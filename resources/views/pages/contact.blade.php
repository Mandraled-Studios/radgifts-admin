<x-app-layout>
    <x-slot:seo> 
        <x-seosnippet :title="$title" :metadesc="$metadesc" :canonical="$canonical" :keywords="$keywords"> </x-seosnippet>
    </x-slot>
    <section class="pb-6">
        <figure class="about-banner h-64 relative mb-10" style="background-image: url({{asset('images/about-banner.png')}}); background-size:cover;">
            <div class="ms-container">
                <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-semibold mb-4 pt-20"> Contact Us </h1>
                <p class="text-white lg:w-1/2"> Have a question about our products, hampers or a recent order? 
                    Click here to check out our <a class="text-white underline" href="{{route('pages.contact.faq')}}">FAQ page</a>. If you don't find an answer to your question there, feel free to shoot us a message. </p>
            </div>
        </figure>
        
        <div class="ms-container">
            <h2 class="text-accent text-center text-3xl md:text-4xl mb-12 font-semibold"> Send A Message </h2>
            <form action="{{ route('contact.mail') }}" method="POST">
                @csrf
                <div class="md:flex md:flex-wrap justify-center mb-6">
                    <div class="md:w-1/2 lg:w-1/3 px-6 mb-4">
                        <input placeholder="Name" type="text" name="name" class="w-full px-2 py-4 border border-transparent border-b-accent focus:border-primary">
                    </div>
                    <div class="md:w-1/2 lg:w-1/3 px-6 mb-4">
                        <input placeholder="Email" type="email" name="email" class="w-full px-2 py-4 border border-transparent border-b-accent focus:border-primary">
                    </div>
                </div> 
                <div class="md:flex md:flex-wrap justify-center mb-6">
                    <div class="md:w-1/2 lg:w-1/3 px-6 mb-4">
                        <input placeholder="Phone" type="text" name="phone" class="w-full px-2 py-4 border border-transparent border-b-accent focus:border-primary">
                    </div>
                    <div class="md:w-1/2 lg:w-1/3 px-6 mb-4">
                        <input placeholder="City" type="text" name="city" class="w-full px-2 py-4 border border-transparent border-b-accent focus:border-primary">
                    </div>
                </div> 
                <div class="flex flex-wrap justify-center mb-6">
                    <div class="lg:w-2/3 px-6">
                        <textarea placeholder="Message" class="w-full px-2 py-4 border border-transparent border-b-accent focus:border-primary" name="message"></textarea>
                    </div>
                </div>   
                <div class="flex justify-center">
                    <input type="submit" value="Send Message" class="cursor-pointer px-6 py-3 bg-primary text-white rounded-full hover:bg-accent-dark">    
                </div>        
            </form>
            </div>
        </div>
        
        <div class="ms-container">
            <div class="lg:flex flex-wrap lg:flex-nowrap mb-6 py-16">
                <div class="lg:w-2/6 flex flex-col justify-end">
                    <div class="border-b-2 border-primary/80 px-5 py-5">
                        <h4 class="text-primary uppercase font-semibold mb-2"> Phone </h4>
                        <p class="mb-0"> <a href="tel:{{$company->phone}}"> {{$company->phone}}</a> </p>
                    </div>
                    <div class="border-b-2 border-primary/80 px-5 py-5">
                        <h4 class="text-primary uppercase font-semibold mb-2"> Email </h4>
                        <p class="mb-0"> <a href="mailto:{{$company->email}}"> {{$company->email}} </a> </p>
                    </div>
                    <div class="border-b-2 border-primary/80 px-5 py-5">
                        <h4 class="text-primary uppercase font-semibold mb-2"> Address </h4>
                        <p class="mb-5 leading-loose"> {{$company->address->building_no}}, {{$company->address->street}}, {{$company->address->area}}, {{$company->address->city}}, <br/> {{$company->address->state}} - {{$company->address->zipcode}} </p>
                    </div>
                </div>
                <div class="lg:w-4/6 lg:pl-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.6073277079245!2d80.26601267569096!3d13.060648312918469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526785850844d1%3A0x25e8ca00fb759e16!2sRad%20Gifts!5e0!3m2!1sen!2sin!4v1726990859963!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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