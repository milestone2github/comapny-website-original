<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\YahooController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FixedDepositController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\IpoController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ContactFormController;

// contact-us
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.submit');

// LargeCapFunds
Route::get('/large-cap-funds', [App\Http\Controllers\InvestPlanController::class, 'large_cap_funds'])->name('large_cap_funds');

// SmallCapFunds
Route::get('/small-cap-funds', [App\Http\Controllers\InvestPlanController::class, 'small_cap_funds'])->name('small_cap_funds');

// MidCapFunds
Route::get('/mid-cap-funds', [App\Http\Controllers\InvestPlanController::class, 'mid_cap_funds'])->name('mid_cap_funds');

// invest-plan
Route::get('/invest-plan', [App\Http\Controllers\InvestPlanController::class, 'investPlan'])->name('investPlan');

// mutual-funds
Route::get('/mutual-funds', [App\Http\Controllers\InvestPlanController::class, 'mutualFunds'])->name('mutualFunds');
// about
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'about'])->name('about');

// LargeCapFunds
Route::get('/contact-us', [App\Http\Controllers\AboutController::class, 'contactUs'])->name('contactUs');
// dynamic stats
Route::get('/stats', function() {
  $milestone = DB::connection('milestone_db')
                 ->collection('MintDb')
                 ->count();
  $totalAumRupees = DB::connection('milestone_db')
                      ->collection('MintDb')
                      ->sum('AUM');
                      
  $teamCount = DB::connection('mftransaction_db')
                 ->collection('users')
                 ->count();

  return response()->json([
    'aum'     => (int) floor($totalAumRupees / 10_000_000) ?? 551,
    'clients' => $milestone ?? 6765,
    'team'    => $teamCount+5 ?? 29,
    'years'   => date('Y') - 2006 ?? 19,
  ]);
});

// IPOs routes
Route::get('/ipo', [IpoController::class, 'index'])->name('ipos.index');
Route::get('/ipo/{slug}', [IpoController::class, 'read'])->name('ipos.read');

// API Routes for login with Google 
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// API Routes for login with Yahoo
Route::get('auth/yahoo', [YahooController::class, 'redirectToYahoo'])->name('auth.yahoo');
Route::get('auth/yahoo/callback', [YahooController::class, 'handleYahooCallback']);


// API Routes for fetching data
Route::get('/api/section-one-new', [ContentController::class, 'getSectionOneData']);
Route::get('/api/offerings', [ContentController::class, 'getOfferings']);
Route::get('/api/blogs', [ContentController::class, 'getBlogs']);
Route::get('/api/magazines', [ContentController::class, 'getMagazines']);

Route::get('/test-laravel', function () {
    return view('welcome');
});

Route::get('/', [ContentController::class, 'index']);
// Route::domain('mnivesh.com')->group(function () {
//     Route::get('/', [HomeController::class, 'mnivesh.indexmnivesh']);
//     // Other routes for example1.com
// });

// Route::domain('niveshonline.com')->group(function () {
//     Route::get('/', [HomeController::class, 'niveshonline.index']);
//     // Other routes for example2.com
// });

Route::get('/home', [ContentController::class, 'index']);

Route::get('/Equity-Mutual-Funds', [ServicesController::class, 'equityMutualFund']);
Route::get('/Debt-Mutual-Funds', [ServicesController::class, 'debtMutualFund']);
Route::get('/Hybrid-Mutual-Funds', [ServicesController::class, 'hybridMutualFund']);
Route::get('/life-insurance', [ServicesController::class, 'lifeInsurance']);
Route::get('/health-insurance', [ServicesController::class, 'healthInsurance']);
Route::get('/corporate-insurance', [ServicesController::class, 'corporateInsurance']);
Route::get('/country-codes', [ContentController::class, 'getCountryCodes']);
// Important links services routes 
Route::get('/disclaimer', [ServicesController::class, 'disclaimer']);
Route::get('/disclosure', [ServicesController::class, 'discolosure']);

// FD routes 
Route::get('/fixed-deposit', [FixedDepositController::class, 'index']);
Route::get('/fd-calculator/{slug}', [FixedDepositController::class, 'fd_calculator']);
// stock routes 
Route::view('/domestic-stock-market', 'domestic_stock');
Route::view('/international-stock-market', 'international_stock');

// unlisted detail disclaimer 
Route::view('/unlisted-deal-disclaimer', 'unlisted_disclaimer');

// Blogs routes 
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{slug}', [BlogController::class, 'read'])->name('blog.read');

// Magazines routes 
Route::get('/magazines', [MagazineController::class, 'index'])->name('magazine.index');
Route::get('/magazines/{slug}', [MagazineController::class, 'read'])->name('magazine.read');

// terms and policy routes 
Route::get('/terms-conditions', [TermController::class, 'term'])->name('term');
Route::get('/privacy-policy', [PolicyController::class, 'policy'])->name('policy');