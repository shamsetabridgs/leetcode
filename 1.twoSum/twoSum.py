class Solution:
    def twoSum(self, nums, target):
        lengthOfNums = len(nums)

        if lengthOfNums < 2 or 10**4 < lengthOfNums:
            return
        
        for n in range(lengthOfNums):
            if (nums[n] < -10**9 or 10**9 < nums[n]):
                break
                return
            
        if target < -10**9 or 10**9 < target:
            return
        
        # for i in range(lengthOfNums):
        #     for j in range(i + 1, lengthOfNums):
        #         if nums[i] + nums[j] == target:
        #             return [i, j]

        seen = {}

        for i, num in enumerate(nums):
            diff = target - num

            if diff in seen:
                return [seen[diff], i]
            
            seen[num] = i