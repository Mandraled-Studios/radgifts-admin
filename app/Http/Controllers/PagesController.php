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
          (object) ['logo' => 'images/clients/Anora.jpg'],
          (object) ['logo' => 'images/clients/BigFM.jpg'],
          (object) ['logo' => 'images/clients/Blue-Star.jpg'],
          (object) ['logo' => 'images/clients/DHL.jpg'],
          (object) ['logo' => 'images/clients/Elite-Global-School.jpg'],
          (object) ['logo' => 'images/clients/Encora.jpg'],
          (object) ['logo' => 'images/clients/Facilio.jpg'],
          (object) ['logo' => 'images/clients/Finzly.jpg'],
          (object) ['logo' => 'images/clients/Hexamap-Solutions.jpg'],
          (object) ['logo' => 'images/clients/in2-computing.jpg'],
          (object) ['logo' => 'images/clients/Infoview.jpg'],
          (object) ['logo' => 'images/clients/Invisibl-Cloud.jpg'],
          (object) ['logo' => 'images/clients/Kamakshi-Enterprises.jpg'],
          (object) ['logo' => 'images/clients/Madhampatty-Pakashala.jpg'],
          (object) ['logo' => 'images/clients/Miratech.jpg'],
          (object) ['logo' => 'images/clients/Next-Billion-AI.jpg'],
          (object) ['logo' => 'images/clients/NielsenIQ.jpg'],
          (object) ['logo' => 'images/clients/Phelan.jpg'],
          (object) ['logo' => 'images/clients/Rocketlane.jpg'],
          (object) ['logo' => 'images/clients/SaaSBoomi.jpg'],
          (object) ['logo' => 'images/clients/Scalekit.jpg'],
          (object) ['logo' => 'images/clients/Shell.jpg'],
          (object) ['logo' => 'images/clients/Spritle.jpg'],
          (object) ['logo' => 'images/clients/Sundaram-Alternates.jpg'],
          (object) ['logo' => 'images/clients/SuperOps.jpg'],
          (object) ['logo' => 'images/clients/Tiger.jpg'],
          (object) ['logo' => 'images/clients/US-Commercial-Service.jpg'],
          (object) ['logo' => 'images/clients/Yoga-works.jpg'],
          (object) ['logo' => 'images/clients/Zenminds.jpg'],
          (object) ['logo' => 'images/clients/Zipstack.jpg'],
          (object) ['logo' => 'images/clients/Zoho.jpg'],
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
