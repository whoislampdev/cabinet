<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medicament extends Model
{
    use HasFactory;
    protected $guarded=[];


    public static function boot()
    {
        parent::boot();
        self::creating(function($medicament){
            $medicament->user()->associate(auth()->user()->id);
            $medicament->type_medicament()->associate(request()->type_medicament);
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function type_medicament()
    {
        return $this->belongsTo(TypeMedicament::class);
    }
}
