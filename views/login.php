<html>
   
   <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../ficheros-index/images/icono-residencia.ico">
 <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../plugins/css/bootstrap.min.css">
	<script defer src="../plugins/js/all.js"></script>
	
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" href="../ficheros-index/css/bootstrap.css">
	<!-- Style-CSS -->
	<link rel="stylesheet" href="../ficheros-index/css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="../ficheros-index/css/fontawesome-all.css">

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //Web-Fonts -->
	<style type="text/css">
		a li{
			-webkit-box-shadow: 0px 4px 20px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 4px 20px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 4px 20px 0px rgba(0,0,0,0.75);
		}
	</style>
    
      <title>Pagina de Login</title>
      
      <style type = "text/css">
         html, body {
		  height: 100%;
		}

		body {
		  display: -ms-flexbox;
		  display: -webkit-box;
		  display: flex;
		  -ms-flex-align: center;
		  -ms-flex-pack: center;
		  -webkit-box-align: center;
		  align-items: center;
		  -webkit-box-pack: center;
		  justify-content: center;
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #f5f5f5;
		}

		.form-signin {
		  width: 100%;
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .checkbox {
		  font-weight: 400;
		}
		.form-signin .form-control {
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
      </style>
	
   </head>

   <body class="text-center">
		<form class="form-signin" method = "post">
		  <h1 class="h3 mb-3 font-weight-normal">Login</h1>
		  
		   <div class="input-group form-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input type="text" name="username" class="form-control" placeholder="Usuario">
			</div>
			
			<div class="input-group form-group">
				<div class="input-group-prepend" style="height: 46px;">
					<span class="input-group-text"><i class="fas fa-key"></i></span>
				</div>
				<input type="password" name="password" class="form-control" placeholder="Contraseña">
			</div>
		  <button class="btn btn-lg btn-primary btn-block" type="submit" id="enviar">Entrar</button>
		</form>
		
		<div id="error"></div>
		
	</body>

</html>



