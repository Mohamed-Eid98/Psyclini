<?php

namespace App\Http\Controllers;

use App\Models\Secretary;
use App\Http\Requests\StoreSecretaryRequest;
use App\Http\Requests\UpdateSecretaryRequest;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ADMIN index');
    }
    public function admin_create()
    {
        return view('admin.ADMIN CreateDoctorsAccount');
    }
    public function admin_contact()
    {
        return view('admin.ADMIN contact us responses');
    }

    public function admin_approve_requests()
    {
        return view('admin.ADMIN approve doctors requests');
    }
    public function modify_appoinment()
    {
        return view('admin.ADMIN Modify Appointments');
    }
    public function posts()
    {
        return view('admin.ADMIN posts');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSecretaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecretaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function show(Secretary $secretary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretary $secretary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecretaryRequest  $request
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecretaryRequest $request, Secretary $secretary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretary $secretary)
    {
        //
    }
}
