<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\profession;
use App\Models\Register;

class RegisterationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $profession = profession::all();
       return view('register.registeration' , compact('profession'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         dd($_POST);
        $register = new Register();
        $register = $register->RegistrationUser($request);

         if($register){
            return redirect()->back()->with(['error','somthing went wrong']);
         }
         return redirect()->route('login')->with(['success','user create successfully...!!!']);




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
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
