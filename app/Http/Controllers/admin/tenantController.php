<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tenant;

class tenantController extends Controller
{
    public function tenants()
    {
        $data = tenant::orderby('id')->get();

        return view('admin.tenant.tenants',compact('data'));
    }

    public function addnew_tenant(Request $request)
    {
        $data = $request->except('_token');

        $user = tenant::create($data);

        return back()->with('successful_message','tenant added successfully.');
    }

    public function tenant_edit($id)
    {
        $data = tenant::where('id', $id)->first();

        return view('admin.tenant.tenant_edit',compact('data'));
    }

    public function tenant_edited(Request $request, $id)
    {
        $data = tenant::updateOrCreate(['id' => $id,
        ],[
            'name' => $request->name,
        ]);

        return redirect('tenants')->with('successful_message','tenant name has been successfully updated.');
    }

    public function destroytenant($id)
    {
        $data = tenant::where('id',$id)->delete();
        
        // $data->delete();

    return back()->with('successful_message','tenant has been successfully deleted.');
    }
}
