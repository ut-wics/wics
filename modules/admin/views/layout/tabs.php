<?php
$manage = 'link_to_'.$model.'manage';
$create = 'link_to_'.$model.'create';
?>
<div class="row">
	<div class="span16">
		<ul class="tabs">
		  <li<?=($active=='manage'?' class="active"':'');?>><?=HTML::$manage('Manage');?></li>
		  <li<?=($active=='create'?' class="active"':'');?>><?=HTML::$create('Create');?></li>
		</ul>
	</div>
</div>