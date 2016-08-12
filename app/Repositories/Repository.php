<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface Repository
{
    public function getAll();

    public function save(Model $model);

    public function delete(Model $model);

    public function findById(int $id);
}
