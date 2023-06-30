<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contractform;
use App\Models\leasing;
use App\Models\vendor;
use App\Models\purchaser;
use App\Models\landlord;
use App\Models\tenant;
use App\Models\User;

class contractformController extends Controller
{
    public function client()
    {
        $data = User::where('IsAdmin','0')->get();

        return view('client',compact('data'));
    }

    public function form1()
    {
        return view('property_form');
    }

    public function save_form(Request $request)
    {
        $data =  $request->all();

        $user = contractform::Create($data);

        return back()->with('successful_message','Form Submitted Successfully');
    }

    public function form2()
    {
        return view('leasing_form2');
    }

    public function save_form2(Request $request)
    {
        $data =  $request->all();

        $user = leasing::Create($data);

        return back()->with('successful_message','Form Submitted Successfully');
    }

    public function form3()
    {
        return view('vendor_form');
    }

    public function save_form3(Request $request)
    {
        $data =  $request->all();

        $user = vendor::Create($data);

        return back()->with('successful_message','Form Submitted Successfully');
    }
    public function form4()
    {
        return view('purchaser_form');
    }

    public function save_form4(Request $request)
    {
        $data =  $request->all();

        $user = purchaser::Create($data);

        return back()->with('successful_message','Form Submitted Successfully');
    }
    public function form5()
    {
        return view('landlord_form');
    }

    public function save_form5(Request $request)
    {
        $data =  $request->all();

        $user = landlord::Create($data);

        return back()->with('successful_message','Form Submitted Successfully');
    }
    public function form6()
    {
        return view('tenant_form');
    }

    public function save_form6(Request $request)
    {
        $data =  $request->all();

        $user = tenant::Create($data);

        return back()->with('successful_message','Form Submitted Successfully');
    }
}
