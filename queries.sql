Funcionario ->

CREATE TABLE funcionario(
	funId int NOT NULL AUTO_INCREMENT,
	funNome varchar(50),
	funEnd varchar(70),
	funEmail varchar(50),
	funNasc DATE,
	funCelular int(11),
	funRg int(11),
	funCpf int(11),
	funDataCadastro DATE,
	funUser varchar(90),
	funPass varchar(90),
	PRIMARY KEY (funId)
);

CLIENTE ->

CREATE TABLE Cliente(
	cliID int NOT NULL AUTO_INCREMENT,
	cliNome varchar(50),
	cliEnd varchar(70),
	cliEmail varchar(11),
	cliNasc DATE,
	cliCel int(11),
	cliRg int(11),
	cliCpf int(11),
	cliDataCadastro DATE,
	PRIMARY KEY (cliId)
);

Produtos ->

CREATE TABLE produto(
	proID int NOT NULL AUTO_INCREMENT,
	proNome varchar(50),
	proPreco numeric(9.2),
	proDescri varchar(50),
	proCategoria varchar(50),
	PRIMARY KEY (proId)
);