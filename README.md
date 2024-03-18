# Projeto Laravel - Escola
Esta aplicação laravel, denominada "Escola", serve como uma plataforma para gerir informações relacionadas a alunos, cursos e matrículas. O administrador sendo capaz de remover cursos, alunos e matrículas.

É uma aplicação direcionada mais para uso académico.

## Requisitos
 - PHP >= 7.4
 - Composer
 - MySQL, PostgreSQL, SQLite ou SQL Server
 - Node.js (para compilar assets front-end, se aplicável)
 - Git

## Instalação
1. Clonar o Repositório:
   - git clone https://github.com/Josemarsilvestre/Escola.git
   - cd Escola

2. Instalar Dependências:
   ```bash
      composer install
   ```

3. Configuração do Ambiente:
   - Copie o arquivo `.env.example` para `.env` e configure com a credenciais do seu banco de dados.
   - Gere uma nova chave de aplicativo:
   ```bash
      php artisan key:generate
   ```

4. Migração do Banco de Dados:
   - Depois de criar as tabelas necessárias do banco de dados:
   ```bash
      php artisan migrate
   ```

5. Iniciar o Servidor de Desenvolvimento:
   ```bash
      php artisan serve
   ```

Depois do comando, será apresentado a porta localhost do aplicativo.

## Utilização
Na página inicial da aplicação, no lado superior direito, encontrará o botão de `login` e o botão de `register`, se for criar uma conta.

Se estiver como administrador, conseguirá visualizar, editar e apagar cursos, alunos e matrículas. 
A informação aparecerá no lado direito de cada elemento.

## Estrutura do Projeto
  - app/: Contém os arquivos do seu aplicativo Laravel.
  - config/: Configurações do Laravel.
  - database/: Migrations e seeders do banco de dados.
  - public/: Arquivos públicos acessíveis pelo navegador.
  - resources/: Views, assets front-end, e arquivos de tradução.
  - routes/: Arquivos de definição de rotas.
  - storage/: Arquivos gerados pela aplicação, como logs e uploads.
  - tests/: Testes automatizados.
  - vendor/: Bibliotecas de terceiros instaladas via Composer.

## Licença
Este projeto está licenciado sob a Licença MIT.

## Contato
Nome: Josemar Silvestre\n
Email: josimarsilvestre16@gmail.com