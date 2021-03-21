<html>
    <head>
    <link rel="stylesheet" href="detail.css">
</head>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    
require_once('dbconnection.php');

$hid=$_POST['hid'];

$sql="SELECT * FROM  oldpatient WHERE hid=$hid";

$r=mysqli_query($con,$sql);

$result = array();

while($res = mysqli_fetch_array($r)){ 
 array_push($result,array(
 "HID"=>$res['hid'],
 "hospitalname"=>$res['hospitalname'],
 "doctorsname"=>$res['doctorsname'],
 "problems"=>$res['problems'],
 "disease"=>$res['disease'],
 "medication"=>$res['medication'],
 "dateid"=>$res['dateid']
 )
 );
}
  
  $data = json_encode($result);
  echo '<h1>Medical History</h1>';

  $json_decoded = json_decode($data);
        echo '<table>';
        echo '<td>'. '<li>      Hospital Name           </li>'.'</td>';
          echo '<td>'. '<li>    Patient Name            </li>'.'</td>';
          echo '<td>'. '<li>    Symptoms                </li>'.'</td>';
          echo '<td>'. '<li>    Disease                 </li>'.'</td>';
          echo '<td>'. '<li>    Medication              </li>'.'</td>';
          echo '<td>'. '<li>    Date                    </li>'.'</td>';
        foreach($json_decoded as $result){
          echo '<tr>';
          //echo '<td>'. '<li>HID</li>'.$result->hid.'</td>';
          
          echo '<td>'.          $result->hospitalname   .'</td>';
          echo '<td>'.          $result->doctorsname    .'</td>';
          echo '<td>'.          $result->problems       .'</td>';
          echo '<td>'.          $result->disease        .'</td>';
          echo '<td>'.          $result->medication     .'</td>';
          echo '<td>'.          $result->dateid         .'</td>';
            
          echo '</tr>';
        }
        echo '</table>';
  
 mysqli_close($con);
 
 }
 ?>
</html>
