<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Reverb\Pulse\Livewire\Messages;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'group_user');
    }


    public function messages()
    {
        return $this->hasMany(Messages::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
