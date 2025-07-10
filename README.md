# jump_park_api
 teste-praticojumppark API

Teste prático:


O que eu consegui fazer
Estruturei o projeto Laravel para criar uma API REST que deveria gerenciar ordens de serviço.

Criei os modelos (User e ServiceOrder) para representar as tabelas do banco de dados.

Escrevi o controller com os métodos para criar e listar ordens de serviço, incluindo a validação básica dos dados.

Defini as rotas da API para as operações de criação e listagem.

Preparei testes automatizados com Pest para validar o comportamento da criação da ordem.

Próximos passos para finalizar
Ajustar o ambiente PHP e habilitar extensões necessárias.

Criar o banco de dados jump_park e importar as tabelas (ou rodar as migrations).

Ajustar as configurações do Laravel para rodar localmente sem erros.

Rodar os testes automatizados para garantir que tudo funcione corretamente.

Testar os endpoints com ferramentas como Postman para garantir a comunicação correta via JSON.

Considerações finais
Apesar dos problemas técnicos, entreguei o código estruturado e pronto para funcionar em um ambiente devidamente configurado. Estou disponível para ajudar a ajustar o ambiente e finalizar a implementação.

Como fazer para rodar em um futuro:
Para rodar localmente: 

Instalar e garantir que o PHP (com as extensões necessárias, como pdo_mysql e fileinfo) e o MySQL estejam funcionando no meu computador.
Ter o banco de dados no MySQL, importando o arquivo SQL com a estrutura das tabelas, ou rodando as migrations do Laravel, caso existam.
Configurar o arquivo .env do Laravel com as informações corretas do banco (host, usuário, senha, nome do banco) e outras variáveis necessárias
Rodar o comando composer install para instalar as dependências do projeto.
Gerar a chave da aplicação com o comando php artisan key:generate.
Ajustar o driver de sessão para file ou database, dependendo do ambiente.
Rodar o servidor local do Laravel com php artisan serve (Atualmente ele está voltando com muitos erros, corrigidos alguns porém mantém).
Rodar os testes automatizados com Pest para garantir que a API está funcionando como esperado.
