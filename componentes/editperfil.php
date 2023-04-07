<div class="container">

	<div class="main-body">
		<hr class="my-4">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="row justify-content-end">
							<div style="cursor: pointer;" onclick="localx()" class="icon icon-lg icon-shape bg-gradient-primary text-center border-radius-xl">
								<i class="material-icons opacity-10">logout</i>
							</div>                  
						</div>
						<div class="d-flex flex-column align-items-center text-center">
							<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
							<div class="mt-3">
								<h4><?php echo $dados["nome"] ?></h4>
								<p class="text-muted font-size-sm"> <?php echo $dados["descricao"] ?> </p>
								<button class="btn btn-primary">Solicitar</button>
								<button class="btn btn-outline-primary">Menssagem</button>
							</div>
						</div>
						<hr class="my-4">
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
								<span class="text-secondary"><?php
                                    if($dados["website"] != ""){
                                        echo $dados["website"] ;
                                    }else{
                                        echo "Não Possui";
                                    }
                                ?>
								</span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
								<span class="text-secondary"><?php
                                    if($dados["github"] != ""){
                                        echo $dados["github"] ;
                                    }else{
                                        echo "Não Possui";
                                    }
                                ?></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
								<span class="text-secondary"><?php
                                    if($dados["twitter"] != ""){
                                        echo $dados["twitter"] ;
                                    }else{
                                        echo "Não Possui";
                                    }
                                ?></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
								<span class="text-secondary"><?php
                                    if($dados["instagram"] != ""){
                                        echo $dados["instagram"] ;
                                    }else{
                                        echo "Não Possui";
                                    }
                                ?></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
								<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
								<span class="text-secondary"><?php
                                    if($dados["facebook"] != ""){
                                        echo $dados["facebook"] ;
                                    }else{
                                        echo "Não Possui";
                                    }
                                ?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<form action="../controller/editperfil.php" method="post">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3 col-sm-12 d-flex justify-content-center align-items-center text-start">
								<h6 class=" col-sm-2">Apelido</h6>
								<div class="col-sm-10">
									<label style="width: 100%;" class="form-label">
										<input type="text" class="form-control border border-dark border border-1 border-opacity-5" name="NomeNovo" value="<?php echo $dados["nome"] ?>" placeholder="Apelido">				
									</label>
									<div class="invalid-feedback" >
										Nome Invalido
									</div>
								</div>
							</div>
							<div class="row mb-3 col-sm-12 d-flex justify-content-center align-items-center text-start">
								<h6 class=" col-sm-2">Descrição</h6>
								<div class="col-sm-10">
									<label style="width: 100%;" class="form-label">
										<input type="text" class="form-control border border-dark border border-1 border-opacity-5" name="DescricaoNovo" value="<?php echo $dados["descricao"] ?>" placeholder="Breve Descrição">				
									</label>
									<div class="invalid-feedback" >
										Nome Invalido
									</div>
								</div>
							</div>
							<div class="row mb-3 col-sm-12 d-flex justify-content-center align-items-center text-start">
								<h6 class=" col-sm-2">Website</h6>
								<div class="col-sm-10">
									<label style="width: 100%;" class="form-label">
										<input type="text" class="form-control border border-dark border border-1 border-opacity-5" name="WebsiteNovo" value="<?php echo $dados["website"] ?>" placeholder="Website">				
									</label>
									<div class="invalid-feedback" >
										Nome Invalido
									</div>
								</div>
							</div>
							<div class="row mb-3 col-sm-12 d-flex justify-content-center align-items-center text-start">
								<h6 class=" col-sm-2">GitHub</h6>
								<div class="col-sm-10">
									<label style="width: 100%;" class="form-label">
										<input type="text" class="form-control border border-dark border border-1 border-opacity-5" name="GithubNovo" value="<?php echo $dados["github"] ?>" placeholder="Github">				
									</label>
									<div class="invalid-feedback" >
										Nome Invalido
									</div>
								</div>
							</div>
							<div class="row mb-3 col-sm-12 d-flex justify-content-center align-items-center text-start">
								<h6 class=" col-sm-2">Twitter</h6>
								<div class="col-sm-10">
									<label style="width: 100%;" class="form-label">
										<input type="text" class="form-control border border-dark border border-1 border-opacity-5" name="TwitterNovo" value="<?php echo $dados["twitter"] ?>" placeholder="Twitter">				
									</label>
									<div class="invalid-feedback" >
										Nome Invalido
									</div>
								</div>
							</div>
							<div class="row mb-3 col-sm-12 d-flex justify-content-center align-items-center text-start">
								<h6 class=" col-sm-2">Instagram</h6>
								<div class="col-sm-10">
									<label style="width: 100%;" class="form-label">
										<input type="text" class="form-control border border-dark border border-1 border-opacity-5" name="InstagramNovo" value="<?php echo $dados["instagram"] ?>" placeholder="Instagram">				
									</label>
									<div class="invalid-feedback" >
										Nome Invalido
									</div>
								</div>
							</div>
							<div class="row mb-3 col-sm-12 d-flex justify-content-center align-items-center text-start">
								<h6 class=" col-sm-2">Facebook</h6>
								<div class="col-sm-10">
									<label style="width: 100%;" class="form-label">
										<input type="text" class="form-control border border-dark border border-1 border-opacity-5" name="FacebookNovo" value="<?php echo $dados["facebook"] ?>" placeholder="Facebook">				
									</label>
									<div class="invalid-feedback" >
										Nome Invalido
									</div>
								</div>
							</div>
							<div class="row justify-content-center">
								<button style="margin: 10px;" class="btn btn-success btn-lg col-9 col-md-4"  type="submit">Salvar</button>
							</div>
						</div>
					</div>
				</form>

			</div>

		</div>
	</div>
</div>