<?php

Route::group(['Prefix' => 'test2', 'as' => 'test2'], function () {
   Route::post('listing', function () {
       dd(202333);
   });
});
