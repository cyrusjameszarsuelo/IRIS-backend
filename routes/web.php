<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CandidateStatusController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegistrationController;


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

/*
|--------------------------------------------------------------------------
| WEBSITE ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    // return view('website.pages.index');
});
// Route::get('/candidates', function () {
//     return view('website.pages.candidates');
// });
// Route::get('/specialist-markets', function () {
//     return view('website.pages.specialistMarkets');
// });
// Route::get('/clients', function () {
//     return view('website.pages.clients');
// });
// Route::get('/login', function () {
//     return view('website.pages.loginRegister');
// });
// // Route::get('/registration', function () {
// //     return view('website.pages.registration');
// // });
// Route::get('/forgot-password', function () {
//     return view('website.pages.forgotPassword');
// });
// Route::get('/privacy-policy', function () {
//     return view('website.pages.privacyPolicy');
// });
// Route::get('/terms-and-conditions', function () {
//     return view('website.pages.termsConditions');
// });
// // Specialist Markets
// Route::get('/specialist-markets/it-telecoms', function () {
//     return view('website.pages.specialistMarkets.itTelecoms');
// });
// Route::get('/specialist-markets/sales-marketing', function () {
//     return view('website.pages.specialistMarkets.salesMarketing');
// });
// Route::get('/specialist-markets/accounts-finance', function () {
//     return view('website.pages.specialistMarkets.accountsFinance');
// });
// Route::get('/specialist-markets/hr-training', function () {
//     return view('website.pages.specialistMarkets.hrTraining');
// });
// Route::get('/specialist-markets/engineering-manufacturing', function () {
//     return view('website.pages.specialistMarkets.engineeringManufacturing');
// });
// Route::get('/specialist-markets/logistics-supply-chain', function () {
//     return view('website.pages.specialistMarkets.logisticsSupplyChain');
// });
// Route::get('/specialist-markets/bpo', function () {
//     return view('website.pages.specialistMarkets/bpo');
// });
// // Job Tips
// Route::get('/job-tips/job-hunting', function () {
//     return view('website.pages.jobTips.jobHunting');
// });
// Route::get('/job-tips/cv-check', function () {
//     return view('website.pages.jobTips.cvCheck');
// });
// Route::get('/job-tips/interview-preparation', function () {
//     return view('website.pages.jobTips.interviewPreparation');
// });
// Route::get('/job-tips/interview-questions', function () {
//     return view('website.pages.jobTips.interviewQuestions');
// });

// // Registration Controller
// Route::resource('/registration', RegistrationController::class);
// Route::get('/get-province', [RegistrationController::class, 'getProvinces']);
// Route::get('/get-city', [RegistrationController::class, 'getCities']);
// Route::get('/get-barangay', [RegistrationController::class, 'getBarangay']);

// /*
// |--------------------------------------------------------------------------
// | IRIS ROUTES
// |--------------------------------------------------------------------------
// */

// Route::get('/iris', [AdminController::class, 'index']);

// // CLIENT
// Route::resource('/iris/clients', ClientController::class);


// // JOBS
// Route::resource('/iris/jobs', JobController::class);

// //NEWS
// Route::resource('/iris/news', NewsController::class);

// // ADMIN UTILITIES
// // Route::resource('/userrole', UserRoleController::class);
// Route::resource('/iris/admin-utilities/candidate-status', CandidateStatusController::class);










Route::get('/checkDB', function (){
    // Test database connection
    try {
        DB::connection()->getPdo();
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
}); 

// Route::get('/migrate', function() {
//     Artisan::call('migrate');
//     dd('migrated');
// });
