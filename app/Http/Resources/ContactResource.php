<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{

    
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id'            =>  $this->id,
            'name'          =>  $this->name,
            'contact'       =>  $this->number,
        ];

    }
}
