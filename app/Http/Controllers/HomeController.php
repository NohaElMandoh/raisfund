<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Project;
use App\Models\Review;
use App\Models\Service;
use App\Models\Sponsor;
use App\Models\Team;
use App\Models\Website;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use WeakMap;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $site_details=Website::first();
        $services=Service::get();
        $projects=Project::get();
        $teams=Team::get();
        $faqs=Faq::get();
        $plans=Plan::get();
        $sponsors=Sponsor::get();
        $reviews=Review::get();
 
        return view('front.home',compact('site_details','services','projects','teams','faqs','plans','sponsors','reviews'));
    }
    public function contact_Us(Request $request)
    {
      $input = $request->all();
      $saved = Contact::create($input);
      if ($saved) {
         
          return response()->json(['message' => 'Success!']);
      }else{
          return response()->json(['message' => 'Error!']);
      }
    }
    public function order(Request $request)
    {
      $input = $request->all();
      $saved = Order::create($input);
      if ($saved) {
         
          return response()->json(['message' => 'Success!']);
      }else{
          return response()->json(['message' => 'Error!']);
      }
    }
    public function payment(Request $request){
        $countries=Country::get();
        $package_id=$request->id;
        return view('front.payment',compact('countries','package_id'));
    }
    public function cities_by_country_id(Request $request){
        
    
        $cities=City::where('country_id',$request->country_id)->get();
      
        if ($cities) {
         
            return response()->json(['message' => 'Success!','cities'=>$cities]);
        }else{
            return response()->json(['message' => 'Error!']);
        }
    }
    public function project(Request $request){
       
        $project=Project::where('id', $request->id)->first();
        return view('front.project_details',compact('project'));
    }
}
