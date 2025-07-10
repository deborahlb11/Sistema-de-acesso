Projeto: Sistema de Cadastro e Login com Upload de Imagem (PHP + MySQL + Bootstrap)
Este projeto é um sistema simples de autenticação de usuários com suporte a cadastro, login, edição de perfil e upload de imagem de perfil, utilizando PHP, MySQLi e Bootstrap.

✅ Funcionalidades
 Tela de login e cadastro com abas alternáveis

 Cadastro com os seguintes campos:

Nome

E-mail

Senha

CPF

Idade

Rua

Cidade

Estado

Biografia

Upload de imagem

 Login com validação no banco de dados

 Página de perfil com:

Exibição da foto do usuário

Dados pessoais

 Página para edição de perfil:

Permite atualizar todos os campos, incluindo a imagem

 Armazenamento seguro das imagens no servidor (pasta img/)

 Responsividade com Bootstrap 4

🛠️ Tecnologias utilizadas
PHP (mysqli procedural)

MySQL / MariaDB

HTML5 / CSS3

Bootstrap 4.1.3

Font Awesome

XAMPP (para testes locais)

🗂️ Estrutura de arquivos
bash
Copiar
Editar
/
├── index.html                # Tela de login/cadastro
├── login.php                 # Autenticação de usuários
├── cadastro.php              # Processamento do cadastro e upload da imagem
├── inicial.php               # Página inicial após login
├── perfil.php                # Exibe o perfil do usuário logado
├── editarcad.php             # Formulário para editar o cadastro
├── salvar_edicao.php         # Salva os dados atualizados no banco
├── conexao.php               # Conexão com banco de dados
├── img/                      # Pasta onde as imagens são salvas
├── login.css                 # Estilo visual do formulário
├── editarcad.css             # Estilo da página de edição
└── README.md
🧪 Como rodar o projeto localmente
Instale o XAMPP ou outro servidor com suporte a PHP e MySQL

Clone ou copie os arquivos para a pasta htdocs

Crie o banco de dados:

sql
Copiar
Editar
CREATE DATABASE dlb;

USE dlb;

CREATE TABLE lce (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(255),
    cpf VARCHAR(20),
    idade INT,
    rua VARCHAR(100),
    cidade VARCHAR(100),
    estado VARCHAR(100),
    biog TEXT,
    img VARCHAR(255)
);
Crie a pasta /img na raiz do projeto e dê permissão de escrita

Acesse via navegador: http://localhost/seu_projeto/

🚨 Observações
A senha está sendo salva sem criptografia; recomenda-se usar password_hash() em produção.

O sistema ainda não possui verificação de e-mail ou autenticação avançada.

Faça melhorias na segurança contra SQL Injection usando prepared statements (mysqli ou PDO).

✨ Futuras melhorias sugeridas
Validação com JavaScript

Redefinir senha via e-mail

Upload com pré-visualização

Criptografia de senhas

Painel administrativo
