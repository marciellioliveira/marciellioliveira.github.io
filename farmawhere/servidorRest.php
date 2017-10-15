<?php 


    switch( $_SERVER['REQUEST_METHOD'] ) 
    {
        case 'GET':
            echo "GET";
            break;
        case 'POST':
         //   echo "Dados recebidos por POST <br>";
			$nome = $_POST["nome"];
			$endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
			echo "Nome = $nome <br> Endereço = $endereco <br> Telefone = $telefone <br> Email = $email";

            $connect = mysqli_connect('localhost','root','');
            $db = mysqli_select_db($connect,'farmawhere');
            mysqli_set_charset($connect,'utf8');

            if (empty($_POST['nome']) && empty($_POST['endereco']) && empty($_POST['telefone']) && empty($_POST['email'])) {
                echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário: Os campos estão vazios');window.location.href='index.php'</script>";
            }else if (empty($_POST['nome']) || empty($_POST['endereco']) || empty($_POST['telefone']) || empty($_POST['email'])){

                echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário: Preencha todos os campos');window.location.href='index.php'</script>";

            } else {
                       $query = "INSERT INTO dados (nome,endereco, telefone, email) VALUES ('$nome','$endereco','$telefone','$email')";
        $insert = mysqli_query($connect,$query);

        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');</script>";
        
     
            }


 
	        
	        break;
    }
?>

