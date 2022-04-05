<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {
    
    public function index( Request $Request){
        $series = [
            '1',
            '2'
        ];

        return view('series.index');
    }
    
}