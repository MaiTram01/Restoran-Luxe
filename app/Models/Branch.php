<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    protected $fillable = [
        'branch_name',
        'address',
        'phone_number',
        'email',
        'is_active',
        'description',
    ];

    public function areas()
    {
        return $this->hasMany(Area::class, 'branch_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'branch_id');
    }
}
