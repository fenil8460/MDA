<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Admin\StoreProductsRequest;
use App\Models\ProductsCategories;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use Auth;
use Carbon;
class ProductCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (! Gate::allows('view_product')) {
            return abort(401);
        }

        $productsCategories = ProductsCategories::all();

        return view('products.productCategories.index', compact('productsCategories'));
    }

    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $view_data = [];
        $mainCategory=[];
        
        $mainCategory = ProductsCategories::whereNull('parent_id')->get();
        $view_data = array(
            'mainCategory' => $mainCategory,
         );
        return view('products.productCategories.create',$view_data);
    }

    /**
     * Store a newly created product in storage.
     *
     **/
    public function store(Request $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $rules = array(
            'name'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        // process the login
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator);
                
        } else {
            // store
            $pc = new ProductsCategories;
            $pc->name = $request->input('name');
            $pc->parent_id = $request->input('Parent-Category');
            $pc->created_at =  \Carbon\Carbon::now();
            $pc->updated_at =  \Carbon\Carbon::now();
            $pc->save();

            // redirect
            Session::flash('message', 'Successfully created Category!');
            return redirect()->back();
        }
    }


    // /**
    //  * Show the form for editing Product.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $view_data = [];
        $mainCategory=[];
        $productCategories = ProductsCategories::find($id);
        if ($productCategories) {
            $mainCategory = $productCategories->whereNull('parent_id')->get();
        }
        $view_data = array(
            'productCategories' => $productCategories,
            'mainCategory' => $mainCategory,
         );
        //  dd($mainCategory);
        return view('products.productCategories.edit',$view_data);
    }

    // /**
    //  * Update product category in storage.
    //  *
    //  * @param  \App\Http\Requests\UpdateRolesRequest  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
         // validate
        $rules = array(
            'name'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('ProductsCategories/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            // store
            $pc = ProductsCategories::find($id);
            $pc->name = $request->input('name');
            $pc->Visibility = (int)$request->input('visibility');
            $pc->created_by = Auth::user()->id;
            $pc->updated_by = Auth::user()->id;
            $pc->created_at =  \Carbon\Carbon::now();
            $pc->updated_at =  \Carbon\Carbon::now();

            $pc->save();
            // redirect
            Session::flash('message', 'Successfully updated Category!');

            return redirect()->back();
            }
    }


    // /**
    //  * Remove product from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        // delete
        $product = ProductsCategories::find($id);
        $product->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Category!');

        return redirect()->back();
    }

    // /**
    //  * Delete all selected Product at once.
    //  *
    //  * @param Request $request
    //  */
    public function massDestroy(Request $request)
    {
        ProductsCategories::whereIn('id', request('ids'))->delete();
        return response()->noContent();
    }
    
   
}
