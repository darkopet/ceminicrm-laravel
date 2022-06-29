<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\User;

class Employee extends Model
{
    use HasFactory;

     /**
     * Employee attributes.
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'company_id',
        'email',
        'phone'
    ];

    //Pagnation Per Page
    protected $perPage = 10;

    // public function creator()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function company()
    {
        return $this->belongsTo(new Company());
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}


