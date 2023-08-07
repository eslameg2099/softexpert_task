<?php

namespace App\Repositories;

use App\Models\Attribute;

class AttributeRepository
{
    protected $attribute;

    public function __construct(Attribute $attribute)
    {
        $this->attribute = $attribute;
    }

    public function all()
    {
        return $this->attribute->simplePaginate();
    }

    public function find($id)
    {
        return $this->attribute->findorfail($id);
    }

    public function create($data)
    {
        return $this->attribute->create($data);
    }

    public function update($id, $data)
    {
        $attribute = $this->attribute->findorfail($id);
        $attribute->update($data);
        return $attribute;
    }

    public function delete($id)
    {
        return $this->attribute->findorfail($id)->destroy($id);
    }
}