<?php
    $sal=$total=$tax_amount=$salary_tax="";
$salary=$_GET["salary"];
$fee=$_GET["salary2"];
$social_fee=0.04;
    
    if($_GET["salary"] < 10000){
        $tax_amount=0;
        $total=$salary+$fee;
    }else{
        if($_GET["salary"]<25000 ){
           
            $tax_amount=0.11;
            $sal=$salary-($tax_amount*$salary);
            $taxx=$tax_amount*$salary;
            $sal=$sal+$fee;
            $total= $sal - (0.04*$sal);
            

        }else{
            if($_GET["salary"]<50000 ){
               
                $tax_amount=0.3;
                $sal=$salary-($tax_amount*$salary);
                $taxx=$tax_amount*$salary;
                $sal=$sal+$fee;
                $total= $sal - (0.04*$sal);
                
    
            }else{
                   
                    $tax_amount=0.45;
                    $sal=$salary-($tax_amount*$salary);
                    $taxx=$tax_amount*$salary;
                    $sal=$sal+$fee;
                    $total= $sal - (0.04*$sal);
                    

                }
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tax.css">
</head>
<body>
<div class="container">
    <div class="first">
    <form action="tax.php" method="GET"> 
        <fieldset>
        <legend> Income Tax Calculator</legend> 
        <table>
        <tr>
        <td>Salary in USD :</td>
        <label>
            <td>
         <input type="number" value="<?php echo $_GET["salary"]?>" name="salary" required></label>
        <label>
        </td>
         </tr>
          <tr>
        <td> year :</td>
        <td> <input type="radio" name="radio" value ="year" required></label>
        <label></td> 
         </tr>
          <tr>
        <td> month :</td>
        <td> <input type="radio" name="radio" value ="month" required></label>
        <label></td>
         </tr>
          <tr>
           <td>Tax Free Allowance in USD</td>
            <td><label>
        <input type="number" name="salary2" value="<?php echo $_GET["salary2"] ?>" required></label></td>  
          </tr>
          <tr>
              <td colspan="2">
          <label>
        <input type="submit" name="submit" value="submit"></label>
</td>
          </tr>
          </table>
       </fieldset>
    </form>
    </div>
    <class class="second">
        <fieldset>
            <legend>result</legend>
            <table>
                <tr>
                <th>Season</th>
                    <th>monthly</th>
                    <th>yearly</th>
                </tr>
                <tr>
                <th>Total Salary</th>
                   <td><?php if($_GET["radio"]=="month") echo "$total"; ?></td> 
                   <td> <?php $year=$total*12;if($_GET["radio"]=="year")  echo "$year"; ?></td>
                </tr>
                <tr>
                <th>Tax amount</th>
                <td><?php  if($_GET["radio"]=="month") echo"$taxx";?></td> 
                   <td> <?php $yearly_sal=$sal*$tax_amount*12;
                 if($_GET["radio"]=="year")  echo "$yearly_sal" ?></td>
                </tr>
                <tr>
                <th> Social security fee </th>
                <td><?php $tex=$sal*$social_fee; if($_GET["radio"]=="month") echo "$tex"; ?></td> 
                   <td> <?php $year_so=$sal*$social_fee*12;if($_GET["radio"]=="year")  echo "$year_so"; ?></td>
                </tr>
                <tr>
                    <th>Salary after tax</th>
                <td><?php  $fee1=$salary-($tax_amount*$salary); if($_GET["radio"]=="month")  echo "$fee1"; ?></td> 
                   <td> <?php   $yearlyfee=$fee1*12;if($_GET["radio"]=="year")  echo "$yearlyfee"; ?></td>
                </tr>
            </table>
        </fieldset>
    </class>
</div>
    
</body>
</html>