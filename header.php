<header>
    <div class="wrapper">

        <div class="header-top">


            <i class="fa-solid fa-phone"></i>
            <span class="top-links"><?='(',$telefone1[0],')', $telefone1[1]?></span>
            <i class="fa-brands fa-whatsapp "></i>
            <span class="top-links"><?='(',$telefone1[0],')', $telefone1[1]?></span>
            <i class="fa-brands fa-instagram"></i>
            <span class="top-links"><?= $instagram?></span>
            <i class="fa-brands fa-facebook-square"></i>
            <span class="top-links"><?= $facebook?></span>
            <i class="fa-brands fa-linkedin"></i>
            <span class="top-links"><?= $linkedin?></span>

        </div>

        <div class="row header-base">
            <div class="">
                <!-- <img src="images/logo.png" class="img-fluid rounded w-75 h-100" alt="<?= $nomeSite ?>"> -->
                <!-- ou logo -->
                <p class="brand"><?= $nomeSite ?></p>
            </div>
            <div class="header-links-principal">

                <i id="btn"
                    onclick="getElementById('menu').style.display = 'block'; getElementById('btn').style.transform = 'rotate(90deg)';  getElementById('btn').style.transition = '.2s' "
                    class="fa-solid fa-bars text-center responsive-menu" style="width: 100%; padding: 1em">
                </i>

                <ul class="header-links" id="menu">

                    <li class="li"><a href="index.php">Home</a></li>
                    <li class="li"><a href="empresa.php">Empresa</a></li>
                    <li class="li"><a href="#">Serviços</a></li>
                    <li class="li"><a href="#">Videos</a></li>
                    <li class="li"><a href="#">Contato</a></li>
                    <li class="li"><a href="#">Sobre</a></li>
                    <li class="li"><a href="#">Produtos</a></li>

                </ul>
            </div>
        </div>
    </div>
</header>