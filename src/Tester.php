<?php

namespace Del\Palindrome;

use Exception;

class Tester
{
    /** @var string */
    private $original_string;

    /** @var string */
    private $first_half;

    /** @var string */
    private $second_half_reversed;


    /**
     * @param string $string
     * @return bool
     * @throws Exception
     */
    public function isPalindrome($string)
    {
        // throw a flaky if a we haven't been given a string
        if(!is_string($string))
        {
            throw new Exception('You must pass a string!');
        }

        $this->original_string = strtolower($string);

        // prepare the string for analysis
        $this->setComparisonStrings();

        // test wether the string is indeed a palindrome
        $result = $this->stringsMatch();

        // clear properties ready for another go
        $this->reset();

        // return the result
        return $result;
    }

    /**
     *  splits the string into two
     *  The second string is reversed so as to compare
     */
    private function setComparisonStrings()
    {
        // Get the length of the string
        $length = strlen($this->original_string);

        // Check if it is an odd number or not
        // If it is, we take 1 from the length
        if($length % 2 == 1)
        {
            $length -- ;
        }

        // get the length of half the string
        $length = $length / 2;

        // set the first half of the string
        $this->first_half = substr($this->original_string,0,$length);

        // and set the second, reversing it too
        $this->second_half_reversed = strrev(substr($this->original_string, - $length));
    }

    /**
     * @return bool
     */
    private function stringsMatch()
    {
        return $this->first_half == $this->second_half_reversed;
    }

    /**
     *  clears class properties
     */
    private function reset()
    {
        $this->original_string = null;
        $this->first_half = null;
        $this->second_half_reversed = null;
    }
}
