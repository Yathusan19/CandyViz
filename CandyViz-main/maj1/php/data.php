<?php
$pdo = new PDO("mysql:host=localhost:3306;dbname=candyviz", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$date = $pdo->prepare("SELECT * FROM stats");
$date->execute();
$dates = $date->fetchAll(PDO::FETCH_ASSOC);

// $obes = $pdo->prepare("SELECT obesite FROM stats");
// $obes->execute();
// $obesTaux = $obes->fetchAll(PDO::FETCH_ASSOC);

// $surpoids = $pdo->prepare("SELECT surpoids FROM stats");
// $surpoids->execute();
// $surpoidsTaux = $obes->fetchAll(PDO::FETCH_ASSOC);








// var_dump($dates);
// var_dump($obesTaux);
$dateTot = json_encode($dates);
var_dump($dateTot);
file_put_contents("data.json",$dateTot)
?>


<script>








var xhr = new XMLHttpRequest();
xhr.open("GET", "date.json");
xhr.onload = function(){
    var test = JSON.parse(xhr.responseText);
    // console.log(test[1]["date"]);
    return JSON.parse(xhr.responseText);
};

xhr.send();


</script>

<!-- <script>
    var dateList = ?php echo json_encode($obesTaux); ?>;
    // for (let pas = 0; pas < 5; pas++)
    // dateList.push($date)
    console.log(dateList);
    var d = dateList["date"];
    console.log(d);
</script> -->

