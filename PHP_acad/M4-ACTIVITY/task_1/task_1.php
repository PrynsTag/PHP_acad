<?php
// Newlines-to-<p>Tags
function nl2p($str)
{
    $arr=explode("\n", $str);
    $out='';

    foreach ($arr as $iValue) {
        if (trim($iValue) !== '') {
            $out.='<p>'.trim($iValue).'</p>'."<p class=\"space\">&nbsp;</p>";
        }
    }
    return $out;
}
