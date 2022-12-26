<? include_once $_SERVER['DOCUMENT_ROOT']."/func.php"; ?>
<? 
    setTitle("Главная страница");
    metaTitle("Главная страница");
    metaData('title',"Главная через metaData");
    metaData('h1',"Первый сайт на PHP");
    metaData('Keywords',"PHP, программирование, бумагомарание");
    metaData('description',"Наши пальчики долго клацали по клавиатуре");
?>
<? include $_SERVER['DOCUMENT_ROOT']."/header.php" ?>
<?=date("Y-m-d H:i:s"); ?>
<? include $_SERVER['DOCUMENT_ROOT']."/footer.php" ?>