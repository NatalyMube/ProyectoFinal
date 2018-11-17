<header class="container-fluid menu">
	<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('home')?>"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" class="img-responsive"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo site_url('home')?>">Home</a></li>
              <li><a href="<?php echo site_url('usuarios')?>">Usuarios</a></li>
              <li><a href="<?php echo site_url('pacientes')?>">Pacientes</a></li>
              <li><a href="<?php echo site_url('medicos')?>">Medicos</a></li>
              <li><a href="<?php echo site_url('medicamentos')?>">Medicamentos</a></li> 
              <li><a href="<?php echo site_url('reservas')?>">Reservas</a></li>
              <li><a href="<?php echo site_url('orden-medicamentos')?>">Orden de medicamentos</a></li>              
            </ul>            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</header>
