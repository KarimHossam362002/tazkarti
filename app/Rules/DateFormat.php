<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DateFormat implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
         // Define the expected date format
         $expectedFormat = 'D d M Y';

         // Attempt to parse the date using the expected format
         $parsedDate = date_parse_from_format($expectedFormat, $value);
 
         // Check if the date is valid and matches the expected format
         if (
             $parsedDate['error_count'] === 0 &&
             $parsedDate['warning_count'] === 0 &&
             $parsedDate['month'] >= 1 && $parsedDate['month'] <= 12 &&
             $parsedDate['day'] >= 1 && $parsedDate['day'] <= 31
         ) {
             return; // Validation passed
         }
 
         // If validation fails, invoke the $fail closure with an error message
         $fail("The $attribute must be in the format 'Sun 08 Oct 2023.'");
     }

    }


