<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ownerdata extends Model
{
    use HasFactory;

    protected $table ='owners';
    protected $fillable = ['owner_code','fullname', 'age', 'gender', 'contactperson', 'description'];
    protected $primaryKey = 'owner_code';

    public $incrementing = false;

    public function stores()
    {
        return $this->hasMany(Storedata::class, 'owner', 'owner_code');
    }
}
