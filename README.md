# software-engineering-project
Repositório para o projeto final da disciplina de Engenharia de Software do curso de Ciência da Computação da Universidade Federal de Lavras.
# Descrição do Projeto
O sistema faz o controle da Imobiliária JLS. O gerente da imobiliária pode cadastrar, excluir e atualizar o banco de dados dos imóveis, dos proprietários e dos inquilinos. O inquilino pode consultar o histórico de aluguéis pagos. O usuário pode consultar imóveis vagos.
No sistema, as seguintes informações dos imóveis são armazenadas: tipo do imóvel (casa ou apartamento), endereço, proprietário e valor de aluguel. Para os proprietários, as seguintes informações são armazenadas: nome, CPF, telefone de contato e imóveis cuja propriedade são deles. Para os inquilinos, as seguintes informações são armazenadas: nome, CPF, telefone de contato e imóvel que alugou.
## Tecnologias Utilizadas
* [PHP](https://www.php.net/) - linguagem para o back-end
* [HTML](https://www.w3schools.com/html/) e [CSS](https://www.w3schools.com/css/) - linguagens para o front-end
* [Dia](http://dia-installer.de/) - ferramenta para criar diagramas
* [MariaBD](https://mariadb.org/) - banco de dados
* [XAMPP](https://www.apachefriends.org/pt_br/index.html) - servidor
## Estrutura de Diretórios
```
gerenciadorJLS
  -> docs
    -> documento-requisitos.pdf
    -> diagrama-classe.png
    -> diagrama-sequencia.png
  -> src
    -> view
    -> controller
    -> model
    -> persistence
```
