<?php

namespace App\Http\Controllers;

use App\Models\Ownerdata;
use App\Models\Storedata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $welcome_view = "";
        $store_view = "active";
        $contact_view = "";
        $owner_view = "";

        $stores = Storedata::all();

        return view('tokoviews', compact('welcome_view', 'store_view', 'contact_view','owner_view', 'stores'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $store_view = "active";

        $owners = Ownerdata::all();
        return view('createstore', compact('owners', 'store_view'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->store, 0, 3));

        Storedata::create([
            'code' => $code,
            'owner' => $request->owner_code,
            'store' => $request->store,
            'datestore' => $request->datestore,
            'typestore' => $request->typestore,
            'description' => $request->description
        ]);
        return redirect(route('storelist.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store_view = "active";

        $store = Storedata::where('code', $id)->first();
        return view('tokodetails', compact('store', 'store_view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store_view = "active";

        $store = Storedata::findOrFail($id);
        $owner = Ownerdata::all();
        return view('editstore', compact('store', 'owner', 'store_view'));
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
        $code = Str::upper(Str::substr($request->store, 0, 3));
        $store = Storedata::findOrFail($id);

        $store->update([
            'code' => $code,
            'owner' => $request->owner_code,
            'store' => $request->store,
            'datestore' => $request->datestore,
            'typestore' => $request->typestore,
            'description' => $request->description
        ]);
        return redirect(route('storelist.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Store = Storedata::findOrFail($id);
        $Store->delete();
        return redirect(route('storelist.index'));
    }
}
