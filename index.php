
<?php  require_once 'inc/header.php'; ?> 
    
    <header id="inicio">
        <?php require_once 'inc/nav.php'; ?>
	</header>
    <!-- Img central -->

    <div class="container-fluid img_central">
    </div>
  
 	<!-- FIN  -->
     <section class="container-fluid seccion-intro" id="intro">
     	<div class="container">
	     	<article>
	     		<?php require_once 'inc/intro.php'; ?>
	     	</article>
     	</div> 
	 </section>

	  <section class="container-fluid seccion-quien-soy" id="quien_soy">
		<?php require_once 'inc/quien-soy.php'; ?> 	 	
 	 </section>

	 <section class="container-fluid img_2 seccion-mis-servicios" id="servicios">
		<?php require_once 'inc/servicios.php'; ?>
	 </section>

	 <section class="container seccion-portafolio" id="Portafolio" >
	 	<?php  require_once 'inc/portafolio.php'; ?>
	 </section>

	 <section class="container seccion-contacto" id="contacto">
	 	<?php require_once 'inc/contacto.php'; ?>
	 </section>

<?php require_once 'inc/footer.php'; ?>