<?php

namespace App\Models\RegimenModels;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regimen extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_regimen';
    protected $fillables = ['name','code', 'service_id', 'category_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $dates = ['deleted_at'];

    public function drug(){
        return $this->belongsToMany('App\DrugModels\Drugs', 'tbl_regimen_drug');
    }
}