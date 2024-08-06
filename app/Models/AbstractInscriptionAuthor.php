<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AbstractInscriptionAuthor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'presenter',
        'affiliation',
        'abstract_inscription_id'
    ];

    /**
     * @return BelongsTo
     */
    public function abstractInscription(): BelongsTo
    {
        return $this->belongsTo(AbstractInscription::class);
    }
}
