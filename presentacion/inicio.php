<div class="container">
	<?php include "presentacion/encabezado.php";?>
	<div class="row mt-3">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<h3>Proyecto Amazonas</h3>
				</div>
				<div class="card-body">
					<img src="img/img1.jpg" width="100%">
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-header">
					<h3>Autenticación</h3>
				</div>
				<div class="card-body">
					<form action=<?php echo "index.php?pid=" . base64_encode("presentacion/autenticar.php") ?> method="post">
						<div class="form-group">
							<input type="email" name="correo" class="form-control"
								placeholder="Correo" required="required">
						</div>
						<div class="form-group">
							<input type="password" name="clave" class="form-control"
								placeholder="Clave" required="required">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
						<p><a href="<?php echo "index.php?pid=" . base64_encode("presentacion/recuperarClave.php") ?>">Olvido clave?</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>