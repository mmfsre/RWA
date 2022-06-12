<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'lecturer', 'drive_link', 'image_path', 'year', 'description'];

    // protected $hidden = ['updated_at']; // ONO ŠTO NE ŽELIMO PRIKAZATI

    // protected $visible = ['name', 'lecturer', 'year', 'description']; // PRIKAZUJEMO ONO ŠTO ŽELIMO

    // Veza VIŠE-VIŠE  // Materials -> Users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Veza 1-1 // Materials -> Directions // Određeni predmet/matarijal sa određenog smjera
    public function direction()
    {
        return $this->hasOne(Direction::class);
    }
}
