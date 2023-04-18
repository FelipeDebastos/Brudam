# Sistema de cadastro Brudam

Este é um aplicativo da web que permite que o usuário cadastre e exiba os pedidos cadastrados.

## Começando

Para começar a usar este aplicativo, siga estas etapas:

1. Clone este repositório em sua máquina local usando `git clone https://github.com/FelipeDebastos/Brudam.git`.

2. Navegue até o diretório do projeto usando `cd Brudam`.

3. Certifique-se de ter o PHP e o Composer instalados em sua máquina. Se você ainda não os tiver instalados, pode baixá-los usando `sudo apt install php` e `sudo apt-get install composer`.

4. Rode `composer install` na raiz do projeto.

5. Caso não tenha instale o docker `sudo apt-get install docker-ce docker-ce-cli containerd.io`.

6. Na pasta raiz do projeto, execute o seguinte comando para criar o container do banco de dados: `docker-compose up -d db`. Isso irá criar o container do banco de dados PostgreSQL e configurá-lo com as credenciais fornecidas no arquivo docker-compose.yml.

7. Para verificar se o container foi criado com sucesso, execute o comando: `docker ps`.

8. Execute o comando `php artisan serve` na raiz do projeto para iniciar o servidor. 

## Características

* Cadastre pedidos na plataforma.
* Veja um relatório de cadastros na plataforma.

## Tecnologias usadas

* PHP
* JAVASCRIPT
* LARAVEL
* BOOTSTRAP
* POSTGRESQL

## Licença

Este projeto está licenciado sob a licença MIT. Consulte o arquivo LICENSE.md para obter detalhes.
