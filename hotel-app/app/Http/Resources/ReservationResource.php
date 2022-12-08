<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'reservation';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'date_from' => $this->resource->date_from,
            'date_to' => $this->resource->date_to,
            'room' => $this->resource->room
        ];
    }
}