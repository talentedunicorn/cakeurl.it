<div class="urlform">
	<h2>Paste URL below to make it short!</h2>
<?php  
	echo $this->Form->create('Url');
	echo $this->Form->input('link', array('label' => false, 'type' => 'text'));
	echo  $this->Form->end('Shorten Me!');
?>	
</div>