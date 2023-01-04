<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium corporis at ea nobis quos facilis magni voluptate quia aliquam natus, vitae inventore velit dicta! Vitae nemo assumenda obcaecati quia laborum.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium corporis at ea nobis quos facilis magni voluptate quia aliquam natus, vitae inventore velit dicta! Vitae nemo assumenda obcaecati quia laborum.'
            ]
        ]
    ]);
});
