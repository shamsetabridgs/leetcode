class Solution:
    def isPalindrome(self, x: int) -> bool:
        # strX = str(x)
        # reversedX = strX[::-1]

        # return True if strX == reversedX else False

        if x < -2**21 or 2**31 - 1 < x:
            return False
        
        if x < 0 or (x % 10 == 0 and x != 0):
            return False
        
        reversedHalf = 0

        while x > reversedHalf:
            reversedHalf = reversedHalf * 10 + x % 10
            x //= 10

        return x == reversedHalf or x == reversedHalf // 10