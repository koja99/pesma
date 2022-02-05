<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IzvodjacResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'izvodjac';

    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'godina_rodjenja' => $this->resource->godina_rodjenja,
            'mesto_rodjenja' => $this->resource->user,
        ];
    }
}
