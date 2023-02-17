<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\profession;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pofession =  profession::all();
       return view('backend.Profession.ProfessionList' , compact('pofession'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.Profession.ProfessionForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required'  
        ]);
      $pofession = new profession();
      $pofession = $pofession->addProfession($request);
       if($pofession){
        return redirect()->back()->with(['error','field cannot be blank...!!']);
       }
        return redirect()->back()->with(['success','Data Inserted  Successfully..!!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $profession = profession::find($id);
         return view('backend.Profession.professionEdit' , compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required'  
        ]);
         $profession = profession::find($id);
      $profession = $profession->updateProfession($request);
      if($profession){
        return redirect()->back()->with(['error','field cannot be blank...!!']);
       }
        return redirect()->route('profession')->with(['success','Data updated  Successfully..!!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

       $profession = profession::find($id);

       $profession->delete();

       if($profession){
        return redirect()->back()->with(['error','field cannot be blank...!!']);
       }
        return redirect()->back()->with(['success','Data Inserted  Successfully..!!']);
    }
}
