<?php use_javascript("index.js")?>
<div class="row">
    <div id="formAutenticacion" action="main/autenticacion" class="span8 offset2 well">
        <form class="form-horizontal span5 offset1">
            <fieldset>
                <legend>Ingreso</legend>
                <div id ="divUsuario" class="control-group">
                    <label class="control-label" for="usuario">Usuario:</label>
                    <div class="controls">
                        <input type="text" id="usuario">
                        <span id="spanUsuario" class="help-inline"></span>
                    </div>
                </div>
                <div id="divClave" class="control-group">
                    <label class="control-label" for="usuario">Clave:</label>
                    <div class="controls">
                        <input type="password" id="clave">
                        <span id="spanClave" class="help-inline"></span>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
