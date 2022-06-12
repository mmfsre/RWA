<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculties';

    protected $primaryKey = 'id';

    protected $guarded = [];

    // Veza VIŠE-VIŠE  // Faculties -> Users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Veza VIŠE-1 (inverzno) // Faculties -> Directions
    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }
}
