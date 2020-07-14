<?php
//Given the root node of a binary search tree, return the sum of values of all n
//odes with value between L and R (inclusive). 
//
// The binary search tree is guaranteed to have unique values. 
//
// 
//
// 
// Example 1: 
//
// 
//Input: root = [10,5,15,3,7,null,18], L = 7, R = 15
//Output: 32
// 
//
// 
// Example 2: 
//
// 
//Input: root = [10,5,15,3,7,13,18,1,null,6], L = 6, R = 10
//Output: 23
// 
//
// 
//
// Note: 
//
// 
// The number of nodes in the tree is at most 10000. 
// The final answer is guaranteed to be less than 2^31. 
// 
// 
// Related Topics Tree Recursion 
// 👍 1218 👎 213

/**
 * Definition for a binary tree node.
 */
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}
//leetcode submit region begin(Prohibit modification and deletion)

class Solution
{

    /**
     * @param TreeNode $root
     * @param Integer $L
     * @param Integer $R
     * @return Integer
     */
    function rangeSumBST($root, $L, $R)
    {
        $sum = 0;
        if (!is_null($root->left)) {
            $sum += $this->rangeSumBST($root->left, $L, $R);
        }
        if (!is_null($root->right)) {
            $sum += $this->rangeSumBST($root->right, $L, $R);
        }
        if ($root->val <= $R && $root->val >= $L) {
            $sum += $root->val;
        }
        return $sum;
    }
}
//leetcode submit region end(Prohibit modification and deletion)
