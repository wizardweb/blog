<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceldata;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use Carbon\Carbon;
class ExcelController extends Controller
{
	
	public function getImport(){
		exit;
		return view('excel.importEmployee');
	}
	
	public function postImport(){
		
		Excel::load(Input::file('acount'),function($reader){
	

			
			///print_r($sheet->toArray());
			 /*foreach ($reader->toArray() as $row) {
                    Exceldata::firstOrCreate($row);
                }
				//Exceldata::firstOrCreate(['department' => 'Flight 10','name' => 'Flight 10']);
			
			});*/
	

		
			foreach ($reader->toArray() as $row) {
			
				  $row['datetime']=  date('Y-m-d H:i:s',strtotime($row['datetime']));
				
				   Exceldata::firstOrCreate($row);
              }

				//print_r($reader->formatDates(true, 'Y-m-d')->toArray());
				
				
			
		});
		
	}
	


    //
}
