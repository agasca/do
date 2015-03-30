		//jquery
		$(document).ready(function(){
			$('#boton1').click(function(){
				//$('#div1').html('hello');
				//alert(miForm);
				limpiaForm($('#myFo'));
			});
		});
		

		function rfc(r){
			if (!(/^[a-zA-Z]{3,4}(\d{6})((\D|\d){3})?$/.test(r)))
				alert('El RFC no tiene la estructura correcta');
		}

		
		function justNumbers(e){
			var keynum = window.event ? window.event.keyCode : e.which;
			if ((keynum == 8) || (keynum == 46))
				return true;
		
			return /\d/.test(String.fromCharCode(keynum));
		}
		
		
		function limpiaForm(miForm){//con jquery
			// recorremos todos los campos que tiene el formulario
			$(':input', miForm).each(function() {
			var type = this.type;
			var tag = this.tagName.toLowerCase();
			
			//limpiamos los valores de los campos…
			if (type == 'text' || type == 'password' || tag == 'textarea')
				this.value = '';
			
			else if (type == 'checkbox' || type == 'radio')
			{
				// excepto de los checkboxes y radios, le quitamos el checked
				// pero su valor no debe ser cambiado
				//myFo.rb[0].checked = true;
				
				myFo.checkbox.checked = false;
				
				

				myFo.boton.style.display='none';

				this.checked = false;
			}
			
			else if (tag == 'select')
				// los selects le ponesmos el indice a -
				myFo.selectedIndex = -1;
				//this.selectedIndex = -1;
			});
		}
		
		
		var dato = '';//puente entre Js y Asp
		//Generates the captcha function    
		function DrawCaptcha(){
			var a = Math.ceil(Math.random() * 10)+ '';
			var b = Math.ceil(Math.random() * 10)+ '';       
			var c = Math.ceil(Math.random() * 10)+ '';  
			var d = Math.ceil(Math.random() * 10)+ '';  
			var e = Math.ceil(Math.random() * 10)+ '';  
			var f = Math.ceil(Math.random() * 10)+ '';  
			var g = Math.ceil(Math.random() * 10)+ '';  
			var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
			//document.getElementById('txtCaptcha').value = code;
			dato = a+b+c+d+e+f+g;
			document.formulario.Variable.value = dato;
			//document.formulario.submit();			
			//alert(dato);
		}

		
		function formatCurrency(num) {
			num = num.toString().replace(/\$|\,/g,'');
			if(isNaN(num))
				num = '0';
				sign = (num == (num = Math.abs(num)));
				num = Math.floor(num*100+0.50000000001);
				cents = num%100;
				num = Math.floor(num/100).toString();
				if(cents<10)
					cents = '0' + cents;
					for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
						num = num.substring(0,num.length-(4*i+3))+','+
						num.substring(num.length-(4*i+3));
					//return (((sign)?'':'-') + '$' + num + '.' + cents);
				return (((sign)?'':'-') + num + '.' + cents);
		}
		
		function expandir_formulario(){
			//xDisplay('capaexpansion2', 'block');
			if (document.formulario.catalogo09.value == ''){
				xDisplay('capaexpansion0', 'none');
				xDisplay('capaexpansion01', 'none');
				xDisplay('capaexpansion02', 'none');		
				xDisplay('capaexpansion1', 'none');
				xDisplay('capaexpansion11', 'none');								
				//campos
				document.formulario.tipoIva.style.display='none';
				document.formulario.txtCampo6.style.display='none';
				document.formulario.txtCampo7.style.display='none';
				document.formulario.tipoIvaE.style.display='none';
			}else if(document.formulario.catalogo09.value == 'I'){//ingreso
				xDisplay('capaexpansion0', 'block');
				xDisplay('capaexpansion01', 'block');
				xDisplay('capaexpansion02', 'none');
				xDisplay('capaexpansion11', 'none');								
				document.formulario.tipoIva.style.display='block';
				document.formulario.tipoIvaE.style.display='none';	
				document.getElementById('mtxtFecha').innerHTML = 'Cobro';
				document.getElementById('mtxtTlIva').innerHTML = 'acreditable cobrado';												
				new JsDatePick({
					useMode:2,
					target:'inputField',
					dateFormat:'%Y-%m-%d'
				});	
				new JsDatePick({
					useMode:2,
					target:'inputField1',
					dateFormat:'%Y-%m-%d'
				});
			}else{//egreso
				xDisplay('capaexpansion0', 'block');								
				xDisplay('capaexpansion01', 'none');
				xDisplay('capaexpansion02', 'block');
				xDisplay('capaexpansion11', 'none');
				document.formulario.tipoIva.style.display='none';
				document.formulario.tipoIvaE.style.display='block';						
				document.getElementById('mtxtFecha').innerHTML = 'Pago';
				document.getElementById('mtxtTlIva').innerHTML = 'trasladado pagado';																		
				new JsDatePick({
					useMode:2,
					target:'inputField',
					dateFormat:'%Y-%m-%d'
				});	
				new JsDatePick({
					useMode:2,
					target:'inputField1',
					dateFormat:'%Y-%m-%d'
				});	
			}
		};
		
		
		function activa(){
			if((document.formulario.catalogo09.value=='I')){
				if (document.formulario.tipoIva.value == ''){
					xDisplay('capaexpansion1', 'none');
				}else{
					xDisplay('capaexpansion1', 'block');
				}
				if (document.formulario.rb[0].checked == true){
					xDisplay('capaexpansion11', 'block');
					document.formulario.txtCampo6.style.display='block';
					document.formulario.txtCampo7.style.display='block';
					document.formulario.boton.style.display='none';	
				}else if (document.formulario.rb[1].checked == true){
					xDisplay('capaexpansion11', 'none');
					document.formulario.txtCampo6.style.display='none';
					document.formulario.txtCampo7.style.display='none';
					document.formulario.boton.style.display='none';				
				}
				/*
				else{
					xDisplay('capaexpansion11', 'none');
					document.formulario.checkbox.style.display='none';
					document.formulario.txtCampo6.style.display='none';
					document.formulario.txtCampo7.style.display='none';
					document.formulario.boton.style.display='none';
				}
				*/
			}else{//tipoIvaE
				if (document.formulario.tipoIvaE.value == ''){
					xDisplay('capaexpansion1', 'none');
					//document.formulario.txtCampo6.style.display='none';
					//document.formulario.txtCampo7.style.display='none';
					document.formulario.boton.style.display='none';
				}else{
					xDisplay('capaexpansion1', 'block');
					document.formulario.checkbox.style.display='block';
					//document.formulario.txtCampo6.style.display='none';
					//document.formulario.txtCampo7.style.display='none';
					document.formulario.boton.style.display='none';
				}
			}
			
			
			if (document.formulario.checkbox.checked){
				var answer = confirm ('Presione ACEPTAR para confirmar los datos. Presione CANCELAR para revisar.');
				if (answer){			
					document.formulario.boton.style.display='block';					
				}else{
					document.formulario.checkbox.checked = false;
				}
			}
		};
		
		
		function register(){
			var x = new Array();
			x[0] = document.getElementById('txtCampo0').value;
			x[1] = document.getElementById('txtCampo1').value;					
			x[2] = document.getElementById('txtCampo4').value;
			x[3] = document.getElementById('txtCampo5').value;
			
			//Mensaje de error
			var h = new Array();
			h[0] = "<span style='color:red'>Digite la razon social</span>";
			h[1] = "<span style='color:red'>Digite el numero de factura</span>";
			h[2] = "<span style='color:red'>Digite 13 o 14 caracteres del RFC</span>";
			h[3] = "<span style='color:red'>Cifras sin coma, solo decimal</span>";
			
			//checa capturados y no
			var divs = new Array('mtxtCampo0','mtxtCampo1', 'mtxtCampo4', 'mtxtCampo5');
			for(i in x){
				var error = h[i];
				var div = divs[i];
				if(x[i]==''){
					document.getElementById(div).innerHTML = error;
				}else{
					document.getElementById(div).innerHTML = '';
				}
			}
		};
