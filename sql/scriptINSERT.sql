INSERT INTO
	categoria
	(tipo_categoria)

VALUES
	('Camiseta'),
	('Moleton'),
	('Regata');

-- --------------------------------------------------------------------

INSERT INTO
	produto
	(id_categoria,	nome,						valor_produto,	estoque,	tamanho)

	VALUES
	('1',			'Camiseta Avengers|Thor',	49.95,			55,			'P'),
	('1',			'Camiseta Avengers|Thor',	49.95,			40,			'M'),
	('1',			'Camiseta Avengers|Thor',	49.95,			30,			'G'),
	('1',			'Camiseta Avengers|Thor',	49.95,			10,			'GG'),
	('2',			'Moleton Avengers|Thor',	149.95,			80,			'P'),
	('2',			'Moleton Avengers|Thor',	149.95,			65,			'M'),
	('2',			'Moleton Avengers|Thor',	149.95,			35,			'G'),
	('2',			'Moleton Avengers|Thor',	149.95,			20,			'GG'),	
	('3',			'Regata Avengers|Thor',		35.00,			100,		'P'),
	('3',			'Regata Avengers|Thor',		35.00,			55,			'M'),
	('3',			'Regata Avengers|Thor',		35.00,			45,			'G'),
	('3',			'Regata Avengers|Thor',		35.00,			25,			'GG'),
	
	('1',			'Camiseta GoT|Jon Snow',	49.95,			65,			'P'),
	('1',			'Camiseta GoT|Jon Snow',	49.95,			140,		'M'),
	('1',			'Camiseta GoT|Jon Snow',	49.95,			30,			'G'),
	('1',			'Camiseta GoT|Jon Snow',	49.95,			15,			'GG'),
	('2',			'Moleton GoT|Jon Snow',		149.95,			70,			'P'),
	('2',			'Moleton GoT|Jon Snow',		149.95,			60,			'M'),
	('2',			'Moleton GoT|Jon Snow',		149.95,			55,			'G'),
	('2',			'Moleton GoT|Jon Snow',		149.95,			15,			'GG'),	
	('3',			'Regata GoT|Jon Snow',		35.00,			110,		'P'),
	('3',			'Regata GoT|Jon Snow',		35.00,			85,			'M'),
	('3',			'Regata GoT|Jon Snow',		35.00,			35,			'G'),
	('3',			'Regata GoT|Jon Snow',		35.00,			20,			'GG'),

	('1',			'Camiseta Seu Madruga',		49.95,			45,			'P'),
	('1',			'Camiseta Seu Madruga',		49.95,			80,			'M'),
	('1',			'Camiseta Seu Madruga',		49.95,			30,			'G'),
	('1',			'Camiseta Seu Madruga',		49.95,			10,			'GG'),
	('2',			'Moleton Seu Madruga',		149.95,			200,		'P'),
	('2',			'Moleton Seu Madruga',		149.95,			35,			'M'),
	('2',			'Moleton Seu Madruga',		149.95,			15,			'G'),
	('2',			'Moleton Seu Madruga',		149.95,			05,			'GG'),	
	('3',			'Regata Seu Madruga',		35.00,			30,			'P'),
	('3',			'Regata Seu Madruga',		35.00,			35,			'M'),
	('3',			'Regata Seu Madruga',		35.00,			15,			'G'),
	('3',			'Regata Seu Madruga',		35.00,			00,			'GG');
	
-- --------------------------------------------------------------------
	
INSERT INTO
	formaPagamento
	(descricao_fp,			tipo_fp)

	VALUES
	('A Vista',				'Boleto'),
	('A Vista',				'Cartao|Debito'),
	('A Vista',				'Cartao|Credito'),
	('2x',					'Parcelado'),
	('3x',					'Parcelado'),
	('4x',					'Parcelado'),
	('5x',					'Parcelado'),
	('6x',					'Parcelado'),
	('7x',					'Parcelado'),
	('8x',					'Parcelado'),
	('9x',					'Parcelado'),
	('10x',					'Parcelado'),
	('11x',					'Parcelado'),
	('12x',					'Parcelado');

-- --------------------------------------------------------------------

