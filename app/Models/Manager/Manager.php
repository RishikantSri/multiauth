<?php

namespace App\Models\Manager;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Manager extends Model
{
    use HasFactory, Notifiable;
    protected $guard = 'manager';
}
