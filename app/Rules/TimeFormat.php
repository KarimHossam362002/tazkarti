<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeFormat implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        
        $expectedFormat = 'H:i';  
        $parsedTime = \DateTime::createFromFormat($expectedFormat, $value);
        
        if (!($parsedTime && $parsedTime->format($expectedFormat) === $value)) {
            $fail("The $attribute must be in the format \"16:01\".");
            
        }

    }
}
