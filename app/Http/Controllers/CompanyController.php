<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use \App\Mail\NewMail;
use DB;
use Validator, Redirect, Response;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies.index');
    }


    public function postRegistration(Request $request){
        $validated = $request->validate(User::$report_rules); 
        
        $create = User::create(
            [
                'name' => $validated['fname'],
                'lname' => $validated['fname'],
                'email' => $validated['email'],
               
        
                
            ]
           
        );
        $result = \DB::table('users')->latest('id')->first();
        $id = $result->id;
        

        $email = $validated['email'];
        $mailData = [
            'title' => 'Congratulations Registration is successfull : ',
            
        ];

        Mail::to($email)->send(new \App\Mail\NewMail($mailData));
        if ($create) {
            return view('index')->with(['success' => 'Email has been send']);
        }

    }
}
