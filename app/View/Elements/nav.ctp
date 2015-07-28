<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?= $this->Html->link('<strong><span class="text-red-dark">Accurate</span></strong> <span class="text-blue-light">Systems</span>', array('controller' => 'pages', 'action' => 'index'), array('class' => 'navbar-brand', 'escape' => false)) ?>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Html->link('<strong>Inicio</strong>', array('controller' => 'pages', 'action' => 'index'), array('escape' => false)) ?>
				</li>
				<li>
					<?= $this->Html->link('<strong>Nosotros</strong>', array('controller' => 'about', 'action' => 'index'), array('escape' => false)) ?>
				</li>
				<li>
					<?= $this->Html->link('<strong>Contáctenos</strong>', array('controller' => 'contacts', 'action' => 'new_contact'), array('escape' => false)) ?>
				</li>
			</ul>
		</div>
	</div>
</nav>