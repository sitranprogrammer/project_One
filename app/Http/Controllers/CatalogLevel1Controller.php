<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
class CatalogLevel1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalog = Catalog::orderByDesc('updated_at')->where('id_chill',0)->get();
        return view('admin.catalog.vl1.list-catalog',['catalog'=>$catalog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catalog.vl1.add-catalog');
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
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
        ]);
        $add = new Catalog;
        $add->name = $request->name;
        $add->slug = changeTitle($request->name);
        $add->save();
        return redirect()->route('danh-muc-cap-1.index');
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
        $edit = Catalog::find($id);
        return view('admin.catalog.vl1.edit-catalog',['edit'=>$edit]);
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
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
        ]);
        $Update = Catalog::find($id);
        $Update->name = $request->get('name');
        $Update->slug = changeTitle($request->name);
        $Update->save();
        return redirect()->route('danh-muc-cap-1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Catalog::find($id);
        $delete->delete();
        return redirect()->route('danh-muc-cap-1.index');
    }
}
