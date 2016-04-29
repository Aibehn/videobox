<?php echo validation_errors('<div class="alert alert-danger" role="alert">','</div>'); ?>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>
<div class="jumbotron" style="margin-top:30px;">
<h2 align="center">SUBIDA DE VIDEOS</h2>
	<div class="container" align="center">
	    <label style="padding-top:15px" for="title">Titulo:   </label>
	    <input type="input" style="width:50%;" name="title" id="title" /><br />
	</div>
	<div class="checkbox">
	    <label for="title">Descripcion:   </label>
	    <textarea id="text" name="text" class="form-control" rows="5"></textarea>
	</div>
	<!--<input type="input" name="text" id="text" /><br />-->
	<label for="mpeg-dash">Utilizar Mpeg-Dash</label>
	<input type="checkbox" name="mpeg-dash" value="1" id="mpeg-dash" />
	<br></br>
        <label for="userfile">Archivo</label>
        <input type="file" name="userfile" id="userfile"/> 
	<br></br>
	<div class="container" align="center">
	    <input type="submit" name="submit" class="btn btn-info" value="Subir" />
	</div>
</form>
</div>
