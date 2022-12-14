<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="public/css/style.css" />
</head>

<body>
	<!-- modal modalSuccessful -->
	<div class="modal fade" id="modalSuccess" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalSuccessLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="d-flex justify-content-center">
						<img src="public/img/confim1.jpg" alt="confirmacio_img" />
					</div>
					<div class="d-flex justify-content-center">
						<h5>Codigo enviado al correo!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- modal modalError -->
	<div class="modal fade" id="modalError" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalErrorLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="d-flex justify-content-center">
						<img src="public/img/error1.jpg" alt="confirmacio_img" />
					</div>
					<div class="d-flex justify-content-center">
						<h5>Error usuario no esta activo!</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- login -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(public/img/bg-4.jpg)"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Inicio Sesion</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="#" class="signin-form">
								<div class="form-group mb-3">
									<label class="label" for="name">Username</label>
									<input type="text" class="form-control" placeholder="Username" id="username" required />
									<div id="userInvalid" style="color: red; display: none">
										<p>
											Username incorrecto no debe tener caracteres
											especiales
										</p>
									</div>
									<div id="userNoExiste" style="color: red; display: none">
										<p>Usuario no existe!</p>
									</div>
									<div id="userPorValidar" style="color: red; display: none">
										<p>Usuario necesita validacion!</p>
									</div>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Password" id="password" required />
									<div id="passInvalid" style="color: red; display: none">
										<p>
											Password incorrecta tiene que tener un tama??o minimo
											de 6 caracteres
										</p>
									</div>
									<div id="passNoCoincide" style="color: red; display: none">
										<p>Password no coincide con el username!</p>
									</div>
								</div>
							</form>
							<div class="form-group">
								<button type="button" id="btnInciarSesion" class="form-control btn btn-primary rounded submit px-3">
									Inicia ahora
								</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50 text-left">
									<label class="checkbox-wrap checkbox-primary mb-0">Recuerdame
										<input type="checkbox" checked />
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="./views/recuperacion_contrase??a.html">Recupera contrase??a</a>
								</div>
							</div>
							<p class="text-center">
								No tiene cuenta?
								<a href="./views/registro.html">Registrate</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/popper.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/main.js"></script>
	<script src="public/js/script_show.js"></script>
	<script src="public/js/script_login.js"></script>
	<script id="vistaTipo"></script>
</body>

</html>