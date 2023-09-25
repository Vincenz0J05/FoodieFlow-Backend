<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Test1;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTest1Request;
use App\Http\Requests\UpdateTest1Request;

class Test1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTest1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Test1 $test1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test1 $test1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTest1Request $request, Test1 $test1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test1 $test1)
    {
        //
    }
}
