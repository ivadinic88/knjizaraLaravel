<?php

namespace App\Http\Resources;

use App\Models\Zanr;
use App\Models\Proizvodjac;
use Illuminate\Http\Resources\Json\JsonResource;

class KnjigaResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $zanr = Zanr::find($this->zanrID);
        $proizvodjac = Proizvodjac::find($this->proizvodjacID);

        return [
            'id' => $this->id,
            'naziv' => $this->naziv,
            'autor' => $this->autor,
            'zanr' => $zanr->zanr,
            'proizvodjac' => $proizvodjac->proizvodjac,
            'cena' => $this->cena . " RSD"
        ];
    }
}
