<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category_name',
        'is_active',
        'description',
    ];
    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
