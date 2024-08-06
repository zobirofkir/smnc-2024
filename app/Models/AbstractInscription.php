<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class AbstractInscription extends Model
{
    use HasFactory;

    protected $fillable = [
      'address',
      'chu',
      'faculty',
      'university',
      'type',
      'title',
      'introduction',
      'observation',
      'discussion',
      'conclusion',
      'materiel_and_methods',
      'results',
      'accepted',
      'conference_inscription_id'
    ];

    /**
     * @return HasMany
     */
    public function authors(): HasMany
    {
        return $this->hasMany(AbstractInscriptionAuthor::class);
    }

    /**
     * @return BelongsTo
     */
    public function conferenceInscription(): BelongsTo
    {
        return $this->belongsTo(ConferenceInscription::class);
    }

    /**
     * @return HasMany
     */
    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class);
    }

    /**
     * @return HasMany
     */
    public function userRate(): HasMany
    {
        return $this->hasMany(Rate::class)->where('user_id', '=', Auth::id());
    }

    public function next()
    {
        return AbstractInscription::where('type', '=', $this->type)->where('id', '>', $this->id)->orderBy('id','asc')->first();
    }
    public  function previous()
    {
        return AbstractInscription::where('type', '=', $this->type)->where('id', '<', $this->id)->orderBy('id','desc')->first();
    }
}
