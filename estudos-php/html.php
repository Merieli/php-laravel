<?php

$nome = 'campo" /> <script>alert("teste");</script> ';


// Por regra para evitar XSS devemos:
// - Limpar a entrada de dados do usuário
// - Escapar a saida de dados

// addslashes() - Adiciona uma barra invertida antes de caracteres especiais em uma string, para evitar a injeção de código malicioso e escaparar caracteres especiais.
// htmlentities() - Converte caracteres especiais em entidades HTML, para evitar a execução de scripts maliciosos e proteger contra XSS (Cross-Site Scripting).
// htmlspecialchars() - Converte caracteres especiais em entidades HTML, semelhante ao htmlentities(), mas com algumas diferenças na forma como os caracteres são tratados.


// Para que os dados obtidos sejam armazenados filtrados e com segurança, pode ser usado o `filter_input()`9
// No exemplo abaixo pega um campo do formulário POST com o nome 'nome' e aplica o filtro de sanitização de string
// filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
?>
<input type="text" name="<?php echo addslashes($nome); ?>" id="nome" placeholder="Digite seu nome">

<!-- O htmlentities() está proporcionando o escape da saída de dados com o htmlentities()  -->
<input type="text" name="<?php echo htmlentities($nome); ?>" id="nome" placeholder="Digite seu nome">

