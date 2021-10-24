<?php

namespace App\Models;

use App\Traits\HasRole;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the roles that user belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */    
    public function roles() {

        return $this->belongsToMany(Role::class)->using(RoleUser::class);

    }


    /**
     * Get the orders that belongs to the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */    
    public function orders() {

        return $this->hasMany(Order::class);

    }

    /**
     * Get the subscriptions that belongs to the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions() {
        
        return $this->belongsToMany(Subscription::class, 'orders');

    }
}