INSERT INTO usuario
	(tipo_usuario,	nome,				login,				senha,		cpf,			 email,								data_nascimento,	tel_celular,	tel_fixo)

	VALUES
	('ADM',			'João Gilberto',	'joao.gilberto',	'231181',	'03862796400',	'joaogilberto_ns@yahoo.com.br',		'1981-11-23',		'081992474650',	'08134320554'),
	('CLI',			'Anderson Barbosa', 'anderson.barbosa', '123456',	'33448005070',	'anderson.barbosa@hotmail.com',		'1990-02-15',		'081988754622', ''),
	('CLI',			'Bruno Silva',		'bruno.silva',		'123456',	'07185826080',	'bruno.silva@hotmail.com',			'1992-05-26',		'081986754341', '08132567849'),  
	
	('CLI',			'Carol Santos',		'carol.santos',		'123456',	'76143450021',	'carol.santos@hotmail.com',			'1993-10-03',		'068986292074', '06834758986'),
	
	('CLI',			'Danielle Diniz',	'daniella.diniz',	'123456',	'44995117040',	'daniella.diniz@hotmail.com',		'1987-12-25',		'083985457123', '08334758969'),
	('CLI',			'Filipe Cardoso',	'filipe.cardoso',	'123456',	'47436487000',	'filipe.cardoso@hotmail.com',		'1980-06-13',		'083988457316', ''),
	('CLI',			'Marcelo Augusto',	'marcelo.augusto',	'123456',	'71737030004',	'marcelo.augusto@hotmail.com',		'1975-06-02',		'083997865892', '08332245510'),

	('CLI',			'Felipe Melo',		'filipe.melo',		'123456',	'38845293076',	'filipe.melo@hotmail.com',			'1965-02-22',		'021988458421', '02133025418'),
	('CLI',			'José Jair',		'jose.jair',		'123456',	'69224538088',	'jose.jair@hotmail.com',			'2000-11-30',		'021997896542', ''),
	
	('CLI',			'Maria Eugênia',	'maria.eugenia',	'123456',	'08718177050',	'geninha@google.com',				'1999-02-28',		'064988666621', '06433234518'),
	('CLI',			'Leandro Amoroso',	'leandrinho',		'123456',	'57484661040',	'leandrinho@bol.com.br',			'2005-12-14',		'064997890542', '06435678120'),

	('CLI',			'Marcela Júlia',	'marcelinha',		'123456',	'06671562083',	'marcy@uol.com.br',					'2001-01-01',		'049988666621', ''),
	('CLI',			'Xuxa Scarlet',		'xuxinha',			'123456',	'51728859000',	'xuxa.scarlet@hotmail.com',			'1975-12-14',		'048912450542', '04832222120'),
	
	('CLI',			'Joana Maranhão',	'joana.mara',		'123456',	'13609487089',	'joana.mara@gmail.com',				'1980-02-25',		'053995292011', '');


-- --------------------------------------------------------------------

INSERT INTO
	endereco
	(id_usuario,	logradouro,			numero,	cidade,				bairro,				estado,	cep,		complemento,		referencia)
	
	VALUES
	(1,				'E. Bonsucesso',	114,	'Olinda',			'Bonsucesso',		'PE',	53240150,	'',					'Sede do Homem da meia noite'),
    (2,				'Alameda 02',		782,	'Jaboatão',			'Prazeres',			'PE',	55210489,	'',					'Padaria Santiago'),
	(3,				'Avenida Sul',		512,	'Recife',			'Ipsep',			'PE',	51330759,	'',					'Otica Diniz'),
	
	(4,				'Rua Acácias',		752,	'Centro',			'Porto Acre',		'AC',	69927000,	'',					'Posto de saúde'),
	
	(5,				'R. das Flores',	227,	'João Pessoa',		'Varadouro',		'PB',	58010130,	'Casa',				''),
	(6,				'Travessa do Pó',	120,	'João Pessoa',		'Cordão Encantado',	'PB',	58010240,	'',					'Dona Zefa'),
	(7,				'Rua do Doido',		56,		'João Pessoa',		'Américo Paiva',	'PB',	58010130,	'',					'Bar do Monga'),	 
	
	(8,				'Anita Garibaldi',	333,	'Rio de Janeiro',	'Copacabana',		'RJ',	22041080,	'Mansão',			'Favela do Bode'),
	(9,				'Rua Assis Brasil',	325,	'Rio de Janeiro',	'Copacabana',		'RJ',	22030010,	'Barraco 50',		'Casa do Zé Pequeno'),	 
	
	(10,			'Quadra 06',		110,	'Cocalzinho',		'Girassol',			'GO',	72975000,	'Apt 101',			''),
	(11,			'Rua 01',			100,	'Alto Paraiso',		'Novo Horizonte',	'GO',	73770000,	'Quadra 01',		'Julia Pan'),	

	(12,			'Servidão 1',		420,	'Barranca',			'Araranguá',		'SC',	88900384,	'Apt 101',			''),
	(13,			'Servidão 1',		630,	'Alto Feliz',		'Novo Horizonte',	'SC',	88905078,	'Lot J B Silva',	''),
	
	(14,			'Acesso A',			630,	'Cavalhada',		'Porto Alegre',		'RS',	91740011,	'Prq Madepinho',	'');
	
-- --------------------------------------------------------------------

INSERT INTO
	pedido
	(id_usuario,	id_formaPagamento,	data_pedido,	data_entrega,	valor_pedido)

	VALUES
	(2,				1,					'2019-04-06',	'2019-05-15',	49.95),

	(3,				2,					'2019-05-02',	'2019-05-16',	99.90),

	(4,				12,					'2019-06-04',	NULL,			249.85),

	(5,				1,					'2019-06-03',	'2019-06-15',	149.85),
	
	(6,				3,					'2019-06-06',	NULL,			49.95),

	(7,				5,					'2019-03-26',	'2019-04-05',	99.90),

	(8,				8,					'2019-06-05',	NULL,			249.85),

	(9,				2,					'2019-05-20',	'2019-06-01',	149.85);

-- --------------------------------------------------------------------

INSERT INTO
	itenspedido
	(id_pedido,		id_produto,		quantidade,		valor_itens)

	VALUES
	(1,				2,				1,				49.95),



	(2,				13,				1,				49.95),
	(2,				27,				1,				49.95),

	(3,				25,				2,				99.90),
	(3,				31,				1,				149.95),

	(4,				1,				1,				49.95),
	(4,				13,				1,				49.95),
	(4,				25,				1,				49.95),

	(5,				2,				1,				49.95),



	(6,				13,				1,				49.95),
	(6,				27,				1,				49.95),

	(7,				25,				2,				99.90),
	(7,				31,				1,				149.95),

	(8,				1,				1,				49.95),
	(8,				13,				1,				49.95),
	(8,				25,				1,				49.95);