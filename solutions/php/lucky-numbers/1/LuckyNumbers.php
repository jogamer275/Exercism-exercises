<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        return (int)implode("",$digitsOfNumber1) + (int)implode("",$digitsOfNumber2);
    }

    public function isPalindrome(int $number): bool
    {
        $revNumber = (int) strrev(strval($number));
        if ($number === $revNumber) {
            return True;
        } else {
            return False;
        }
    }

        public function validate(string $input): string
        {
            if ($input === '') {
                return 'Required field';
            }
        
            $number = (int) $input;
            if ($number <= 0) {
                return 'Must be a whole number larger than 0';
            }
        
            return '';
        }

    }
