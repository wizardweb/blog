<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exceldata extends Model
{
	
	protected $fillable=[
	 'department',
	 'name',
	 'no',
	 'datetime',
	 'locationid',
	 'idnumber',
	 'verifycode',
	 'cardno', 
	];
	
	public $timestamps =false;
	
	protected $table = 'exceldata';
    //
}
