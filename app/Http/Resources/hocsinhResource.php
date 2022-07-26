<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class hocsinhResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ID'=> $this->id,
            'Họ Tên'=> $this->hoTen,
            'Giới tính' => $this->gioiTinh,
            'Ngày sinh' => $this->ngaySinh,
            'Tuổi'=>$this->tuoi,
            'Địa chỉ'=>$this->diaChi,
        ];
    }
}
