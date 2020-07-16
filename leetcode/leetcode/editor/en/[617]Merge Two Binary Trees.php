<?php
//Given two binary trees and imagine that when you put one of them to cover the
//other, some nodes of the two trees are overlapped while the others are not. 
//
// You need to merge them into a new binary tree. The merge rule is that if two 
//nodes overlap, then sum node values up as the new value of the merged node. Othe
//rwise, the NOT null node will be used as the node of new tree. 
//
// Example 1: 
//
// 
//Input: 
//	Tree 1                     Tree 2                  
//          1                         2                             
//         / \                       / \                            
//        3   2                     1   3                        
//       /                           \   \                      
//      5                             4   7                  
//Output: 
//Merged tree:
//	     3
//	    / \
//	   4   5
//	  / \   \ 
//	 5   4   7
// 
//
// 
//
// Note: The merging process must start from the root nodes of both trees. 
// Related Topics Tree 
// 👍 3059 👎 172
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
     * @param TreeNode $t1
     * @param TreeNode $t2
     * @return TreeNode
     */
    function mergeTrees($t1, $t2)
    {
        return $this->mrg($t1, $t2);
    }

    function mrg(TreeNode &$t1 = null, TreeNode &$t2 = null)
    {
        if (!is_null($t1) && !is_null($t2)) {
            $t1->val += $t2->val;
            $t1->left = $this->mrg($t1->left, $t2->left);
            $t1->right = $this->mrg($t1->right, $t2->right);
        } elseif (!is_null($t2)) {
            return $t2;
        }
        return $t1;
    }
}
//leetcode submit region end(Prohibit modification and deletion)
