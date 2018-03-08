<!DOCTYPE html>

<html>
	
	<head>
		<script type="text/javascript">
		function validacao() {

		var nome = formulario.nome.value;
		var telefone = formulario.telefone.value;
		var email = formulario.email.value;
		var assunto = formulario.assunto.value;
		var mensagem = formulario.mensagem.value;

		if (nome == "") {
			alert ("Por favor, preencha o campo NOME.");
			formulario.nome.focus();
			return false;
		}

		if (telefone == "" || telefone.length < 11) {
			alert ("Por favor, preencha o campo TELEFONE corretamente (Não esqueça de colocar seu DDD).");
			formulario.telefone.focus();
			return false;
		}

		if (email == "" || email.indexOf("@") == -1 || 
			email.indexOf(".") ==-1) {
			alert("Por favor, digite um endereço de E-MAIL válido!");
			formulario.email.focus();
			return false;
		}

		if (assunto == "") {
			alert ("O campo ASSUNTO não pode ficar em branco.");
			formulario.assunto.focus();
			return false;
		}

		if (mensagem == "") {
			alert ("Por gentileza, escreva uma MENSAGEM.");
			formulario.mensagem.focus();
			return false;
		}
	}

		function mascara(o,f){
  		  v_obj=o
 		  v_fun=f
  	  	setTimeout("execmascara()",1)
		}
		function execmascara(){
		  v_obj.value=v_fun(v_obj.value)
		}
		function mtel(v){
   	 	v=v.replace(/\D/g,"");
   	 	v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
   	 	v=v.replace(/(\d)(\d{4})$/,"$1-$2");
  		 return v;
		}
		function id( el ){
		return document.getElementById( el );
		}
		window.onload = function(){
		id('telefone').onkeypress = function(){
		mascara( this, mtel );
		}
	}

</script>

		<meta charset="UTF-8"/>

		<title>Validando Forms JavaScript</title>
	</head>

	<body style= "margin: 0 auto; border: 1px solid black;">

		<h1 style="text-align: center; background-color: bisque;">Validando Formulário de Contato com JavaScript</h1>
		
		<form name="formulario" method="POST" action="retorno.php" style="text-align: center; background-color: bisque;">
			<br/>
			Nome:<br/> <input type="text" name="nome" size="30"><br/><br/>
			Telefone:<br/> <input type="text" name="telefone" id="telefone" maxlength="15"></br/><br/>
			E-mail:<br/> <input type="text" name="email" size="30"><br/><br/>
			Assunto:<br/> <input type="text" name="assunto" size="30"><br/><br/>
			Mensagem:<br/> <textarea style="width: 400px; height: 200px;" name="mensagem" ></textarea><br/><br/>

			<input style="font-size: 25px;" type="submit" name="submit" value="Enviar" onclick="return validacao()">

		</form>

	</body>

</html>