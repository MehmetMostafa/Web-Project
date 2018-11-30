<?php
include_once"database.php";
if ($_SERVER['REQUEST_METHOD']=="POST")
{
    $d="null";
    $a="null";
    $c="null";
    $d=$_POST['depart'];
    $a=$_POST['arrive'];
    $c=$_POST['class'];
    if($_POST['depart']=== $_POST['arrive'])
    {
       echo "<h1>the two staion is identical</h1>";
       echo"<a href='index.php'><h1>retun<h1></a>";
        die();
    }    
        $q="SELECT * FROM tr WHERE depart=? AND arrive=? AND class=?";
        $row=$db->getRows($q,array($d,$a,$c));
        $cont=$db->getCount($q,array($d,$a,$c));
        if($cont>0)
        {
            foreach($row as $r)
            {
                $tr_id=$r['id'];
                $dep=$r['depart'];
                $dep_time=$r['depart_time'];
                $ariv=$r['arrive'];
                $ariv_time=$r['arrive_time'];
                $cls=$r['class'];
                $pr=$r['price'];
        
            }
        }else {echo "NO RESULT";}
  
}

?>
<html>
    <head>
        <meta charset="UTF-8"> </head>
     <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <div class="info">Search</div>
        <table>
            <tr>
                <th> TRAIN ID</th>
                <th>Station</th>
                <th>CS_Arrive Time</th>
                <th>Distnation</th>
                <th>D_Arrive Time</th>
                <th>Class</th>
                <th>Price</th>
            </tr>
            <?php
            for($i=0;$i<$cont;$i++)
            {
                echo"<tr>
                <td>$tr_id</td>
                <td>$dep</td>
                <td>$dep_time</td>
                <td>$ariv</td>
                <td>$ariv_time</td>
                <td> $cls</td>
                <td>$pr</td>
            </tr>";
            }
            ?>
        </table>
     
    </body>
</html>