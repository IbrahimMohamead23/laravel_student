<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();
        return view('services.index')->with('service',$service);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($image = $request->file('image')){
            $deirectionPath = 'images/';
            $profilImage = date('YmdHis').'_'.$image->getClientOriginalExtension();
            $image->move($deirectionPath,$profilImage);
            $input['image'] = "$profilImage";
        }

        Service::create($input);
        return redirect('services/create');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);
        return view('services.show')->with('service',$service);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return view('services.edit')->with('service',$service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $input = $request->all();
        if($image = $request->file('image')){
            $deirectionPath = 'images/';
            $profilImage = date('YmdHis').'_'.$image->getClientOriginalExtension();
            $image->move($deirectionPath,$profilImage);
            $input['image'] = "$profilImage";
        }

        $service->update($input);
        return redirect('services');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::destroy($id);
        return redirect('services');
    }
}
