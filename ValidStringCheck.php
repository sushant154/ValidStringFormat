<?php
/* Sushant , patilsushant154@gmail.com, 9028781487
*  1. Minimum Remove to Make Valid Parentheses
*  2. Huge Sale,this second assesment not understand
*
*/
class ValidStringCheck
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
}
$str = "lee(t(c)o)de)";
$ValidStringCheck = new ValidStringCheck();
$final_data = $ValidStringCheck->makeValidString($str);
echo implode('', $final_data);

?>

