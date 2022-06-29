<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
Use App\Models\User;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'cmp_id',
        'name',
        'email',
        'logo',
        'website'
    ];
    
    //Pagnation Per Page
    protected $perPage = 10;

    // public function creator()
    // {
    //     return $this->belongsTo(new User());
    // }

    /**
     * The employees that belong to the user.
     */
    public function employees()
    {
        return $this->hasMany(new Employee());
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
