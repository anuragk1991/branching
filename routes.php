<?php


Route::get('/login', function(){
	//logic here

	set_session('user');
});


Route::get('/logout', function(){
	//logout here
	
	session_destroy();

});