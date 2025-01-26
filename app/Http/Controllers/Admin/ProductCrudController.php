<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE) {
        return [
            [
                'name' => 'name',
                'label' => 'Product Name',
                'type' => 'text'
            ],
            [
                'name' => 'category_id',
                'label' => 'Category',  
                'type' => 'select',
                'entity' => 'category',
                'attribute' => 'name',
                'model' => "App\Models\Category"
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'type' => ($show ? 'text' : 'textarea'),
                'limit' => 100
            ],
            [
                'label' => "product image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
                'disk' => 'public'
            ]
        ];
    }

    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }

    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);
        $this->crud->addFields($this->getFieldsData());
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}