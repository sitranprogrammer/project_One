<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $role = Auth::user()->role;
        switch ($role) {
            case 1:
                $id_user = Auth::user()->id;
                $product = Product::where('id_user',$id_user)->orderBy('id', 'desc')->paginate(10);
             
                
                break;
            case 2:
                $product = Product::orderBy('id', 'desc')->paginate(10);
                $catalogs = Catalog::get();
                // dd($catalogs);
               
            break;
            
            default:
                # code...
                break;
        }
        
        return view('admin.product.list-product',['product'=>$product,'catalogs'=>$catalogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalog_1 = Catalog::where('id_chill',0)->get();
        return view('admin.product.add-product',['catalog_1'=>$catalog_1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required|min:2|max:100',
            'id_parent' => 'required',
            // 'id_chill' => 'required',
            'detail' => 'required',
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
            'id_parent.required'=>'is-invalid',
            // 'id_chill.required'=>'is-invalid',
            'detail.required'=>'is-invalid',
        ]);
        $add = new Product;
        $add->name = $request->name;
        $add->slug = changeTitle($request->name);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $arr =  array();
            foreach($file as $file){
                $name = $file->getClientOriginalName();
                $image = $name;
                array_push($arr, $image);
                $file->move("upload/",$image);
            }
            $add->image = implode(",", $arr);
        }else{
            $add->image= "";
        }
        $add->id_parent = $request->id_parent;
        // $add->id_chill = $request->id_chill;
        $add->id_user = $request->id_user;
        $add->price_unit = $request->price_unit;
        $add->price_promotion = $request->price_promotion;
        $add->content = $request->content;
        $add->detail = $request->detail;
        $add->new = $request->new;
        $add->save();
        return redirect()->route('san-pham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Product::find($id);
        $catalog_1 = Catalog::where('id_chill',0)->get();
        $catalog_2 = Catalog::where('id_chill','!=',0)->get();
        return view('admin.product.edit-product',['edit'=>$edit,'catalog_1'=>$catalog_1,'catalog_2'=>$catalog_2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'name' => 'required|min:2|max:100',
            'id_parent' => 'required',
            // 'id_chill' => 'required',
            'detail' => 'required',
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
            'id_parent.required'=>'is-invalid',
            // 'id_chill.required'=>'is-invalid',
            'detail.required'=>'is-invalid',
        ]);
        $Update = Product::find($id);
        $Update->slug = changeTitle($request->name);
        $Update->name = $request->get('name');
        $Update->id_parent = $request->get('id_parent');
        // $Update->id_chill = $request->get('id_chill');
        $Update->new = $request->get('new');
        $Update->content = $request->get('content');
        $Update->detail = $request->get('detail');
        $Update->price_unit = $request->get('price_unit');
        if($request->hasFile('image'))
        {   
            $file = $request->file('image');
            $arr =  array();
            foreach($file as $file){
                $name = $file->getClientOriginalName();
                $image = $name;
                array_push($arr, $image);
                $file->move("upload/",$image);
            }
            $Update->image = implode(",", $arr);

        }
        $Update->save();
        return redirect()->route('san-pham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
