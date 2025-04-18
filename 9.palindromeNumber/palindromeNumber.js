var isPalindrome = function(x) {
    // let strX = String(x);
    // let revX = strX.split('').reverse().join('');

    // return strX == revX ? true : false;

    if (x < -(Math.pow(2, 31)) || (Math.pow(2, 31) - 1) < x) return false;

    if (x < 0 || (x % 10 == 0 && x != 0)) return false;

    let reverseHalf = 0;

    while (x > reverseHalf) {
        reverseHalf = reverseHalf * 10 + x % 10;
        x = Math.floor(x / 10);
    }

    return x == reverseHalf || x == Math.floor(reverseHalf / 10);
}