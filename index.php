<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração do PHP com banco de dados - Estácio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/styles.css">
    <script src=""></script>
</head>
<body>
    <div class="container" id="formContainer" style="width:50%;">
        <div class="row d-flex">
            <div class="col-lg-12 form-group justify-content-center">
                <form class="form-area" action="cadastra.php" method="post">
                    <h2>Cadastro de clientes</h2>
                    <label for="nome">Nome* :</label>
                    <input class="common-input mb-20 form-control" type="text" name="nome" id="nome" placeholder="nome completo" minlenght="3" maxlenght="100" required>
                    <label for="cpf">CPF* :</label>
                    <input class="common-input mb-20 form-control" type="cpf" name="cpf" id="cpf" placeholder="apenas números" minlenght="11" maxlenght="11" required>
                    <label for="data_nascimento">Data de nascimento:*</label>
                    <input class="common-input mb-20 form-control" type="date" name="data_nascimento" id="data_nascimento" placeholder="DD/MM/AAAA" required>
                    <label for="email">E-mail:*</label>
                    <input class="common-input mb-20 form-control" type="email" name="email" id="email" placeholder="email@email.com" required>
                    <div style="color:red;"> * campos obrigatórios!</div>
                    <div id="btnForms">
                        <button id="enviar" class="btn" type="submit">Enviar</button>
                        <button id="resetar" class="btn" type="reset">Limpar formulário</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>