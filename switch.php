<?php
//returns the current day ie. Sunday to Saturday
//its not one its small l

$day = date('l');
switch($day)
{
    case 'Friday':
        {
            echo "Oh! ITs good friday!";
            break;
        }
    case 'Saturday':
        {
            echo "HUrrya, ITs Saturday Fun Day.";
            break;
        }
    case 'Monday':
        {
            echo "Its Monday";
            break;
        }
    default:
    {
        echo "ITs regular days for college";
        break;
    }
}

echo "Kathmandu Time is <br>";
date_default_timezone_set('Asia/Kathmandu');
echo date('l, dS F, Y, h:i:s a ');

echo "<br/>Tokyo Time is <br>";
date_default_timezone_set('Asia/Tokyo');
echo date('l, dS F, Y, h:i:s a ');

?>