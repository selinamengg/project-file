<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1"> 
    <tr>
        <td>名稱</td>
        <td>圖片</td>
        <td>價格</td>
        <td>說明</td>
    </tr>
    <tr>
        <td>炙燒上等星鰻</td>
        <td><img src="https://farm66.static.flickr.com/65535/48858695938_79f12157f8_z.jpg"></td>
        <td>60元</td>
        <td>高級</td>
    </tr>
    <tr>
        <td>北海道產秋刀魚</td>
        <td><img src="https://farm66.static.flickr.com/65535/48859051231_54890be910_z.jpg"></td>
        <td>40元</td>
        <td>來自北海道</td>
    </tr>
    <tr>
        <td>鮭魚</td>
        <td><img src="https://farm66.static.flickr.com/65535/48859246307_69c935a604_z.jpg"></td>
        <td>40元</td>
        <td>超人氣</td>
    </tr>
    <tr>
        <td>鮭魚軟軍艦</td>
        <td><img src="https://farm66.static.flickr.com/65535/48859246357_a3cbb3c040_z.jpg"></td>
        <td>40元</td>
        <td>物超所值</td>
    </tr>
    <tr>
        <td>鮪魚</td>
        <td><img src="https://farm66.static.flickr.com/65535/48858695463_4b05de724f_z.jpg"></td>
        <td>40元</td>
        <td>好吃</td>
    </tr>
</table>

<form id="frm1" enctype="text/plain">
桌號: <input type="text" name="fname" value=""><br>
選擇壽司: 
<input type="radio" name="sushi" value="炙燒上等星鰻" checked="True"/>炙燒上等星鰻
<input type="radio" name="sushi" value="北海道產秋刀魚"/>北海道產秋刀魚
<input type="radio" name="sushi" value="鮭魚"/>鮭魚
<input type="radio" name="sushi" value="鮭魚軟軍艦"/>鮭魚軟軍艦
<input type="radio" name="sushi" value="鮪魚"/>鮪魚<br/>
店家推薦:鮭魚壽司!<br/>
備註: <textarea name="Address" rows="5" cols="50">
</textarea><br/>
</form>
<input type="submit" value="送出"><br/>

<?php
$x=60;
$y=40;
$z=40;
$w=40;
$p=40;
$t=2;
$total=$x+$y+$z+$w;
print "第".$t."桌點了炙燒上等星鰻、北海道產秋刀魚、鮭魚、鮭魚軟軍艦，共".$total."元<br/>";

$money=$total*0.9;
$name='陳鮪魚';
switch ($name){
    case '陳鮭魚':
        print "免費<br/>";
        break;
    case '陳鮪魚':
        print "九折".$money."元<br/>";
        break;
    case '陳小於':
        print "九折".$money."元<br/>";
        break;
}


$height=170;
switch ($height){
    case $height<80:
        print"身高80以下 免費<br/>";
        break;
    case $height>=100 and $height<=120:
        print"身高100~120 半價<br/>";
        break;
    case $height>160:
        print"身高160以上 全票<br/>";
        break;
}
echo "第六題<br/>";
do{
    for($i=1;$i<=400;$i++){
        if($i>4 and $i<58 and $i%2==0){
            print("|".$i);
        }
    }

}while($i<=400);
do{
    for($i=1;$i<=400;$i++){
        if($i>149 and $i<351 and $i%2!=0){
            print("|".$i);
        }
    }
}while($i<=400);
echo "第七題<br/>";
do{
    for($i=4;$i<=200;$i++){
        if($i%2==0 or $i%7==0){
            print("|".$i);
        }
    }
}while($i<=200);


?>
    
</body>
</html>