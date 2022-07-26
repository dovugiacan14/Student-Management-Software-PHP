<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quatrinhhoc;

class qthController extends Controller
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
        $qth = new quatrinhhoc();
        $qth->mahs = $request->mahs;
        $qth->malop = $request->malop;
        $qth->mahk = $request->mahk;
        if($qth->save())
        {
            return response()->json(['message'=>'Thêm học sinh vào lớp thành công']);
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
        $qth = quatrinhhoc::find($id);
        $qth->mahs = $request->mahs;
        $qth->malop = $request->malop;
        $qth->mahk= $request->mahk;
        if($qth->save())
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
        $qth = quatrinhhoc::findOrFail($id);
        if($qth->delete())
        {
            return response()->json(['message'=>'Xóa thành công']);
        }
    }
}
