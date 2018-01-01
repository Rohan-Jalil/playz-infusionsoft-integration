<?php
/**
 * Created by PhpStorm.
 * User: rohan
 * Date: 12/22/17
 * Time: 8:02 PM
 */

use Illuminate\Support\Facades\DB;

Route::get('playz', function(){
    echo "Something awesome is happening";
});

Route::get('add/{a}/{b}', 'Agencymates\Playz\PlayzController@add');
Route::get('subtract/{a}/{b}', 'Agencymates\Playz\PlayzController@subtract');

