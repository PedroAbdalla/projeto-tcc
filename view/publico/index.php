<?php
   
    if(empty($categorias)){
        header("Location:../controller/controlerTabela.php?opcao=1");
    }
?>
<section id="demos">
    <div class="row">
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme">
                <?php foreach ($categorias as $c) {  ?>
                    <div class="item item-categoria" onclick="abrirCategoria(this)" categoria="<?= $c->id ?>" rsp="<?= $c->repositorio ?>">
                        <img src="../../tcc/imagens/<?= $c->id_usuario ?>/<?= $c->repositorio ?>/<?= $c->img ?>">
                        <div><?= $c->categoria ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<div class="categoria hidden"></div>
<div class="prancha"></div>
<script type="text/javascript">
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        // navText: [&#x27;poróximo&#x27;,&#x27;anterior&#x27;],
        dots: true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            960:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });    
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
</script>