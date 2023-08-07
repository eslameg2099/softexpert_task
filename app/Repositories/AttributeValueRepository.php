<?php

namespace App\Repositories;

use App\Models\AttributeValue;
use App\Models\Objectentity;


class AttributeValueRepository
{
    protected $attributeValue;

    public function __construct(AttributeValue $attributeValue)
    {
        $this->attributeValue = $attributeValue;
    }

  

    public function find($id)
    {
        return Objectentity::findorfail($id);
    }

    public function create($validatedData,$entity_id)
    {
        $objectentity =  Objectentity::create(['entity_id'=>$entity_id]);
        foreach ($validatedData['attribute_ids'] as $index => $attributeId) {

        $attributeValue =  AttributeValue::create([
                'attribute_id' => $attributeId,
                'value' => $validatedData['values'][$index],
                'entity_id' => $entity_id,
                'objectentity_id'=>$objectentity->id,
            ]);
        }

        return $objectentity;
    }

   

   
}