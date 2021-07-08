# projeto-arquitetura-PHP
criação de um projeto de um site sobre arquitetura com onde tem como meta a divulgação de redes-socias e projetos desenvolvidos pelo arquiteto. 
- cadastro de contatos 
   - Inclusão
    - Alteração
    - Exclusão

## tecnologias
 - html
 - css
 - javascript 
 - PHP
 - MYSQL
  
## SQL - Banco de dados
### Criação do banco de dados
```sql
 CREATE DATABASE bd_arquitetura CHARACTER SET utf8 COLLATE utf8_general_ci;
 ```
### Criação da tabela contatos
```sql
CREATE TABLE `bd_arquitetura`.`tb_arqcontatos` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(100) NOT NULL , `email` VARCHAR(20) NOT NULL , `telefone` VARCHAR(50) NOT NULL , `cidade` VARCHAR(50) NOT NULL, `assunto` VARCHAR(50) NOT NULL , `mensagem`VARCHAR(250) , PRIMARY KEY (`id`) )

```
### inserir valores na tabela 
```sql
INSERT INTO `tb_arqcontatos`(`nome`, `email`, `telefone`, `cidade`, `assunto`, `mensagem`) VALUES ('mv','gmail','999','sp','reforma','ola')