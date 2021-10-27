<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    #buat property animals
    public $animals = ['ayam', 'kucing'];


    function index()
    {
        foreach ($this->animals as $animal) {
            echo "$animal <br>";
        }
    }
    function store(Request $request) {
        array_push($this->animals, $request->nama);
        $this->index();
    }
    function update(Request $request, $id) {
        echo "Mengedit data animals id: $id heawan : $request->nama";
    }
    function destroy($id){
        echo "Menghapus data animals id: $id";
    }
}
