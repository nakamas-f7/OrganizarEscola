<main class="main-content  mt-0">
    <section>
      <div class="page-header  min-vh-100">
        <div class="container">
          <div class="row ">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-12 me-lg-5  align-self-center">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Criar Conta</h4>
                  <p class="mb-0">Digite Seu Melhor E-mail e Crie Uma Senha De Login Forte</p>
                </div>
                <div class="card-body">
                  <form action="../controller/registrar.php" role="form" method="post">
                    <div class="input-group input-group-outline mb-3">
                      <label for="Nome" class="form-label">Seu Nome</label>
                      <input maxlength="15" type="text" id="Nome" name="Nome" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label for="Email" class="form-label">Seu E-mail</label>
                      <input type="email" id="Email" name="Email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label for="Senha" class="form-label">Crie Sua Senha</label>
                      <input type="password" id="Senha" name="Senha"  class="form-control">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Criar Conta</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Você Já Possui Uma Conta?
                    <a href="../index.php" class="text-primary text-gradient font-weight-bold">Entrar</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>