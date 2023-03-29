<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class BaseService
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
    
    public function update($slug, $data)
    {
        return $slug->update($data);
    }

    public function delete($id)
    {
        return $id->delete();
    }
}
