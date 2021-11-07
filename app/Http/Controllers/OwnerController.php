<?php

namespace App\Http\Controllers;

use App\Models\Ownerdata;
use App\Models\Storedata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $welcome_view = "";
        $store_view = "";
        $contact_view = "";
        $owner_view = "active";

        $owners = Ownerdata::all();
        return view('ownerlist', compact('welcome_view', 'store_view', 'contact_view','owner_view','owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owner_view = "active";

        return view('createowner', compact('owner_view'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->fullname, 0, 3));

        Ownerdata::create([
            'owner_code' => $code,
            'fullname' => $request->fullname,
            'age' => $request->age,
            'gender' => $request->gender,
            'contactperson' => $request->contactperson,
            'description' => $request->description
        ]);
        return redirect(route('ownerlist.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($owner_code)
    {
        $owner_view = "active";

        $owner = Ownerdata::where('owner_code', $owner_code)->first();
        return view('ownerdetails', compact('owner', 'owner_view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($owner_code)
    {
        $owner_view = "active";

        $owner = Ownerdata::findOrFail($owner_code);
        $store = Storedata::all();
        return view('editowner', compact('owner', 'store', 'owner_view'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $owner_code)
    {
        $code = Str::upper(Str::substr($request->fullname, 0, 3));
        $owner = Ownerdata::findOrFail($owner_code);

        $owner->update([
            'owner_code' => $code,
            'fullname' => $request->fullname,
            'age' => $request->age,
            'gender' => $request->gender,
            'contactperson' => $request->contactperson,
            'description' => $request->description
        ]);
        return redirect(route('ownerlist.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($owner_code)
    {
        $Owner = Ownerdata::findOrFail($owner_code);
        $Owner->delete();
        return redirect(route('ownerlist.index'));
    }
}
