<html>

    <head>
        <title>Doe 5</title>
        <link rel="stylesheet" href="./assets/styles/register.css">
        <link rel="stylesheet" href="./assets/styles/header.css">
        
    </head>

    <body>
        <header>
            <a id="voltar"href="index.php">
                <img src="./assets/imgs/voltar.svg" alt="Voltar">
                <h1>Voltar</h1>
            </a>
        </header>

        <!--Form de dados de conta SENDO CADASTRADO - Cadastro -->
        <section id="main">
            <h2>Cadastrar-se</h2>
            <form id='form-donator-reg'name="new_donator" action="donator_reg_action.php" method="get">
                    <div id="div-line-1">
                        <div class="col">
                            <div class="input-field">
                                <h4>Nome: <span>*</span></h4>
                                <input name="nome" type="text" placeholder="John Doe">
                            </div>    
                            <div class="input-field">
                                <h4>Email: <span>*</span></h4>
                                <input name="emailAdd" type="text" placeholder="exemplo@doe5.com">
                            </div>
                            <div class="input-field">
                                <h4>Telefone: </h4>
                                <input name="fone" type="tel" pattern="^[0-9]{11}$" placeholder="41998765432">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-field">
                                <h4>Senha: <span>*</span></h4>
                                <input name="senhaAdd" type="password" placeholder="Doe@eM%5">
                            </div>    
                            <div class="input-field">
                                <h4>Confirmação de senha: <span>*</span></h4>
                                <input name="confirmaSenha" type="password" placeholder="Doe@eM%5">
                            </div>
                            <div class="input-field">
                                <h4>Data de nascimento: <span>*</span></h4>
                                <input name="dataNasc" type="date" required>
                            </div>
                        </div>
                    </div>
                    <input id='btn-submit'type="submit" value="Cadastrar">
                </form>
        </section>
    </body>
</html>