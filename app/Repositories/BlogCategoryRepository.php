<?php

namespace App\Repositories;
use App\Models\BlogCategory as model;
use Illuminate\Database\Eloquent\Collection;

/**
* Class BlogCategoryRepository
*
* @package App\Repositories
*/
class BlogCategoryRepository extends CoreRepository
{
/**    Получить модель для редактирования в админке
*    @param int $id
*    @return Model
*/
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * Получить список категорий для вывода в выпадающем списке.
     */
    public function getForComboBox()
    {
        return $this->startConditions()->all();
    }




}
