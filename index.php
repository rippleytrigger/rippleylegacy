
<?php  require_once 'paginas/header.php'; ?> 
    
    <header id="inicio">
        <?php require_once 'paginas/nav.php'; ?>
	</header>
    <!-- Img central -->

    <div class="container-fluid img_central">
    </div>
  
 	<!-- FIN  -->
     <section class="container-fluid" id="intro">
     	<div class="container">
	     	<article class="col-md-12">
	     		<?php require_once 'paginas/intro.php'; ?>
	     	</article>
     	</div> 
	 </section>

	  <section class="container-fluid" id="quien_soy">
		<?php require_once 'paginas/quien_soy.php'; ?> 	 	
 	 </section>

	 <section class="container-fluid img_2" id="servicios">
		<?php require_once 'paginas/servicios.php'; ?>
	 </section>

	 <section class="container" id="Portafolio" >
	 	<?php  require_once 'paginas/portafolio.php'; ?>
	 </section>

	 <section class="container" id="contacto">
	 	<?php require_once 'paginas/contacto.php'; ?>
	 </section>

<?php require_once 'paginas/footer.php'; ?>