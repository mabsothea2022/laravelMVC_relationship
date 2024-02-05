<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// student is primaryKey
class Students extends Model
{
    use HasFactory;
    protected $table="tbl_students";
    protected $fillable=[
        'id',
        'stuName',
        'stuGender',
        'stuPhone'
    ];

    // create new method for relationship
    public function tbl_students(){
        return $this->hasMany(subjectModel::class,'stuId','id');
    }
}
