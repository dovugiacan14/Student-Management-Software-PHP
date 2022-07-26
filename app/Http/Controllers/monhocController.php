<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\monhoc;
use App\Http\Resources\monhocResource;

class monhocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monhoc = monhoc::paginate(100);
        return monhocResource::collection($monhoc);
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
        $monhoc = new monhoc();
        $monhoc->tenMonhoc = $request->tenMonhoc;
        $monhoc->diemdat = $request->diemdat;
        if($monhoc->save())
        {
            return response()->json(['message'=>'Thêm môn học thành công']);
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
        $monhoc = monhoc::find($id);
        if(is_null($monhoc))
        {
            return response()->json(['message'=>'Không tìm thấy môn học'],404);
        }
        $monhoc-> tenMonhoc= $request->tenMonhoc;
        $monhoc->diemdat = $request->diemdat;
        if($monhoc->save())
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
        $monhoc = monhoc::findOrFail($id);
        if($monhoc->delete())
        {
            return response()->json(['message'=>'Xóa thành công']);
        }
    }
}
