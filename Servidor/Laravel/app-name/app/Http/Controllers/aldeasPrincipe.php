<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aldeasPrincipe extends Controller
{
    public function getPoblados() {
        $poblados = ['Bodjondè', ' Kara', ' Tchébébé', ' Sokodé', ' Tchamba', ' Atakpamé'];
        return response()->json(['mensaje' => 'Estos son mis aldeas en Togo', 'datos' => $poblados]);
    }
}
