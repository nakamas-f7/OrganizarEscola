<script>
  function local(){
    window.location = "./materia.php"
  }
</script>

<div class="container" >
  <main>
    <div class="row g-5">
      <div class="col-md-12 col-lg-12">
        <h1 class="mb-3 col-7">Editar Matéria</h1>
        <hr class="my-3">
        <form class="needs-validation"  action="../controller/editmateria.php" method="post">
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="NomeAluno" class="form-label"><h5>Nome da Matéria</h5></label>
              <input type="text" class="form-control border border-dark" id="NomeAluno" value="<?php echo $value["nome"]; ?>" name="NomeNovo" placeholder="Nome da Matéria">
              <div class="invalid-feedback" >
                Nome Invalido
              </div>
            </div>
            <div class="col-sm-12">
              <label for="NomeAluno" class="form-label"><h5>Breve descrição</h5></label>
              <input type="text" class="form-control border border-dark" id="NomeAluno" value="<?php echo $value["descricao"]; ?>" name="DescricaoNovo" placeholder="Descrição da Matéria">
              <div class="invalid-feedback" >
                Nome Invalido
              </div>
            </div>
            <label for="Id" class="d-none">
              <input id="Id" name="Id" type="text" value="<?php echo $_GET["edite"] ?>">
            </label>
            
            <hr class="my-4">
            <div class="row justify-content-end">
              <div style="cursor: pointer;" onclick="local()" class="icon icon-lg icon-shape bg-gradient-primary text-center border-radius-xl">
                <i class="material-icons opacity-10">logout</i>
              </div>                  
            </div>
          
            <hr class="my-4">
          <div class="row justify-content-center">
            <button style="margin: 10px;" class="btn btn-secondary btn-lg col-9 col-md-4" type="reset">Limpar</button>
            <button style="margin: 10px;" class="btn btn-success btn-lg col-9 col-md-4"  type="submit">Salvar</button>
          </div>
          </div>
        </form>
      </div>
    </div>
  </main>
</div>