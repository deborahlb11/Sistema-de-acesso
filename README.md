# Sistema-de-acesso

Este projeto consiste em um sistema web simples de autenticação de usuários utilizando PHP, MySQL, HTML, CSS e Bootstrap. Ele permite que o usuário realize o login via CPF, acesse páginas protegidas, edite seus dados, e recupere a senha (sem envio de e-mail).

## Funcionalidades

- ✅ Login via usuário e senha
- ✅ Consulta e exibição de dados do usuário
- ✅ Sistema de "Esqueceu a Senha" com troca direta (solicitando o seu cpf)
- ✅ Cadastro e edição de informações
- ✅ Layout responsivo com Bootstrap 4
- ✅ Exibição de mensagens de erro personalizadas (popups)
- ✅ Barra superior azul com CSS
- ✅ Exibição dinâmica do nome do usuário logado

## Tecnologias Utilizadas

- **PHP 7+**
- **MySQL**
- **HTML5**
- **CSS3**
- **Bootstrap 4.1.3**
- **FontAwesome (opcional)**

📁 projeto/
│
├── conexao.php # Conexão com banco de dados MySQL
├── login.php # Página de login
├── esqueceu_senha.php # Recuperação de senha sem e-mail
├── alterar_senha.php # Alteração de senha
├── dashboard.php # Página protegida do usuário
├── css/
│ └── estilo.css # CSS personalizado (barra azul, centralização etc.)
├── js/
│ └── popup.js # JS para popups de erro

## Requisitos

- Servidor com suporte a PHP (Apache ou Nginx)
- Banco de dados MySQL
- Navegador moderno

## Como Usar

1. Clone ou baixe o repositório
2. Configure o arquivo `conexao.php` com suas credenciais MySQL
3. Importe o banco de dados (tabela `lce` com colunas `cpf`, `nome`, `email`, `senha`, `codigo`)
4. Acesse o `login.php` via navegador
5. Teste os fluxos de login, edição e recuperação de senha

## Observações

- O projeto **não utiliza criptografia de senha**, sendo recomendado aplicar `password_hash()` e `password_verify()` em ambientes reais.
- O envio de e-mail na recuperação de senha **não foi implementado por escolha**, mas o formulário permite troca direta.

  ## Autor

Desenvolvido por Debora Lima com base em trechos testados fonte de alguns css do ChatGPT.
