<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storedata extends Model
{
    use HasFactory;

    protected $table ='stores';
    protected $fillable = ['code','store','owner','datestore','typestore','description'];

    public function ownerforeign()
    {
        return $this->belongsTo(Ownerdata::class, 'owner', 'owner_code');
    }
}
