<?php

namespace App\Http\Controllers;

use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function ProductListByRemark (Request $request) {
            $remark = $request->remark;
            $productList = ProductList::where('remark', $remark)->get();
            return $productList;
    }
    public function ProductList () {

    }
}
