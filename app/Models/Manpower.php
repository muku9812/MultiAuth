<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manpower extends Model
{
    use HasFactory;
    protected $table = 'manpower';
    protected $fillable = ['name','address','phone','email','website','contact_person','mobile_number','package_id','status'];

    function PackageId(){
        return $this->belongsTo(Package::class,'package_id');
    }
}
