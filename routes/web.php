<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Usercontroller::class,'index'])->name('index');
Route::get('/services', [Usercontroller::class,'services'])->name('services');
Route::get('/whyus', [Usercontroller::class,'whyus'])->name('whyus');
Route::get('/testimonials', [Usercontroller::class,'testimonials'])->name('testimonials');  
Route::get('/portfolio', [Usercontroller::class,'portfolio'])->name('portfolio');  
Route::get('/ourteams', [Usercontroller::class,'ourteams'])->name('ourteams');  

Route::get('/contactus', [Usercontroller::class,'contactus'])->name('contactus');
Route::post('users/contact', [UserController::class,'contactusadd']);

// portfolio image
Route::get('/portfolio/view/1/animal-planet-3d-vr-360', [Usercontroller::class,'portfolioview1']);
Route::get('/portfolio/view/2/tank-rifle', [Usercontroller::class,'portfolioview2']);
Route::get('/portfolio/view/3/rsa-snakes-&-hazards', [Usercontroller::class,'portfolioview3']);
Route::get('/portfolio/view/4/break-the-egg', [Usercontroller::class,'portfolioview4']);
Route::get('/portfolio/view/5/kides-learning', [Usercontroller::class,'portfolioview5']);
Route::get('/portfolio/view/6/abc-memonsters', [Usercontroller::class,'portfolioview6']);
Route::get('/portfolio/view/7/123-memonsters', [Usercontroller::class,'portfolioview7']);
Route::get('/portfolio/view/8/zombie-shooter', [Usercontroller::class,'portfolioview8']);
Route::get('/portfolio/view/9/color-pong', [Usercontroller::class,'portfolioview9']);
Route::get('/portfolio/view/10/hindi-news', [Usercontroller::class,'portfolioview10']);
Route::get('/portfolio/view/11/mahuva-patel-samaj-surat', [Usercontroller::class,'portfolioview11']);
Route::get('/portfolio/view/12/ranpariya-parivar', [Usercontroller::class,'portfolioview12']);
Route::get('/portfolio/view/13/munjapara-parivar', [Usercontroller::class,'portfolioview13']);
Route::get('/portfolio/view/14/cricvilla', [Usercontroller::class,'portfolioview14']);
Route::get('/portfolio/view/15/note-schema', [Usercontroller::class,'portfolioview15']);
Route::get('/portfolio/view/16/phoenix-games', [Usercontroller::class,'portfolioview16']);
Route::get('/portfolio/view/17/sky-touch-business', [Usercontroller::class,'portfolioview17']);
Route::get('/portfolio/view/18/sk-auto-motive &amp; tyres-australia', [Usercontroller::class,'portfolioview18']);
Route::get('/portfolio/view/19/sphere', [Usercontroller::class,'portfolioview19']);
Route::get('/portfolio/view/20/playmate-blog', [Usercontroller::class,'portfolioview20']);
Route::get('/portfolio/view/21/thai-aqua-technology', [Usercontroller::class,'portfolioview21']);
Route::get('/portfolio/view/22/live-coin-rate', [Usercontroller::class,'portfolioview22']);
Route::get('/portfolio/view/23/dot-cricket-multiplayer', [Usercontroller::class,'portfolioview23']);
Route::get('/portfolio/view/24/security-gaze', [Usercontroller::class,'portfolioview24']);
Route::get('/portfolio/view/25/puzzle-challenge', [Usercontroller::class,'portfolioview25']);
Route::get('/portfolio/view/26/kent-stationary', [Usercontroller::class,'portfolioview26']);
Route::get('/portfolio/view/27/black-card-entertainment', [Usercontroller::class,'portfolioview27']);
Route::get('/portfolio/view/28/aditree-bulit', [Usercontroller::class,'portfolioview28']);
Route::get('/portfolio/view/29/you-jump-i-jump', [Usercontroller::class,'portfolioview29']);
Route::get('/portfolio/view/30/bhagavad-gita', [Usercontroller::class,'portfolioview30']);
Route::get('/portfolio/view/31/infinity-tower', [Usercontroller::class,'portfolioview31']);
Route::get('/portfolio/view/32/ring-rush', [Usercontroller::class,'portfolioview32']);



