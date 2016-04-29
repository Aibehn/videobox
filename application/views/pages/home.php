<!--CAROUSEL-->
<div class="container" style="margin-top:32px;" width="80%" align="center">
	<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicadores -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!--Asociación de imágenes y texto-->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo asset_url('img/fotoVoD.jpg') ?>" alt="VoD">
						<div class="carousel-caption">
							<h1>Video Box</h1>
							<p style="font-size:25px">Portal de subida y acceso de vídeos bajo demanda.</p>
						</div>
				</div>
				<div class="item">
					<img src="<?php echo asset_url('img/fotoContents.jpg') ?>" alt="LogIn">
						<div class="carousel-caption">
							<p style="font-size:25px">¡Accede a tus contenidos de calidad!</p>
						</div>
				</div>
						
				<div class="item">
					<img src="<?php echo asset_url('img/fotoNube.jpg') ?>" alt="Register">
						<div class="carousel-caption">
							<p style="font-size:25px">¡Regístrate gratis para subir tus vídeos a la nube!</p>
						</div>
				</div>
			</div>
			<!-- Controles hacia adelante y hacia atrás -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
            </a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
            </a>
		</div>
</div>

<!--ICONOS FONT AWESOME-->
<div class="row text-center" style="padding-top:44px; display:flex;">
    <div class="col-sm-4" style="padding-top:15px; border-right: 2px solid white; background-color:lightskyblue; flex:1">
	<span class="fa-stack fa-2x">
  	    <i class="fa fa-circle-thin fa-stack-2x"></i>
  	    <i class="fa fa-coffee fa-stack-1x"></i>
	</span>
	<h4>Ideal para relajarse y disfrutar entre amigos.</h4>
    </div>
    <div class="col-sm-4" style="padding-top:15px; border-right: 2px solid white; background-color:lightskyblue; flex:1">
	<span class="fa-stack fa-2x">
  	    <i class="fa fa-circle-thin fa-stack-2x"></i>
  	    <i class="fa fa-upload fa-stack-1x"></i>
	</span>
	<h4>Sube tus vídeos con cualquiera de las calidades ofrecidas.</h4>
    </div>               
    <div class="col-sm-4" style="padding-top:15px; background-color:lightskyblue; flex:1">
	<span class="fa-stack fa-2x">
  	    <i class="fa fa-circle-thin fa-stack-2x"></i>
  	    <i class="fa fa-clock-o fa-stack-1x"></i>
	</span>
	<h4>Sin publicidad ni tiempos largos de espera.</h4>
    </div>
</div>