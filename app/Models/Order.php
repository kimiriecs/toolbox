<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * Get the user that owns the order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {

        return $this->belongsTo(User::class);

    }

    /**
     * Get the subscription that corresponds to the order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscription() {

        return $this->hasOne(Subscription::class);

    }
}
