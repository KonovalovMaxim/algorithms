<?php
//Write a class RecentCounter to count recent requests.
//
// It has only one method: ping(int t), where t represents some time in millisec
//onds. 
//
// Return the number of pings that have been made from 3000 milliseconds ago unt
//il now. 
//
// Any ping with time in [t - 3000, t] will count, including the current ping. 
//
// It is guaranteed that every call to ping uses a strictly larger value of t th
//an before. 
//
// 
//
// Example 1: 
//
// 
//Input: inputs = ["RecentCounter","ping","ping","ping","ping"], inputs = [[],[1
//],[100],[3001],[3002]]
//Output: [null,1,2,3,3] 
//
// 
//
// Note: 
//
// 
// Each test case will have at most 10000 calls to ping. 
// Each test case will call ping with strictly increasing values of t. 
// Each call to ping will have 1 <= t <= 10^9. 
// 
//
// 
// 
// Related Topics Queue 
// 👍 290 👎 1625


//leetcode submit region begin(Prohibit modification and deletion)
class RecentCounter
{
    /**
     */
    private $pings = [];

    function __construct()
    {

    }

    /**
     * @param Integer $t
     * @return Integer
     */
    function ping($t)
    {
        $this->pings[] = $t;
        $counter = 0;
        for ($i = count($this->pings) - 1; $i >= 0; $i--) {
            if($this->pings[$i] >= $t-3000) {
                $counter++;
            } else {
                break;
            }
        }
        return $counter;
    }
}

/**
 * Your RecentCounter object will be instantiated and called as such:
 * $obj = RecentCounter();
 * $ret_1 = $obj->ping($t);
 */

/**
 * Your RecentCounter object will be instantiated and called as such:
 * $obj = RecentCounter();
 * $ret_1 = $obj->ping($t);
 */
//leetcode submit region end(Prohibit modification and deletion)
$counter = new RecentCounter();
$data = [1, 100, 3001, 3002];
$result = [];
foreach ($data as $num) {
    $result[] = $counter->ping($num);
}
