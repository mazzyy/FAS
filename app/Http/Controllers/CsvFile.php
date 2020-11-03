<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;

class CsvFile extends Controller
{
    function index(){

    $data=User::latest()->paginate(10);
    return view('csv_file_pagination',compact('data'))->with('i',(request()->input('page',1) - 1)* 10);
    }

    public function csv_export()
    {
        return Excel::download(new csvexport,'sample.csv' );
    }
    public function csv_import()
    {
        Excel::import(new CsvImport(4), request()->file('file'));
        return back()->with('status', 'success');
    }

    public function csv_import_advisor()
    {
        Excel::import(new CsvImport(5), request()->file('file'));
        return back()->with('status', 'success');
    }
}
