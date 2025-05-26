<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'requester_id',
        'payer_id',
        'amount',
        'description',
        'token',
        'status',
        'expires_at',
        'paid_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'expires_at' => 'datetime',
        'paid_at' => 'datetime',
    ];

    /**
     * Get the user who requested the money
     */
    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_id');
    }

    /**
     * Get the user who paid the money
     */
    public function payer()
    {
        return $this->belongsTo(User::class, 'payer_id');
    }

    /**
     * Check if the request is expired
     */
    public function isExpired()
    {
        return $this->expires_at < now();
    }

    /**
     * Check if the request is active (pending and not expired)
     */
    public function isActive()
    {
        return $this->status === 'pending' && !$this->isExpired();
    }
}
