<?php echo $this->element('editor'); ?>
<div class="row-fluid">
	<ul class="nav nav-tabs nav-stacked span2">
		<li><?php echo $this->Html->link(__('Listar Premiações'), array('action' => 'index'));?></li>
	</ul>
	<div class="span10">
		<?php echo $this->Form->create('Award');?>
			<fieldset>
				<legend><?php echo __('Novo Sorteio'); ?></legend>
				<?php
				$this->Form->newLine(array('5'));
				echo $this->Form->input('event_id', array(
					'label' => __('Evento'),
					'options' => $events,
					'class' => 'fullWidth'
				));
				echo $this->Form->input('title', array(
					'required' => 'required',
					'label' => __('Título'),
					'class' => 'fullWidth'
				));
				$this->Form->newLine(array('10'));
				echo $this->Form->input('description', array(
					'label' => __('Descrição'),
					'rows' => 15
				));
				echo $this->Form->inputBootstrap('groups', array(
					'label' => __('Quem pode ganhar'),
					'options' => array(
						'participant' => __('Participante'),
						'speaker' => __('Palestrante'),
						'admin' => __('Administrador')
						),
					'multiple' => true
					)
			);
				?>
			</fieldset>
			<?php echo $this->Form->submit(__('Salvar'));?>
	</div>
</div>
