<link href="../public/bootstrap/css/login-style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
<!--//webfonts-->
<script>
function registrar(){
	var email = document.getElementById("email").value;
	var emailConfir = document.getElementById("emailConfir").value;
	var nombre = document.getElementById("nombre").value;
	var pwd = document.getElementById("pwd").value;
	var pwdConfir = document.getElementById("pwdConfir").value;
	
	var pars = "email="+email+"&emailConfir="+emailConfir+"&nombre="+nombre+"&pwd="+pwd+"&pwdConfir="+pwdConfir;

	try {
		var req = ajaxRequest();
		req.open("POST", "../resources/singin.php", true)
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		req.onreadystatechange=function(){
			if (req.readyState==4) {
				if (req.status==200){
					var respuesta = req.responseText;
					respuesta = JSON.parse(respuesta);
					alert(respuesta.respuesta);
				}else {
					alert("Error. "+ req.statusText);
				}
			}
		};
		var uri = encodeURI(pars);
		req.send(pars);
	}catch (e) {
		alert("Error. "+e.message);
	}
	
}

function ajaxRequest(){
	try{
		var request = new XMLHttpRequest()
	}catch(e1){
		try{
			request = new ActiveXObject("Msxml2.XMLHTTP")
		}catch(e2){
			try{
				request = new ActiveXObject("Microsoft.XMLHTTP")
			}catch(e3){
				request = false
			}
		}
	}
	return request;
}
</script>

<div class="main_bg">
<div class="wrap">	

		<div class="header" >
		<h1>Inicia sesisón o crea una cuenta</h1>
		</div>
		<p>Algún texto aquí.</p>
			<form>
				<ul class="left-form">
					<h2>Crear cuenta:</h2>
					<li>
						<input type="text"   placeholder="Usuario" required id="nombre"/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="E-mail" required id="email"/>
						<div class="clear"> </div>
					</li>
					<li>
						<input type="text"   placeholder="Repetir E-mail" required id="emailConfir"/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="Contraseña" required id="pwd"/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="Repetir contraseña" required id="pwdConfir"/>
						<div class="clear"> </div>
					</li> 
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Por favor infórmame con promociones y ofertas de la tienda.</label>
					<input type="submit" onclick="registrar()" value="Crear Cuenta">
					<div class="clear"> </div>
				</ul>
				<ul class="right-form">
					<h3>Identifícate:</h3>
					<div>
						<li><input type="text"  placeholder="Usuario"/></li>
						<li> <input type="password"  placeholder="Contraseña"/></li>
						<h4>¡Olvidé mi contraseña!</h4>
							<input type="submit" onclick="" >
					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>
			</form>

</div>
</div>