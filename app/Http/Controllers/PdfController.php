<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    // Предпросмотр PDF
    public function preview()
    {
        $data = [
            'title' => 'Демонстрационный PDF',
            'content' => 'Это содержимое PDF документа'
        ];

        return view('pdf.preview', $data);
    }

    // Генерация и скачивание PDF
    public function download()
    {
        $data = [
            'title' => 'Демонстрационный PDF',
            'content' => 'Это содержимое PDF документа'
        ];

        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->download('document.pdf');
    }

    // Генерация и отображение в браузере
    public function stream()
    {
        $data = [
            'title' => 'Демонстрационный PDF',
            'content' => 'Это содержимое PDF документа'
        ];

        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->stream('document.pdf');
    }
}
