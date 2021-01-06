create database windparty;
use windparty;




CREATE TABLE evento(
 id_evento int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome_evento varchar(50) NOT NULL,
 descricao_evento varchar(400) NOT NULL,
 qtd_pessoas int(11) NOT NULL,
 data_evento varchar(20) NOT NULL,
 pais varchar(30) NOT NULL,
 cep varchar(11) NOT NULL,
 estado varchar(2) NOT NULL,
 cidade varchar(30) NOT NULL,
 rua varchar(30) NOT NULL,
 bairro varchar(30) NOT NULL,
 numero int(11) NOT NULL
);



CREATE TABLE custos_fixos(
 id_custosfixos int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT UNIQUE,
 item varchar(30) NOT NULL,
 tipo_custos varchar(50) NOT NULL,
 preco float NOT NULL,
 quantidade int(11) NOT NULL,
 gasto_final float NOT NULL,
 obs varchar(50) NOT NULL
);


CREATE TABLE custos_variaveis(
 id_custos_variaveis int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome varchar(30) NOT NULL,
 tipo_produto varchar(50) NOT NULL,
 unidade int(11) NOT NULL,
 preco float NOT NULL,
 qtd_esperada int(11) NOT NULL,
 gasto_esperado float NOT NULL,
 qtd_total int(11) NOT NULL,
 gasto_final float NOT NULL,
 obsvar char(50) NOT NULL,
 id_custosfixos varchar(20) NOT NULL
);


CREATE TABLE mensagem(
 id_mensagem int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nome varchar(30) NOT NULL,
 email varchar(50) NOT NULL,
 tipo_mensagem varchar(20) NOT NULL,
 telefone varchar(24) NOT NULL,
 descricao varchar(1000) NOT NULL
);




CREATE TABLE receita(
 id_receita int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 item varchar(30) NOT NULL,
 preco float NOT NULL,
 qtd_esperada int(11) NOT NULL,
 qtd_vendida int(11) NOT NULL,
 receita_esperada float NOT NULL,
 obs varchar(50) NOT NULL
);



CREATE TABLE usuarios(
 id_usuario int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
 email varchar(100) NOT NULL,
 username varchar(20) NOT NULL,
 senha varchar(30) NOT NULL,
 nome varchar(50) NOT NULL,
 sobrenome varchar(50) NOT NULL,
 cpf varchar(14) NOT NULL,
 data_nasc varchar(10) NOT NULL,
 genero varchar(20) NOT NULL,
 telefone varchar(20) NOT NULL
);

--
-- Extraindo dados da tabelausuarios`
--
INSERT INTO usuarios(id_usuario,email,username,senha,nome,sobrenome,cpf,data_nasc,genero,telefone) VALUES
(1, 'jvccorsiferrera@hotmail.com', 'joao', '23', 'joão', 'ferreira', 2147483647, '0000-00-00', 'masculino', '2147483647'),
(2, '0', 'corsi', 'jvccorsi145', 'joao', 'ferreira', 2147483647, '0000-00-00', 'masculino', '2147483647'),
(3, '0', 'corsi', '12345', 'joão victor corsi', 'ferreira', 2147483647, '0000-00-00', 'masculino', '2147483647'),
(4, 'asdad@asda.com', 'a', 'a', 'aa', 'ferreira', 0, '0000-00-00', 'masculino', 0),
(5, 'jvccorsiferrerazzz22@hotmail.com', 'jvccorsi', 'jvccorsi145', 'João', 'ferreira', 2147483647, '0000-00-00', 'masculino', '2147483647'),
(6, 'jvccorsasdasiferrera@hotmail.com', 'asadsads', 'asdasda', 'plinio', 'fereira', 2147483647, '0000-00-00', 'masculino', '2147483647'),
(7, 'plinio_robert@hotmail.com', '1aaa', 'asdasd', 'plinio_robert', 'fereira', 1, '0000-00-00', 'masculino',' 2147483647');

