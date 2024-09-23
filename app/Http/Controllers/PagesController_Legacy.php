<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Work;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PagesController_Legacy extends Controller
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
            ])->latest()->limit(8)->get();

        $featuredPersonal = Collection::where([
                ['corporate_hamper_flag', 0],
                ['is_active', 1],
            ])->latest()->first();
        
        $recentWorks = Work::where([
                ['is_active', 1],
                ['is_featured', 1],
            ])->latest()->limit(3)->get();

        if($request->q == "test") {
            return view('pages.home')->with([
                'clients' => $clients,
                'featuredCorporate' => $featuredCorporate,
                'featuredPersonal' => $featuredPersonal,
                'recentWorks' => $recentWorks
            ]); 
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
    }

    public function corporateGifting(Request $request) {
        $corporate = Collection::where('corporate_hamper_flag', 1)->get();
        
        if($request->q == "test") {
            // return view('pages.corporate')->with([
            //     'corporate' => $corporate,
            // ]);
            return Redirect::to('/under-maintenance', 301); 
        } else {
            return Redirect::to('/under-maintenance', 301); 
        }
        
    }

    public function personalGifting(Request $request) {
        $corporate = Collection::where('corporate_hamper_flag', 0)->get();
        
        if($request->q == "test") {
            // return view('pages.personal')->with([
            //     'corporate' => $corporate,
            // ]);
            return Redirect::to('/under-maintenance', 301); 
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
                'phone' => '+919150241115',
                'email' => 'info@radgifts.in',
                'address' => (object) [
                    'building_no' => '55/6',
                    'street' => 'VN Doss Rd, Mount Road',
                    'area' => 'Pudupakkam, Triplicane',
                    'city' => 'Chennai',
                    'state' => 'Tamil Nadu',
                    'zipcode' => '600002',
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

    public function newsletter(Request $request) {
        $data = $request->validate([
            'name' => 'required|min:3|max:64',
            'email' => 'required|email|unique:newsletters,email',
        ]);

        $name = $data['name'];
        $email = $data['email'];
    
        $message = "<h1> New Newsletter Subscription From ".$name."</h1>";
        $message .= "<table width='100%'> <tr> <td>";
        $message .= "Email: </td> <td> ".$email."</td></tr> </table>";
        
        $to = "info@radgifts.in";
        $subject = "Newsletter Subscription for radgifts.in - ".$name;

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <webadmin@radgifts.in>' . "\r\n";
        $headers .= 'CC: mandraledstudios@gmail.com' . "\r\n";

        Newsletter::create($data);

        if(mail($to, $subject, $message, $headers)) {
            return redirect()->back()->with([
                    "message" => "sent",
                    "q" => "test",
                ]);
        } else {
            return redirect()->back()->with([
                    "message" => "failed",
                    "q" => "test",
                ]);
        }
    }

    public function mail(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $city = $request->city;
        $message = "<h1> New Query From ".$name."</h1>";
        $message .= "<table width='100%'> <tr> <td>";
        $message .= "Email: </td> <td> ".$email."</td></tr> <tr><td>";
        $message .= "Phone: </td> <td> ".$phone."</td></tr> <tr><td>";
        $message .= "City: </td> <td> ".$city."</td></tr> <tr><td>";
        $message .= "Message: </td> <td> ".$request->message."</td></tr> </table>";
        
        $to = "info@radgifts.in";
        $subject = "Query from website - ".$name;

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <webadmin@radgifts.in>' . "\r\n";
        $headers .= 'CC: mandraledstudios@gmail.com' . "\r\n";
        
        if(mail($to, $subject, $message, $headers)) {
            return redirect(route('pages.contact'))->with([
                    "message" => "sent",
                    "q" => "test",
                ]);
        } else {
            return redirect(route('pages.contact'))->with([
                    "message" => "failed",
                    "q" => "test",
                ]);
        }
    }
}
