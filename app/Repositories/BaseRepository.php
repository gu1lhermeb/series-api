<?php

namespace App\Repositories;

abstract class BaseRepository
{
    protected $model;

    public function getById(int $id)
    {
        return $this->model->findOrFail($id)->first();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function getByAttribute(string $field, string $attribute)
    {
        return $this->model->where($field, $attribute);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function updateById(array $data, int $id)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function deleteById(int $id)
    {
        return $this->model->where('id', $id)->delete($id);
    }
}
