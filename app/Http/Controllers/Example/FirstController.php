<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Example\SecondController;
use Illuminate\Support\Facades\view;
use Illuminate\Support\Facades\URL;

class FirstController extends Controller
{
    //__ index method
    public function index(){
        // abort(404);
        return view('contact');
    }
    // country 
    public function country(){
        return view("country");
    }
    // STUDENT STORE method
    public function studentStore(Request $request){
        // dd($request->all());
        // dd($request->name);
        // dd($request->url());
        // dd($request->ip());
        // dd($request->collect());
        $ata = [];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        
        // store in database
        
        // redirect
        // return redirect('/');
        
        // redirect to route
        // return redirect()->route('about.us');
        
        // redirect to external link
        // return redirect()->away('https://google.com');
        
        // redirect to another controller
        // return redirect()->action([SecondController::class,'test']);
        
        // redirect to same page / back
        return redirect()->back()->with('success','Student Inserted');
        
        
    }
    // laravel method
    public function laravel(){
        
        echo URL::current();
        
        // return view('laraveclearl',['name'=>'James']);
        if(view()->exists('page.laravel')){
            return view::make('page.laravel',['name'=>'James']);
        }else{
            echo "Not Available";
        }
    }
    
    // contact store method
    public function store(Request $request){
        
        $validation = $request->validate([
            'fullname'=>'required|max:55',
            'email'=>'required|max:80',
            'password'=>'required|min:6|max:12'
        ]);
        // sore the record on log file
        
        \Log::channel('contactstore')->info('the contact form submitted by'.rand(1,20));
        return redirect()->back();
        
        // dd($request->all());
    }
}
