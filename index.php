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
                        $name='Глоссарий';
                        $link='definitions.php';
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
        <div class="debut">
                <h2 class="h2center">Дебют</h2>
                <p>Дебют — это начальная стадия шахматной партии. Основная задача дебюта,
                     вывести свои фигуры на самые выгодные позиции и помещать развитию фигур 
                     противники.</p>
        </div>
        <div class="container">        
            <section id="Italian">
                <h2>Итальянская партия</h2>
                <p>Самым популярным открытым дебютом среди начинающих шахматистов является итальянская партия. 
                    Впрочем, профессиональные игроки тоже часто применяют этот дебют.
                    Один из старейших шахматных дебютов. На итальянском звучит как Giuoco piano («джуоко пьяно»), 
                    то есть «тихая игра». Анализы итальянских мастеров, успешно применявших его на практике 
                    (главным образом Педро Дамиано), появились уже в XVI веке.</p>
                <figure class="debut_img">
                    <?php echo '<img src="images/italish'.(date('s') % 2+1).'.png" alt="Меняющаяся фотография">'; ?>
                </figure>
                <div class="text_right">
                    <a class="btn" href="Italian.php">Подробнее</a>
                </div>
            </section>
            <section id="Caro_Kann">
                <h2>Защита Каро-Канн</h2>
                <p>Защита Каро-Канн названа в честь двух шахматистов, разработавших ее основы: 
                    Горацио Каро и Маркуса Канна. Относится к полуоткрытым началам. 
                    Одним из крупнейших знатоков защиты Каро — Канн является Анатолий Карпов. 
                    Карпов отмечал особенность Каро — Канн: при желании чёрных, избежать защиты Каро — 
                    Канн нельзя, то есть чёрные определяют выбор дебюта</p>
                <figure class="debut_img">
                    <?php echo '<img title = "Каро-канн"src="images/karo-kann'.(date('s') % 2+1).'.png" alt="Меняющаяся фотография">'; ?>
                </figure>
                <div class="text_right">
                    <a class="btn" href="Caro_Kann.php">Подробнее</a>
                </div>
            </section>

            <section id="Scottish">
                <h2>Шотландская партия</h2>
                <p>Даже начинающие игроки знают, насколько важна роль центра в шахматной партии,
                     и шотландская партия ярко это иллюстрирует: в этом дебюте белые идут на максимальную борьбу 
                     за центральные поля уже на третьем ходу
                     Является солидным позиционным дебютом и применяется на практике сильнейшими шахматистами 
                     мира в течение почти двух столетий</p>
                <figure class="debut_img">
                    <?php echo '<img src="images/Scotland'.(date('s') % 2+1).'.png" alt="Меняющаяся фотография">'; ?>
                </figure>
                <div class="text_right">
                    <a class="btn" href="Scottish.php">Подробнее</a>
                </div>
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