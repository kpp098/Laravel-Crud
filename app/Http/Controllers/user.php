<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\detail;

class user extends Controller

{

            // **************** function for insert  data *******************
    function save(Request $req)
    {
        $member =  new detail;
        $member->username = $req->username;
        $member->email = $req->email;
        $member->mobile = $req->mobile;
        $member->save();
        return redirect('list');
    }
            // **************** function For View data from Database *******************

    function view()
    {
        $data = detail::all();
        return view('list', ['members' => $data]);
       
    }
            // **************** function for Delete data *******************

    function delete($id)
    {
        $data = detail::find($id);
        $data->delete();
        return redirect('list');
    }
            // **************** function for Update data *******************

    function update($id)
    {
        $data = detail::find($id);
        return view('check', ['data' => $data]);
    }

            // **************** function for Insert Updated   data *******************

    function insert(request $req)
    {
        $data = detail::find($req->id);
        $data->username = $req->username;
        $data->email = $req->email;
        $data->mobile = $req->mobile;
        $data->save();
        return redirect('list');
    }
}
 