CREATE TABLE usuario (
    id_usuario int AUTO_INCREMENT PRIMARY KEY,
    email varchar(255) NOT NULL,
    senha varchar(255) NOT NULL,
    data_cadastro datetime,
    data_modificado datetime
);

INSERT INTO usuario(email, senha) VALUES ('gubartz@ifsp.edu.br', '');
INSERT INTO usuario(email, senha) VALUES ('stefanie@ifsp.edu.br', '');

CREATE TABLE curso(
	id_curso int AUTO_INCREMENT PRIMARY KEY,
	descricao varchar(1000) NOT NULL
);

INSERT INTO curso(descricao) VALUES ('Técnico em Informática');
INSERT INTO curso(descricao) VALUES ('Técnico em Fabricação Mecânica');
INSERT INTO curso(descricao) VALUES ('Técnico em Eletroeletrônica');
INSERT INTO curso(descricao) VALUES ('Análise de Sistemas');

CREATE TABLE disciplina(
	id_disciplina int AUTO_INCREMENT PRIMARY KEY,
	sigla varchar(20) NOT NULL,
	descricao varchar(1000) NOT NULL,
	id_curso int NOT NULL,
	FOREIGN KEY (id_curso) REFERENCES curso(id_curso)
);

INSERT INTO disciplina(sigla, descricao, id_curso) VALUES ('INGT2', 'Inglês Instrumental', 1);
INSERT INTO disciplina(sigla, descricao, id_curso) VALUES ('INIE1', 'Inglês Instrumental', 3);

CREATE table professor(
	id_professor int AUTO_INCREMENT PRIMARY KEY,
	nome varchar(1000) NOT NULL,
	prontuario varchar(50) NOT NULL,
	id_usuario int,
	FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

INSERT INTO professor(nome, prontuario, id_usuario) VALUES ('Gustavo', '123900', 1);
INSERT INTO professor(nome, prontuario, id_usuario) VALUES ('Stefanie', '1234', 2);

CREATE TABLE turma(
	id_turma int AUTO_INCREMENT PRIMARY KEY,
	id_disciplina int NOT NULL,
	id_professor int NOT NULL,
	semestre int,
	ano int,
	FOREIGN KEY (id_disciplina) REFERENCES disciplina(id_disciplina),
	FOREIGN KEY (id_professor) REFERENCES professor(id_professor)
);

INSERT INTO turma(id_disciplina, id_professor, semestre, ano) VALUES (1, 1, '201502', '2015');

CREATE TABLE aluno(
	id_aluno int AUTO_INCREMENT PRIMARY KEY,
	prontuario varchar(50) NOT NULL,	
	nome varchar(1000) NOT NULL,
	id_usuario int,
	FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)	
);

INSERT INTO aluno(prontuario, nome) VALUES ('12345', 'Pablo');

CREATE TABLE aluno_turma(
	id_aluno int,
	id_turma int,
	PRIMARY KEY (id_aluno, id_turma),
	FOREIGN KEY(id_aluno) REFERENCES aluno(id_aluno),
	FOREIGN KEY(id_turma) REFERENCES turma(id_turma)
);

INSERT INTO aluno_turma(id_aluno, id_turma) VALUES (1, 1);

CREATE TABLE idioma(
	id_idioma int AUTO_INCREMENT PRIMARY KEY,
	descricao varchar(1000) NOT NULL
);

INSERT INTO idioma(descricao) VALUES ('Português');
INSERT INTO idioma(descricao) VALUES ('Inglês');
INSERT INTO idioma(descricao) VALUES ('Alemão');

CREATE TABLE palavra(
	id_palavra int AUTO_INCREMENT PRIMARY KEY,
	texto varchar(4000) NOT NULL,
	id_idioma int NOT NULL,
	id_aluno int NOT NULL,
	id_turma int NOT NULL,
	data_cadastro datetime,
	FOREIGN KEY(id_idioma) REFERENCES idioma(id_idioma),
	FOREIGN KEY(id_aluno, id_turma) REFERENCES aluno_turma(id_aluno, id_turma)
);

INSERT INTO palavra(texto, id_idioma, id_aluno, id_turma) VALUES ('Carro', 1, 1, 1);
INSERT INTO palavra(texto, id_idioma, id_aluno, id_turma) VALUES ('Car', 2, 1, 1);
INSERT INTO palavra(texto, id_idioma, id_aluno, id_turma) VALUES ('Auto', 3, 1, 1);

CREATE TABLE glossario(
	id_palavra1 int,
	id_palavra2 int,
	PRIMARY KEY(id_palavra1, id_palavra2),
	FOREIGN KEY(id_palavra1) REFERENCES palavra(id_palavra),
	FOREIGN KEY(id_palavra2) REFERENCES palavra(id_palavra)
);

INSERT INTO glossario VALUES (1, 2);
INSERT INTO glossario VALUES (1, 3);