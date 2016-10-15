<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface
{

    /**
     * private var app
     * @var Container
     */
    private $app;

    /**
     * private var model
     * @var Model
     */
    protected $model;

    /**
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specifiy model class name
     * @return mixed
     */
    public abstract function model();

    /**
     * Inities a Eloquent Builder object
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws Exception
     */
    public function makeModel()
    {

        $this->model = $this->app->make($this->model());
        if (!$this->model instanceof Model) {
            throw new Exception("Class {$this->model()} must be an instance of Model");
        }
        return $this->model;
    }

    /**
     * CRUD METHODS
     */

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->delete($id);
    }

    /**
     * GENERAL METHODS
     */

    /**
     * Search by id
     *
     * @param  integer $id id
     * @return Model object
     */
    public function find($id, $collumns = ['*'])
    {
        return $this->model->find($id, $collumns);
    }

    public function findBy($attribute, $value, $collumns = ['*'])
    {
        return $this->model->where($attribute, '=', $value)->first($collumns);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = ['*'])
    {
        return $this->model->paginate($perPage, $collumns);
    }

    /**
     * Get all
     *
     * @param  array $collumns
     * @return model object
     */
    public function all($collumns = ['*'])
    {
        return $this->model->get($collumns);
    }
}
