<?php

// namespace App\Http\Controllers;

// use App\Models\AboutSection;
// use App\Models\CardAboutSection;
// use App\Models\CardService;
// use App\Models\CarouselImg;
// use App\Models\ContactSection;
// use App\Models\DeviceService;
// use App\Models\FeatureService;
// use App\Models\Footer;
// use App\Models\HomeTitle;
// use App\Models\Logo;
// use App\Models\Promotion;
// use App\Models\Service;
// use App\Models\Team;
// use App\Models\Testimonial;
// use Illuminate\Support\Str;
// use Illuminate\Http\Request;


// class AllPagesController extends Controller
// {
//     public function home(){
        
//         $aboutSections = AboutSection::all();
//         $cardAboutSections = CardAboutSection::all();

//         $logos = Logo::all();
//         $carouselImgs = CarouselImg::all();
        
//         $testimonials = Testimonial::all();
        
//         $services = Service::all();
//         $teams = Team::all();
//         $promotions = Promotion::all();
//         $contactSections = ContactSection::all();
//         $homeTitres = HomeTitle::all();
//         return view('home' , compact('aboutSections' , 'cardAboutSections' , 'logos' , 'carouselImgs' , 'testimonials' , 'services' , 'teams' , 'promotions' , 'contactSections' , 'homeTitres'));
//     }

//     public function service(){
//         $contactSections = ContactSection::all();
//         $url = url()->current();
//         $urlCurrent = Str::afterLast($url, '/');
//         $services = Service::all();
//         $featureRandomFor3 = FeatureService::inRandomOrder()->limit(3)->get();
//         $cardServices = CardService::all();
//         $contactSections = ContactSection::all();
//         $serviceTitres = ServiceTitle::all();
//         $deviceServices = DeviceService::all();
//         $footers = Footer::all();

//         return view('frontend.pages.services' , compact('urlCurrent' , 'services' , 'serviceTitres' ,
//         'featureRandomFor3' , 'contactSections' , 'cardServices' , 'deviceServices' , 'footers'));
//     }

//     public function contact(){
//         $url = url()->current();
//         $urlCurrent = Str::afterLast($url, '/');
//         $contactSections = ContactSection::all();
//         $footers = Footer::all();
//         return view('frontend.pages.contact' , compact('urlCurrent','contactSections' , 'footers'));
//     }

//     public function blog(){
//         $url = url()->current();
//         $urlCurrent = Str::afterLast($url, '/');
//         $footers = Footer::all();
//         return view('frontend.pages.blog' , compact('urlCurrent' , 'footers'));
//     }

//     public function blogPost(){
//         $url = url()->current();
//         $urlCurrent = Str::afterLast($url, '/');
//         $footers = Footer::all();
//         return view('frontend.pages.blog-post' , compact('urlCurrent' , 'footers'));
//     }

// }



namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\CardAboutSection;
use App\Models\CardService;
use App\Models\CarouselImg;
use App\Models\ContactSection;
use App\Models\DeviceService;
use App\Models\FeatureService;
use App\Models\Footer;
use App\Models\HomeTitle;
use App\Models\Logo;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\ServiceTitle;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AllPagesController extends Controller
{
    public function home(){
        $intros = Logo::all();
        $carouselIntros = CarouselImg::all();
        $aboutSections = AboutSection::all();
        $cardAboutSections = CardAboutSection::all();
        $testimonials = Testimonial::all();
        $serviceRandomFor3 = Service::inRandomOrder()->limit(3)->get();
        $serviceRandomFor9 = Service::inRandomOrder()->limit(9)->get();
        $teams = Team::where('job_member' ,'!=' , 'C.E.O')->get();
        $teamRandom1s = $teams->random(1);
        $teamRandom2s = $teams->random(1);
        $ceos = Team::where('job_member' , '=' , 'C.E.O')->get();
        $promotions = Promotion::all();
        $contactSections = ContactSection::all();
        $homeTitres = HomeTitle::all();
        $footers = Footer::all();
        return view('home' , compact('aboutSections' , 'cardAboutSections' , 'intros' ,
        'testimonials' , 'serviceRandomFor3' , 'serviceRandomFor9' , 'teamRandom1s' , 'teamRandom2s' ,
        'ceos' , 'promotions' , 'contactSections' , 'homeTitres' , 'footers' , 'carouselIntros'));
    }

    public function service(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $services = Service::all();
        $featureRandomFor3 = FeatureService::inRandomOrder()->limit(3)->get();
        $cardServices = CardService::all();
        $contactSections = ContactSection::all();
        $serviceTitres = ServiceTitle::all();
        $deviceServices = DeviceService::all();
        $footers = Footer::all();
        return view('frontend.pages.services' , compact('urlCurrent' , 'services' , 'serviceTitres' ,
        'featureRandomFor3' , 'contactSections' , 'cardServices' , 'deviceServices' , 'footers'));
    }

    public function contact(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $contactSections = ContactSection::all();
        $footers = Footer::all();
        return view('frontend.pages.contact' , compact('urlCurrent','contactSections' , 'footers'));
    }

    public function blog(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $footers = Footer::all();
        return view('frontend.pages.blog' , compact('urlCurrent' , 'footers'));
    }

    public function blogPost(){
        $url = url()->current();
        $urlCurrent = Str::afterLast($url, '/');
        $footers = Footer::all();
        return view('frontend.pages.blog-post' , compact('urlCurrent' , 'footers'));
    }
}
