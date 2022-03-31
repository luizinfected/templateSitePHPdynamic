<header>
    <div class="wrapper">

        <div class="header-top">

            <i class="fa-solid fa-phone fa-xs"></i><?='(',$telefone1[0],')', $telefone1[1]?>
            <i class="fa-brands fa-whatsapp "></i><?='(',$telefone1[0],')', $telefone1[1]?>
            <i class="fa-brands fa-instagram"></i><?= $instagram?>
            <i class="fa-brands fa-facebook-square"></i><?= $facebook?>
            <i class="fa-brands fa-linkedin"></i><?= $linkedin?>

        </div>

        <div class="row header-base">
            <div class="col-3">
                <!-- <img src="images/logo.png" class="img-fluid rounded w-75 h-100" alt="<?= $nomeSite ?>"> -->
                <!-- ou logo -->
                <p class="brand"><?= $nomeSite ?></p>
            </div>
            <div class="col-9">
                <ul class="header-links h-100">
                    <li>Home</li>
                    <li><a href="empresa.php">Empresa</a></li>
                    <li>Serviços</li>
                    <li>Videos</li>
                    <li>Contato</li>
                    <li>Sobre</li>
                    <li>Produtos</li>
                </ul>
            </div>
        </div>
    </div>
</header>