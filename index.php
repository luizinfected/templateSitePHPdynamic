<!DOCTYPE html>
<html lang="pt-BR">
<?php include('geral.php')?>
<?php include('head.php')?>

<body>
    <?php include('header.php')?>
    <!-- carrousel -->
    <div class="carrousel">
        <img src="images/bg2.jpg">
        <img src="images/bg2.jpg">
        <img src="images/bg2.jpg">
        <img src="images/bg2.jpg">
    </div>
    <!-- fim carrousel -->
    <div class="wrapper">
        <h1 class="display-2 text-center pt-5"><?=$nomeSite ?></h1>

        <div class="row">
            <div class="box">
                <h1 class="text-center mt-2">Lore Ipsum</h1>
                <p class="text-center mt-5 lead"></p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere
                atque eius esse quas, sunt nisi
                eligendi recusandae voluptatem, tempore velit beatae pariatur, soluta in nulla labore corporis qui
                numquam
                neque.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere atque eius esse quas, sunt nisi
                eligendi recusandae voluptatem, tempore velit beatae pariatur, soluta in nulla labore corporis qui
                numquam
                neque.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere atque eius esse quas, sunt nisi
                eligendi recusandae voluptatem, tempore velit beatae pariatur, soluta in nulla labore corporis qui
                numquam
                neque.</p>
            </div>
            <div class="box img-card">
                <img src="images/bg2.jpg" width="90%" height="90%">
            </div>
        </div>

        <h1 class="display-5 text-center pt-5">Lore Impsum</h1>
        <p class="lead" style="text-align: justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere
            atque eius esse quas, sunt nisi
            eligendi recusandae voluptatem, tempore velit beatae pariatur, soluta in nulla labore corporis qui numquam
            neque.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere atque eius esse quas, sunt nisi
            eligendi recusandae voluptatem, tempore velit beatae pariatur, soluta in nulla labore corporis qui numquam
            neque.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere atque eius esse quas, sunt nisi
            eligendi recusandae voluptatem, tempore velit beatae pariatur, soluta in nulla labore corporis qui numquam
            neque.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere atque eius esse quas, sunt nisi
            eligendi recusandae voluptatem, tempore velit beatae pariatur, soluta in nulla labore corporis qui numquam
            neque.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere atque eius esse quas, sunt nisi
            eligendi recusandae voluptatem, tempore velit beatae pariatur, soluta in nulla labore corporis qui numquam
            neque.
        </p>
        <hr>

        <div class="row mt-5 mb-5">
            <h1 class="text-center display-5">Exemplos</h1>
            <div class="box-slide"></div>
            <div class="box-slide"></div>
            <div class="box-slide"></div>
            <div class="box-slide"></div>
        </div>

        <hr>

    </div>
    <?php include('footer.php')?>
</body>

<!-- funcionamento do slick slider -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$('.carrousel').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
});
</script>
<!-- slick slider fim -->

</html>