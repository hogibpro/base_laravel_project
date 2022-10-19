<?php

Route::group(['prefix' => '/test', 'as' => 'test.'], function () {
   Route::Post('listing', function () {
       dd(2022);
   });
});
