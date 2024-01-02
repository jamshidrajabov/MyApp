<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (substr($value,0,4) === "+998" && strlen($value) ===13 ) {
        }
        else
        {
            $fail('Telefon raqami +998999999999 ko`rinishida kiritilishi shart');
        }
    }
}
