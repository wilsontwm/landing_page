<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    /**
     * Store the driver information in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'email'         => 'required|email|unique:drivers',
            'first_name'    => 'required|string',
            'phone'         => 'required',
            'state'         => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            Driver::create($input);
        }

        flash()->success('You have registered successfully!')->important();
        return redirect()->back();
    }

}
