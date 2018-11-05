<html>
<head><style>
.cards{display:flex;flex-wrap:wrap;width:700px;margin-right:auto;margin-left:auto;}
.cards .card{border-radius:5px;width:250px;border:1px solid red;display:flex;margin:10px;}
    img{
        width:100px;
        height: 100px;
    }
    .menu{
        text-align: center;
    }
    .title{
        margin: 0;
        padding: 0;
    }
    .year{
        font-weight: bold;
        display: block;
    }
    .price{
        color:green;
        margin-top: 0px;
        display: block;
        margin-bottom: 40px;
    }


</style></head>
<body>

<div class="cards">
<?php
$cars = [["maker"=>"Toyota","model"=>"Carina","year"=>1999,"price"=>22222,"image"=>"https://upload.wikimedia.org/wikipedia/commons/5/57/2001_Toyota_Carina_GT_AT212.jpg"],["maker"=>"Toyota","model"=>"Camry","year"=>2004,"price"=>37777,"image"=>"http://rental.ua/content/rent/cars/405/toyota_camry_vx70-340x199-a565.jpg"],["maker"=>"Audi","model"=>"A8","year"=>1977,"price"=>10000,"image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGwkz8orfKVwpyoHALAfbVn9xN0EALplUpPZdjUmtOr8bKyKZL"],
["maker"=>"Audi","model"=>"A6","year"=>2007,"price"=>35444,"image"=>"https://st.motortrend.com/uploads/sites/10/2015/11/2013-audi-a4-2-tdi-sedan-angular-front.png"],
["maker"=>"BMW","model"=>"X5","year"=>2006,"price"=>14000,"image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRtyEu2V8JrmXSH1z1381kaw5dIYpyf0jSHKWG2NLNij73SAGMXQ"],["maker"=>"BMW","model"=>"X5","year"=>2016,"price"=>25000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"Model 7","year"=>2009,"price"=>20000,"image"=>"https://cdn.vox-cdn.com/thumbor/cYronu6Wj2XY2eIGmfo7uawKIuA=/0x0:2039x1359/1200x800/filters:focal(0x0:2039x1359)/cdn.vox-cdn.com/uploads/chorus_image/image/48573001/bmw7series-56.0.0.jpg"],
["maker"=>"Lada","model"=>"Granta","year"=>2010"price"=>8000,"image"=>"https://www.vladtime.ru/uploads/posts/2018-09/1537505708_1536234691_1_result.jpg"]
];
$maker = $_REQUEST["maker"];
$year = $_REQUEST["year"];
$price = $_REQUEST["price"];
for($i=0;$i<sizeof($cars);$i++){
    if(strcmp($cars[$i]["maker"],$maker) == 0){
        echo "<div class='card'>";
        echo "<img src=" . $cars[$i]["image"] . ">";
        echo "<div class='description'>";
        echo "<h3 class='title'>" . $cars[$i]["maker"] . " " . $cars[$i]["model"] . "</h3>";
        echo "<span class='price'>" . $cars[$i]["price"] . "$</span>";
        echo "<span class='year'>" . $cars[$i]["year"] . " years </span>";
        echo "</div>";
        echo "</div>";
        echo "<br/><br/><br/>";
    }
    if($year == "old" & $cars[$i]["year"] < 2010){
        echo "<div class='card'>";
        echo "<img src=" . $cars[$i]["image"] . ">";
        echo "<div class='description'>";
        echo "<h3 class='title'>" . $cars[$i]["maker"] . " " . $cars[$i]["model"] . "</h3>";
        echo "<span class='price'>" . $cars[$i]["price"] . "$</span>";
        echo "<span class='year'>" . $cars[$i]["year"] . " years </span>";
        echo "</div>";
        echo "</div>";
        echo "<br/><br/><br/>";
    }
    if($price == "expensive" & $cars[$i]["price"]> 20000){
        echo "<div class='card'>";
        echo "<img src=" . $cars[$i]["image"] . ">";
        echo "<div class='description'>";
        echo "<h3 class='title'>" . $cars[$i]["maker"] . " " . $cars[$i]["model"] . "</h3>";
        echo "<span class='price'>" . $cars[$i]["price"] . "$</span>";
        echo "<span class='year'>" . $cars[$i]["year"] . " years </span>";
        echo "</div>";
        echo "</div>";
        echo "<br/><br/><br/>";
    }
}
/* Write your code here */
?>
</div>
<div class="menu">
<a href="in3.php">Home</a>|<a href="in3.php?maker=Toyota">Toyota</a>|<a href="in3.php?maker=BMW">BMW</a>|<a href="in3.php?maker=Audi">Audi</a>|<a href="in3.php?maker=Lada">Lada</a></div>

<div class="menu">
<a href="in3.php?year=old">Old cars (More than 7 years)</a>|<a href="in3.php?price=expensive">Expensive cars (more than 20.000$)</a></div>
