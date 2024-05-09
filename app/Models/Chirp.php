<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
//    public $timestamps = ["created_at"]; //only want to used created_at column
//    public const UPDATED_AT = null; //and updated by default null set
    use HasFactory;
    protected $fillable = [
        'message',
    ];
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
