<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Role implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
       
        return in_array($value, ['admin', 'user','employer','applicant']);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not a valid role.';
    }
}
