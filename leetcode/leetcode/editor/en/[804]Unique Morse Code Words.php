<?php
//International Morse Code defines a standard encoding where each letter is mapp
//ed to a series of dots and dashes, as follows: "a" maps to ".-", "b" maps to "-.
//..", "c" maps to "-.-.", and so on. 
//
// For convenience, the full table for the 26 letters of the English alphabet is
// given below: 
//
// 
//[".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--
//","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.
//."] 
//
// Now, given a list of words, each word can be written as a concatenation of th
//e Morse code of each letter. For example, "cab" can be written as "-.-..--...", 
//(which is the concatenation "-.-." + ".-" + "-..."). We'll call such a concatena
//tion, the transformation of a word. 
//
// Return the number of different transformations among all words we have. 
//
// 
//Example:
//Input: words = ["gin", "zen", "gig", "msg"]
//Output: 2
//Explanation: 
//The transformation of each word is:
//"gin" -> "--...-."
//"zen" -> "--...-."
//"gig" -> "--...--."
//"msg" -> "--...--."
//
//There are 2 different transformations, "--...-." and "--...--.".
// 
//
// Note: 
//
// 
// The length of words will be at most 100. 
// Each words[i] will have length in range [1, 12]. 
// words[i] will only consist of lowercase letters. 
// 
// Related Topics String 
// 👍 621 👎 644


//leetcode submit region begin(Prohibit modification and deletion)
class Solution
{
    const CODE = [".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....", "..", ".---", "-.-", ".-..", "--", "-.", "---", ".--.", "--.-", ".-.", "...", "-", "..-", "...-", ".--", "-..-", "-.--", "--.."];

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words)
    {
        $map = [];
        foreach ($words as $word) {
            $map[implode($this->convertWord($word))] = 1;
        }
        return count($map);
    }

    function convertWord(string $word): array
    {
        $word = str_split($word);
        $result = [];
        for ($i = 0; $i < count($word); $i++) {
            $result[] = self::CODE[ord($word[$i]) - 97];
        }
        return $result;
    }
}
//leetcode submit region end(Prohibit modification and deletion)
