<?
function check($number)
{
$result="Unknown";
    if ($number >= 0 AND $number < 10000 AND is_numeric($number)) {
        $result = "";

        $thousand = floor($number / 1000);
        $number = $number % 1000;
        if ($thousand == 1) {
            $result .= "Ⱍ";
        } else if ($thousand == 2) {
            $result .= "Ⱎ";
        } else if ($thousand == 3) {
            $result .= "Ⱏ";
        } else if ($thousand == 4) {
            $result .= "Ⱑ";
        } else if ($thousand == 5) {
            $result .= "Ⱓ";
        } else if ($thousand == 6) {
            $result .= "Ⱘ";
        } else if ($thousand == 7) {
            $result .= "Ⱗ";
        } else if ($thousand == 8) {
            $result .= "Ⱙ";
        } else if ($thousand == 9) {
            $result .= "Ⱔ";
        }

        $hundreds = floor($number / 100);
        $number = $number % 100;
        if ($hundreds == 1) {
            $result .= "Ⱃ";
        } else if ($hundreds == 2) {
            $result .= "Ⱄ";
        } else if ($hundreds == 3) {
            $result .= "Ⱅ";
        } else if ($hundreds == 4) {
            $result .= "Ⱆ";
        } else if ($hundreds == 5) {
            $result .= "Ⱇ";
        } else if ($hundreds == 6) {
            $result .= "Ⱈ";
        } else if ($hundreds == 7) {
            $result .= "Ⱉ";
        } else if ($hundreds == 8) {
            $result .= "Ⱋ";
        } else if ($hundreds == 9) {
            $result .= "Ⱌ";
        }

        $ten = floor($number / 10);
        $number = $number % 10;
        if ($ten == 1) {
            $result .= "Ⰺ";
        } else if ($ten == 2) {
            $result .= "Ⰻ";
        } else if ($ten == 3) {
            $result .= "Ⰼ";
        } else if ($ten == 4) {
            $result .= "Ⰽ";
        } else if ($ten == 5) {
            $result .= "Ⰾ";
        } else if ($ten == 6) {
            $result .= "Ⰿ";
        } else if ($ten == 7) {
            $result .= "Ⱀ";
        } else if ($ten == 8) {
            $result .= "Ⱁ";
        } else if ($ten == 9) {
            $result .= "Ⱂ";
        }

        $units = $number;
        if ($units == 1) {
            $result .= "Ⰰ";
        } else if ($units == 2) {
            $result .= "Ⰱ";
        } else if ($units == 3) {
            $result .= "Ⰲ";
        } else if ($units == 4) {
            $result .= "Ⰳ";
        } else if ($units == 5) {
            $result .= "Ⰴ";
        } else if ($units == 6) {
            $result .= "Ⰵ";
        } else if ($units == 7) {
            $result .= "Ⰶ";
        } else if ($units == 8) {
            $result .= "Ⰷ";
        } else if ($units == 9) {
            $result .= "Ⰸ";
        }

    }
    return $result;
}
?>