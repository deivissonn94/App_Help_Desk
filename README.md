# App Help Desk

Sistema web desenvolvido em **PHP** para gerenciamento de chamados (Help Desk). O projeto foi utilizado como estudo da linguagem PHP e posteriormente recebeu melhorias de organização e estrutura para torná-lo mais próximo de um ambiente real de desenvolvimento.

## Funcionalidades

* Login de usuários
* Controle de sessão
* Controle de acesso por perfil (Administrador e Usuário)
* Abertura de chamados
* Consulta de chamados
* Armazenamento dos chamados em arquivo `.txt`
* Redirecionamento de usuários conforme autenticação

## Tecnologias utilizadas

* PHP
* HTML5
* Bootstrap 4
* Apache
* XAMPP (desenvolvimento)
* Git e GitHub

## Estrutura do projeto

```
app_help_desk/
│
├── index.php
├── home.php
├── abrir_chamado.php
├── consultar_chamado.php
├── logoff.php
├── ...
```

Durante o desenvolvimento foi criada uma pasta privada para armazenar arquivos que não devem ficar expostos ao servidor web, como arquivos de dados e configurações.

Exemplo da estrutura utilizada durante o desenvolvimento:

```
C:\
├── xampp\
│   └── htdocs\
│       └── app_help_desk\
│
└── app_help_desk_privada\
    ├── config.php
    └── arquivo.txt
```

Em ambiente Linux a estrutura pode ser organizada da seguinte forma:

```
/var/www/
├── html/
│   └── app_help_desk/
└── app_help_desk_privada/
```

## Usuários para teste

| Perfil        | E-mail                                    | Senha |
| ------------- | ----------------------------------------- | ----- |
| Administrador | [adm@teste.com](mailto:adm@teste.com)     | 123   |
| Usuário       | [maria@teste.com](mailto:maria@teste.com) | 123   |
| Usuário       | [jose@teste.com](mailto:jose@teste.com)   | 123   |
| Usuário       | [ana@teste.com](mailto:ana@teste.com)     | 123   |

## Como executar

1. Instale um servidor Apache com suporte ao PHP (XAMPP ou Apache em Linux).
2. Copie a pasta `app_help_desk` para o diretório público do servidor.
3. Crie a pasta `app_help_desk_privada`.
4. Configure o caminho da pasta privada em `config.php`.
5. Crie o arquivo `arquivo.txt` dentro da pasta privada.
6. Acesse o projeto pelo navegador.

## Melhorias implementadas

* Organização dos arquivos da aplicação.
* Separação entre arquivos públicos e privados.
* Centralização da configuração dos caminhos da aplicação.
* Estrutura preparada para execução tanto em Windows quanto em Linux.

## Melhorias futuras

* Persistência utilizando banco de dados.
* Senhas protegidas com `password_hash()`.
* CRUD de usuários.
* Upload de anexos.
* Tratamento de erros.
* Melhor organização da arquitetura do projeto.

## Objetivo

Este projeto faz parte dos meus estudos em desenvolvimento web utilizando PHP e tem como objetivo praticar autenticação, sessões, manipulação de arquivos e organização de aplicações web.
