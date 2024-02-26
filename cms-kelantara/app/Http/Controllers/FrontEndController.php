<?php

namespace App\Http\Controllers;

use Share;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Service;
use App\Models\PortoType;
use App\Models\Testimoni;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Models\SpecialService;

class FrontEndController extends Controller
{
    public function home(){
        $service = Service::latest()->get();
        $ss = SpecialService::latest()->get();
        $blog = Blog::latest()->get();
        $porto = Portofolio::latest()->get();
        $testi = Testimoni::latest()->get();
        $client = Client::latest()->get();
        $portoType = PortoType::latest()->get();
        $shareComponent = Share::currentPage()
        ->facebook()
        ->twitter()
        ->telegram()    
        ->whatsapp();   
        return view('frontend.index', compact('shareComponent','service', 'ss', 'blog', 'porto', 'portoType', 'testi', 'client'));
    }

    public function blog(){
        $blog = Blog::latest()->get();
        $shareComponent = Share::currentPage()
        ->facebook()
        ->twitter()
        ->telegram()    
        ->whatsapp();   
        return view('frontend.blog', compact('shareComponent','blog'));
    }

    public function detailblog($slug){
        $detailblog = Blog::where('slug', $slug)->first();
        $shareComponent = Share::currentPage()
        ->facebook()
        ->twitter()
        ->telegram()    
        ->whatsapp();   
        return view('frontend.detailblog', compact('shareComponent','detailblog'));
    }

    public function detailspecialservice($slug){
        $shareComponent = Share::currentPage()
        ->facebook()
        ->twitter()
        ->telegram()    
        ->whatsapp();   
        $detailserv = SpecialService::where('slug', $slug)->first();
        return view('frontend.detailss', compact('shareComponent','detailserv'));
    }

    public function detailporto($slug){
        $detailporto = Portofolio::where('slug', $slug)->first();
        return view('frontend.detailporto', compact('detailporto'));
    }
}
