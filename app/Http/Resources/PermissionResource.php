<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PermissionResource extends Resource
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
           'id' => $this->id,   
           'event' => $this->event,
           'model_name' => $this->model_name,
           'permission_type' => $this->permission_type->name
        ];
    }
}
