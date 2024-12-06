<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerBooksRequest;
use App\Http\Requests\UpdateCustomerBooksRequest;
use App\Models\CustomerBooks;

class CustomerBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCustomerBooksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerBooks $customerBooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerBooks $customerBooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerBooksRequest $request, CustomerBooks $customerBooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerBooks $customerBooks)
    {
        //
    }
}
