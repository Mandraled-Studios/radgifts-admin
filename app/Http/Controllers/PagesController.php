<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Instapost;
use App\Models\Collection;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{

    public function maintenance() {
        return view('pages.maintenance');
    }

    public function home(Request $request) { 
        $clients = [
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-anora.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-big-fm.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-blue-star.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-dhl.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-elite-global.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-encora.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-facilio.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-finzly.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-hexamap.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-in2-computing.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-infoview.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-invisibl-cloud.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-kamakshi-enterprises.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-madhampatty-pakashala.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-miratech.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-next-billion-ai.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-nielsen-iq.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-phelan.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-rocketlane.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-saas-boomi.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-scalekit.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-shell.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-spritle.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-sundaram-alternates.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-superops.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-tiger.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-us-commercial-service.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-yoga-works.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-zenminds.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-zipstack.jpg'],
          (object) ['logo' => 'https://radgifts.in/storage/media/client-logo-zoho.jpg'],
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

        $instaposts = Instapost::whereNull('deleted_at')
                                    ->latest()
                                    ->limit(9)
                                    ->get();

        return view('pages.home')->with([
            'clients' => $clients,
            'featuredCorporate' => $featuredCorporate,
            'featuredPersonal' => $featuredPersonal,
            'recentWorks' => $recentWorks,
            'instaposts' => $instaposts
        ]); 
    }

    public function corporateGifting(Request $request) {
        $corporate_collections = Collection::where('corporate_hamper_flag', 1)->get();
        
        return view('pages.corporate-collections')->with([
            'corporate_collections' => $corporate_collections,
        ]);
        
        //return Redirect::to('/under-maintenance', 301); 
        
    }

    public function corporateHampers($collection, Request $request) {
        $corporate_collection = Collection::where([
            ['corporate_hamper_flag', 1],
            ['slug', $collection],
        ])->first();
        
        return view('pages.corporate-collection-hampers')->with([
            'corporate_collection' => $corporate_collection,
        ]);
        
        //return Redirect::to('/under-maintenance', 301); 
        
    }

    public function personalGifting(Request $request) {
        $personal = Collection::where('corporate_hamper_flag', 0)->firstOrFail();

        $gifts = $personal->hampers;
        
        return view('pages.personal')->with([
            'gifts' => $gifts,
        ]);
        //return Redirect::to('/under-maintenance', 301); 
        
    }

    public function ourWorks(Request $request) {
        $works = Work::all();

        return view('pages.ourworks')->with([
            'works' => $works,
        ]);
    }

    public function workDetails($work, Request $request) {
        $chosenWork = Work::where('slug', $work)->first();

        return view('pages.workDetail')->with([
            'work' => $chosenWork 
        ]);
    }

    public function about(Request $request) {
        return view('pages.about');
    }

    public function contact(Request $request) {
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
    }
    public function faq(Request $request) {
        return view('pages.faq');
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
                ]);
        } else {
            return redirect()->back()->with([
                    "message" => "failed",
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
                ]);
        } else {
            return redirect(route('pages.contact'))->with([
                    "message" => "failed",
                ]);
        }
    }
}
