<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    // Veza VIŠE-VIŠE  // Users -> Materials
    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }

    // Veza VIŠE-VIŠE  // Users -> Faculties
    public function faculties()
    {
        return $this->belongsToMany(Faculty::class);
    }

    // Veza VIŠE-VIŠE  // Users -> Directions
    public function directions()
    {
        return $this->belongsToMany(Direction::class);
    }

    // Veza VIŠE-1 (inverzno) // Users -> Roles
    // Korisnicima dodjeljujemo točno određenu rolu - SuperAdmin, Admin, User
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // OBRISATI KASNIJE
    // /**
    //  * Check if the user has a role
    //  * @param string $role
    //  * @return bool
    //  */
    // public function hasAnyRole(string $role)
    // {
    //     return null !== $this->role()->where('name', $role)->first();
    // }

    // /**
    //  * Check the user any given role
    //  * @param array $role
    //  * @return bool
    //  */
    // public function hasAnyRoles(array $role)
    // {
    //     return null !== $this->role()->whereIn('name', $role)->first(); // wherIn()--> ukazuje na niz naziva "name"
    // }
}
