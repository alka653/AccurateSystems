<section class="contact-page">
	<div class="container">
		<div class="row main text-white">
			<div class="col-md-12">
				<h1>Pongámonos en contácto, podemos ayudarte.</h1>
			</div>
			<div class="col-md-12">
				<p>Coméntanos tu problema, creamos soluciones tecnológicas.</p>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<?= $this->Session->flash() ?>
	</div>
	<div class="row">
		<div class="text-center">
			<h1>Formulario de Contácto</h1>
			<p>¿En qué te podemos ayudar?</p>
		</div>
		<?= $this->Form->create('Contact', array('action' => 'save', 'inputDefaults' => array('label' => false))) ?>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label>Nombre Completo <span class="text-red-dark">(*)</span></label>
						<?= $this->Form->input('full_name', array('type' => 'text', 'div' => false, 'class' => 'form-control', 'required' => true, 'maxlength' => '100')) ?>
					</div>
					<div class="form-group">
						<label>Correo Electrónico <span class="text-red-dark">(*)</span></label>
						<?= $this->Form->input('email', array('type' => 'email', 'error' => false, 'div' => false, 'class' => 'form-control', 'required' => true, 'maxlength' => '50')) ?>
						<?= $this->Form->error('email') ?>
					</div>
					<div class="form-group">
						<label>Dirección <span class="text-red-dark">(*)</span></label>
						<?= $this->Form->input('direction', array('type' => 'text', 'div' => false, 'class' => 'form-control', 'required' => true, 'maxlength' => '50')) ?>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label>Teléfono</label>
						<?= $this->Form->input('telephone', array('type' => 'tel', 'div' => false, 'class' => 'form-control', 'maxlength' => '10', 'required' => false)) ?>
					</div>
					<div class="form-group">
						<label>Celular</label>
						<?= $this->Form->input('celphone', array('type' => 'tel', 'div' => false, 'class' => 'form-control', 'maxlength' => '10', 'required' => true)) ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>Asunto <span class="text-red-dark">(*)</span></label>
						<?= $this->Form->input('subject', array('type' => 'text', 'div' => false, 'class' => 'form-control', 'maxlength' => '50', 'required' => true)) ?>
					</div>
					<div class="form-group">
						<label>Mensaje <span class="text-red-dark">(*)</span></label>
						<?= $this->Form->textarea('message', array('type' => 'tel', 'div' => false, 'class' => 'form-control', 'maxlength' => '300', 'required' => true, 'rows' => '5')) ?>
					</div>
				</div>
			</div>
		<?= $this->Form->submit('Enviar', array('class' => 'btn btn-save', 'id' => 'ContactAddForm', 'div' => 'form-group col-sm-12 text-center')) ?>
	</div>
</div>