<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\CompanyDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class krishcontroller extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contact()
    {
        return view('contact-us');
    }
    public function register()
    {
        return view('register');
    }
    /**
     * Display the specified resource.
     */
    public function blogdetail()
    {
        return view('blog-detail');
    }
    public function categories()
    {
        return view('categories');
    }
    public function blog()
    {
        return view('blog');
    }
    public function candidatedetails()
    {
        return view('candidate-details');
    }
    public function candidatelisting()
    {
        return view('candidate-listing');
    }
    public function comingsoon()
    {
        return view(' coming-soon');
    }
    public function companydetails()
    {
        return view(' company-details');
    }
    public function companylisting()
    {
        return view('company-listing');
    }
    public function companyregister()
    {
        return view('company-register');
    }
    public function employerlogin()
    {
        return view('employer-login');
    }
    public function faq()
    {
        return view('faq');
    }
    public function forgotpassword()
    {
        return view('forgot-password');
    }
    public function jobdetails()
    {
        return view('job-details');
    }
    public function joblisting()
    {
        return view('job-listing');
    }
    public function login()
    {
        return view('login');
    }
    public function notfound()
    {
        return view(' not-found');
    }
    public function postjob()
    {
        return view(' post-job');
    }
    public function pricing()
    {
        return view('pricing');
    }
    
    public function tremconditions()
    {
        return view('term-conditions');
    }


    public function signupstore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'type' => 'required|in:Employee,Employer',
        ], [
            'email.unique' => 'The email has already been taken.',
            'username.unique' => 'The username has already been taken.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->type = $request->type;
        $user->status = $request->type === 'Employee' ? 1 : 0;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->withSuccess('User created successfully.');
    }

    public function companystore(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'tagline' => 'required',
            'category' => 'required',
            'ownername' => 'required',
            'location' => 'required',
            'established'=>'required',
            'mobile'=>'required',
            'landline'=>'required',
            'email'=>'required',
        ], [
            'email.unique' => 'The email has already been taken.',
            'mobile.unique' => 'The Mobile Number    has already been taken.',
        ]);


       // Create a new company
        $company = new CompanyDetails();
        $company->name = $request->name;
        $company->tagline = $request->tagline;
        $company->category = $request->category;
        $company->ownername = $request->ownername;
        $company->location = $request->location;
        $company->established = $request->established;
        $company->mobile = $request->mobile;
        $company->landline = $request->landline;
        $company->email = $request->email;
        $company->save();

        // Redirect to the index page or any other desired page
        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



    // Employee Dashboard

    public function appscalendar()
    {
        return view('employee.calendar');
    }
    public function appschat()
    {
        return view('employee.chat');
    }
    public function appsemail()
    {
        return view('employee.email');
    }
    public function appsfilemanagement()
    {
        return view('employee.filemanagement');
    }
    public function dashboard()
    {
        return view('employee.dashboard');
    }
    public function passreset()
    {
        return view('employee.passreset');
    }


    // CompanyDetails Dashboard

    public function comlogout()
    {
        return view('company.comlogout');
    }

    public function comcalendar()
    {
        return view('company.comcalender');
    }

    public function comchat()
    {
        return view('company.comchat');
    }

    public function comemail()
    {
        return view('company.comemail');
    }

    public function comfilemanage()
    {
        return view('company.commanage');
    }

    public function compassreset()
    {
        return view('company.compassreset');
    }

    // Admin

    public function admin(user $user)
    {
        $user = User::all();
    return view('admin.admin', compact('user'));
    }

    public function employer(user $user)
    {
        $user = User::all();
            return view('admin.employer',compact('user'));
    }

    public function employee(user $user)
    {
        $user = User::all();
            return view('admin.employee',compact('user'));
    }
    public function empapprove(Request $request)
    {
        $employer = User::find(
            $request->employer_id
        );
        $employer->status = 1;
        $employer->save();

        return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->status == 0) {
            return back()->withErrors([
                'is_approved' => 'User not approved.',
            ]);
        }
        $role = $user->type;

        if ($role === 'admin') {
            return redirect()->intended('Admin/admin');
        } elseif ($role === 'employer') {
            return redirect()->intended('employer/dash-employer');
        } elseif ($role === 'employee') {
            return redirect()->intended('employee/jobcard');
        }

        return redirect()->intended('dashboard');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}

}
