<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model {

	//
    protected $table = "employees";
    protected $primaryKey = "employee_id";
//    public function history(){
//        return $this->hasMany('App\History','employees','history_id');
//    }

}
