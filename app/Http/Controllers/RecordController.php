<?php

namespace App\Http\Controllers;

use App\Record;
use App\User;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public  function create(){
        return view('record.create');
    }

    public function submit(Request $req){
        $record = new Record();

        $record->name = $req->name;
        $record->pnr = $req->pnr;
        $record->destination = $req->destination;
        $record->date = $req->date;
        $record->discount = $req->discount;
        $record->total = $req->total;
        $record->notes = $req->notes;
        $record->save();

        return redirect('show');
    }

    public function show(){
        $data = Record::all();
        return view('record.index' , ['records'=>$data]);
    }


}
