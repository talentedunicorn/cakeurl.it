<div class="urlform">
	<h2>Paste a URL on the form to make it short</h2>
<?php  
	echo $this->Form->create('Url');
	echo $this->Form->input('link', array('type' => 'text', 'label' => false, 'class' => 'largeinput', 'error' => 'false'));
	// echo $this->Form->submit('Shorten!', array('div' => 'rightbutton'));
	// echo $this->Form->end();
	// echo $this->Form->button('Shorten!');
	echo  $this->Form->end('Shorten Me!');
?>	
</div>