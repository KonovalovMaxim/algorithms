<?php
//Given the root node of a binary search tree (BST) and a value. You need to fin
//d the node in the BST that the node's value equals the given value. Return the s
//ubtree rooted with that node. If such node doesn't exist, you should return NULL
//. 
//
// For example, 
//
// 
//Given the tree:
//        4
//       / \
//      2   7
//     / \
//    1   3
//
//And the value to search: 2
// 
//
// You should return this subtree: 
//
// 
//      2     
//     / \   
//    1   3
// 
//
// In the example above, if we want to search the value 5, since there is no nod
//e with value 5, we should return NULL. 
//
// Note that an empty tree is represented by NULL, therefore you would see the e
//xpected output (serialized tree format) as [], not null. 
// Related Topics Tree 
// 👍 830 👎 118


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
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val) {
        if($root == null) {
            return null;
        }
        if($root->val == $val) {
            return $root;
        }

        if ($val < $root->val) {
            return $this->searchBST($root->left, $val);
        } else {
            return $this->searchBST($root->right, $val);
        }
    }
}
//leetcode submit region end(Prohibit modification and deletion)
