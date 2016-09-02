<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

    <?php
    include 'db.php';
    if(isset($_POST['submit'])){
        $search_header = $_POST['search'];
        $sql = "SELECT * FROM news WHERE header like '%$search_header%'";
        $query = mysqli_query($db_con, $sql);
        while ($row = mysqli_fetch_assoc($query)){ ?>
            <div class="box1">
                <h2><a href="read.php?id=<?= $row['id']; ?>"> <?php print_r($row['header']); ?> </a></h2>
                <span><?=$row['time_']; ?></span>
                <div class="box1_img">
                    <img src="<?=$row['photo'];?>">
                </div>
                <div class="data">
                    <p><?php
                        $b = $row['text'];
                        $a = substr($b, 0, 75);
                        print_r($a."..."); ?></p>
                    <a name="read" href="read.php?id=<?= $row['id'];?>">Continue reading >>></a>
                </div>
                <div class="clear"></div>
            </div>
        <?php }
    }
    ?>
    </body>
</html>
