<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{

    public function maintenance() {
        return view('pages.maintenance');
    }

    public function home(Request $request) { 
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

        if($request->q == "test") {
            return view('pages.home')->with([
                'clients' => $clients,
                'featuredCorporate' => $featuredCorporate,
                'recentWorks' => $recentWorks
            ]); 
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
    }

    public function staticPage($static, Request $request) {
        $about = '';
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

    public function corporateGifting(Request $request) {
        $corporate = Collection::where('corporate_flag', 1)->get();
        
        if($request->q == "test") {
            return view('pages.corporate')->with([
                'corporate' => $corporate,
            ]);
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
        
    }

    public function ourWorks(Request $request) {
        $works = Work::all();

        if($request->q == "test") {
            return view('pages.ourworks')->with([
                'works' => $works
            ]);
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
    }

    public function workDetails($work, Request $request) {
        $chosenWork = Work::where('slug', $work)->first();

        if($request->q == "test") {
            return view('pages.workDetail')->with([
                'work' => $chosenWork 
            ]);
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
    }

    public function about(Request $request) {
        if($request->q == "test") {
            return view('pages.about');
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
    }

    public function contact(Request $request) {
        if($request->q == "test") {
            $company = (object) [
                'phone' => 'images/clients/4700-bc.jpg',
                'email' => 'images/clients/4700-bc.jpg',
                'address' => (object) [
                    'building_no' => '',
                    'street' => '',
                    'area' => '',
                    'city' => '',
                    'state' => '',
                    'zipcode' => '',
                ]
            ];

            return view('pages.contact')->with([
                'company' => $company,
            ]);
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
    }
    public function faq(Request $request) {
        if($request->q == "test") {
            return view('pages.faq');
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
    }
}
