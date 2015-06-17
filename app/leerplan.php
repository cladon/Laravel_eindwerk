<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class leerplan extends Model {

    protected $fillable = [ 'leerplannummer', 'ingang' ];




//    public function articles()
//    {
//        return $this->hasMany('App\Article');
//    }

}
