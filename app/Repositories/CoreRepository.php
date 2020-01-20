<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreReposytory
 *
 * @package App\Repositories
 *
 * Репзиторий работы с сущностью.
 * Может выдавать наборы данных.
 * Не может создавать/изменять сущности
 */
abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * CoreRepository construcrtor/
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return Model|\Illuminate\Foundation\Application\mixed
     */
    protected function startConditions()
    {
        return clone $this->model;
    }

}
