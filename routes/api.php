<?php

use Illuminate\Http\Request;
use App\Http\Controllers\hocsinhController;
use App\Http\Controllers\lopController;
use App\Http\Controllers\khoiController;
use App\Http\Controllers\qthController;
use App\Http\Controllers\hockiController;
use App\Http\Controllers\monhocController;
use App\Http\Controllers\chuongtrinhhocController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

#                       ================= HỌC SINH =============================

Route::get('/hocsinhs',[hocsinhController::class,'index']); # hiện tất cả học sinh
Route::post('/hocsinh',[hocsinhController::class,'store']); # thêm học sinh 
Route::get('/hocsinhs/{id}',[hocsinhController::class,'show']);  # tra cuu hoc sinh theo id
Route::put('/hocsinhs/{id}',[hocsinhController::class,'update']);  # thay đổi thông tin học sinh
Route::delete('/hocsinhs/{id}',[hocsinhController::class,'destroy']); # xóa học sinh


#                       ===================== LỚP ==============================

Route::post('/lop',[lopController::class,'store']); # thêm lớp

Route::put('/lop/{id}',[lopController::class,'update']);  # thay đổi thông tin lớp

Route::delete('/lop/{id}',[lopController::class,'destroy']); # xóa lớp

Route::get('/khoilop/{id}',[lopController::class,'khoilop']); # Hiển thị khối và tên lớp


Route::get('/khoi',[khoiController::class,'index']); # hiện tất cả các khối

Route::post('/quatrinhhoc',[qthController::class,'store']); # thêm học sinh vào lớp
Route::put('/quatrinhhoc/{id}',[qthController::class,'update']);  # chuyển lớp cho học sinh
Route::delete('/quatrinhhoc/{id}',[qthController::class,'destroy']); # xóa học sinh ra khỏi lớp

# Hiện tất cả học sinh trong lớp
Route::get('/hocsinhlop/{id}/{mahk}',[lopController::class,'hocsinhlop']);

# Kiểm tra sĩ số của mỗi lớp
Route::get('/hocsinhcount',function(){
    $lop = App\lop::all();
    foreach($lop as $lops)
    {
        $res = 0;
        echo $lops->tenLop;
        echo '<br>';
        foreach($lops->quatrinhhoc as $qth)
        {
            if($qth->hocsinh!=NULL)
            {
                $res = $res + 1;
            }
            echo '<br>';
        }
        if($res > 40)
        {
            echo "Sĩ số lớp đã đủ";
        }
        echo $res;
        echo '<hr>';
    }
});

# Hiển thị học sinh chưa có lớp
Route::get('/hschuacolop',[hocsinhController::class,'hocsinhkhonglop']);

Route::post('/hocky',[hockiController::class,'store']); # Thêm học kỳ và năm học mới (nếu cần)


//                ========================= CHƯƠNG TRÌNH HỌC =============================


Route::get('/monhoc',[monhocController::class,'index']); # Hiện ra tất cả danh sách môn học và điểm đạt
Route::post('/monhocs',[monhocController::class,'store']); # Thêm môn học 
Route::put('/monhoc/{id}',[monhocController::class,'update']);  # thay đổi điểm đạt môn học
Route::delete('/monhoc/{id}',[monhocController::class,'destroy']); # xóa môn học 


# Hiển thị khối và các môn học có trong khối 
Route::get('/cthkhoi', function(){
    $khoi = App\khoi::all();
    foreach($khoi as $khois)
    {
        echo $khois->tenKhoi;
        echo '<br>';
        foreach($khois->chuongtrinhhoc as $cth)
        {
            echo $cth->monhoc->tenMonhoc.' ';
            echo $cth->heso;
            echo '<br>';
        }
        echo '<hr>';
    }
});

Route::post('/cth',[chuongtrinhhocController::class,'store']);  # Thêm môn học cho khối (thêm chương trình học)
Route::delete('/cth/{id}',[chuongtrinhhocController::class,'destroy']); # xóa môn học ra khỏi khối 
Route::put('/cth/{id}',[chuongtrinhhocController::class,'update']);  # thay đổi hệ số môn học của khối

// ============================= QUẢN LÝ ĐIỂM MÔN HỌC =============================







