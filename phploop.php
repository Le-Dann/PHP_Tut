<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "Printing Numbers";?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    //Request gets data sent via post or get
        $coutnto = (int) $_REQUEST['countto'];
        $startnum = 1;

        while ($startnum <= $coutnto) 
        {
            if(($startnum % 2) == 0)
            {
                echo $startnum.", ";
            }
            elseif($startnum >=1000)
            {
                break;
            }
            else 
            {
                $startnum++;
                continue;
            }
            $startnum++;
        }
echo "<br> <br>"; 

$iterator2 = 1;

do
{
    echo $iterator2. ", ";
    $iterator2++;
}while($iterator2 <= 100);
echo "<br> <br>"; 

$maxFib= $_REQUEST['fibonacci'];
$firSeqNum = 0;
$secSeqNum = 1;

for($i = 0; $i <= $maxFib; $i++ ) 
{ 
    echo $firSeqNum, ", ";
    $sum = $firSeqNum + $secSeqNum;
    $firSeqNum = $secSeqNum;
    $secSeqNum = $sum;
}
    ?>
</body>
</html>