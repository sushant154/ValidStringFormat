<?php
/* Sushant, patilsushant154@gmail.com, 9028781487
 *  1. Minimum Remove to Make Valid Parentheses
 *  2. Huge Sale
 *
*/
class ValidateData
{
    private $final_string_in_array = array();
    function makeValidString($str)
    {
        $count = 0;
        $i = 0;
        while ($str[$i])
        {
            if ($str[$i] == '(')
            {
                $final_string_in_array[] = $str[$i];
                $count++;
            }
            else if ($str[$i] == ')' && $count != 0)
            {
                $final_string_in_array[] = $str[$i];
                $count--;
            }
            else if ($str[$i] != ')')
            {
                $final_string_in_array[] = $str[$i];
            }
            $i++;
        }
        if ($count != 0)
        {
            for ($i = 0;$i < $count;$i++)
            {
                $final_string_in_array[] = ")";
            }
        }
        return $final_string_in_array;
    }
    function getHugeSalePrice($m, $price_array)
    {
        $final_array = array();
        $n = count($price_array);
        $array_size = count($price_array);
        for ($i = 0;$i < $n;$i++)
        {
            for ($j = 0;$j < $n;$j++)
            {
                if ($price_array[$i] < $price_array[$j])
                {
                    $temp = $price_array[$i];
                    $price_array[$i] = $price_array[$j];
                    $price_array[$j] = $temp;
                    $final_array[] = $price_array[$i];
                }
            }
        }
        $most_one_item = '';
        for ($i = 0;$i < $m;$i++)
        {

            if ($price_array[$i] < 0)
            {
                $most_one_item .= $price_array[$i] . ",";
            }
        }
        echo trim($most_one_item, ',');
    }
}
#1.
$str = "lee(t(c)o)de)";
$ValidStringCheck = new ValidateData();
$final_data = $ValidStringCheck->makeValidString($str);
echo implode('', $final_data);

echo "<br/><br/><br/><br/>";

#2.
$numbers = array(-64,32,34,26, -25, 43, 12,  68,  22, -90, 11);
$m = 5;
$final_price_data = $ValidStringCheck->getHugeSalePrice($m, $numbers);
echo $final_price_data;

?>

