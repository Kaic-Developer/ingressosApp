<?php

namespace App\Models;

use App\Enums\EventStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    /**
     * Campos liberados para atribuição em massa (Mass Assignment)
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'category',
        'location',
        'address',
        'city',
        'state',
        'starts_at',
        'ends_at',
        'image_path',
        'status',
    ];

    /**
     * Conversão de tipos de atributos (Casts)
     */
    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'status' => EventStatus::class,
    ];

    /**
     * Relacionamento com o Criador do Evento (User)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}