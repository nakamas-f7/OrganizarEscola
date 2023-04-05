<script>
  function localx(){
    window.location = "./editmateria.php"
  }
</script>


<div class="row">
    <div class="col-lg-12 position-relative z-index-2">
        <div class="row">
          <?php while($dados = $query->fetch()){ ?>
            <div class="mt-5 col-lg-5 col-sm-5">
                <div class="card  mb-2">
                    <div class="card-header p-3 pt-2">
                        <div style="cursor: pointer;">
                            <form  action="./editmateria.php" method="get" class="mt-n4 icon icon-lg icon-shape bg-dark text-center border-radius-xl position-absolute ">
                                <button name="edite" type="submit" value="<?php echo $dados['idT_materia'] ?>" style="height: 100%; width: 100%;" class="btn d-flex justify-content-center align-items-center"><i class="material-icons opacity-10">edit</i></button>
                            </form>
                        </div>
                        <div class="text-end pt-1">
                            <h4 class="mb-0"><?php echo $dados["nome"]; ?></h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="row">
                        <div class="col-10 col-sm-9 col-md-10 card-footer p-3">
                            <p class="mb-0"><?php echo $dados["descricao"]; ?></p>
                        </div>
                        <div style="cursor: pointer;" class="col-2 col-sm-3 col-md-2 ">
                            <form  action="../controller/deleteatividade.php" method="post" style="height: 50px; width: 50px;" class="mt-4 me-5 icon icon-lg icon-shape bg-danger text-center border-radius-xl position-absolute ">
                                <button name="delete" type="submit" value="<?php echo $dados['idT_materia'] ?>" style="height: 100%; width: 100%;" class="btn d-flex justify-content-center align-items-center"><i class="material-icons opacity-10">delete</i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>