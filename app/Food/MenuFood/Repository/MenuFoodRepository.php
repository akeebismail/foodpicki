<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:26 PM
 */
namespace App\Food\MenuFood\Repository;
use App\Food\FoodBase\Repository\FoodRepository;
use App\Food\MenuFood\MenuFood;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class MenuFoodRepository extends FoodRepository implements MenuFoodInterface {
    use MenuFoodTransformable;
    public function __construct(MenuFood $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
    public function listProducts( $order = 'id', $sort = 'desc', array $columns = ['*'])
    {
        return $this->_model->orderBy($order,$sort)->get($columns);
    }
/**
* Create the product
*
* @param array $params
* @return Product
*/
    public function createProduct(array $params, $file = null)
    {
        try {

            $collection = collect($params);
            $slug = str_slug($collection->get('name'));

            //$merge = $collection->merge(compact('slug'));

            $product = new Product($params);
            if ($product->save()){
                $save_File = 'products/shop';
                foreach ($file as $item) {
                    $img = Storage::disk('uploads')->put($save_File,$item);
                    //$file_path = $item->storeAs('products', $item->getClientOriginalName());
                    $image = new Image();
                    $image->label= $item->getClientOriginalName();
                    $image->product_id = $product->id;
                    $image->image_url   = $img;
                    $image->save();
                }
            }
            return $product;

        } catch (QueryException $e) {
            throw new ProductInvalidArgumentException($e->getMessage());
        }
    }

    /**
     * Update the product
     *
     * @param array $params
     * @param int $id
     * @return bool
     */
    public function updateProduct(array $params, $id)
    {
        try {

            $collection = collect($params)->except('_token');
            $slug = str_slug($collection->get('name'));

            if (request()->hasFile('cover')) {
                $file = request()->file('cover');
                $cover = $this->uploadOneImage($file);
            }

            $merge = $collection->merge(compact('slug', 'cover'));
            return $this->update($merge->all(), $id);
        } catch (QueryException $e) {
            throw new ProductInvalidArgumentException($e->getMessage());
        }
    }

    /**
     * Find the product by ID
     *
     * @param int $id
     * @return MenuFood
     * @throws
     */
    public function findProductById( $id)
    {
        try {

            return $this->transformFood($this->findOneOrFail($id));
        } catch (ModelNotFoundException $e) {
            throw new MenufoodNotFoundExcption($e->getMessage());
        }
    }

    /**
     * Delete the product
     *
     * @param MenuFood $product
     * @return bool
     * @throws \Exception
     */
    public function deleteProduct(MenuFood $product)
    {
        return $product->delete();
    }

    /**
     * Detach the categories
     *
     * @param MenuFood $product
     */
    public function detachCategories(MenuFood $product)
    {
        $product->categories()->detach();
    }

    /**
     * Return the categories which the product is associated with
     *
     * @return Collection
     */
    public function getCategories()
    {
        return $this->_model->categories()->get();
    }

    /**
     * Sync the categories
     *
     * @param array $params
     */
    public function syncCategories(array $params)
    {
        $this->_model->categories()->sync($params);
    }

    /**
     * @param $file
     * @param null $disk
     * @return bool
     */
    public function deleteFile(array $file, $disk = null)
    {
        return $this->update(['cover' => null], $file['product']);
    }

    /**
     * Get the product via slug
     *
     * @param array $slug
     * @return Product
     */
    public function findProductBySlug(array $slug)
    {
        try {
            return $this->findOneByOrFail($slug);
        } catch (ModelNotFoundException $e) {
            throw new MenufoodNotFoundExcption($e->getMessage());
        }
    }

    /**
     * Upload the image
     *
     * @param $image
     * @param string $folder
     * @return false|string
     */
    public function uploadOneImage($image, $folder = 'products')
    {
        return $this->uploadOne($image, $folder);
    }

    /**
     * @param string $text
     * @return mixed
     */
    public function searchProduct( $text)
    {
        return $this->_model->search($text)->get();
    }


}