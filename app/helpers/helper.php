<?php
function dep($data, $tit = null)
{
    $date = date('Y-m-d H:i:s');
    $format = print_r("<div><small>* BEG Debug [{$tit}] > $date | -> ");
    if (isset($data)) {
        $format .= print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
    } else
        $format .= print_r(' *null* ');
    $format = print_r("<- | END Debug ></small></div>");
    return $format;
}
