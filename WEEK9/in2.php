<a href="in2.php?category=sport">Sport news</a> | <a href="in2.php?category=politics">Politic news</a><br/><br/>
<a href="in2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="in2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$categoryFromRequest = $_REQUEST["category"];
$JSON = $_REQUEST["format"];
$news = ["sport"=>["L.Messi got three cards in last 2 matches","Ovechkin has scored goal "],"politics"=>["Nazarbayev created a contract with another presidents","Putin said  that the Russia has good relationship with  Kazakhstan"]];
if($JSON == "json"){
    echo json_encode($news[$categoryFromRequest]);
}
else{
    echo $news[$categoryFromRequest][0] , '<br/>';
    echo $news[$categoryFromRequest][1];
}
/* Write your code here */
?>
