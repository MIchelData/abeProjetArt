<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get("/horairefiltreClasse/{classe}/{type1?}/{type2?}/{type3?}/{type4?}", [\App\Http\Controllers\Api\HoraireController::class, 'selectEventClasse']);
Route::get('/horairefiltre/{type1?}/{type2?}/{type3?}/{type4?}', [App\Http\Controllers\Api\HoraireController::class, 'selectedEvent']);

Route::get('/', function () {
    return redirect("/app");
});
Route::get('/user/info', function() {
    if (Auth::guard('enseignant')->check()) {
        //dd(Auth::user()->getTable());
        // dd(Auth::guard('enseignant')->user());
        return response()->json(Auth::guard('enseignant')->user());
    }
     if(Auth::guard('eleve')->check()){
         return response()->json(Auth::guard('eleve')->user());
     }
        return response()->json("anonyme");

});
    Route::get('/user/role', function(){
        if (Auth::guard('enseignant')->check()) {
            //dd(Auth::user()->getTable());
            return response()->json("teacher");
        }
        if(Auth::guard('eleve')->check()) {
            return response()->json("student");
        }
            return response()->json("anonymous");
});
/* Route::get('/horairefiltre/{type1?}/{type2?}/{type3?}', [App\Http\Controllers\Api\HoraireController::class, 'selectedEvent']); */
Route::get("/horaire", [App\Http\Controllers\Api\HoraireController::class, 'index']);//->middleware('auth');;
Route::get("/horairetoutesclasses", [App\Http\Controllers\Api\HoraireController::class, 'horairestouteslesclasses']);
//Route::get('/calendrier', [\App\Http\Controllers\calendrierController::class, 'getCoursTachesEleves']);
//Route::get('/test', [\App\Http\Controllers\calendrierController::class, 'getCoursTachesEleves'])->middleware('enseignant');
//Route::get('/calendrier', [\App\Http\Controllers\calendrierController::class, 'getCalendrier']);
//Route::get('/enseignant', [\App\Http\Controllers\calendrierController::class, 'getCoursEnseignant']);
//Route::get('/bonjour', [\App\Http\Controllers\Api\HoraireController::class, 'index']);
//Route::view('/horaire', 'horaireview');
Route::get('/taches',[\App\Http\Controllers\TacheController::class,'index']);
Auth::routes();
/* Route::post('/taches',[TacheController::class,'store']); */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/testflo', function () {
    $pathToFile=public_path('test.json');
    //return flo.json
   /*  dd(file_get_contents($pathToFile)); */
   return response()->file($pathToFile);


   /*  return public\test.json; */
});
Route::get('/testflo2', function () {
    $pathToFile=public_path('test2.json');
    //return flo.json
   /*  dd(file_get_contents($pathToFile)); */
    return response()->file($pathToFile);


   /*  return public\test.json; */
});
