<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Excel;

class ExcelController extends Controller
{
    //
    public function index()
    {
    	return view('res.excel');
    }

 //    public function export()
 //    {
 //    	$fileName = 'File001';
 //    	$category = 'cat002';
 //    	$data = array(
 //    			array('data1', 'data2'),
 //    			array('data3', 'data4')
 //    		);
 //    	Excel::create($fileName, function($excel) use($category, $data){
 //    		$excel->sheet($category,function($sheet) use ($data){
 //    			$sheet->fromArray($data);
 //    		});
 //    	})->store('xlsx');
	// }
	public function export(Request $request)
	{
		// $var = $request->all();
		$cat1 = 'Cat001';
		$cat2 = 'Cat002';
		if ($request->exists($cat1)) {
			# code...
			$var1 = Input::get($cat1);

		}
		if ($request->exists($cat2)) {
			# code...
			// $var = $request->input('Cat002');
			$var2 = Input::get($cat2);
		}
		$data = array($cat1=>$var1, $cat2=>$var2);
		// dd($data);

		$fileName = 'File002';
		Excel::create($fileName, function($excel) use($data){
			foreach ($data as $key => $value) {
				# code...
				$excel->sheet($key, function($sheet) use ($value){
					// $sheet->setOrientation('landscape');
					$sheet->fromArray($value);
				});
			}
		})->store('xlsx');

		return redirect('/excel/index');
	}
}
