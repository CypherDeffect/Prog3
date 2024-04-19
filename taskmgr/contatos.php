<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>

    <h1>Contatos</h1>
    <form>
        <fieldset>
            <legend>Adicionar novo contato</legend>
            <label>
                Nome: <input type="text" name="nome"><br>
            </label>
            <label>
                E-mail: <input type="email" name="email"><br>
            </label>
            <label>
                Whatsapp: <input type="phone" name="phone"><br>
            </label>
            <input type="submit" value="Gravar">
        </fieldset>
    
        <?php
        
            if (array_key_exists('nome' & 'email' & 'phone', $_GET)){
                $_SESSION['contatos'][] = $_GET['nome'];
            }

            if(array_key_exists('contatos', $_SESSION)){
                $contatos = $_SESSION['contatos'];
            }else {
                $contatos = [];
            }


            <?php foreach ($lista_contatos as $contato) : ?>
            <tr>
                <td><?php echo $contato['nome']; ?></td>
                <td><?php echo $contato['email']; ?></td>
                <td><?php echo $contato['phone']; ?></td>
            </tr>
            <?php endforeach; ?>

            # Pesquisar sobre o SESSION
         ?>
</body>
</html>
