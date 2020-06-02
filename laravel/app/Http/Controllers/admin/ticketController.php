<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ticket;
class ticketController extends Controller
{
    public function viewallticket()
    {   
        $data['tickets']=ticket::orderBy('id','desc')->get();

        return view('admin/viewticket')->with($data);
   
    }

    public function delete($id)
    {
        $deleteticket = ticket::where('id', $id)->delete();
        $data['tickets']=ticket::all();
        return view('admin/deleteticket')->with($data);
    
    }
}
