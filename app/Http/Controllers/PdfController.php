<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf(){
        $pdf = Pdf::loadview('pdf.invoice' , $data);
        return $pdf->download('invoice.pdf');
    }
}
