<div class="row">
    <div class="col-lg-12 position-relative z-index-2">
        <div class="row">
          <?php while($dados = $query->fetch()){ ?>
            <div style="margin-top: 20px;" class="col-lg-5 col-sm-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">store</i>
                        </div>
                        <div class="text-end pt-1">
                            <h4 class="mb-0"><?php echo $dados["nome"]; ?></h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><?php echo $dados["descricao"]; ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>