<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
	<ul class="nav navbar-nav menu_nav ml-auto">
		<li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Inicio</a></li>

		<li class="nav-item"><a class="nav-link" href="<?= base_url('/nosotros') ?>">Nosotros</a></li>

		<li class="nav-item"><a class="nav-link" href="<?= base_url('/ofertas') ?>">Ofertas</a></li>
		
		<li class="nav-item submenu dropdown">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
			aria-expanded="false">Productos ▼</a>
			<ul class="dropdown-menu">
				<li class="nav-item"><a class="nav-link" href="<?= base_url('/instrumentos/guitarras') ?>">Guitarras</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url('/instrumentos/baterias') ?>">Baterías</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url('/instrumentos/teclados') ?>">Teclados</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url('/instrumentos/monitores') ?>">monitores</a></li>
			</ul>
		</li>

		<li class="nav-item"><a class="nav-link" href="<?= base_url('/galeria') ?>">Galería</a></li>

		<li class="nav-item"><a class="nav-link" href="<?= base_url('/contacto') ?>">Contacto</a></li>

		<li class="nav-item submenu dropdown">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
			aria-expanded="false">Acerca de ▼</a>
			<ul class="dropdown-menu">
				<li class="nav-item"><a class="nav-link" href="<?= base_url('/acerca/sitio') ?>">El sitio</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url('/acerca/autor') ?>">El autor</a></li>
			</ul>
		</li>
	</ul>
</div>