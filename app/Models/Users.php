<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $fillable = [
        'username',
        'password',
        'full_name',
        'avatar',
        'birth_day',
        'phone_number',
        'email',
        'role',
        'last_login',
        'is_active',
        'description',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'customer_id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'customer_id');
    }
}
