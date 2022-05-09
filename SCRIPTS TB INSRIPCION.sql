SELECT * FROM u130154501_CASYS_2022_20.tb_grados;
USE u130154501_CASYS_2022_20;

CREATE TABLE TB_FORMAS_DE_PAGO(
ID_F_PAGO INT PRIMARY KEY AUTO_INCREMENT,
DESCRIPCION NVARCHAR(100)NOT NULL,
ESTADO INT
);

INSERT INTO TB_FORMAS_DE_PAGO(DESCRIPCION,ESTADO) VALUES('TOTAL',1);
INSERT INTO TB_FORMAS_DE_PAGO(DESCRIPCION,ESTADO)  VALUES('CUOTAS',1);

CREATE TABLE TB_TIPOS_DE_PAGO(
ID_T_D_PAGO INT PRIMARY KEY AUTO_INCREMENT,
DESCRIPCION NVARCHAR(50) NOT NULL,
ESTADO INT
);

INSERT INTO TB_TIPOS_DE_PAGO(DESCRIPCION,ESTADO)  VALUES('EFECTIVO',1);
INSERT INTO TB_TIPOS_DE_PAGO(DESCRIPCION,ESTADO)  VALUES('TRASFERENCIA',1);
INSERT INTO TB_TIPOS_DE_PAGO(DESCRIPCION,ESTADO)  VALUES('TARJETA (COLEGIO)',1);
INSERT INTO TB_TIPOS_DE_PAGO(DESCRIPCION,ESTADO)  VALUES('PAGO EN LINEA',0);

CREATE TABLE TB_PRE_INS(
ID_PRE INT PRIMARY KEY AUTO_INCREMENT,
NOMBRE_ES VARCHAR(150) NOT NULL,
FEC_NAC DATE NOT NULL,
GENERO VARCHAR(50)  NOT NULL,
CUI_ES VARCHAR(16) NOT NULL,
CODIGO_PER VARCHAR(20) NOT NULL,
NACIONALIDAD_ES VARCHAR(75) NOT NULL,
LUGAR_NAC_ES VARCHAR(75) NOT NULL,
CELULAR_ES VARCHAR(20) NOT NULL,
DIRECCION_RES_ES VARCHAR(150) NOT NULL,
RELIGION_ES VARCHAR(50) NOT NULL,
NOMBRE_ENCARGADO_ES VARCHAR(150) NOT NULL,
FEC_NAC_EN_ES DATE,
DPI_EN_ES VARCHAR(16) NOT NULL,
EXTENDIDO_DPI_EN_ES VARCHAR(75) NOT NULL,
ESTADO_CIVIL_EN_ES VARCHAR(30) NOT NULL,
DIRECCION_EN_ES VARCHAR(150) NOT NULL,
TEL_EN_ES VARCHAR(20) NOT NULL,
CEL_EN_ES VARCHAR(20) NOT NULL,
CORREO_EN_ES VARCHAR(20) NOT NULL,
RELIGION_EN_ES VARCHAR(20) NOT NULL,
GRADO_ING_ES INT,
ESTADO_PAGO INT,
TIPO_PAGO INT,
FORMA_PAGO INT,
ESTADO_PRE_INS INT,
FECHA_REGISTRO TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FECHA_CAMBIOS_REG  DATETIME
);

ALTER TABLE TB_PRE_INS
ADD FOREIGN KEY (GRADO_ING_ES) REFERENCES tb_grados(ID_GR);
ALTER TABLE TB_PRE_INS
ADD FOREIGN KEY (TIPO_PAGO) REFERENCES TB_TIPOS_DE_PAGO(ID_T_D_PAGO);
ALTER TABLE TB_PRE_INS
ADD FOREIGN KEY (FORMA_PAGO) REFERENCES TB_FORMAS_DE_PAGO(ID_F_PAGO);

CREATE TABLE TB_PAGOS_INSCRIPCIONES(
ID_PAGO_INSCRIPCION INT PRIMARY KEY AUTO_INCREMENT,
DES_BOLETA NVARCHAR(50) NOT NULL,
CANTIDAD_PAGOS FLOAT,
MONTO_PAGO FLOAT,
PAGO_PARCIAL FLOAT,
MONTO_PENDIENTE FLOAT,
FECHA_PAGO DATETIME,
FECHA_ACTUALIZACION DATETIME,
ID_PRE_INSCRIPCION INT
);
ALTER TABLE TB_PAGOS_INSCRIPCIONES
ADD FOREIGN KEY (ID_PRE_INSCRIPCION) REFERENCES TB_PRE_INS(ID_PRE);

CREATE TABLE TB_NIVEL_ACADEMICO(
ID_NIVEL INT PRIMARY KEY auto_increment,
DESCRIPCION VARCHAR(50),
ESTADO INT
);
INSERT INTO TB_NIVEL_ACADEMICO(DESCRIPCION,ESTADO) VALUES('PRE-PRIMARIA',1);
INSERT INTO TB_NIVEL_ACADEMICO(DESCRIPCION,ESTADO)  VALUES('PRIMARIA',1);
INSERT INTO TB_NIVEL_ACADEMICO(DESCRIPCION,ESTADO) VALUES('BASICOS',1);
INSERT INTO TB_NIVEL_ACADEMICO(DESCRIPCION,ESTADO)  VALUES('DIVERSIFICADO',1);

CREATE TABLE TB_PROCESO_PAGO(
ID_PROCESO_P INT PRIMARY KEY auto_increment,
DESCRIPCION VARCHAR(50),
ESTADO INT
);
INSERT INTO TB_PROCESO_PAGO(DESCRIPCION,ESTADO) VALUES('MENSUALIDAD',1);
INSERT INTO TB_PROCESO_PAGO(DESCRIPCION,ESTADO)  VALUES('INSCRIPCION',1);
INSERT INTO TB_PROCESO_PAGO(DESCRIPCION,ESTADO)  VALUES('RECUPERACION',1);

CREATE TABLE TB_PRECIOS_GRADOS_INS(
ID_PRE_GRA_INS INT PRIMARY KEY auto_increment,
ID_GRADO INT,
ID_PRO_PAGO INT,
MONTO FLOAT,
FECHA_REGISTRO DATETIME,
FECHA_ACTULIZACION DATETIME
);
ALTER TABLE TB_PRECIOS_GRADOS_INS
ADD FOREIGN KEY (ID_GRADO) REFERENCES tb_grados(ID_GR);
/*ALTER TABLE TB_PRECIOS_GRADOS_INS
ADD FOREIGN KEY (ID_NIVEL) REFERENCES TB_NIVEL_ACADEMICO(ID_NIVEL);*/
ALTER TABLE TB_PRECIOS_GRADOS_INS
ADD FOREIGN KEY (ID_PRO_PAGO) REFERENCES TB_PROCESO_PAGO(ID_PROCESO_P);

/*Llave foranea para la tabla tb grados en el campo nivel_academico*/
ALTER TABLE tb_grados
ADD FOREIGN KEY (NIVEL_ACADEMICO) REFERENCES TB_NIVEL_ACADEMICO(ID_NIVEL);