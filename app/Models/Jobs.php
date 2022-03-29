<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Jobs extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = ['title','working_position','country_id','male_demand','female_demand','qualification_id','salary_rs','salary_abroad_currency','category_id','expire_date','status','additional_information','document','jtype_id','company_name','created_by'];


    function CategoryId(){
        return $this->belongsTo(JobCategory::class,'category_id');
    }
    function JtypesId(){
        return $this->belongsTo(Jtype::class,'job_types');
    }
    function countryId(){
        return $this->belongsTo(Country::class,'country_id');
    }
    function qualificationId()
    {
        return $this->belongsTo(Qualification::class, 'qualification_id');
    }

}
