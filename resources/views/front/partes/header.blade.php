<div class="header" id="home1">
	<div class="container">
		<div class="w3l_login">
			<a href="#" data-toggle="modal" data-target="#myModal88">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			</a>
		</div>
		<div class="w3l_logo " style="background-attachment: fixed;background-size: cover; color: #fff;">
			<h1>
				<a href="{{route('index')}}">
					<H1>
						<b style="font-family: 'Roboto', cursive;">Alex Distribuidora S.A.</b>
					</H1>
					<span>Líder en seguridad industrial.</span>
				</a>
			</h1>
		</div>
		<!--    <div class="search">
            <input class="search_box" type="checkbox" id="search_box">
            <label class="icon-search" for="search_box">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </label>
            <div class="search_form">
                <form action="#" method="post">
                    <input type="text" name="Search" placeholder="Buscar...">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
        -->
		<div class="cart cart box_1">
			<button title="Ir al carrito" class="w3view-cart"  onclick="location.href='/carrito/show'">
				<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
			</button>
		</div>
	</div>
</div>
<!--NavBar-->
<div class="navigation">
	<div class="container">
		<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header nav_2">
				<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" style="background: black" id="bs-megadropdown-tabs">
				<ul class="nav navbar-nav">
					<li>
						<a href="/" class="act">Quienes Somos</a>
					</li>
					<!-- Mega Menu -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nuestros Productos
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu multi-column columns-3">
							<div class="row">
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
										<h6>Bulonería</h6>
										<li>
											<a href=""><strike>Tornillos</strike></a>
										</li>
										<li>
											<a href=""><strike>Bulones</strike>
												<span>nuevo</span>
											</a>
										</li>
										<li>
											<a href=""><strike>Tuercas</strike></a>
										</li>
										<li>
											<a href=""><strike>Arandelas</strike>
												<span>nuevo</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-sm-3">
									<ul class="multi-column-dropdown">
										<h6>Seguridad Industrial</h6>
										<li>
											<a href=""><strike>Indumentaria</strike></a>
										</li>
										<li>
											<a href=""><strike>Gafas</strike></a>
										</li>
										<li>
											<a href=""><strike>Cascos</strike>
												<span>nuevo</span>
											</a>
										</li>
										<li>
											<a href="/front_articulos">
												<i>Sección Cartelería</i>
											</a>
										</li>
									</ul>
								</div>
								<div class="col-sm-2">
									<ul class="multi-column-dropdown">
										<h6>Herramientas</h6>
										<li>
											<a href=""><strike>Herramientas eléctricas</strike></a>
										</li>
										<li>
											<a href=""><strike>Martillos</strike></a>
										</li>
										<li>
											<a href=""><strike>Destornilladores</strike></a>
										</li>
										<li>
											<a href=""><strike>Pinzas y llaves</strike></a>
										</li>
									</ul>
								</div>
							</div>
						</ul>
					</li>
					<li>
						<a href="{{route('rrhh.index')}}" class="">RRHH</a>
					</li>
					<li>
						<a href="" class=""><strike>Novedades</strike></a>
					</li>
					<li>
						<a href="{{route('descargas.index')}}" class="act">Descargas</a>
					</li>
					<li>
						<a href=""><strike>Contacto</strike></a>
					</li>
                    {{--
					<li>
						<a href="{{route('rrhh.index')}}" class="act">Ingresar</a>
					</li>
					--}}
				</ul>
			</div>
		</nav>
	</div>
</div>