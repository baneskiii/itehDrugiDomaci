<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'room';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'floor' => $this->resource->floor,
            'area_in_square_meters' => $this->resource->area_in_square_meters,
            'number_of_beds' => $this->resource->number_of_beds
        ];
    }
}