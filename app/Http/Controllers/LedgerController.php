<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnel;
class LedgerController extends Controller
{
    public function index(){
        $person = Personnel::all();
        return view('ledgers.index',['ledgers' => $person]);
    }

    public function create(){
        return view('ledgers.create');
    }

    public function store(){

        $person = new Personnel();

        $person->fname = request('fname');
        $person->lname = request('lname');
        $person->age = request('age');
        $person->id_number = request('id_number');
        $person->id_type = request('id_type');
        $person->mode_of_transpo = request('mode_of_transpo');
        $person->vplatenum = request('vplatenum');
        $person->purpose = request('purpose');
        $person->destination = request('destination');
        $person->border_name = request('border_name');

        $person->save();

        return redirect('/ledgers');
    }
}
