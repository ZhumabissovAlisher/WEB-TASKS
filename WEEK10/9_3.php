<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
$cars = [["id"=>"0","maker"=>"Toyota","model"=>"Corolla","year"=>"2016","engine"=>"petroleum","price"=>"35000","additional"=>["tax","investment"]],["id"=>"1","maker"=>"BMW","model"=>"X6","year"=>"2013","engine"=>"gas","price"=>"15000","additional"=>["tax","investment","check"]],["id"=>"2","maker"=>"Toyota","model"=>"Corona","year"=>"2006","engine"=>"diesel","price"=>"25000","additional"=>["investment","check"]]];
$selected_car = NULL;
if (isset($_REQUEST["cars"])){
  $selected_car = $cars[$_REQUEST["cars"]];
  echo $selected_car['maker'];
}
?>
<html>
<head>
<style>
select{
  width:200px;
  border-radius:5px;
  color:red;
  background:white;
  padding:5px;

}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:3px;
}
</style>
</head>
<html>
<head>
<style>
select{
  width:100%;
  background:white;
  border-radius:5px;
  color:red;
  padding:5px;

}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:3px;
}
</style>
</head>
<form action="9_3.php" method="post">
    <select name="cars" onchange="this.parentNode.submit()">
	    <option value="-1">Select car</option>
      <option value="0">Toyota(2016)</option>
      <option value="1">BMW</option>
      <option value="2">Toyota(2006)</option>
    </select>
    <select name="makers" id="makers">
      <?php
        for($i=0;$i<sizeof($makers);$i++){
          echo '<option';
          if($selected_car['maker'] == $makers[$i]){
            echo ' selected ';
          }
          echo '>' . $makers[$i] . '</option>';
        }
      ?>
    </select>
    <select name="years" id="years">
      <?php
        for($i=2018;$i>1900;$i--){
          echo '<option ';
          if ($selected_car['year'] == $i){
            echo ' selected ';
          }
          echo '>' . ($i) . '</option>';
        }
      ?>
    </select>
    <input type="text" name="model" value="<?php echo $selected_car['model'] ;?>">
    <?php
        for($i=0;$i<sizeof($engine);$i++){
          echo '<input type="radio" name="engine" ';
          if($selected_car['engine'] == $engine[$i]){
            echo ' checked ';
          }
          echo ' value="'.$engine[$i].'"> '.$engine[$i].'<br>';
        }
      ?>
    <input type="text" name="price" value="<?php echo $selected_car['price'] ;?>">
    <input type="checkbox" name="additional1" value="yes" <?php if(in_array('tax', $selected_car['additional'])){echo ' checked ';} ?>> tax payed<br>
    <input type="checkbox" name="additional2" value="yes" <?php if(in_array('check',$selected_car['additional'])){echo ' checked ';} ?> > technical check passed<br>
    <input type="checkbox" name="additional3" value="yes" <?php if(in_array('investment',$selected_car['additional'])){echo ' |" ';} ?> >doesn't require investment<br>
    <input type="submit"/>
</form>
