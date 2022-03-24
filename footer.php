<footer>
    <div class="wrapper">
        <div class="row">
            <div class="col-4 info-footer">
                <p class="text-center"> <?= $endereco,' ', $cep ?></p>
                <a href="" class="text-center"><i
                        class="fa-solid fa-phone fa-xs"></i><?='(',$telefone1[0],')', $telefone1[1]?>
                </a>
                <a href="" class="text-center"><i
                        class="fa-brands fa-whatsapp "></i><?='(',$telefone1[0],')', $telefone1[1]?>
                </a>
                <a href="<?=$instagram ?>" class="text-center"><i
                        class="fa-brands fa-instagram"></i><?= $instagram?></a>
                <a href="<?=$facebook ?>" class="text-center"><i
                        class="fa-brands fa-facebook-square"></i><?= $facebook?></a>
                <a href="<?=$linkedin ?>" class="text-center"><i class="fa-brands fa-linkedin"></i><?= $linkedin?></a>
            </div>

            <div class="col-8">
                <ul class="header-links h-100">
                    <li>Home</li>
                    <li>Empresa</li>
                    <li>Serviços</li>
                    <li>Videos</li>
                    <li>Contato</li>
                    <li>Sobre</li>
                    <li>Produtos</li>
                </ul>
            </div>
        </div>
    </div>
</footer>