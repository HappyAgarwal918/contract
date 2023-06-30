<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\location;

class locationController extends Controller
{
    public function locations()
    {
        $data = location::orderby('id')->get();

        return view('admin.location.locations',compact('data'));
    }

    public function addnew_location(Request $request)
    {
        $data = $request->except('_token');

        $user = location::create($data);

        return back()->with('successful_message','location added successfully.');
    }

    public function location_edit($id)
    {
        $data = location::where('id', $id)->first();

        return view('admin.location.location_edit',compact('data'));
    }

    public function location_edited(Request $request, $id)
    {
        $data = location::updateOrCreate(['id' => $id,
        ],[
            'name' => $request->name,
        ]);

        return redirect('locations')->with('successful_message','location name has been successfully updated.');
    }

    public function destroylocation($id)
    {
        $data = location::where('id',$id)->delete();
        
        // $data->delete();

    return back()->with('successful_message','location has been successfully deleted.');
    }
}
