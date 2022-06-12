<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $table = 'directions';

    protected $primaryKey = 'id';

    protected $guarded = [];

    // Veza VIŠE-VIŠE  // Directions -> Users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Veza 1-1 (inverzno) // Directions -> Materials // Sa određenog smjera biramo točno taj određeni kolegij/materijal
    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    // Veza 1-VIŠE // Directions -> Faculties
    /* Svaki smjer povezujemo na određeni fakultet, tj. uzimamo smjer sa ponuđenih više smjerova na nekom fakultetu,
     npr. Računarstvo sa FSRE-a, Elektrotehnika sa FSRE-a itd. */
    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }
}
