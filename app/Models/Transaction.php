<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';
    protected $fillable = ['name', 'kategoris_id', 'date', 'amount', 'note', 'image'];

    public function kategoris(): BelongsTo
    {
        return $this->belongsTo(Kategoris::class);
    }
}