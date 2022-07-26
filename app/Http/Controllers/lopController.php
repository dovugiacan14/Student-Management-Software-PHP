<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lop;
use App\khoi;
use App\quatrinhhoc;
use App\hocsinh;
use App\quanlylop;
use App\giaovien;
use App\Http\Resources\lopResource;
use Illuminate\Database\Eloquent\Collection;

class lopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $lop = new lop();
        $lop->tenLop = $request->tenLop;
        $lop->makhoi = $request->makhoi;
        if($lop->save())
        {
            return response()->json(['message'=>'Thêm lớp thành công']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $lop = lop::find($id);
        if(is_null($lop))
        {
            return response()->json(['message'=>'Không tìm thấy lớp'],404);
        }
        $lop->tenLop = $request->tenLop;
        $lop->makhoi = $request->makhoi;
        if($lop->save())
        {
            return response()->json(['message'=>'Cập nhật thành công']);
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
        $lop = lop::findOrFail($id);
        if($lop->delete())
        {
            return response()->json(['message'=>'Xóa lớp thành công']);
        }
    }

    public function khoilop($id)
    {
        $khoi = khoi::find($id);
        $lops = $khoi->lophoc()->get();
        $res = new Collection();
        foreach($lops as $lop)
        {
            $qlls = $lop->quanlylop()->get();
            foreach($qlls as $qll)
            {
                $data= new quanlylop();
                $data->tenlop = $qll->lop->tenLop;
                $data->loptruong = $qll->loptruong->hoTen;
                $data->gvcn = $qll->giaovien->tenGV;
                $res->add($data);
            }
        }
        return $res;
    }
    public function hocsinhlop($id, $maHK)
    {
        $lop = lop::find($id);
        $qths = $lop->quatrinhhoc()->where('mahk',$maHK)->get();
        $res = new Collection();
        foreach ($qths as $qth) 
        {
            $hs = $qth->hocsinh;
            $hs->tenLop = $lop->tenLop;
            $res->add($hs);
        }
        return $res;
    }
}
