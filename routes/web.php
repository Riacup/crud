<?php



Route::get('/', function () {
    echo "hello world";
    //return view('welcome');
});

//   method uri     controller     funct.
Route::get('hello','HelloController@contoh_bootstrap')->name('hello.index');

Route::get('test','TestController@test')->name('test');

// membuat halaman login
Route::get('login','LoginController@login')->name('login');

Route::get('blank','TestController@blank')->name('blank');

Route::get('blank',function(){
	return view('blank');
})->name('blank');

// membuat route baru dengan view baru mengimplementasikan extending layout dan komponen

Route::get('chart',function(){
	return view('chart');
})->name('chart');

Route::get('flot',function(){
	return view('flot');
})->name('flot');

Route::get('preloader',function(){
	return view('preloader');
})->name('preloader');

Route::get('animations',function(){
	return view('animations');
})->name('animations');

Route::get('test_db', 'HelloController@test_db')
		->name('test_db');

Route::get('tabel',function(){
	return view('tabel');
})->name('tabel');


Route::get('test_store', function(){

	//select data

	// $store = \App\Store::limit(10)->get();
	//die and dump
	// dd($store);
	//insert data

	$data = [
		'store_id'	=> 1,

		'first_name'=> 'Lorem',

		'last_name'	=> 'Ipsum',

		'email'		=> 'lorem@ipsum.com',

		'address_id'	=> 1,

		'active'	=> '1'

	];



	\App\Customer::create($data);



	// insert 



	$c = new \App\Customer();

	$c->store_id = '1';

	$c->first_name = 'Selamat';

	$c->last_name = 'Siang';

	$c->email = 'selamat@siang.com';

	$c->address_id = '1';

	$c->active = '1';

	$c->save();



	return "sukses";

});


Route::get('test_store','TestController2@index'); //untuk memanggil

Route::get('join','TestController2@join_store_to_customer');

Route::resource('kontak','Kontak'); //tambahkan baris ini

Route::get('/', function () {
    return view('index');
});
Route::get('/halaman-kedua', function () {
    return view('halamandua');
});



Route::get('city','TabelController@index');

Route::post('insert','TabelController@create')->name('tambah');

Route::post('edit','TabelController@update')->name('ubah');

Route::post('deleted','TabelController@delete')->name('hapus');

//Memanggil dibrowsernya

Route::resource('citys','CityController');

Route::get('/cityss','CityController@index');
	//RESOURCE DISINI MEWAKILI BEBERAPA ROUTE, YAITU:

//	Route::get('city','CityController@index')->name('city.index');

//	Route::get('city/create','CityController@create')->name('city.create');

//	Route::post('city','CityController@store')->('customer.store');

//	Route::get('city/{id}/edit','CityController@edit')->name('city.edit');

//	Route::put('city/{id}','CityController@update')->name('city.update');

//	Route::get('city/{id}','CityController@show')->name('city.show');

//	Route::put('city/{id}','CityController@destroy')->name('city.destroy');


	//JIKA DR KE-7 DIATAS TDK INGIN DITAMPILKAN SEMUA CUKUP DENGAN MENULIS :

//	Route::resource('citys','CityController')->except('show','destroy');   ==> berarti tidak menampilkan show dan delete
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
