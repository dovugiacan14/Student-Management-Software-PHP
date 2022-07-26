<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class lopResource extends JsonResource
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
            'Tên lớp'=> $this->tenLop
        ];
    }
}
