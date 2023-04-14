<?php

namespace App\Repositories;

use App\Contracts\Repository\BaseRepositoryContract as BaseRepositoryContract;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryContract
{
    protected string $model;

    /**
     * @var Model
     */
    protected $instance;

    public function __construct()
    {
        if (! isset($this->model)) {
            throw new \Exception('Model class is not set');
        }
    }

    /**
     * @return Model|mixed
     */
    public function getInstance()
    {
        if (! isset($this->instance)) {
            $this->instance = new $this->model();
        }

        return $this->instance;
    }

    /**
     * @return Model
     */
    public function findById($id)
    {
        return $this->getInstance()::findOrFail($id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function findAll()
    {
        return $this->getInstance()::all();
    }

    /**
     * @return void
     */
    public function save(Model $model)
    {
        $model->save();
    }

    /**
     * @return void
     */
    public function update(Model $model, $data)
    {
        $model->fill($data);
        $this->save($model);
    }

    /**
     * @return void
     */
    public function destroy($id)
    {
        $this->findById($id)->delete();
    }
}
