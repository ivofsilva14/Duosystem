CREATE DATABASE duosystem;

CREATE TABLE status_atividade
(
	id_status_atividade INT(2) NOT NULL AUTO_INCREMENT,
	descricao VARCHAR(20) NOT NULL,

	PRIMARY KEY(id_status_atividade)
)
ENGINE = INNODB;

INSERT INTO status_atividade(id_status_atividade, descricao) VALUES (1,'Pendente'),(2,'Em Desenvolvimento'),(3,'Em Teste'),(4,'Concluído')

CREATE TABLE atividade
(
	id_atividade INT(4) NOT NULL AUTO_INCREMENT,
    	id_status_atividade INT(2) NOT NULL,
	nome VARCHAR(255) NOT NULL,
	descricao VARCHAR(600) NOT NULL,
	data_inicio DATE NOT NULL,
	data_fim DATE NULL,
	situacao BOOLEAN,

	PRIMARY KEY(id_atividade),
    	FOREIGN KEY(id_status_atividade) REFERENCES status_atividade(id_status_atividade)
)
ENGINE = INNODB;