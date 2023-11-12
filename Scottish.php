<!DOCTYPE html>
<html lang="ru">

<head>
    <?php $t='Закарян Михаил Арманович - 221-362 - лаб.3'?>
    <title> <?php echo $t; ?> </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <div class="menu_container">
           <h1>MZGambit</h1>
            <div class="container">
                <nav class="menu">
                    <!-- Главная -->
                    <a href="<?php
                        $name='Главная';
                        $link='index.php';
                        $current_page=true;
                        echo $link;
                    ?>" class="highlight">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a>
                    <!-- Итальянская партия -->
                    <!-- <a href="<?php
                        $name='Итальянская партия';
                        $link='Italian.php';
                        $current_page=true;
                        echo $link;
                    ?>">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a> -->
                    <!-- <a href="Italian.php">Итальянская партия</a> -->
                    <!-- Защита Каро-Канн -->
                    <!-- <a href="<?php
                        $name='Защита Каро-Канн';
                        $link='Caro_Kann.php';
                        $current_page=true;
                        echo $link;
                    ?>">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a> -->
                    <!-- <a href="Caro_Kann.php">Защита Каро-Канн</a> -->
                    <!-- Шотландская партия -->
                    <!-- <a href="<?php
                        $name='Шотландская партия';
                        $link='Scottish.php';
                        $current_page=true;
                        echo $link;
                    ?>">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a> -->
                    <!-- <a href="Scottish.php">Шотландская партия</a> -->
                    <!-- Определения -->
                    <a href="<?php
                        $name='Определения и термины';
                        $link='#';
                        $current_page=true;
                        echo $link;
                    ?>">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a>
                    <!-- Свзязь -->
                    <a href="input.php">Связь</a>
                </nav>
            </div> 
        </div>
    </header>
        <!-- Основа страницы -->
    <main>
        <div class="container">
            <section id="Scottish">
                <h2 class="h2center">Шотландская партия</h2>
                <p>Даже начинающие игроки знают, насколько важна роль центра в шахматной партии,
                    и шотландская партия ярко это иллюстрирует: в этом дебюте белые идут на максимальную борьбу 
                    за центральные поля уже на третьем ходу
                    Является солидным позиционным дебютом и применяется на практике сильнейшими шахматистами 
                    мира в течение почти двух столетий</p>
                <figure class="debut_img">
                <?php echo '<img src="images/Scotland'.(date('s') % 2+1).'.png" alt="Меняющаяся фотография">'; ?>
                    <p class="list">
                        <?php 
                            $a= ["1. e2-e4 e7-e5", "2. Kg1-f3 Kb8-c6", "3. d2-d4"];
                            $a_length = count($a);
                            for($i=0; $i<$a_length; ++$i){
                                echo $a[$i];
                                echo '<br>';
                            }
                        ?>      
                        </p>
                </figure>
            </section>
        </div>
    </main>
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            &copy; Закарян М.А. 
            <p>
                    Сформированно
                    <?php date_default_timezone_set('Europe/Moscow'); ?>
                    <?php echo date('d.m.y H:i:s'); ?>
                </p>
        </div>
    </footer>
</body>
</html>