<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transcation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid', 'name', 'email', 'number', 'address', 'transcation_total', 'transcation_status'
    ];

    protected $hidden = [];

    public function details()
    {
        return $this->hasMany(TranscationDetail::class, 'transcation_id');
    }
}
