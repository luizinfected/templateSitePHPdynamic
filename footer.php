<footer>
    <div class="wrapper">
        <div class="row">

            <div>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="empresa.php">Empresa</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Produtos</a></li>
                </ul>
            </div>

            <div class="info-footer">
                <p class="text-center"> <?= $endereco,' ', $cep ?></p>

                <a href="" class="text-center">
                    <i class="fa-solid fa-phone"></i><span
                        class="top-links"><?='(',$telefone1[0],')', $telefone1[1]?></span>
                </a>
                <a href="" class="text-center">
                    <i class="fa-brands fa-whatsapp "></i><span
                        class="top-links"><?='(',$telefone1[0],')', $telefone1[1]?></span>
                </a>
                <a href="<?=$instagram ?>" class="text-center">
                    <i class="fa-brands fa-instagram"></i><span class="top-links"><?= $instagram?></span>
                </a>
                <a href="<?=$facebook ?>" class="text-center">
                    <i class="fa-brands fa-facebook-square"></i><span class="top-links"><?= $facebook?></span>
                </a>
                <a href="<?=$linkedin ?>" class="text-center">
                    <i class="fa-brands fa-linkedin"></i><span class="top-links"><?= $linkedin?></span>
                </a>

            </div>

            <div class="copyright text-center">
                Copyright © <?= $nomeSite ?> (Lei 9610 de 19/02/1998)
            </div>

        </div>
    </div>
</footer>