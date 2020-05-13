<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
class CatalogLevel2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalog_2 = Catalog::orderByDesc('updated_at')->where('id_chill','!=',0)->get();
        $catalog_1 = Catalog::where('id_chill',0)->get();
        return view('admin.catalog.vl2.list-catalog',['catalog_2'=>$catalog_2,'catalog_1'=>$catalog_1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalog_1 = Catalog::where('id_chill',0)->get();
        return view('admin.catalog.vl2.add-catalog',['catalog_1'=>$catalog_1]);
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
            'name' => 'required|min:2|max:255',
            'id_chill'=>'required',
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
            'id_chill.required'=>'is-invalid',
        ]);
        
        $add = new Catalog;
        $add->name = $request->name;
        $add->slug = changeTitle($request->name);
        $add->id_chill = $request->id_chill;
        $add->save();
        return redirect()->route('danh-muc-cap-2.index');
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
        $catalog_1 = Catalog::where('id_chill',0)->get();
        $edit = Catalog::find($id);
        return view('admin.catalog.vl2.edit-catalog',['edit'=>$edit,'catalog_1'=>$catalog_1]);
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
            'name' => 'required|min:2|max:255',
            'id_chill'=>'required',
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
            'id_chill.required'=>'is-invalid',
        ]);
        $Update = Catalog::find($id);
        $Update->name = $request->get('name');
        $Update->slug = changeTitle($request->name);
        $Update->id_chill = $request->get('id_chill');
        $Update->save();
        return redirect()->route('danh-muc-cap-2.index');
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
