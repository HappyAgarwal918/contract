<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vendor;

class vendorController extends Controller
{
    public function vendors()
    {
        $data = vendor::orderby('id')->get();

        return view('admin.vendor.vendors',compact('data'));
    }

    public function addnew_vendor(Request $request)
    {
        $data = $request->except('_token');

        $user = vendor::create($data);

        return back()->with('successful_message','vendor added successfully.');
    }

    public function vendor_edit($id)
    {
        $data = vendor::where('id', $id)->first();

        return view('admin.vendor.vendor_edit',compact('data'));
    }

    public function vendor_edited(Request $request, $id)
    {
        $data = vendor::updateOrCreate(['id' => $id,
        ],[
            'name' => $request->name,
        ]);

        return redirect('vendors')->with('successful_message','vendor name has been successfully updated.');
    }

    public function destroyvendor($id)
    {
        $data = vendor::where('id',$id)->delete();
        
        // $data->delete();

    return back()->with('successful_message','vendor has been successfully deleted.');
    }
}
