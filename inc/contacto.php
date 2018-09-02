	
<!-- Contacto -->
	<header class="jumbotron">
    <h1 class="text-center">¿Quieres tener tu propio portal web?</h1>

      <p class="text-center">
      	Si estás interesado, no dudes en escribirme o llamarme  
        y empecemos a hacer negocios. 
      	<i class="fa fa-thumbs-up fa-1x " aria-hidden="true"></i>.
      </p>

      <hr/>
      	
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<button class="btn btn-info btn-lg btn-block" 
          data-toggle="collapse" data-target="#formulario_cont">
						Contáctame
					</button>
				</div>
				<div class="col-md-4">
				</div>

			</div>
  </header>


<!-- Formulario de contacto -->

<div class="well collapse" id="formulario_cont"> 

  <form class="form-horizontal" action="#" method="post">
    <fieldset> 
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
        <div class="col-sm-7">
          <input type="email" class="form-control" name="correo" id="correo" placeholder="Email" required/>
        </div>
      </div>

      <div class="form-group">
        <label for="nombre_" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nombre_" name="nombre" placeholder="Coloque su nombre" required/>
        </div>
      </div>

      <div class="form-group">
        <label for="numero" class="col-sm-2 control-label">Número</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="numero" name="numero" placeholder="0212-9999999" required/>
        </div>
      </div>

      <div class="form-group">
        <label for="asunto" class="col-sm-2 control-label">Asunto</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" required/>
        </div>
      </div>

      <div class="form-group">
        <label for="contacto" class="col-sm-2 control-label">Mensaje</label>	

        <div class="col-sm-6">
          <textarea class="form-control" rows="9" placeholder="Mensaje" name="mensaje" required></textarea>
        </div>

      </div>

      <div class="form-group">
        <label for="suma" id="suma_label" class="col-sm-2 control-label" required ></label>

          <div class="col-sm-2">
            <input class="form-control" type="text" name="suma" id="suma" placeholder="¿Cuánto es?" required />
          </div>
          <!-- Mensaje  -->
          <div class="col-sm-8">
            <div class="" id="mensaje_num">
              <span></span>
            </div>
          </div>
          <!--  Fin Mensaje  -->    
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
              <button type="submit" class="btn btn-info btn-block btn-lg"> Enviar 
                <span class="glyphicon"></span>
              </button>
        </div>
      </div>

    </fieldset>
  </form> 

  <div class="form-group" id="respuesta_form_contacto">
  </div>
</div>