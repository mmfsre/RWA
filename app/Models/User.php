<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Symfony\Component\Console\Input\Input;

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
        'role_id',
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

    // Veza 1-1 (inverzno) // Users -> Directions // Za predstavnika svakog smjera
    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }

    // Veza VIŠE-1 (inverzno) // Users -> Roles
    // Korisnicima dodjeljujemo točno određenu rolu - SuperAdmin, Admin, User
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Permisije
    public function hasPermission($name)
    {
        return $this->role->permissions()->where('name', $name)->exists();
    }

    // Možemo dodati string jer nam to i funckija vraća da bi lakše razumjeli što radi...
    public function hasAnyRole(string $role)
    {
        // Ako smo našli korisnika s odgovarajućom rolom, vratit će True, ako ne onda NULL (Koristimo "!==")
        return null !== $this->role()->where('name', $role)->first();
    }

    // Da sam napravio bazu tako da jedan korisnik može imati više uloga, tj. niz, onda bi ovdje dodao isto samo sa "whereIn"
    // Možemo dodati array jer nam to i funckija vraća da bi lakše razumjeli što radi...
    // public function hasAnyRole(array $role)
    // {
    //     return null !== $this->role()->whereIn('name', $role)->first();
    // }

}
