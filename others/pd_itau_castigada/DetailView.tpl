

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
{if $bean->aclAccess("gestion")}
	<input class="button" onclick="window.open('framework.php/?field_identification={$fields.numeroid.value}', 'fullscreen', 'top=0,left=0,width='+(screen.availWidth)+',height ='+(screen.availHeight)+',fullscreen=yes,toolbar=1 ,location=1,directories=1,status=1,menubar=1,resiz able=1,scrolling=1,scrollbars=1')" type="button" name="form_tipify" value="Tipificar Gestion" target="_blank">
	<a href="http://192.168.6.58:8090/framework/pditaucastigada/management/{$fields.numeroid.value}/" class="button" type="button" target="_blank">
		<span>Gestiones Realizadas</span>
	</a>
	<a href="http://192.168.6.58:8090/framework/pditaucastigada/product/{$fields.numeroid.value}/" class="button" type="button" target="_blank">
		<span>Productos</span>
	</a>
{/if}
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="he01_DatosDeudor_Castigada_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.numeroid.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NUMEROID' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.numeroid.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.numeroid.value) <= 0}
{assign var="value" value=$fields.numeroid.default_value }
{else}
{assign var="value" value=$fields.numeroid.value }
{/if} 
<span class="sugar_field" id="{$fields.numeroid.name}">{$fields.numeroid.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.telefono.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TELEFONO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.telefono.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.telefono.value) <= 0}
{assign var="value" value=$fields.telefono.default_value }
{else}
{assign var="value" value=$fields.telefono.value }
{/if} 
<span class="sugar_field" id="{$fields.telefono.name}">{$fields.telefono.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.telefono2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TELEFONO2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.telefono2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.telefono2.value) <= 0}
{assign var="value" value=$fields.telefono2.default_value }
{else}
{assign var="value" value=$fields.telefono2.value }
{/if} 
<span class="sugar_field" id="{$fields.telefono2.name}">{$fields.telefono2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.telefono3.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TELEFONO3' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.telefono3.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.telefono3.value) <= 0}
{assign var="value" value=$fields.telefono3.default_value }
{else}
{assign var="value" value=$fields.telefono3.value }
{/if} 
<span class="sugar_field" id="{$fields.telefono3.name}">{$fields.telefono3.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.celular.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CELULAR' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.celular.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.celular.value) <= 0}
{assign var="value" value=$fields.celular.default_value }
{else}
{assign var="value" value=$fields.celular.value }
{/if} 
<span class="sugar_field" id="{$fields.celular.name}">{$fields.celular.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.correo.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CORREO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.correo.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.correo.value) <= 0}
{assign var="value" value=$fields.correo.default_value }
{else}
{assign var="value" value=$fields.correo.value }
{/if} 
<span class="sugar_field" id="{$fields.correo.name}">{$fields.correo.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.correo2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CORREO2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.correo2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.correo2.value) <= 0}
{assign var="value" value=$fields.correo2.default_value }
{else}
{assign var="value" value=$fields.correo2.value }
{/if} 
<span class="sugar_field" id="{$fields.correo2.name}">{$fields.correo2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.direccion.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIRECCION' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.direccion.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.direccion.value) <= 0}
{assign var="value" value=$fields.direccion.default_value }
{else}
{assign var="value" value=$fields.direccion.value }
{/if} 
<span class="sugar_field" id="{$fields.direccion.name}">{$fields.direccion.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.direccion2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIRECCION2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.direccion2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.direccion2.value) <= 0}
{assign var="value" value=$fields.direccion2.default_value }
{else}
{assign var="value" value=$fields.direccion2.value }
{/if} 
<span class="sugar_field" id="{$fields.direccion2.name}">{$fields.direccion2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ciudadcontacto.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CIUDADCONTACTO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ciudadcontacto.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.ciudadcontacto.value) <= 0}
{assign var="value" value=$fields.ciudadcontacto.default_value }
{else}
{assign var="value" value=$fields.ciudadcontacto.value }
{/if} 
<span class="sugar_field" id="{$fields.ciudadcontacto.name}">{$fields.ciudadcontacto.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tipocartera.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TIPOCARTERA' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tipocartera.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.tipocartera.value) <= 0}
{assign var="value" value=$fields.tipocartera.default_value }
{else}
{assign var="value" value=$fields.tipocartera.value }
{/if} 
<span class="sugar_field" id="{$fields.tipocartera.name}">{$fields.tipocartera.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='he01_DatosDeudor_Castigada'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.campaign.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAMPAIGN' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.campaign.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.campaign.value) <= 0}
{assign var="value" value=$fields.campaign.default_value }
{else}
{assign var="value" value=$fields.campaign.value }
{/if} 
<span class="sugar_field" id="{$fields.campaign.name}">{$fields.campaign.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.asesor.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASESOR' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.asesor.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.asesor.value) <= 0}
{assign var="value" value=$fields.asesor.default_value }
{else}
{assign var="value" value=$fields.asesor.value }
{/if} 
<span class="sugar_field" id="{$fields.asesor.name}">{$fields.asesor.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ulttipificacion.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ULTTIPIFICACION' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ulttipificacion.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.ulttipificacion.value) <= 0}
{assign var="value" value=$fields.ulttipificacion.default_value }
{else}
{assign var="value" value=$fields.ulttipificacion.value }
{/if} 
<span class="sugar_field" id="{$fields.ulttipificacion.name}">{$fields.ulttipificacion.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fechaultimatip.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FECHAULTIMATIP' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fechaultimatip.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.fechaultimatip.value) <= 0}
{assign var="value" value=$fields.fechaultimatip.default_value }
{else}
{assign var="value" value=$fields.fechaultimatip.value }
{/if}
<span class="sugar_field" id="{$fields.fechaultimatip.name}">{$value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.barrido.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BARRIDO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.barrido.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.barrido.value) <= 0}
{assign var="value" value=$fields.barrido.default_value }
{else}
{assign var="value" value=$fields.barrido.value }
{/if} 
<span class="sugar_field" id="{$fields.barrido.name}">{$fields.barrido.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.seguimiento.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEGUIMIENTO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.seguimiento.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.seguimiento.value) <= 0}
{assign var="value" value=$fields.seguimiento.default_value }
{else}
{assign var="value" value=$fields.seguimiento.value }
{/if} 
<span class="sugar_field" id="{$fields.seguimiento.name}">{$fields.seguimiento.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.proyeccion.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROYECCION' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.proyeccion.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.proyeccion.name}'>
{sugar_number_format var=$fields.proyeccion.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fechaproyeccion.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FECHAPROYECCION' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fechaproyeccion.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.fechaproyeccion.value) <= 0}
{assign var="value" value=$fields.fechaproyeccion.default_value }
{else}
{assign var="value" value=$fields.fechaproyeccion.value }
{/if}
<span class="sugar_field" id="{$fields.fechaproyeccion.name}">{$value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.pago.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PAGO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.pago.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.pago.name}'>
{sugar_number_format var=$fields.pago.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fechapago.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FECHAPAGO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fechapago.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.fechapago.value) <= 0}
{assign var="value" value=$fields.fechapago.default_value }
{else}
{assign var="value" value=$fields.fechapago.value }
{/if}
<span class="sugar_field" id="{$fields.fechapago.name}">{$value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
<div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(3);">
<img border="0" id="detailpanel_3_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(3);">
<img border="0" id="detailpanel_3_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL2' module='he01_DatosDeudor_Castigada'}
<script>
document.getElementById('detailpanel_3').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL2' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.endeudamientocastigo.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ENDEUDAMIENTOCASTIGO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.endeudamientocastigo.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.endeudamientocastigo.name}'>
{sugar_number_format var=$fields.endeudamientocastigo.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.fecha_de_castigo.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_DE_CASTIGO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.fecha_de_castigo.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.fecha_de_castigo.value) <= 0}
{assign var="value" value=$fields.fecha_de_castigo.default_value }
{else}
{assign var="value" value=$fields.fecha_de_castigo.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_de_castigo.name}">{$value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.vr_total_castigo.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VR_TOTAL_CASTIGO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.vr_total_castigo.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.vr_total_castigo.name}'>
{sugar_number_format var=$fields.vr_total_castigo.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.saldo_total.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SALDO_TOTAL' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.saldo_total.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.saldo_total.name}'>
{sugar_number_format var=$fields.saldo_total.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.intereses_a_la_fecha.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_INTERESES_A_LA_FECHA' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.intereses_a_la_fecha.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.intereses_a_la_fecha.name}'>
{sugar_number_format var=$fields.intereses_a_la_fecha.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_total.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_TOTAL' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_total.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_total.name}'>
{sugar_number_format var=$fields.actualizacion_total.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_crp_crt.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_CRP_CRT' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_crp_crt.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_crp_crt.name}'>
{sugar_number_format var=$fields.actualizacion_crp_crt.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_ord.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_ORD' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_ord.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_ord.name}'>
{sugar_number_format var=$fields.actualizacion_ord.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_sobregiro.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_SOBREGIRO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_sobregiro.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_sobregiro.name}'>
{sugar_number_format var=$fields.actualizacion_sobregiro.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_tarjeta.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_TARJETA' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_tarjeta.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_tarjeta.name}'>
{sugar_number_format var=$fields.actualizacion_tarjeta.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_tarjeta_master.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_TARJETA_MASTER' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_tarjeta_master.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_tarjeta_master.name}'>
{sugar_number_format var=$fields.actualizacion_tarjeta_master.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_tarjeta_visa.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_TARJETA_VISA' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_tarjeta_visa.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_tarjeta_visa.name}'>
{sugar_number_format var=$fields.actualizacion_tarjeta_visa.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_t_visa_club.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_T_VISA_CLUB' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_t_visa_club.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_t_visa_club.name}'>
{sugar_number_format var=$fields.actualizacion_t_visa_club.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.actualizacion_universitario.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACTUALIZACION_UNIVERSITARIO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.actualizacion_universitario.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.actualizacion_universitario.name}'>
{sugar_number_format var=$fields.actualizacion_universitario.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.anio_castigo.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANIO_CASTIGO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.anio_castigo.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.anio_castigo.value) <= 0}
{assign var="value" value=$fields.anio_castigo.default_value }
{else}
{assign var="value" value=$fields.anio_castigo.value }
{/if} 
<span class="sugar_field" id="{$fields.anio_castigo.name}">{$fields.anio_castigo.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cartera_gmac.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CARTERA_GMAC' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cartera_gmac.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.cartera_gmac.name}'>
{sugar_number_format var=$fields.cartera_gmac.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cartera_ordinaria_gmac.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CARTERA_ORDINARIA_GMAC' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cartera_ordinaria_gmac.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cartera_ordinaria_gmac.value) <= 0}
{assign var="value" value=$fields.cartera_ordinaria_gmac.default_value }
{else}
{assign var="value" value=$fields.cartera_ordinaria_gmac.value }
{/if} 
<span class="sugar_field" id="{$fields.cartera_ordinaria_gmac.name}">{$fields.cartera_ordinaria_gmac.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cta_cte.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CTA_CTE' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cta_cte.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.cta_cte.name}'>
{sugar_number_format var=$fields.cta_cte.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.moneda_legal.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MONEDA_LEGAL' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.moneda_legal.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.moneda_legal.name}'>
{sugar_number_format var=$fields.moneda_legal.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.operacion_crp_crt.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPERACION_CRP_CRT' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.operacion_crp_crt.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.operacion_crp_crt.value) <= 0}
{assign var="value" value=$fields.operacion_crp_crt.default_value }
{else}
{assign var="value" value=$fields.operacion_crp_crt.value }
{/if} 
<span class="sugar_field" id="{$fields.operacion_crp_crt.name}">{$fields.operacion_crp_crt.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.leasing.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LEASING' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.leasing.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.leasing.name}'>
{sugar_number_format var=$fields.leasing.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.operacion_master.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPERACION_MASTER' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.operacion_master.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.operacion_master.value) <= 0}
{assign var="value" value=$fields.operacion_master.default_value }
{else}
{assign var="value" value=$fields.operacion_master.value }
{/if} 
<span class="sugar_field" id="{$fields.operacion_master.name}">{$fields.operacion_master.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.operacion_moneda.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPERACION_MONEDA' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.operacion_moneda.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.operacion_moneda.value) <= 0}
{assign var="value" value=$fields.operacion_moneda.default_value }
{else}
{assign var="value" value=$fields.operacion_moneda.value }
{/if} 
<span class="sugar_field" id="{$fields.operacion_moneda.name}">{$fields.operacion_moneda.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.operacion_moneda_leg.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPERACION_MONEDA_LEG' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.operacion_moneda_leg.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.operacion_moneda_leg.value) <= 0}
{assign var="value" value=$fields.operacion_moneda_leg.default_value }
{else}
{assign var="value" value=$fields.operacion_moneda_leg.value }
{/if} 
<span class="sugar_field" id="{$fields.operacion_moneda_leg.name}">{$fields.operacion_moneda_leg.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.operacion_prestamos_ord.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPERACION_PRESTAMOS_ORD' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.operacion_prestamos_ord.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.operacion_prestamos_ord.value) <= 0}
{assign var="value" value=$fields.operacion_prestamos_ord.default_value }
{else}
{assign var="value" value=$fields.operacion_prestamos_ord.value }
{/if} 
<span class="sugar_field" id="{$fields.operacion_prestamos_ord.name}">{$fields.operacion_prestamos_ord.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.operacion_sobregiro.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPERACION_SOBREGIRO' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.operacion_sobregiro.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.operacion_sobregiro.value) <= 0}
{assign var="value" value=$fields.operacion_sobregiro.default_value }
{else}
{assign var="value" value=$fields.operacion_sobregiro.value }
{/if} 
<span class="sugar_field" id="{$fields.operacion_sobregiro.name}">{$fields.operacion_sobregiro.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.operacion_visa.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPERACION_VISA' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.operacion_visa.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.operacion_visa.value) <= 0}
{assign var="value" value=$fields.operacion_visa.default_value }
{else}
{assign var="value" value=$fields.operacion_visa.value }
{/if} 
<span class="sugar_field" id="{$fields.operacion_visa.name}">{$fields.operacion_visa.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ordinarios_libranzas.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ORDINARIOS_LIBRANZAS' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ordinarios_libranzas.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.ordinarios_libranzas.name}'>
{sugar_number_format var=$fields.ordinarios_libranzas.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.prestamos_ordinarios.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRESTAMOS_ORDINARIOS' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prestamos_ordinarios.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.prestamos_ordinarios.value) <= 0}
{assign var="value" value=$fields.prestamos_ordinarios.default_value }
{else}
{assign var="value" value=$fields.prestamos_ordinarios.value }
{/if} 
<span class="sugar_field" id="{$fields.prestamos_ordinarios.name}">{$fields.prestamos_ordinarios.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.reestructurados.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_REESTRUCTURADOS' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.reestructurados.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.reestructurados.name}'>
{sugar_number_format var=$fields.reestructurados.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.rotativo_personal.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ROTATIVO_PERSONAL' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.rotativo_personal.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.rotativo_personal.name}'>
{sugar_number_format var=$fields.rotativo_personal.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.seguros_cartera_gmac.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEGUROS_CARTERA_GMAC' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.seguros_cartera_gmac.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.seguros_cartera_gmac.name}'>
{sugar_number_format var=$fields.seguros_cartera_gmac.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.total_comision.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_COMISION' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.total_comision.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.total_comision.name}'>
{sugar_number_format var=$fields.total_comision.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.total_pagos.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_PAGOS' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.total_pagos.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.total_pagos.value) <= 0}
{assign var="value" value=$fields.total_pagos.default_value }
{else}
{assign var="value" value=$fields.total_pagos.value }
{/if} 
<span class="sugar_field" id="{$fields.total_pagos.name}">{$fields.total_pagos.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(3, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL2").style.display='none';</script>
{/if}
<div id='detailpanel_4' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(4);">
<img border="0" id="detailpanel_4_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(4);">
<img border="0" id="detailpanel_4_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL3' module='he01_DatosDeudor_Castigada'}
<script>
document.getElementById('detailpanel_4').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL3' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nom_ref_fam1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOM_REF_FAM1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nom_ref_fam1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nom_ref_fam1.value) <= 0}
{assign var="value" value=$fields.nom_ref_fam1.default_value }
{else}
{assign var="value" value=$fields.nom_ref_fam1.value }
{/if} 
<span class="sugar_field" id="{$fields.nom_ref_fam1.name}">{$fields.nom_ref_fam1.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.dir_ref_fam1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIR_REF_FAM1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.dir_ref_fam1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.dir_ref_fam1.value) <= 0}
{assign var="value" value=$fields.dir_ref_fam1.default_value }
{else}
{assign var="value" value=$fields.dir_ref_fam1.value }
{/if} 
<span class="sugar_field" id="{$fields.dir_ref_fam1.name}">{$fields.dir_ref_fam1.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tel_ref_fam1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEL_REF_FAM1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tel_ref_fam1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.tel_ref_fam1.value) <= 0}
{assign var="value" value=$fields.tel_ref_fam1.default_value }
{else}
{assign var="value" value=$fields.tel_ref_fam1.value }
{/if} 
<span class="sugar_field" id="{$fields.tel_ref_fam1.name}">{$fields.tel_ref_fam1.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cel_ref_fam1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CEL_REF_FAM1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cel_ref_fam1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cel_ref_fam1.value) <= 0}
{assign var="value" value=$fields.cel_ref_fam1.default_value }
{else}
{assign var="value" value=$fields.cel_ref_fam1.value }
{/if} 
<span class="sugar_field" id="{$fields.cel_ref_fam1.name}">{$fields.cel_ref_fam1.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nom_ref_fam2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOM_REF_FAM2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nom_ref_fam2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nom_ref_fam2.value) <= 0}
{assign var="value" value=$fields.nom_ref_fam2.default_value }
{else}
{assign var="value" value=$fields.nom_ref_fam2.value }
{/if} 
<span class="sugar_field" id="{$fields.nom_ref_fam2.name}">{$fields.nom_ref_fam2.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.dir_ref_fam2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIR_REF_FAM2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.dir_ref_fam2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.dir_ref_fam2.value) <= 0}
{assign var="value" value=$fields.dir_ref_fam2.default_value }
{else}
{assign var="value" value=$fields.dir_ref_fam2.value }
{/if} 
<span class="sugar_field" id="{$fields.dir_ref_fam2.name}">{$fields.dir_ref_fam2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tel_ref_fam2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEL_REF_FAM2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tel_ref_fam2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.tel_ref_fam2.value) <= 0}
{assign var="value" value=$fields.tel_ref_fam2.default_value }
{else}
{assign var="value" value=$fields.tel_ref_fam2.value }
{/if} 
<span class="sugar_field" id="{$fields.tel_ref_fam2.name}">{$fields.tel_ref_fam2.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cel_ref_fam2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CEL_REF_FAM2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cel_ref_fam2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cel_ref_fam2.value) <= 0}
{assign var="value" value=$fields.cel_ref_fam2.default_value }
{else}
{assign var="value" value=$fields.cel_ref_fam2.value }
{/if} 
<span class="sugar_field" id="{$fields.cel_ref_fam2.name}">{$fields.cel_ref_fam2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nom_ref_fam3.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOM_REF_FAM3' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nom_ref_fam3.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nom_ref_fam3.value) <= 0}
{assign var="value" value=$fields.nom_ref_fam3.default_value }
{else}
{assign var="value" value=$fields.nom_ref_fam3.value }
{/if} 
<span class="sugar_field" id="{$fields.nom_ref_fam3.name}">{$fields.nom_ref_fam3.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.dir_ref_fam3.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIR_REF_FAM3' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.dir_ref_fam3.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.dir_ref_fam3.value) <= 0}
{assign var="value" value=$fields.dir_ref_fam3.default_value }
{else}
{assign var="value" value=$fields.dir_ref_fam3.value }
{/if} 
<span class="sugar_field" id="{$fields.dir_ref_fam3.name}">{$fields.dir_ref_fam3.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tel_ref_fam3.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEL_REF_FAM3' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tel_ref_fam3.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.tel_ref_fam3.value) <= 0}
{assign var="value" value=$fields.tel_ref_fam3.default_value }
{else}
{assign var="value" value=$fields.tel_ref_fam3.value }
{/if} 
<span class="sugar_field" id="{$fields.tel_ref_fam3.name}">{$fields.tel_ref_fam3.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cel_ref_fam3.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CEL_REF_FAM3' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cel_ref_fam3.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cel_ref_fam3.value) <= 0}
{assign var="value" value=$fields.cel_ref_fam3.default_value }
{else}
{assign var="value" value=$fields.cel_ref_fam3.value }
{/if} 
<span class="sugar_field" id="{$fields.cel_ref_fam3.name}">{$fields.cel_ref_fam3.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(4, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL3").style.display='none';</script>
{/if}
<div id='detailpanel_5' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(5);">
<img border="0" id="detailpanel_5_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(5);">
<img border="0" id="detailpanel_5_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL4' module='he01_DatosDeudor_Castigada'}
<script>
document.getElementById('detailpanel_5').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL4' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nom_ref_per1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOM_REF_PER1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nom_ref_per1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nom_ref_per1.value) <= 0}
{assign var="value" value=$fields.nom_ref_per1.default_value }
{else}
{assign var="value" value=$fields.nom_ref_per1.value }
{/if} 
<span class="sugar_field" id="{$fields.nom_ref_per1.name}">{$fields.nom_ref_per1.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.dir_ref_per1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIR_REF_PER1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.dir_ref_per1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.dir_ref_per1.value) <= 0}
{assign var="value" value=$fields.dir_ref_per1.default_value }
{else}
{assign var="value" value=$fields.dir_ref_per1.value }
{/if} 
<span class="sugar_field" id="{$fields.dir_ref_per1.name}">{$fields.dir_ref_per1.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tel_ref_per1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEL_REF_PER1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tel_ref_per1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.tel_ref_per1.value) <= 0}
{assign var="value" value=$fields.tel_ref_per1.default_value }
{else}
{assign var="value" value=$fields.tel_ref_per1.value }
{/if} 
<span class="sugar_field" id="{$fields.tel_ref_per1.name}">{$fields.tel_ref_per1.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cel_ref_per1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CEL_REF_PER1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cel_ref_per1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cel_ref_per1.value) <= 0}
{assign var="value" value=$fields.cel_ref_per1.default_value }
{else}
{assign var="value" value=$fields.cel_ref_per1.value }
{/if} 
<span class="sugar_field" id="{$fields.cel_ref_per1.name}">{$fields.cel_ref_per1.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nom_ref_per2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOM_REF_PER2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nom_ref_per2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nom_ref_per2.value) <= 0}
{assign var="value" value=$fields.nom_ref_per2.default_value }
{else}
{assign var="value" value=$fields.nom_ref_per2.value }
{/if} 
<span class="sugar_field" id="{$fields.nom_ref_per2.name}">{$fields.nom_ref_per2.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.dir_ref_per2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIR_REF_PER2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.dir_ref_per2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.dir_ref_per2.value) <= 0}
{assign var="value" value=$fields.dir_ref_per2.default_value }
{else}
{assign var="value" value=$fields.dir_ref_per2.value }
{/if} 
<span class="sugar_field" id="{$fields.dir_ref_per2.name}">{$fields.dir_ref_per2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tel_ref_per2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEL_REF_PER2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tel_ref_per2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.tel_ref_per2.value) <= 0}
{assign var="value" value=$fields.tel_ref_per2.default_value }
{else}
{assign var="value" value=$fields.tel_ref_per2.value }
{/if} 
<span class="sugar_field" id="{$fields.tel_ref_per2.name}">{$fields.tel_ref_per2.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cel_ref_per2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CEL_REF_PER2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cel_ref_per2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cel_ref_per2.value) <= 0}
{assign var="value" value=$fields.cel_ref_per2.default_value }
{else}
{assign var="value" value=$fields.cel_ref_per2.value }
{/if} 
<span class="sugar_field" id="{$fields.cel_ref_per2.name}">{$fields.cel_ref_per2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(5, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL4").style.display='none';</script>
{/if}
<div id='detailpanel_6' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(6);">
<img border="0" id="detailpanel_6_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(6);">
<img border="0" id="detailpanel_6_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL5' module='he01_DatosDeudor_Castigada'}
<script>
document.getElementById('detailpanel_6').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL5' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nom_ref_com1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOM_REF_COM1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nom_ref_com1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nom_ref_com1.value) <= 0}
{assign var="value" value=$fields.nom_ref_com1.default_value }
{else}
{assign var="value" value=$fields.nom_ref_com1.value }
{/if} 
<span class="sugar_field" id="{$fields.nom_ref_com1.name}">{$fields.nom_ref_com1.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.dir_ref_com1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIR_REF_COM1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.dir_ref_com1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.dir_ref_com1.value) <= 0}
{assign var="value" value=$fields.dir_ref_com1.default_value }
{else}
{assign var="value" value=$fields.dir_ref_com1.value }
{/if} 
<span class="sugar_field" id="{$fields.dir_ref_com1.name}">{$fields.dir_ref_com1.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tel_ref_com1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEL_REF_COM1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tel_ref_com1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.tel_ref_com1.value) <= 0}
{assign var="value" value=$fields.tel_ref_com1.default_value }
{else}
{assign var="value" value=$fields.tel_ref_com1.value }
{/if} 
<span class="sugar_field" id="{$fields.tel_ref_com1.name}">{$fields.tel_ref_com1.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cel_ref_com1.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CEL_REF_COM1' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cel_ref_com1.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cel_ref_com1.value) <= 0}
{assign var="value" value=$fields.cel_ref_com1.default_value }
{else}
{assign var="value" value=$fields.cel_ref_com1.value }
{/if} 
<span class="sugar_field" id="{$fields.cel_ref_com1.name}">{$fields.cel_ref_com1.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.nom_ref_com2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOM_REF_COM2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.nom_ref_com2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.nom_ref_com2.value) <= 0}
{assign var="value" value=$fields.nom_ref_com2.default_value }
{else}
{assign var="value" value=$fields.nom_ref_com2.value }
{/if} 
<span class="sugar_field" id="{$fields.nom_ref_com2.name}">{$fields.nom_ref_com2.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.dir_ref_com2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIR_REF_COM2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.dir_ref_com2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.dir_ref_com2.value) <= 0}
{assign var="value" value=$fields.dir_ref_com2.default_value }
{else}
{assign var="value" value=$fields.dir_ref_com2.value }
{/if} 
<span class="sugar_field" id="{$fields.dir_ref_com2.name}">{$fields.dir_ref_com2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.tel_ref_com2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEL_REF_COM2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tel_ref_com2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.tel_ref_com2.value) <= 0}
{assign var="value" value=$fields.tel_ref_com2.default_value }
{else}
{assign var="value" value=$fields.tel_ref_com2.value }
{/if} 
<span class="sugar_field" id="{$fields.tel_ref_com2.name}">{$fields.tel_ref_com2.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.cel_ref_com2.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CEL_REF_COM2' module='he01_DatosDeudor_Castigada'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cel_ref_com2.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cel_ref_com2.value) <= 0}
{assign var="value" value=$fields.cel_ref_com2.default_value }
{else}
{assign var="value" value=$fields.cel_ref_com2.value }
{/if} 
<span class="sugar_field" id="{$fields.cel_ref_com2.name}">{$fields.cel_ref_com2.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(6, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL5").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>