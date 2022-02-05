<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PesmaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'pesma';

    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'naziv_pesme' => $this->resource->naziv_pesme,
            'zanr' => $this->resource->zanr,
            'izvodjac' => $this->resource->izvodjac,
            'user' => $this->resource->user,
        ];
    }
}
