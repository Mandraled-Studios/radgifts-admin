<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Collection;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() { 
        $clients = [
          (object) ['logo' => 'images/clients/4700-bc.jpg'],
          (object) ['logo' => 'images/clients/ardart.jpg'],
          (object) ['logo' => 'images/clients/arrow.jpg'],
          (object) ['logo' => 'images/clients/back-bencher.jpg'],
          (object) ['logo' => 'images/clients/boat.jpg'],
          (object) ['logo' => 'images/clients/brown-salt.png'],
          (object) ['logo' => 'images/clients/cadyce.png'],
          (object) ['logo' => 'images/clients/country-bean.jpg'],
          (object) ['logo' => 'images/clients/dhl.jpg'],
          (object) ['logo' => 'images/clients/encora.jpg'],
          (object) ['logo' => 'images/clients/exoteaca.jpg'],
          (object) ['logo' => 'images/clients/facilio.jpg'],
          (object) ['logo' => 'images/clients/flying-machine.jpg'],
          (object) ['logo' => 'images/clients/fuzo.png'],
          (object) ['logo' => 'images/clients/henga.jpg'],
          (object) ['logo' => 'images/clients/hidrate-spark.jpg'],
          (object) ['logo' => 'images/clients/huda-bar.png'],
          (object) ['logo' => 'images/clients/infoview.jpg'],
          (object) ['logo' => 'images/clients/instacuppa.jpg'],
          (object) ['logo' => 'images/clients/jucoholic.png'],
          (object) ['logo' => 'images/clients/kamakshi.jpg'],
          (object) ['logo' => 'images/clients/lacoste.png'],
          (object) ['logo' => 'images/clients/nextbillion.jpg'],
          (object) ['logo' => 'images/clients/nielsen.jpg'],
          (object) ['logo' => 'images/clients/noise.jpg'],
          (object) ['logo' => 'images/clients/nutty-gritties.jpg'],
          (object) ['logo' => 'images/clients/paul-mike.jpg'],
          (object) ['logo' => 'images/clients/pebble.png'],
          (object) ['logo' => 'images/clients/portronics.png'],
          (object) ['logo' => 'images/clients/post-box.png'],
          (object) ['logo' => 'images/clients/puma.jpg'],
          (object) ['logo' => 'images/clients/recharka.jpg'],
          (object) ['logo' => 'images/clients/samsonite.png'],
          (object) ['logo' => 'images/clients/shell.jpg'],
          (object) ['logo' => 'images/clients/tea-trunk.png'],
          (object) ['logo' => 'images/clients/true-elements.jpg'],
          (object) ['logo' => 'images/clients/us-polo.jpg'],
          (object) ['logo' => 'images/clients/vaya.png'],
          (object) ['logo' => 'images/clients/wildcraft.jpg'],
          (object) ['logo' => 'images/clients/zebronics.jpg'],
          (object) ['logo' => 'images/clients/zipstack.jpg'],
          (object) ['logo' => 'images/clients/zoho.jpg'],
        ];
        $featuredCorporate = Collection::where([
                ['corporate_hamper_flag', 1],
                ['is_featured', 1],
                ['is_active', 1],
            ])->limit(8)->get();
        
        $recentWorks = Work::where('is_active', 1)->latest()->limit(3)->get();

        return view('pages.home')->with([
            'clients' => $clients,
            'featuredCorporate' => $featuredCorporate,
            'recentWorks' => $recentWorks
        ]); 
    }

    public function staticPage($static) {
        $about = '
        <section class="pb-0 lg:pb-3">
            <figure class="about-banner h-56 relative mb-10 lg:mb-32">
                <div class="container">
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
                                When I first embarked my journey with Jucoholic in 2012, I wanted to break the thought of ‘old school’ 
                                equating to jute. I knew I could bring so much colour to the ‘golden fibre’ by just changing the 
                                outlook and designs coupled with different fabric combinations, printing lucid colours and exploring 
                                metallic prints on the fabric that had many restrictions due to its texture and all of that clicked; 
                                we brought a big change in the market in terms of the outlook and sustainable alternatives.</p>
                            <p class="mb-6"> Earning the trust of some big names and pocketing quite a few corporates entrusted 
                                additional responsibility to meet their requirements. Afterall, filling the void of our customer 
                                requirements is quintessential and the bedrock of every business is customer satisfaction. 
                                Aligning to this core principle, and obliging to customers’ needs, I extended my wings to corporate 
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
                                it also reflects the company’s brand image and their constant, varied approaches to surprise their 
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
            <div class="container">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="mb-10 text-purple-450 font-semibold text-4xl"> About Rad </h2>
                </div>
                <div class="lg:w-10/12 lg:mx-auto text-center">
                    <p class="leading-loose mb-6"> We as a team knew with the right amount of creativity and understanding client’s need and 
                        being resourceful; we would be able to carve a niche in the gifting gamut and give our customers a joyous experience 
                        while curating their hampers. </p>

                    <p class="leading-loose mb-6">
                        Rad visualises the ideology of putting a smile on people’s face through the act of gifting and creating memories for 
                        ‘the joy of gifting is an experience, not just an act’. The proposition we carry in this process is to surprise our 
                        clients through an array of assorted gifting articles that are quirky, unconventional, utilitarian, eco-conscious 
                        & exciting and hand pick each and every product from vendors who are genuine and committed. The miniscule gap between 
                        receiving and unravelling the mystery box- that adrenaline rush moment, anticipation and blind guesses that elegantly 
                        surprise the receiver keep us upbeat for the ongoing assignments.
                    </p>
                </div>
            </div>
        </section>';
        switch($static) {
            case 'about':    $pageContent = $about;
                             break;
            case 'articles': $pageContent = "<h1> Articles </h1>"; 
                             break;
            case 'contact':  $pageContent = "<h1> Contact </h1>"; 
                             break;
        }

        return view('pages.static')->with([
            'pageContent' => $pageContent,
        ]);
    }

    public function corporateGifting() {
        $corporate = Collection::where('corporate_flag', 1)->get();
        return view('pages.corporate')->with([
            'corporate' => $corporate,
        ]);
    }

    public function ourWorks() {
        $works = Work::all();
        return view('pages.ourworks')->with([
            'works' => $works
        ]);
    }

    public function workDetails($work) {
        $chosenWork = Work::where('slug', $work)->first();
        return view('pages.workDetail')->with([
            'work' => $chosenWork 
        ]);
    }
}
