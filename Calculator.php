<?php
echo "Calculator";
echo "Enter Your calculation";
?>
/*************************/
<?php

/*Formula*/

$formula =$_GET Num+num;
if(isset($_POST["formula"])){
    header("Location: http://Calculator.php?name={$_POST['formula']} ");
}
    
<html>
<body>

<form action="Calculator.php" method="POST">
<input type = "text" name="formula" value=""<?php echo $formula;?>"><br>
    
<div>
    <select id="selectBox">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
    </select
</div>
  <Input type="submit"/>
    
 </form>   
</body>    
</html>
?>
