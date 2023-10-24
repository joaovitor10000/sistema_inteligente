 <html>
 <body>
 
   <form action="login3.html" method="post">


<?php


echo "Olá Senhor, " . $_POST["nomecliente"] ."<br>";
echo "Seu E-mail ==> " . $_POST["email"]."<br>" ;
echo "Seu Telefone ==> ". $_POST["telefone"]."<br>" ;


?>

<button  type="submit">Conferir Seu Casdastro</button>
		
</form>	
</body>
</html>