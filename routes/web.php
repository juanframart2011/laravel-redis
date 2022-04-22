<?php

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

use Illuminate\Support\Facades\Redis;

/*Route::get('/', function () {

	$redis = app()->make( 'redis' );
	$redis->set( "key1", "testValue" );
	return $redis->get( "key1" );
	//print_r( app()->make( 'redis' ) );
});*/

 
Route::get('/', function () { 
	
	$redis = app()->make( 'redis' );
	$redis->set( "key1", "testValue" );
	return $redis->get( "key1" );
	/*phpinfo();
	/*
	$visits = Redis::incr('visits'); 
	return $visits;*/
});