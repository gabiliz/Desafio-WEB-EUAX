# Desafio Web Developer EUAX
 
## Problema
Você precisa criar um cadastro de projetos com a data de início e data final para a entrega, esse projeto pode ter 1 ou N atividades que também precisam ser cadastradas com as datas de início e data de fim. Após ter feito todos os cadastros precisamos saber quantos % dos projetos já temos finalizados e também se o projeto terá atrasos ou não. Para saber a % de andamento do projeto deve ser considerado o número de atividades finalizadas e quantidade de atividades ainda sem finalizar. Para saber se o projeto terá atraso considere a maior data final das atividades e compare com a data final do projeto, se for maior que a data final, o projeto terminará com atrasos.

## Tecnologias utilizadas
- [MySql] (https://www.mysql.com/) 
- [PHP] (https://www.php.net/)
- [HTML] (https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [CSS] (https://developer.mozilla.org/pt-BR/docs/Web/CSS)

## Funcionamento
Assim que é acessado o programa, será encontrado um formulário onde a pessoa deverá prencheer o nome do Projeto e a data de início e fim dele, logo após o preenchimento o Projeto é cadastrado no banco de dados e segue para a página de cadastro de Atividade, onde também foi feito um formulário com opções de adicionar mais de uma Atividade e marcar se ela foi finalizada ou não. Assim que todo o cadastro é salvo, a pessoa será redirecionada a uma página onde foram feitas tabelas tanto de Projetos quanto de Atividades.

## Requisitos 

- [x] ID Projeto
- [x] Nome Projeto
- [x] Data Início
- [x] Data Fim
- [ ] % Completo
- [ ] Atrasado

- [x] ID Atividade
- [x] ID Projeto
- [x] Nome Atividade
- [x] Data Início
- [x] Data Fim
- [x] Finalizada?

> Infelizmente não foi possível fazer o calculo de porcentagem para ver se o projeto estava completo ou não e nem se estava atrasado.
