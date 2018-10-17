<!--
{if $bean->aclAccess("gestion")}
	<input class="button" onclick="window.open('framework.php/?field_identification={$fields.numeroid.value}', 'fullscreen', 'top=0,left=0,width='+(screen.availWidth)+',height ='+(screen.availHeight)+',fullscreen=yes,toolbar=1 ,location=1,directories=1,status=1,menubar=1,resiz able=1,scrolling=1,scrollbars=1')" type="button" name="form_tipify" value="Tipificar Gestion" target="_blank">
	<a href="http://192.168.6.240:8090/framework/pditaucastigada/management/{$fields.numeroid.value}/" class="button" type="button" target="_blank">
		<span>Gestiones Realizadas</span>
	</a>
	<a href="http://192.168.6.240:8090/framework/pditaucastigada/product/{$fields.numeroid.value}/" class="button" type="button" target="_blank">
		<span>Productos</span>
	</a>
{/if}
-->
{if $bean->aclAccess("gestion")}
	<input class="button" onclick="window.open('framework.php/?field_identification={$fields.numeroid.value}', 'fullscreen', 'top=0,left=0,width='+(screen.availWidth)+',height ='+(screen.availHeight)+',fullscreen=yes,toolbar=1 ,location=1,directories=1,status=1,menubar=1,resiz able=1,scrolling=1,scrollbars=1')" type="button" name="form_tipify" value="Tipificar Gestion" target="_blank">
	<a href="http://192.168.6.250:8090/framework/pditaucastigada/management/{$fields.numeroid.value}/" class="button" type="button" target="_blank">
		<span>Gestiones Realizadas</span>
	</a>
	<a href="http://192.168.6.250:8090/framework/pditaucastigada/product/{$fields.numeroid.value}/" class="button" type="button" target="_blank">
		<span>Productos</span>
	</a>
{/if}