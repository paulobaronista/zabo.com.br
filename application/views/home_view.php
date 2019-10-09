<div id="nosso-cafe" class="nosso-cafe">
    <section class="carousel-default">
        <div id="carousel-default" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-1.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-1.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-1.jpg" alt="Banner">
                </div>
            </div>
        </div>
    </section>
</div>


<div id="contato" class="contato animated wow slideInUp">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text-center">
                <h2>Contato</h2>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-md-12 padding-off-mobile form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="Nome:*" />
                        </div>
                        <div class="col-xs-12 col-md-5 padding-off-mobile form-group">
                            <input id="telefone" class="phone form-control" type="tel" name="phone" placeholder="Telefone:" />
                        </div>
                        <div class="col-xs-12 col-md-7 padding-off-mobile form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="E-mail:*" />
                        </div>
                        <div class="col-xs-12 col-md-12 padding-off-mobile form-group">
                            <input id="interesse" type="text" class="interesse form-control" name="interesse" placeholder="Assunto:" />
                        </div>
                        <div class="col-xs-12 col-md-8 padding-off-mobile form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" placeholder="Mensagem:"></textarea>
                        </div>
                        <div class="col-xs-12 col-md-4 padding-off-mobile form-group">
                            <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit et consectetur dolores neque placeat perferendis tenetur quas aperiam, beatae praesentium omnis. Rerum vitae ipsa sit non facere sequi ratione ad.
                </div>
            </div>
        </div>
    </footer>
</div>
<?php
if (isset($email_enviado))
    echo $email_enviado;
?>