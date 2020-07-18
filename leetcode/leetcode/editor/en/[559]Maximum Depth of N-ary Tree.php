<?php
//Given a n-ary tree, find its maximum depth.
//
// The maximum depth is the number of nodes along the longest path from the root
// node down to the farthest leaf node. 
//
// Nary-Tree input serialization is represented in their level order traversal, 
//each group of children is separated by the null value (See examples). 
//
// 
// Example 1: 
//
// 
//
// 
//Input: root = [1,null,3,2,4,null,5,6]
//Output: 3
// 
//
// Example 2: 
//
// 
//
// 
//Input: root = [1,null,2,3,4,5,null,null,6,7,null,8,null,9,10,null,null,11,null
//,12,null,13,null,null,14]
//Output: 5
// 
//
// 
// Constraints: 
//
// 
// The depth of the n-ary tree is less than or equal to 1000. 
// The total number of nodes is between [0, 10^4]. 
// 
// Related Topics Tree Depth-first Search Breadth-first Search 
// 👍 822 👎 46


//leetcode submit region begin(Prohibit modification and deletion)
/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer
     */
    function maxDepth($root) {
        if($root == null) {
            return 0;
        }
        return $this->depth($root)+1;
    }

    function depth($root) {
        $max = 0;
        foreach($root->children as $child) {
            $max = max($max, $this->depth($child)+1);
        }
        return $max;
    }
}
//leetcode submit region end(Prohibit modification and deletion)
