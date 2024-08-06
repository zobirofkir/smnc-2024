<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'conference_inscription_id',
        'total',
        'payed_by',
        'verified',
        'info',
        'bank_transfer',
        'status'
    ];

    /**
     * @return BelongsTo
     */
    public function conferenceInscription(): BelongsTo
    {
        return $this->belongsTo(ConferenceInscription::class);
    }
}
