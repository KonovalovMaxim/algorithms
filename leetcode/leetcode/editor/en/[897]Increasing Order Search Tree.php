<?php
//Given a binary search tree, rearrange the tree in in-order so that the leftmos
//t node in the tree is now the root of the tree, and every node has no left child
// and only 1 right child. 
//
// 
//Example 1:
//Input: [5,3,6,2,4,null,8,1,null,null,null,7,9]
//
//       5
//      / \
//    3    6
//   / \    \
//  2   4    8
// /        / \ 
//1        7   9
//
//Output: [1,null,2,null,3,null,4,null,5,null,6,null,7,null,8,null,9]
//
// 1
//  \
//   2
//    \
//     3
//      \
//       4
//        \
//         5
//          \
//           6
//            \
//             7
//              \
//               8
//                \
//                 9  
// 
// Constraints: 
//
// 
// The number of nodes in the given tree will be between 1 and 100. 
// Each node will have a unique integer value from 0 to 1000. 
// 
// Related Topics Tree Depth-first Search 
// 👍 665 👎 458

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
     * @return TreeNode
     */
    function increasingBST($root)
    {
        $this->treeWalk($root);
        return $root;
    }

    public function treeWalk(?TreeNode &$root)
    {
        if ($root == null) {
            return;
        }
        if ($root->left) {
            $left = $root->left;
            if ($left && $left->right) {
                //Переставляем макушку дерева в самую правую ветку
                $right = $left->right;
                //тут ищем самую правую ветку
                while ($right->right) {
                    $right = $right->right;
                }
                //переставляем
                $right->right = $root;
                $root->left = null;
                $root = $left;
                $this->treeWalk($root);
                return;
            }
            //Если правой ветки нет то просто переставляем макушку дерева к левой
            if ($left) {
                $left->right = $root;
                $root->left = null;
                $root = $left;
                $this->treeWalk($root);
            }
        } elseif ($root->right) {
            $this->treeWalk($root->right);
        }
    }

}

//leetcode submit region end(Prohibit modification and deletion)
$tree = new TreeNode(5, new TreeNode(3, new TreeNode(2, new TreeNode(1)), new TreeNode(4)), new TreeNode(6, null, new TreeNode(8, new TreeNode(7), new TreeNode(9))));
(new Solution())->treeWalk($tree);
