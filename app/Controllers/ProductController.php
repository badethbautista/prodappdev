<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel; // Uncomment this line to import the ProductModel class

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductModel(); // Change the instantiation to use the imported namespace
    }

    // ... (rest of your methods)


    public function delete($id)
    {
        $product = new ProductModel(); 
        $this->product->delete($id);
        return redirect()->to('/product');
    }
    public function edit($id)
    {
        $product = new ProductModel();
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('products', $data);
    }
    public function save()
    {
        $id = $_POST['id'];
        $data = [
            'id' => $this->request->getVar('id'),
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
          ];
          $product = new ProductModel();
        if( $id != null){
            $this->product->where('id', $_POST['id'])->edit($data);
        }else{
            return redirect()->to('/product');
        }
    }
    public function product($product)
    {
        echo $product;
    }
    public function badeth()
    {
        $data['product'] = $this->product->findAll();
        return view('products', $data);
    }
    public function index()
    {
        //
    }
}
