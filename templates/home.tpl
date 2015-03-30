<html>
	<head>
		<title>Home</title>
			<script type="text/javascript">
				function register(){
					var x = new Array();
					x[0] = document.getElementById('name').value;
					x[1] = document.getElementById('password').value;
					
					//Mensaje de error
					var h = new Array();
					h[0] = "<span style='color:red'>Digite el correo electr&oacute;nico asignado!!!</span>";
					h[1] = "<span style='color:red'>Digite el Password!!!</span>";
					
					//checa capturados y no
					var divs = new Array("mname","mpassword");
					for(i in x){
						var error = h[i];
						var div = divs[i];
						if(x[i]==""){
							document.getElementById(div).innerHTML = error;
						}else{
							document.getElementById(div).innerHTML = "";
						}
					}
				}

				function pass(){
					var first = document.getElementById('password').value;
					var second = document.getElementById('cPassword').value;
					if (second == first){
						document.getElementById('mcPassword').innerHTML = "=";
					}else{
						document.getElementById('mcPassword').innerHTML = "<span style='color:red'>X</span>";
					}
				}

				//ini.Incluir debajo	-----------
				// examines browser mouse click events
				function click(evt){
					// rationalise event syntax 
					var e=(evt)?evt :window.event;
					var message='Sitio protegido por pegoga.com';
					//  test for IE         
					if(typeof e.which=='undefined'){
						// right click event
						if(e.button==2){
							alert(message+' IE->2= '+e.button);    
							return false;
							// ---------                
						}
					}else{
						// for other browsers
						if(e.which==3){
							alert(message+' <3='+e.which); 
							e.preventDefault();
							e.stopPropagation();               
							return false;
							// ----------- 
						}
					}                  
				} 

				window.onload=function (){
					document.onmousedown=click; document.oncontextmenu=new Function('return false');  
				}
				//fin.Incluir			-----------
			</script>
	</head>
	
	<body style="color: #666666;">
		<form method='post' action='login.php' width='800px'/>
			<table border='0' />
				<tr><td >RFC</td><td ><input type='text' name='name' maxlength='30'id="name" onKeyUp="register()" /></td>
					<td><div id="mname"></div></td></tr>
				<tr><td >Clave secreta</td><td ><input type='password' name='password' maxlength='8' id="password" onKeyUp="register()" /></td>
					<td><div id="mpassword"></div></td></tr>
				<tr><td >Recordar acceso?</td><td ><input type='checkbox' name='remember' />Cookies ser&aacute;n utilizadas</td></tr>
				<tr><td></td><td>
				<p><input type='submit' name='submit' value='log in' /><p></td></tr>
			</table>
		</form>
		<a href='formU.php'>Crear un usuario nuevo?</a>
		<br/>
		<h1><center>AVISO DE PRIVACIDAD.</center></h1>
		<center>
			<p align="center" style="width:40%;">De conformidad con la Ley Federal de Protecci&oacute;n de Datos Personales en posesi&oacute;n de los
				 particulares el tratamiento de sus datos personales ser&aacute;n de uso exclusivamente personal y sin fines de divulgaci&oacute;n &oacute; utilizaci&oacute;n comercial.</p><br/>
		</center>			
	</body>
</html>