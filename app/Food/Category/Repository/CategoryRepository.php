<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:04 PM
 */
namespace App\Food\Category\Repository;
use App\Food\Category\Category;
use App\Food\FoodBase\Repository\FoodRepository;
use App\Food\MenuFood\MenuFood;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryRepository extends FoodRepository implements CategoryInterface {
    public function __construct(Category $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
    /**
     * List all the categories
     *
     * @param string $order
     * @param string $sort
     * @param array $except
     * @return \Illuminate\Support\Collection
     */
    public function listCategories(string $order = 'id', string $sort = 'desc', $except = [])
    {
        return $this->model->orderBy($order, $sort)->get()->except($except);
    }

    /**
     * Create the category
     *
     * @param array $params
     * @return Category
     * @throws CategoryInvalidArgumentException
     */
    public function createCategory(array $params) : Category
    {
        try {

            $collection = collect($params);
            if (isset($params['name'])) {
                $slug = str_slug($params['name']);
            }

            if (request()->hasFile('cover')) {
                $file = request()->file('cover', 'products');
                $cover = $this->uploadOne($file, 'categories');
            }

            $merge = $collection->merge(compact('slug', 'cover'));

            $category = new Category($merge->all());

            if (isset($params['parent'])){
                $parent = $this->findCategoryById($params['parent']);
                $category->parent()->associate($parent);
            }

            $category->save();
            return $category;

        } catch (QueryException $e) {
            throw new CategoryInvalidArgumentException($e->getMessage());
        }
    }

    /**
     * Update the category
     *
     * @param array $params
     * @return Category
     */
    public function updateCategory(array $params) : Category
    {
        $category = $this->findCategoryById($this->model->id);
        $collection = collect($params)->except('_token');
        $slug = str_slug($collection->get('name'));

        if (request()->hasFile('cover')) {
            $file = request()->file('cover', 'products');
            $cover = $this->uploadOne($file, 'categories');
        }

        $merge = $collection->merge(compact('slug', 'cover'));
        if (isset($params['parent'])) {
            $parent = $this->findCategoryById($params['parent']);
            $category->parent()->associate($parent);
        }

        $category->update($merge->all());
        return $category;
    }

    /**
     * @param int $id
     * @return Category
     * @throws CategoryNotFoundException
     */
    public function findCategoryById(int $id) : Category
    {
        try {
            return $this->findOneOrFail($id);
        } catch (ModelNotFoundException $e) {
            throw new CategoryNotFoundException($e->getMessage());
        }
    }

    /**
     * Delete a category
     *
     * @return bool
     */
    public function deleteCategory() : bool
    {
        return $this->model->delete();
    }

    /**
     * Associate a product in a category
     *
     * @param MenuFood $product
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function associateMenufood(MenuFood $product)
    {
        return $this->model->menufood()->save($product);
    }

    /**
     * Return all the products associated with the category
     *
     * @return mixed
     */
    public function findMenufood()
    {
        return collect($this->model->menufood)->map(function (Product $product) {
            return $this->transformProduct($product);
        })->sortByDesc('id');
    }

    /**
     * @param array $params
     */
    public function syncMenuFood(array $params)
    {
        $this->model->menufood->sync($params);
    }


    /**
     * Detach the association of the product
     *
     */
    public function detachMenfood()
    {
        return $this->model->menufood()->detach();
    }

    /**
     * @param $file
     * @param null $disk
     * @return bool
     */
    public function deleteFile(array $file, $disk = null) : bool
    {
        return $this->update(['cover' => null], $file['category']);
    }

    /**
     *
     * @param array $slug
     * @return Category
     * @throws
     */
    public function findCategoryBySlug(array $slug) : Category
    {
        try {
            return $this->findOneByOrFail($slug);
        } catch (ModelNotFoundException $e) {
            throw new CategoryNotFoundException($e->getMessage());
        }
    }

    /**
     * Find products under a specific category
     *
     * @param int $id
     * @return mixed
     */
    public function findProductsInCategory(int $id)
    {
        $category = $this->findCategoryById($id);
        return $category->menufood;
    }

    /**
     * @return mixed
     */
    public function findParentCategory()
    {
        return $this->model->parent;
    }

    /**
     * @return mixed
     */
    public function findChildren()
    {
        return $this->model->children;
    }

}