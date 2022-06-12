<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $primaryKey = 'id';

    protected $guarded = [];

    // Veza VIŠE-VIŠE // Roles -> Permissions
    // Jedna permisija (npr. view_items) može imati više rola, tj. elemente mogu gledati npr. Admin, User...
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    // Veza 1-VIŠE // Roles -> Users
    // Dodjeljujemo Rolu više korisnika, tj. neki od njih su SuperAdmin, neki Admin, a neki User
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
