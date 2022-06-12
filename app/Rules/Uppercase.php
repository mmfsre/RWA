<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */

    // PRIMJER - Korištenje vlastitog pravila, u ovome slučaju da moraju biti sva VELIKA SLOVA

    public function passes($attribute, $value)
    {
        return strtoupper($value) === $value;   // Uspoređivanje sa tipom podatka, ne sa vrijednosti, zato je: "==="
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be uppercase';
    }
}
