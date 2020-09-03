<?php
//Given a Binary Search Tree (BST) with the root node root, return the minimum d
//ifference between the values of any two different nodes in the tree. 
//
// Example : 
//
// 
//Input: root = [4,2,6,1,3,null,null]
//Output: 1
//Explanation:
//Note that root is a TreeNode object, not an array.
//
//The given tree [4,2,6,1,3,null,null] is represented by the following diagram:
//
//          4
//        /   \
//      2      6
//     / \    
//    1   3  
//
//while the minimum difference in this tree is 1, it occurs between node 1 and n
//ode 2, also between node 3 and node 2.
// 
//
// Note: 
//
// 
// The size of the BST will be between 2 and 100. 
// The BST is always valid, each node's value is an integer, and each node's val
//ue is different. 
// This question is the same as 530: https://leetcode.com/problems/minimum-absol
//ute-difference-in-bst/ 
// 
// Related Topics Tree Recursion 
// 👍 739 👎 211


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
class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function minDiffInBST($root, $backtrack = [], $min = PHP_INT_MAX)
    {
        if ($root == null) {
            return PHP_INT_MAX;
        }

        foreach ($backtrack as $num) {
            $min = min($min, abs($num - $root->val));
        }
        $backtrack[] = $root->val;
        $treemin = min($this->minDiffInBST($root->left, $backtrack, $min), $this->minDiffInBST($root->right, $backtrack, $min));
        return min($min, $treemin);
    }
}
//leetcode submit region end(Prohibit modification and deletion)
