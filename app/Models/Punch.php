<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punch extends Model
{

    protected $table = 'punchrecord';
    use HasFactory;
    protected $fillable=[
	    "year",
        "date",
        "nameid",
        "punch_in",
        "punch_out",
        'time',
        'mark',
        "created_at",
        "updataed_at",
    ];

    public function scopePunch($query,$date)
    {
        $query->join('users','punchrecord.nameid','=','users.id')->select('punchrecord.*')
        ->where('year','=',date('Y'))
        ->where('date','LIKE',"$date%")
        ->where('punch_in','!=',null)
        ->where('punch_out','!=',null);
    }

    public function user(){
        return $this->belongsTo("App\Models\User","nameid","id");
    }

}
