<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'urgency_level',
        'description',
    ];

    public function scopeFilter($query, array $filters) 
    {
        if($filters['urgency_level'] ?? false) 
        {
            $query->where('urgency_level', 'like', '%' . request('urgency_level') . '%');
        }

        if($filters['search'] ?? false) 
        {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('urgency_level', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('limit', 'like', '%' . request('search') . '%');
        }
    }

    //Relationship to user
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
