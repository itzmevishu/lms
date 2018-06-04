<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Config;
use DB;
use View;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = new Setting();
        $settings = $setting->getSettingsByTenant(config('tenant'));
        // dd($settings);
        return view('settings.index')->with('settings',$settings);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    
    public function store(Request $request)
    {
    
        Setting::registration_setting($request);
        return redirect('/settings#/registration')->with('success', 'Updated Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }

    public function account_setting(Request $request){
        // print_r($request->all());
        Setting::account_setting($request);
        $result = array('success' => true, 'id'=> 1);
        return json_encode($result);
    }


}
