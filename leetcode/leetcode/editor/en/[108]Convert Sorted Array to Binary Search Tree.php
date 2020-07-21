<?php
//Given an array where elements are sorted in ascending order, convert it to a h
//eight balanced BST. 
//
// For this problem, a height-balanced binary tree is defined as a binary tree i
//n which the depth of the two subtrees of every node never differ by more than 1.
// 
//
// Example: 
//
// 
//Given the sorted array: [-10,-3,0,5,9],
//
//One possible answer is: [0,-3,9,-10,null,5], which represents the following he
//ight balanced BST:
//
//      0
//     / \
//   -3   9
//   /   /
// -10  5
// 
// Related Topics Tree Depth-first Search 
// 👍 2468 👎 214

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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums)
    {
        if (!$nums) {
            return null;
        }
        $mid = intval(count($nums) / 2);
        $left = array_slice($nums, 0, $mid);
        $right = array_slice($nums, $mid + 1);
        return new TreeNode($nums[$mid],
            $this->sortedArrayToBST($left),
            $this->sortedArrayToBST($right)
        );
    }

}

//leetcode submit region end(Prohibit modification and deletion)
$res = (new Solution())->sortedArrayToBST([-10, -3, 0, 5, 9]);
var_dump($res);
