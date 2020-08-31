<?php
//Design a stack that supports push, pop, top, and retrieving the minimum elemen
//t in constant time. 
//
// 
// push(x) -- Push element x onto stack. 
// pop() -- Removes the element on top of the stack. 
// top() -- Get the top element. 
// getMin() -- Retrieve the minimum element in the stack. 
// 
//
// 
// Example 1: 
//
// 
//Input
//["MinStack","push","push","push","getMin","pop","top","getMin"]
//[[],[-2],[0],[-3],[],[],[],[]]
//
//Output
//[null,null,null,null,-3,null,0,-2]
//
//Explanation
//MinStack minStack = new MinStack();
//minStack.push(-2);
//minStack.push(0);
//minStack.push(-3);
//minStack.getMin(); // return -3
//minStack.pop();
//minStack.top();    // return 0
//minStack.getMin(); // return -2
// 
//
// 
// Constraints: 
//
// 
// Methods pop, top and getMin operations will always be called on non-empty sta
//cks. 
// 
// Related Topics Stack Design 
// 👍 3707 👎 353


//leetcode submit region begin(Prohibit modification and deletion)
class MinStack {
    private $stack = [];
    private $min = PHP_INT_MAX;
    /**
     * initialize your data structure here.
     */
    function __construct() {

    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->min = min($this->min, $x);
        $this->stack[] = $x;
    }

    /**
     * @return NULL
     */
    function pop() {
        $el = array_pop($this->stack);
        if($el == $this->min) {
            $this->min = min($this->stack);
        }
        if(count($this->stack) == 0) {
            $this->min = PHP_INT_MAX;
        }
        return $el;
    }

    /**
     * @return Integer
     */
    function top() {
        return $this->stack[count($this->stack)-1];
    }

    /**
     * @return Integer
     */
    function getMin() {
        if($this->min == PHP_INT_MAX) {
            return null;
        }
        return $this->min;
    }
}
/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */
//leetcode submit region end(Prohibit modification and deletion)
