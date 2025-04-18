<?
class Solution {
    function isPalindrome($x) {
        // $strX = strval($x);
        // $revX = strrev($strX);

        // return $strX == $revX ? true : false;

        if ($x < -2**31 || 2**31 -1 < $x) return false;

        if ($x < 0 || ($x % 10 == 0 && $x != 0)) return false;

        $reverseHalf = 0;

        while ($x > $reverseHalf) {
            $reverseHalf = $reverseHalf * 10 + $x % 10;
            $x = intdiv($x, 10);
        }

        return $x == $reverseHalf || $x == intdiv($reverseHalf, 10);
    }
}