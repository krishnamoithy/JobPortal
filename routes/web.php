<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KrishController;
use App\http\controllers\DashController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });



Route::get('/', [KrishController::class, 'home'])->name('home');

Route::get('about',[krishcontroller::class,'about'])->name('about');

Route::get('contact-us',[krishcontroller::class,'contact'])->name('contact');

Route::get('categories',[krishcontroller::class,'categories'])->name('categories');

Route::get('register',[krishcontroller::class,'register'])->name('register');

Route::get('blog-detail',[krishcontroller::class,'blogdetail'])->name('blog-detail');

Route::get('blog',[krishcontroller::class,'blog'])->name('blog');

Route::get('candidate-details',[krishcontroller::class,'candidatedetails'])->name('candidate-details');

Route::get('candidate-listing',[krishcontroller::class,'candidatelisting'])->name('candidate-listing');

Route::get('coming-soon',[krishcontroller::class,'comingsoon'])->name('coming-soon');

Route::get('company-details',[krishcontroller::class,'companydetails'])->name('company-details');

Route::get('company-listing',[krishcontroller::class,'companylisting'])->name('company-listing');

Route::get('company-register',[krishcontroller::class,'companyregister'])->name('company-register');

Route::get('employer-login',[krishcontroller::class,'employerlogin'])->name('employer-login');

Route::get('employer-register',[krishcontroller::class,'employerregister']);

Route::get('faq',[krishcontroller::class,'faq'])->name('faq');

Route::get('job-details',[krishcontroller::class,'jobdetails'])->name('job-details');

Route::get('job-listing',[krishcontroller::class,'joblisting'])->name('job-listing');

Route::get('forgot-password',[krishcontroller::class,'forgotpassword'])->name('forgot-password');

Route::get('login',[krishcontroller::class,'login'])->name('user.login');

Route::get('pricing',[krishcontroller::class,'pricing'])->name('pricing');

Route::get('pnot-found',[krishcontroller::class,'notfound'])->name('not-found');

Route::get('profile',[krishcontroller::class,'profile'])->name('profile');

Route::get('post-job',[krishcontroller::class,'postjob'])->name('post-job');

Route::get('term-conditions',[krishcontroller::class,'tremconditions'])->name('term-conditions');

Route::post('signupstore',[krishcontroller::class,'signupstore'])->name('signupstore');

Route::post('companystore',[krishcontroller::class,'companystore'])->name('companystore');


Route::get('dashboard',[krishcontroller::class,'dashboard'])->name('dashboard');

Route::get('calendar', [KrishController::class, 'appscalendar'])->name('calendar');

Route::get('chat', [KrishController::class, 'appschat'])->name('chat');

Route::get('email', [KrishController::class, 'appsemail'])->name('email');

Route::get('filemanagement', [KrishController::class, 'appsfilemanagement'])->name('filemanagement');

Route::get('passreset', [KrishController::class, 'passreset'])->name('passreset');





Route::get('comcalendar', [KrishController::class, 'comcalendar'])->name('comcalendar');

Route::get('comchat', [KrishController::class, 'comchat'])->name('comchat');

Route::get('comemail', [KrishController::class, 'comemail'])->name('comemail');

Route::get('comfilemanagement', [KrishController::class, 'comfilemanage'])->name('comfilemanage');

Route::get('compassreset', [KrishController::class, 'compassreset'])->name('compassreset');


    // Admin

Route::get('admin', [KrishController::class, 'admin'])->name('admin');



Route::get('approved', [KrishController::class, 'approved'])->name('approved');

Route::get('approve', [KrishController::class, 'approve'])->name('approve');

Route::get('employee', [KrishController::class, 'employee'])->name('employee');

Route::get('employer', [KrishController::class, 'employer'])->name('employer');

Route::post('empapprove', [krishController::class, 'empapprove'])->name('empapprove');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [krishController::class, 'logout'])->name('logout');
});

Route::post('/login', [krishController::class, 'authenticate'])->name('login');


