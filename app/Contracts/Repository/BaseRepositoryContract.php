<?php

namespace App\Contracts\Repository;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryContract
{
    public function findById($id);

    public function findAll();

    public function save(Model $model);

    public function update(Model $model, $data);

    public function destroy($id);
}
