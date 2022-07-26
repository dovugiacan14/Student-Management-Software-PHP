<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\hocsinh;
use App\quatrinhhoc;
use App\Http\Resources\hocsinhResource;

class hocsinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hocsinh = hocsinh::paginate(100);
        return hocsinhResource::collection($hocsinh);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $hocsinh = new hocsinh();
        $hocsinh->hoTen = $request->hoTen;
        $hocsinh->ngaySinh = $request->ngaySinh;
        $hocsinh->gioiTinh= $request->gioiTinh;
        $hocsinh->tuoi= $request->tuoi;
        $hocsinh->diaChi = $request->diaChi;     
        if($hocsinh->tuoi > 20 || $hocsinh->tuoi < 14)
        {
            return response()->json(['message'=>'Tuổi không hợp lệ']);
        }   
        if($hocsinh->save())
        {
            return response()->json(['message'=>'Thêm học sinh thành công']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hocsinhs = hocsinh::all()->where('id',$id);
        $res = new Collection([]);
        foreach($hocsinhs as $hocsinh)
        {   
            $hs = new hocsinh();
            $hs->hoTen =  $hocsinh->hoTen;
            $hs->gioiTinh = $hocsinh->gioiTinh;
            $hs->ngaySinh = $hocsinh->ngaySinh;
            $hs->tuoi = $hocsinh->tuoi;
            $hs->diachi = $hocsinh->diaChi;
            $hs->tinhtrangbaohiem = $hocsinh->quatrinhhoc->trangthaibaohiem;
            $hs->tinhtranghocphi= $hocsinh->quatrinhhoc->trangthaihocphi;
            $res->add($hs);
        }
        return $res;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hocsinh = hocsinh::find($id);
        if(is_null($hocsinh))
        {
            return response()->json(['message'=>'Không tìm thấy học sinh'],404);
        }
        $hocsinh->hoTen = $request->hoTen;
        $hocsinh->ngaySinh = $request->ngaySinh;
        $hocsinh->gioiTinh= $request->gioiTinh;
        $hocsinh->tuoi= $request->tuoi;
        $hocsinh->diaChi = $request->diaChi;
        if($hocsinh->save())
        {
            return response()->json(['message'=>'Cập nhật thành công'],200);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hocsinh = hocsinh::findOrFail($id);
        if($hocsinh->delete())
        {
            return response()->json(['message'=>'Xóa thành công']);
        }
    }

    public function hocsinhkhonglop()
    {
        $hocsinhs = hocsinh::all();
        $res= new Collection();
        foreach($hocsinhs as $hocsinh)
        {
            if($hocsinh->quatrinhhoc==NULL)
            {
                $hs = new hocsinh();
                $hs->hoTen =  $hocsinh->hoTen;
                $hs->gioiTinh = $hocsinh->gioiTinh;
                $hs->ngaySinh = $hocsinh->ngaySinh;
                $hs->tuoi = $hocsinh->tuoi;
                $hs->diachi = $hocsinh->diaChi;
                $res->add($hs);
            }
        } 
        return $res;
    }
}
