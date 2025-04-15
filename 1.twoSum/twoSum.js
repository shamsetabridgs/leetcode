let twoSum = function(nums, target) {
    let lengthOfNums = nums.length;

    if (lengthOfNums < 2 || Math.pow(10, 4) < lengthOfNums) return;

    for (let val of nums) {
        if (val < -Math.pow(10, 9) || Math.pow(10, 9) < val) return;
    }

    if (target < -Math.pow(10, 9) || Math.pow(10, 9) < target) return;

    // for (let i = 0; i < lengthOfNums; i++) {
    //     for (let j = i + 1; i < lengthOfNums; j++) {
    //         if (nums[i] + nums[j] == target) return [i, j];
    //     }
    // }

    let seen = {};

    for (let i = 0; i < lengthOfNums; i++) {
        let diff = target - nums[i];

        if (seen.hasOwnProperty(diff)) return [seen[diff], i];

        seen[nums[i]] = i;
    }
}