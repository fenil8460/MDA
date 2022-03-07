<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Admin\StoreProductsRequest;
use App\Models\ProductsImages;
use App\Models\Products;
use App\Models\ProductsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use Auth;
Use Redirect;
use Carbon;

class ProductsController extends Controller
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

        $products = Products::all();
        
        $p = Products::
        // where('id', $user_id)
        Join('products_categories', 'products.category_id', '=', 'products_categories.id')
        ->select('products.id','products_categories.name')->first();
        // dd($p);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $view_data = [];
        $mainCategory=[];
        
        $mainCategory = ProductsCategories::whereNotNull('parent_id')->get();
        $view_data = array(
            'mainCategory' => $mainCategory,
         );
        return view('products.create',$view_data);
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
            'name'       => 'required',
            'description'      => 'required',
            'quantity'      => 'required',
            'discount'      => 'required',
            'imagename' => 'required',
            'imagename.*' => 'mimes:png,jpg,gif'
        );
        $validator = Validator::make($request->all(), $rules);
        // process the login
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator);
                
        } else {
            // store
            $product = new Products;
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->category_id = $request->input('Parent-Category');
            $product->quantity = $request->input('quantity');
            $product->discount = $request->input('discount');
            $product->selling_price = $request->input('selling_price');
            $product->status = 1;
            $product->created_by = Auth::user()->id;
            $product->updated_by = Auth::user()->id;
            $product->created_at =  \Carbon\Carbon::now();
            $product->updated_at =  \Carbon\Carbon::now();

            if($request->hasfile('imagename'))
            {
                $file = $request->file('imagename');
                $img_name = $request->input('name').'.'.$file->extension();
                $img_path = public_path().'/products_images/'.$img_name;
                if (is_file($img_path)) {
                    unlink($img_path);
                    $file->move(public_path().'/products_images/', $img_name);
                } else {
                    $file->move(public_path().'/products_images/', $img_name);
                }
                $product->image_path = $img_name;
            }
            $product->save();

            // redirect
            Session::flash('message', 'Successfully created Products!');
            return redirect()->route('admin.products.index');
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
        $product = Products::find($id);
        $view_data = [];
        $mainCategory=[];
        
        $mainCategory = ProductsCategories::whereNotNull('parent_id')->get();
        $view_data = array(
            'mainCategory' => $mainCategory,
            'product' => $product,
         );
        return view('products.edit', $view_data);
    }

    // /**
    //  * Update product in storage.
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
            'name'       => 'required',
            'description'      => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('products/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            // store
            $product = Products::find($id);
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->quantity = $request->input('quantity');
            $product->category_id = $request->input('Parent-Category');
            $product->discount = $request->input('discount');
            $product->selling_price = $request->input('selling_price');
            $product->status = (int)$request->input('status');
            $product->created_by = Auth::user()->id;
            $product->updated_by = Auth::user()->id;
            $product->created_at =  \Carbon\Carbon::now();
            $product->updated_at =  \Carbon\Carbon::now();

            if($request->hasfile('imagename'))
            {
                $file = $request->file('imagename');
                $img_name = $request->input('name').'.'.$file->extension();
                $img_path = public_path().'/products_images/'.$img_name;
                if (is_file($img_path)) {
                    unlink($img_path);
                    $file->move(public_path().'/products_images/', $img_name);
                } else {
                    $file->move(public_path().'/products_images/', $img_name);
                }
                $product->image_path = $img_name;
            }
            $product->save();
            // redirect
            Session::flash('message', 'Successfully updated Product!');

            return redirect()->route('admin.products.index');
            }
    }

    public function show($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
          $product = Products::find($id);
          // show the view i
        return view('products.show', compact('product'));
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
        $product = Products::find($id);
        $product->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Product!');

        return redirect()->route('admin.products.index');
    }

    // /**
    //  * Delete all selected Product at once.
    //  *
    //  * @param Request $request
    //  */
    public function massDestroy(Request $request)
    {
        Products::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

    public function addPhotosCreate($id)
    {
        $pid = '';
        $pid = $id;
        $product_images = DB::table('product_images')->where('product_id', $pid)->get();
        return view('products.multiplePhotos.create', compact('pid','product_images'));
    }
    public function addPhotosStore(Request $request)
    {
       $pid = $request->input('pid');
        $this->validate($request, [
                    'filenames' => 'required',
                    'filenames.*' => 'mimes:gif,png,jpg'
            ]);


            if($request->hasfile('filenames'))
            {
                foreach($request->file('filenames') as $file)
                {
                    $name = time().'.'.$file->extension();
                    $file->move(public_path().'/products_images/'.'P_'.$pid, $name);  
                    //$data[] = $name;  
                    $file= new ProductsImages();
                    $file->image_path = $name;
                    $file->product_id = $pid;
                    $file->is_active = 1;
                    $file->save();
                }
            }
        Session::flash('message', 'Photos has been successfully added');
        return redirect()->route('admin.products.index');

        //return back()->with('success', 'Photos has been successfully added');
    }
    public function delPhotos($id)
    {
        ProductsImages::find($id)->delete($id);
  
        return response()->json([
            'success' => 'Photo deleted successfully!'
        ]);
    }
}
