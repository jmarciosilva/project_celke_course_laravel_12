# Projeto para estudo e aprendizagem do Laravel na Versão 12

## Requisitos

* PHP 8.2 ou superior
* Composer
* Node JS 20 ou superior
* MySQL 8.0 ou superior

## Como rodar o projeto baixado


## Sequência para criar o projeto

Criar o projeto com Laravel
```
composer create-project laravel/laravel .
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Instalar as bibliotecas Node.js
```
npm install
```

Rodar as bibliotecas Node.js
```
npm run dev
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000
```

## Como enviar e baixar os arquivos do GitHub

- Criar um repositório **"project-laravel-12"** no GitHub por exemplo
- Criar uma branch **"develop"** no repositório - para você subir o código em desenvolvimento e nunca quebrar o código de produção

Baixar os arquivos do Git
```
git clone --branch <nome_da_branch> <nome_da_url_repositorio> .
```

Alterar o Usuário Globalmente para todos os repositórios
```
git config --global user.name "SeuNomeDeUsuario"
git config --global user.email "seuemail@examplo.com"
```

Verificar em qual branch você está
```
git branch
```

Baixar as atualizações do GitHub
```
git pull
```

Adicionar todos os arquivos modificados
```
git add .
```

Para fazer o commit que representa as alterações que vc realizou na história de desenvolvimento do seu projeto
```
git commit -m "Base do projeto Laravel 12"
```

Enviando os commits locais para o repositório do GitHub
```
git push <remote> <branch> - exenplo
git push origin develop
```

## Autor
Este projeto foi desenvolvido por José Márcio Ferreira da Silva
