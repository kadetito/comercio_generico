
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark fixed-top">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Brand</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							 <a class="nav-link " href="#">Link</a>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text" /> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbaMenuPerfil" data-toggle="dropdown">{$nombrecliente} {$apellidoscliente}</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbaMenuPerfil">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> 
							</div>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="logout.php">Logout</a>
						</li>
					</ul>
				</div>
			</nav>