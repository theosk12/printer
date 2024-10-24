<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'image2', 'image3', 'image4', 'description', 'is_published', 'phone_number', 'email'
    ];
}
