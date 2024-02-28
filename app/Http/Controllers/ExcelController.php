<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use App\Imports\ProductImport;

class ExcelController extends Controller
{
    public function export(){

        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    public function import(Request $request){
        Excel::import(new ProductImport , $request->file);
        return redirect('/')->with('succes'  , 'Importation termin avec succes');

    }
}
