<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http; 
use App\Models\contact;

use Illuminate\Support\Facades\DB;
use App\helper\helper;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Validator;
use illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Newsletter;

class Usercontroller extends Controller
{
    public function index() {

        $services = \DB::table('services')->orderBy('servicesId','ASC')->get();
        $footerlink = \DB::table('siteconfig')->orderBy('configId','ASC')->get();
        return view('index', compact('services','footerlink'));
    }

    public function services() {

        $services = \DB::table('services')->orderBy('servicesId','ASC')->get();
    
        return view('service', compact('services'));
    }

    public function whyus() {

        return view('about');
    }

    
    public function testimonials() {

        return view('testimonials');
    }

    public function portfolio() {

        return view('portfolio');
    }

    public function ourteams() {
        $teams = \DB::table('company_team')->orderBy('companyTeamId','ASC')->get();
        return view('ourteams', compact('teams'));
    }

    // contactus
    public function contactus() {

        return view('contactus');
    }

    public function contactusadd(Request $request) 
    {
        try{
        #validation
        $validatedData = $request->validate([
            'contact_name'               => 'required|string|max:255',
            'contact_email'              => 'required|email|regex:/(.*)@gmail\.com/i',
            'contact_subject'            => 'required|string|max:255',
            'contact_message'            => 'required|string|max:255',
        ]);

        $contactus = new contact();
        $contactus->contact_name = $request->contact_name;
        $contactus->contact_email = $request->contact_email; 
        $contactus->contact_subject = $request->contact_subject;
        $contactus->contact_message = $request->contact_message;
        $contactus->save();
            return redirect()->back()->with("message","Query Sent. We will contact you shortly !");
        } catch (Throwable $e) {
            return redirect()->back()->withFail('Something Went Wrong!!');
        }
    }
    // portfolio image view
    public function portfolioview1() {

        return view('portfolio.view1');
    }

    public function portfolioview2() {

        return view('portfolio.view2');
    }
    public function portfolioview3() {

        return view('error.errors');
    }
    public function portfolioview4() {

        return view('portfolio.view4');
    }
    public function portfolioview5() {

        return view('portfolio.view5');
    }
    public function portfolioview6() {

        return view('portfolio.view6');
    }
    public function portfolioview7() {

        return view('portfolio.view7');
    }
    public function portfolioview8() {

        return view('portfolio.view8');
    }
    public function portfolioview9() {

        return view('portfolio.view9');
    }
    public function portfolioview10() {

        return view('portfolio.view10');
    }
    public function portfolioview11() {

        return view('portfolio.view11');
    }
    public function portfolioview12() {

        return view('portfolio.view12');
    }
    public function portfolioview13() {

        return view('portfolio.view13');
    }
    public function portfolioview14() {

        return view('portfolio.view14');
    }
    public function portfolioview15() {

        return view('portfolio.view15');
    }
    public function portfolioview16() {

        return view('portfolio.view16');
    }
    public function portfolioview17() {

        return view('portfolio.view17');
    }
    public function portfolioview18() {

        return view('error.errors');
    }
    public function portfolioview19() {

        return view('portfolio.view19');
    }
    public function portfolioview20() {

        return view('portfolio.view20');
    }
    public function portfolioview21() {

        return view('portfolio.view21');
    }
    public function portfolioview22() {

        return view('portfolio.view22');
    }
    public function portfolioview23() {

        return view('portfolio.view23');
    }
    public function portfolioview24() {

        return view('portfolio.view24');
    }
    public function portfolioview25() {

        return view('portfolio.view25');
    }
    public function portfolioview26() {

        return view('portfolio.view26');
    }
    public function portfolioview27() {

        return view('portfolio.view27');
    }
    public function portfolioview28() {

        return view('portfolio.view28');
    }
    public function portfolioview29() {

        return view('portfolio.view29');
    }
    public function portfolioview30() {

        return view('portfolio.view30');
    }
    public function portfolioview31() {

        return view('portfolio.view31');
    }
    public function portfolioview32() {

        return view('portfolio.view32');
    }
}


