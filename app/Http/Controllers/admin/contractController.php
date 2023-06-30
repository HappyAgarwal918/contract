<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contract;

class contractController extends Controller
{
    public function contracts()
    {
        $data = contract::orderby('id')->get();

        return view('admin.contract.contracts',compact('data'));
    }

    public function addnew_contract(Request $request)
    {
        $data = $request->except('_token');

        $user = contract::create($data);

        return back()->with('successful_message','contract added successfully.');
    }

    public function contract_edit($id)
    {
        $data = contract::where('id', $id)->first();

        return view('admin.contract.contract_edit',compact('data'));
    }

    public function contract_edited(Request $request, $id)
    {
        $data = contract::updateOrCreate(['id' => $id,
        ],[
            'name' => $request->name,
        ]);

        return redirect('contracts')->with('successful_message','contract name has been successfully updated.');
    }

    public function destroycontract($id)
    {
        $data = contract::where('id',$id)->delete();
        
        // $data->delete();

    return back()->with('successful_message','contract has been successfully deleted.');
    }
}
