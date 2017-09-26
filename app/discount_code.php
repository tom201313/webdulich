<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class discount_code extends Model {

	//
    protected $table = "discount_code";
    protected $primaryKey = "discount_code_id";

    public  function employees(){
        return $this->belongsTo('App/employee,','employee_id','employees');
    }

}
