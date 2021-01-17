CREATE DATABASE windparty;

CREATE TABLE evento(
 	id_evento INT NOT NULL AUTO_INCREMENT,
 	nome_evento VARCHAR(50) NOT NULL,
 	descricao_evento VARCHAR(400) NOT NULL,
 	qtd_pessoas INT NOT NULL,
 	data_evento DATE NOT NULL,
 	pais VARCHAR(30) NOT NULL,
 	cep VARCHAR(11) NOT NULL,
 	estado VARCHAR(2) NOT NULL,
 	cidade VARCHAR(30) NOT NULL,
 	rua VARCHAR(80) NOT NULL,
 	bairro VARCHAR(80) NOT NULL,
 	numero INT NOT NULL,
	PRIMARY KEY(id_evento)
);

CREATE TABLE custos_fixos(
 	id_custos_fixos INT NOT NULL AUTO_INCREMENT,
	id_evento INT NOT NULL,
 	item VARCHAR(30) NOT NULL,
 	tipo_custos VARCHAR(50) NOT NULL,
 	preco DECIMAL(10,2) NOT NULL,
 	quantidade INT NOT NULL,
 	gasto_final DECIMAL(10,2) NOT NULL,
 	obs VARCHAR(50) NOT NULL,
	PRIMARY KEY(id_custos_fixos),
	FOREIGN KEY (id_evento) REFERENCES evento(id_evento)
);


CREATE TABLE custos_variaveis(
 	id_custos_variaveis INT NOT NULL AUTO_INCREMENT,
	id_evento INT NOT NULL,
 	nome VARCHAR(30) NOT NULL,
 	tipo_produto VARCHAR(50) NOT NULL,
 	unidade VARCHAR(20) NOT NULL,
 	preco DECIMAL(10,2) NOT NULL,
 	qtd_esperada INT NOT NULL,
 	gasto_esperado DECIMAL(10,2) NOT NULL,
 	obs VARCHAR(50) NOT NULL,
	PRIMARY KEY(id_custos_variaveis),
	FOREIGN KEY (id_evento) REFERENCES evento(id_evento)

);


CREATE TABLE mensagem(
 	id_mensagem INT NOT NULL AUTO_INCREMENT,
 	nome VARCHAR(30) NOT NULL,
 	email VARCHAR(50) NOT NULL,
 	tipo_mensagem VARCHAR(20) NOT NULL,
 	telefone VARCHAR(24) NOT NULL,
 	descricao VARCHAR(1000) NOT NULL,
	PRIMARY KEY(id_mensagem)
);


CREATE TABLE receita(
 	id_receita INT NOT NULL AUTO_INCREMENT,
	id_evento INT NOT NULL,
 	item VARCHAR(30) NOT NULL,
 	preco DECIMAL(10,2) NOT NULL,
 	qtd_esperada INT NOT NULL,
 	qtd_vendida INT NOT NULL,
 	receita_esperada DECIMAL(10,2) NOT NULL,
 	obs VARCHAR(50) NOT NULL,
	PRIMARY KEY(id_receita),
	FOREIGN KEY (id_evento) REFERENCES evento(id_evento)
);


CREATE TABLE usuarios(
 	id_usuario INT NOT NULL AUTO_INCREMENT ,
 	email VARCHAR(100) NOT NULL,
 	username VARCHAR(20) NOT NULL,
 	senha VARCHAR(30) NOT NULL,
 	nome VARCHAR(50) NOT NULL,
 	sobrenome VARCHAR(50) NOT NULL,
 	cpf VARCHAR(14) NOT NULL,
 	data_nasc DATE NOT NULL,
 	genero VARCHAR(20) NOT NULL,
 	telefone VARCHAR(20) NOT NULL,
	PRIMARY KEY(id_usuario)
);
