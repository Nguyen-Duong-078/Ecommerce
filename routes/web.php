<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
    | Đây là nơi bạn có thể đăng ký các tuyến web cho ứng dụng của mình. Những cái này
    | các tuyến đường được tải bởi RouteServiceProvider và tất cả chúng sẽ
    | được gán vào nhóm phần mềm trung gian "web". Hãy làm điều gì đó tuyệt vời!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);
