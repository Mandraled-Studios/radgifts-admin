<footer id="ms-footer" class="pt-20">
    <div class="bg-primary-dark relative py-2">
        <a class="block w-24 h-24 flex justify-center items-center bg-white -ml-12 absolute -top-16 left-2/4" href="{{ route('home') }}">
            <img class="w-20 h-20" src="{{ asset('images/radgifts-logo.svg') }}" alt="rad gifts logo">
        </a>
        <nav class="ms-container py-6">
            <ul class="md:flex md:items-center justify-center w-full">
                <li class="px-4 py-3 text-center">
                    <a class="text-white" href="{{ route('pages.static', ['static' => 'about']) }}">About</a>
                </li>
                <li class="px-4 py-3 text-center">
                    <a class="text-white" href="{{ route('pages.works') }}">Our Works</a>
                </li>
                <li class="px-4 py-3 text-center">
                    <a class="text-white" href="{{ route('filamentblog.post.index') }}">Articles</a>
                </li>
                <li class="px-4 py-3 text-center">
                    <a class="text-white" href="{{ route('pages.static', ['static' => 'contact']) }}">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="bg-primary py-8">
        <nav class="ms-container py-6 md:grid md:grid-cols-2 md:gap-4 lg:grid-cols-4">
            <div class="footer-column-1 mb-8 px-1 lg:px-2 xl:px-3 2xl:px-4">
                <p class="uppercase text-lg text-white mb-4 font-bold"> Corporate Gifts </p>
                <div class="md:pr-6 grid grid-cols-2 gap-2">
                    <ul class="text-white text-sm">
                        <li><a href="{{ route('pages.corporate') }}"> Bespoke Collections </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Birthday / Anniversary  </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Merchandise </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Promotional </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Premium Gifts </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> On Boarding </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Festive </a></li>
                    </ul>
                    <ul class="text-white text-sm">
                        <li><a href="{{ route('pages.corporate') }}"> Eco Friendly </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Rewards & Recognition  </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Gift Vouchers </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> 24 Hours Gifts </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Gourmet </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Custome Packaging </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Gratitude / Wellness </a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-column-2 mb-8 px-1 lg:px-2 xl:px-3 2xl:px-4">
                <p class="uppercase text-lg text-white mb-4 font-bold"> Personal Gifts </p>
                <div class="md:pr-6 grid grid-cols-2 gap-2">
                    <ul class="text-white text-sm">
                        <li><a href="{{ route('pages.corporate') }}"> Birthday </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Wedding  </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Mother's Day </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Father's Day </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Children's Day </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Women's Day </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Valentine's Day </a></li>
                    </ul>
                    <ul class="text-white text-sm">
                        <li><a href="{{ route('pages.corporate') }}"> Festive </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Halloween  </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Return Gifts </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> House Warming </a></li>
                        <li><a href="{{ route('pages.corporate') }}"> Premium Gifts </a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-column-3 mb-8 px-1 lg:px-2 xl:px-3 2xl:px-4">
                <p class="uppercase text-lg text-white mb-4 font-bold"> Newsletter </p>
                <p class="text-white"> Subscribe to stay updated about the latest offers we have. </p>
                <form action="">
                    <input type="text" name="name" placeholder="Name" id="name-field" class="block w-full mb-2 bg-transparent border-t-0 border-x-0 border-solid border-b border-white">
                    <input type="email" name="email" placeholder="Email" id="email-field" class="block w-full mb-2 bg-transparent border-t-0 border-x-0 border-solid border-b border-white">
                    <input type="submit" value="Subscribe" class="mt-4 block px-6 py-2 uppercase border-none bg-white text-primary rounded-full">
                </form>
            </div>
            <div class="footer-column-4 mb-8 px-1 lg:px-2 xl:px-3 2xl:px-4">
                <p class="uppercase text-lg text-white mb-4 font-bold"> Contact </p>
                <p class="text-white mb-4"> 55/6, VN Doss Rd, Mount Road, Chennai, Tamil Nadu - 600002 </p>
                <div class="flex items-center mb-2">
                    <img class="w-5 h-5 mr-2" src="{{ asset('images/icons/phone.svg') }}" alt="">
                    <a class="text-white" href="tel:919150241115">  +91 9150241115 </a>
                </div>
                <div class="flex items-center mb-6">
                    <img class="w-5 h-5 mr-2" src="{{ asset('images/icons/email.svg') }}" alt="">
                    <a class="text-white" href="mailto:info@radgifts.in">  info@radgifts.in </a>
                </div>
                <div class="mt-2 flex item-center">
                    <a class="mr-2" href=""> <img style="margin-top:2px;" src="{{ asset('images/icons/whatsapp.svg') }}" alt="whatsapp icon"> </a>
                    <a class="mr-2" href=""> <img src="{{ asset('images/icons/instagram.svg') }}" alt="instagram icon"> </a>
                    <a class="mr-2" href=""> <img src="{{ asset('images/icons/linkedin.svg')}}" alt="linkedin icon"> </a>
                    <a class="mr-2" href=""> <img src="{{ asset('images/icons/twitter-x.svg')}}" alt="x icon"> </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="bg-primary-dark">
        <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8 text-center">
            <p class="text-white"> &copy; Copyrights {{ date('Y') }} Radgits | Powered By <a class="text-white" href="https://mandraled.com"> Mandraled Studios </a> </p>
        </div>
    </div>
</footer>





