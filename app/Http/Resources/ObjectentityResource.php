<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Customer */
class ObjectentityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @throws \Laracasts\Presenter\Exceptions\PresenterException
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'entity_type' => $this->entity->name ?? '_',
            'objectvalues'=> ObjectvaluesResource::collection($this->objectvalues()->get()),
          //  'entity_name'=>$this->entity->name,
            'created_at' => $this->created_at,
        ];
    }
}