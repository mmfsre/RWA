<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';

    protected $primaryKey = 'id';

    protected $guarded = [];

    // Veza VIŠE-VIŠE // Permissions -> Roles
    // Jedna rola (npr. Admin) može imati više permisija, tj. može -> view_items, manage_items, manage_users
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
