<?php

namespace App\Repositories;

use App\Models\Entity;

class EntityRepository
{
    protected $entity;

    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity->simplePaginate();
    }

    public function find($id)
    {
        return $this->entity->findorfail($id);
    }

    public function create($data)
    {
        return $this->entity->create($data);
    }

    public function update($id, $data)
    {
        $entity = $this->entity->findorfail($id);
        $entity->update($data);
        return $entity;
    }

    public function delete($id)
    {
        return $this->entity->findorfail($id)->destroy($id);
    }
}