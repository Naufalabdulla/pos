<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name, role'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false. function ($query, $search){
            return $query->where('name', 'like', '%'. $search  .'%');
        });
    }

    public function members(){
        return $this->hasMany(Member::class);
    }
}
