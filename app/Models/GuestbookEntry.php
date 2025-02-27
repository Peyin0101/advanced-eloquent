<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GuestbookEntry extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'message',
        'approved_at',
    ];

    protected $table = 'guestbook';

    public function scopeApproved(Builder $query): Builder
    {
        return $query->whereNotNull('approved_at');
    }

    public function scopeUnapproved(Builder $query): Builder
    {
        return $query->whereNull('approved_at');
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
            set: fn(string $value) => ucfirst($value)
        );
    }

    protected function isApproved(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->approved_at !== null
        );
    }

    protected $casts = [
        'approved_at' => 'datetime',
    ];
}
