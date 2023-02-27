<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMedicament extends Model
{
    use HasFactory;
    protected $guarded=[]; 


    public function medicament()
    {
        return $this->hasMany(Medicament::class);
    }
}
