<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjectModel extends Model
{
    use HasFactory;
    protected $table="tbl_subject";
    protected $fillable=[
        'subName',
    ];

    public function tbl_subject(){
        return $this->belongsTo(Students::class,'stuId','id');
    }
}
