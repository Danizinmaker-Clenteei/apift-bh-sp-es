<?php

// Verifica se o método de requisição é POST
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Obtém os dados enviados no corpo da requisição
        $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
                $dataNascimento = $_POST['dataNascimento'];

                    // Abre o arquivo "dados.json" e lê seu conteúdo
                        $json = file_get_contents('dados.json');
                            $dados = json_decode($json, true);

                                // Adiciona os novos dados ao array
                                    $dados[$nome] = array(
                                            'cpf' => $cpf,
                                                    'dataNascimento' => $dataNascimento
                                                        );

                                                            // Converte o array em formato JSON
                                                                $jsonAtualizado = json_encode($dados);

                                                                    // Salva o JSON atualizado no arquivo "dados.json"
                                                                        file_put_contents('dados.json', $jsonAtualizado);

                                                                            // Retorna uma mensagem de sucesso em JSON
                                                                                $retorno = array(
                                                                                        'mensagem' => 'Cadastro realizado com sucesso'
                                                                                            );
                                                                                                echo json_encode($retorno);
                                                                                                }

                                                                                                ?>

                                                                                                <!DOCTYPE html>
                                                                                                <html>
                                                                                                <head>
                                                                                                    <title>Cadastro</title>
                                                                                                    </head>
                                                                                                    <body>
                                                                                                        <h1>Cadastro</h1>
                                                                                                            
                                                                                                                <form method="POST" action="">
                                                                                                                        <label for="nome">Nome:</label>
                                                                                                                                <input type="text" id="nome" name="nome" required><br><br>

                                                                                                                                        <label for="cpf">CPF:</label>
                                                                                                                                                <input type="text" id="cpf" name="cpf" required><br><br>

                                                                                                                                                        <label for="dataNascimento">Data de Nascimento:</label>
                                                                                                                                                                <input type="text" id="dataNascimento" name="dataNascimento" required><br><br>

                                                                                                                                                                        <button type="submit">Cadastrar</button>
                                                                                                                                                                            </form>
                                                                                                                                                                            </body>
                                                                                                                                                                            </html>