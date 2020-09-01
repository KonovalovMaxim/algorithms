<?php
//Implement the following operations of a stack using queues.
//
// 
// push(x) -- Push element x onto stack. 
// pop() -- Removes the element on top of the stack. 
// top() -- Get the top element. 
// empty() -- Return whether the stack is empty. 
// 
//
// Example: 
//
// 
//MyStack stack = new MyStack();
//
//stack.push(1);
//stack.push(2);  
//stack.top();   // returns 2
//stack.pop();   // returns 2
//stack.empty(); // returns false 
//
// Notes: 
//
// 
// You must use only standard operations of a queue -- which means only push to 
//back, peek/pop from front, size, and is empty operations are valid. 
// Depending on your language, queue may not be supported natively. You may simu
//late a queue by using a list or deque (double-ended queue), as long as you use o
//nly standard operations of a queue. 
// You may assume that all operations are valid (for example, no pop or top oper
//ations will be called on an empty stack). 
// 
// Related Topics Stack Design 
// 👍 736 👎 592


//leetcode submit region begin(Prohibit modification and deletion)
class MyStack {
    private $stack = [];

    /**
     * Initialize your data structure here.
     */
    function __construct() {

    }

    /**
     * Push element x onto stack.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        array_push($this->stack, $x);
    }

    /**
     * Removes the element on top of the stack and returns that element.
     * @return Integer
     */
    function pop() {
        return array_pop($this->stack);
    }

    /**
     * Get the top element.
     * @return Integer
     */
    function top() {
        return end($this->stack);
    }

    /**
     * Returns whether the stack is empty.
     * @return Boolean
     */
    function empty() {
        return empty($this->stack);
    }
}
/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */
//leetcode submit region end(Prohibit modification and deletion)
