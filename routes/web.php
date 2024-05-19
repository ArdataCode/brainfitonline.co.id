<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Settings;
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

Route::get('/', function () {
    $setting = Settings::first();
    $whatsapp = $setting->whatsapp;
    return view('index', compact('whatsapp'));
});

Route::get('/en', function () {
    $setting = Settings::first();
    $whatsapp = $setting->whatsapp;
    return view('index-en', compact('whatsapp'));
});

Route::post('/email-send', function (Request $request) {
    // dd(4);
    $setting = Settings::first();
    $email = $setting->email;

    $to_name = 'admin';
    $to_email = env("MAIL_TARGET", $email);
    $data = $request->all();
    Mail::send('email', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('New User Registered');
        $message->from('indonesiabrainfit@gmail.com','BraintFIT APP');
    });


    return redirect()->back()->with('success', 'Email sent successfully');
})->name('email-send');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $setting = Settings::first();
        if(!$setting){
           $setting = Settings::create([
                'whatsapp' => '',
                'email' => ''
            ]);
        }
        return view('dashboard', compact('setting'));
    })->name('dashboard');
    Route::post('/dashboard/update-setting/{id}', function(Request $request){
        $setting = Settings::find(request()->id);
            $setting->whatsapp = request()->whatsapp;
            $setting->email = request()->email;
        $setting->save();

        return redirect()->back()->with('success', 'Setting updated successfully');
    })->name('dashboard.update-setting');
});
