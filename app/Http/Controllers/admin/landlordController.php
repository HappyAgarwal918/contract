<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\landlord;

class landlordController extends Controller
{
    public function landlords()
    {
        $data = landlord::orderby('id')->get();

        return view('admin.landlord.landlords',compact('data'));
    }

    public function addnew_landlord(Request $request)
    {
        $data = $request->except('_token');

        $user = landlord::create($data);

        return back()->with('successful_message','landlord added successfully.');
    }

    public function landlord_edit($id)
    {
        $data = landlord::where('id', $id)->first();

        return view('admin.landlord.landlord_edit',compact('data'));
    }

    public function landlord_edited(Request $request, $id)
    {
        $data = landlord::updateOrCreate(['id' => $id,
        ],[
            'name' => $request->name,
        ]);

        return redirect('landlords')->with('successful_message','landlord name has been successfully updated.');
    }

    public function destroylandlord($id)
    {
        $data = landlord::where('id',$id)->delete();
        
        // $data->delete();

    return back()->with('successful_message','landlord has been successfully deleted.');
    }
}
