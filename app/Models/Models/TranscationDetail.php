<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TranscationDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'products_id', 'transcation_id'
    ];

    protected $hidden = [];

    public function transcation()
    {
        return $this->belongsTo(Transcation::class, 'transcation_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
