class Solution {
    function twoSum($nums, $target) {
        $lengthOfNumber = count($nums);

        if ($lengthOfNumber < 2 || 10**4 < $lengthOfNumber) return;

        foreach ($nums as $key => $val) {
            if ($val < -10**9 || 10**9 < $val) return;
        }

        if ($target < -10**9 || 10**9 < $target) return;

        <!-- for ($i = 0; $i < $lengthOfNumber; $i++) {
            for ($j = $i+1; $j < $lengthOfNumber; $j++) {
                if ($nums[$i] + $nums[$j] == $target) return [$i, $j];
            }
        } -->

        $seen = [];

        for ($i = 0; $i < $lengthOfNumber; $i++) {
            $diff = $target - $nums[$i];

            if (isset($seen[$diff])) return [$seen[$diff], $i];

            $seen[$nums[$i]] = $i;
        }
    }
}