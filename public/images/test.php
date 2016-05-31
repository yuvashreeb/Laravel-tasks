<?php
function maxnum($nums) {
    usort($nums, function ($x, $y)
 {
//echo $x.'<br>';echo $y.'<br>';
 return strcmp("$y$x", "$x$y"); 
});
    return implode('', $nums);
}
echo maxnum(array(54, 546, 548, 60));
?>
