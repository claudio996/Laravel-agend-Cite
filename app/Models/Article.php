<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'serialNumber',
        'Description',
        'cantidad',
        'status',
        'categories_id',
    ];

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);

    }
}
