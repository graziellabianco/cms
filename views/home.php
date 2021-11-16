<div class="home_banner" style="background-image:url('<?php echo BASE_URL . 'assets/images/' . $this->config['home_banner']; ?>')">
</div>
<div class="home_banner_txt"><?php echo $this->config['home_welcome']; ?></div>

<div class="home_depo">
    <h3>Depoimentos de clientes satisfeitos</h3>
    <?php foreach ($depoimentos as $depitem) : ?>
        <strong><?php echo $depitem['nome']; ?></strong></br>
        <?php echo $depitem['texto']; ?>
        <hr />
    <?php endforeach ?>
</div>

<div class="home_cta">
    Deseja conferir nossos serviços?</br>
    <a href="<?php echo BASE_URL . 'servicos'; ?>">
        <div> Conferir Nossos Serviços</div>
    </a>
</div>