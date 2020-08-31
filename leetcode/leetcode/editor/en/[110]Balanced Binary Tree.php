<?php
//Given a binary tree, determine if it is height-balanced.
//
// For this problem, a height-balanced binary tree is defined as: 
//
// 
// a binary tree in which the left and right subtrees of every node differ in he
//ight by no more than 1. 
// 
//
// 
//
// Example 1: 
//
// Given the following tree [3,9,20,null,null,15,7]: 
//
// 
//    3
//   / \
//  9  20
//    /  \
//   15   7 
//
// Return true. 
// 
//Example 2: 
//
// Given the following tree [1,2,2,3,3,null,null,4,4]: 
//
// 
//       1
//      / \
//     2   2
//    / \
//   3   3
//  / \
// 4   4
// 
//
// Return false. 
// Related Topics Tree Depth-first Search 
// 👍 2482 👎 179


//leetcode submit region begin(Prohibit modification and deletion)
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root) {
        if($root== null) {
            return true;
        }
        $diff = abs($this->maxHeight($root->left) - $this->maxHeight($root->right));
        if($diff>1) {
            return false;
        }
        return $this->isBalanced($root->left) && $this->isBalanced($root->right);
    }

    function maxHeight($node, $current = 0) {
        if($node == null) {
            return $current;
        }
        $current = $current+1;
        return max($this->maxHeight($node->left, $current), $this->maxHeight($node->right, $current));
    }
}
//leetcode submit region end(Prohibit modification and deletion)
