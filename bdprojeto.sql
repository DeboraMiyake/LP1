CREATE DATABASE bdprojeto;

CREATE TABLE tblogin(
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(90) NOT NULL,
  usuario VARCHAR(64) NOT NULL,
  senha VARCHAR(64) NOT NULL,
  perfil VARCHAR(30) NOT NULL
);

INSERT INTO `tblogin` (`id`, `nome`, `usuario`, `senha`, `perfil`) VALUES
(1, 'Débora Miyake', 'debora', 'e10adc3949ba59abbe56e057f20f883e', 'adm'),
(2, 'Anselmo Florentino ', 'anselmo', '202cb962ac59075b964b07152d234b70', 'adm'), --senha:anselmo
(3, 'Victor Pedro ', 'victor', '72eb3151e085d5af1be8b6e55634ff12', 'user'),
(4, 'Nina Barbosa', 'nina', 'f599c58f684c33fd93036c0b33e99d8f', 'user'),
(5, 'Babi Hipólito ', 'babi', '061ead02542f1c445d9f269b6346406d', 'user');


CREATE TABLE tbfuncionario (
  codigo INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(90) NOT NULL,
  sobrenome VARCHAR(90) NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  telefone VARCHAR(11) NOT NULL,
  endereco VARCHAR(50) NOT NULL,
  numero VARCHAR(5) NOT NULL,
  bairro VARCHAR(20) NOT NULL,
  cidade VARCHAR(20) NOT NULL,
  uf VARCHAR(2) NOT NULL,
  dtnasc DATE NOT NULL
);

INSERT INTO `tbfuncionario` (`codigo`, `nome`, `sobrenome`, `cpf`, `telefone`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `dtnasc`) VALUES
(1, 'Helena', 'Rodrigues', '52569871236', '11975869561', 'Rua Navarro de Andrade', '1580', 'Pinheiros', 'São Paulo', 'SP', '1996-08-02'),
(2, 'Tiago', 'Lima', '52684556589', '11978546464', 'Av Paulo Faccini', '1548', 'Jardim Maia', 'Guarulhos', 'SP', '1998-02-06'),
(3, 'Rafael', 'Santos', '31588989411', '11978546464', 'Rua Bélgica', '150A', 'Jardim Europa', 'São Paulo', 'SP', '1980-06-21'),
(4, 'Luiza', 'Junqueira', '38598547885', '11978545198', 'Rua Benjamim Egas ', '487', 'Pinheiros', 'São Paulo', 'SP', '1990-03-02'),
(5, 'Paula', 'Lins', '51489464245', '1158961985', 'Av. São Bento', '3025', 'Vila Galvão', 'Guarulhos', 'SP', '1960-08-20'),
(6, 'Ricardo', 'Morato', '51049852112', '11978545224', 'Rua Nino Rota', '669', 'Vila Dona Augusta', 'Guarulhos', 'SP', '1990-05-03'),
(7, 'Raquel', 'Santos', '35898451154', '11985211556', 'Rua Nassau', '856', 'Av Nova América', 'Guarulhos', 'SP', '1980-02-03'),
(8, 'Pedro', 'Gonçalves', '51048744548', '11975536544', 'Rua Pureus', '720', 'Jardim Guedala', 'São Paulo', 'SP', '1995-05-02');


CREATE TABLE tbcliente (
  codigo INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(90) NOT NULL,
  sobrenome VARCHAR(90) NOT NULL,
  cpf VARCHAR(11) NOT NULL,
  telefone VARCHAR(11) NOT NULL,
  dtnasc DATE NOT NULL,
  sexo VARCHAR(20) NOT NULL,
  endereco VARCHAR(50) NOT NULL,
  numero VARCHAR(5) NOT NULL,
  bairro VARCHAR(20) NOT NULL,
  cidade VARCHAR(20) NOT NULL,
  uf VARCHAR(2) NOT NULL
);

INSERT INTO `tbcliente` (`codigo`, `nome`, `sobrenome`, `cpf`, `telefone`, `dtnasc`, `sexo`, `endereco`, `numero`, `bairro`, `cidade`, `uf`) VALUES
(1, 'Karen', 'Nogueira', '51048987445', '11978544211', '1998-12-06', 'Feminino', 'Alameda das Roseiras', '668', 'Jardim Martins Silva', 'Guarulhos', 'SP'),
(2, 'Victor Pedro', 'Sousa', '34885988744', '11978545552', '2000-11-21', 'Masculino', 'Av. das Flores', '69', 'Jardim Amor', 'Guarulhos', 'SP'),
(3, 'Amanda', 'Camargo', '25488798544', '11978546621', '1996-07-03', 'Feminino', 'Rua Reinaldo César de Oliveira', '378', 'Jardim Las Vegas', 'Guarulhos', 'SP'),
(4, 'Fernanda', 'Ishikawa', '51048789665', '11985489665', '1985-05-21', 'Feminino', 'Rua Jurema', '458', 'Jardim Irene', 'Guarulhos', 'SP'),
(5, 'Victor', 'Kubota', '02789544788', '11989665441', '1998-03-15', 'Masculino', 'Rua Dois', '859B', 'Vila Bremen', 'Guarulhos', 'SP'),
(6, 'Lucas', 'Aranha', '51065897458', '11978541544', '1993-05-14', 'Masculino', 'Av Salgado Filho', '1760', 'Jardim Santa Mena', 'Guarulhos', 'SP'),
(7, 'Robson', 'Camargo', '51048215825', '11978564132', '1985-02-03', 'Masculino', 'Rua Capitão Cavalcanti', '', 'Vila Mariana', 'São Paulo', 'SP'),
(8, 'Luciana', 'Figueiredo', '48597746511', '11975641323', '1998-03-26', 'Feminino', 'Rua Queluz', '639', 'Jardim Paulista', 'São Paulo', 'SP'),
(9, 'Eduardo', 'Almeida', '65287748511', '11978541122', '1999-06-30', 'Masculino', 'Alameda Lorena', '1698', 'Jardim Paulista', 'São Paulo', 'SP'),
(10, 'Mariana', 'Barbosa', '51048987485', '11978541365', '1996-09-27', 'Feminino', 'Av. Guariba', '476', 'Cabuçu', 'Guarulhos', 'SP'),
(11, 'Mayara', 'Oliveira', '54879541145', '11978654133', '1997-02-03', 'Feminino', 'Rua Bernadino Veigas ', '3265', 'Jardim Adriana', 'Guarulhos', 'SP'),
(12, 'Bernardo', 'Teixeira', '54168974114', '11975445214', '1993-09-03', 'Masculino', 'Rua Uruguai', '6987', 'Parque Continental I', 'Guarulhos', 'SP'),
(13, 'Celia', 'Almeida', '12588778167', '11978146987', '1975-02-23', 'Feminino', 'Rua Três Fronteiras', '236', 'Jardim Betel', 'Guarulhos', 'SP'),
(14, 'Debora', 'Sousa', '51047996241', '11978545855', '1999-02-04', 'Feminino', 'Rua Barber Greene', '1085', 'Jardim Santa Clara', 'Guarulhos', 'SP');


CREATE TABLE tbproduto (
  codigo INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(90) NOT NULL,
  descricao VARCHAR(300),
  preco VARCHAR(10) NOT NULL,
  marca VARCHAR(30) NOT NULL,
  cor VARCHAR(40) NOT NULL,
  quantidade VARCHAR(30) NOT NULL,
  tamanho VARCHAR(30),
  material VARCHAR(20),
  altura VARCHAR(10)
);

INSERT INTO `tbproduto` (`codigo`, `nome`, `descricao`, `preco`, `marca`, `cor`, `quantidade`, `tamanho`, `material`, `altura`) VALUES
(1, 'Mocassim Feminino Coryn ', ' O Mocassim Feminino Coryn Mundial é o modelo indicado para você. Seu cabedal possui detalhes em pespontos, um visual bem elegante.', '69.00', 'Katarina Magalhães', 'Rosa claro', '30', '37,38', 'Sintético', '2'),
(2, 'Sapatilha Slipper Verniz Feminina', ' A Moleca apresenta a Sapatilha Moleca Slipper Verniz Feminina. Leve e super flexível, apresenta um estilo básico.', '39', 'Moleca ', 'Preta', '25', '36,37,38,39', 'Sintético', '0'),
(3, 'Mule Metal Bico Fino Feminino ', 'Mule Jelly Bean Metal II Bico Fino Feminino.', '39,99', 'Jelly Bean', 'Dourado', '15', '36,38', 'Sintético', '0'),
(4, 'Scarpin Salto Alto Tira', 'O Scarpin Griffe Salto Alto Tira tem como referência um estilo clássico, com bico redondo, levando um charme romântico.', '69,98', 'Griffe ', 'Bege', '3', '36', 'Couro', '8'),
(5, 'Sapatilha Laço Oncinha Feminina ', 'Sapatilha Jelly Bean Laço Animal Print Onça Feminina.', '44,45', 'Jelly Bean ', 'Onça', '36', '35,36,37,38,39', 'Camurça', '0'),
(6, 'Sapatênis Masculino', 'Sabe aquele tênis que combina com tudo? O Sapatênis Ecko Basic traz um design básico e versátil para você combinar com diversas peças diferentes.', '59,99', 'Ecko', 'Preto e Vermelho', '30', '39,40,41,42,43', 'Couro', '0'),
(7, 'Bota Couro Montana Masculina ', 'O inverno está aí e nada melhor do que uma bota confortável para aproveitar a estação. Por isso, aposte no estilo da Bota de Couro Montana.', '250,00', 'Kildare ', 'Preto', '20', '38,40,41,42,43', 'Couro', '2'),
(8, 'Tênis Logus Masculino ', 'O tênis Logus leva a energia do estilo esportivo ao visual masculino com o perfil versátil e cheio de personalidade.', '130,00', 'Collin ', 'Branco e Marinho', '15', '40,42,43,44', 'Couro', '0'),
(9, 'Sapato Social Masculino ', 'Trazendo um toque moderno para sua produção, o Sapato Social Pegada Masculino garante conforto em qualquer ocasião.', '165,00', 'Pegada ', 'Preto', '40', '38,39,40,42,43,44', 'Couro', '1'),
(10, 'Bota Cano Curto Salto Baixo Tiras Fivela Feminina ', 'A Bota Cano Curto Comfortflex Salto Baixo Tiras Fivela traz um design versátil que combina com os melhores looks. ', '100,00', 'Comfortflex ', 'Preto', '36', '35,36,37,38,39', 'Couro', '4'),
(11, 'ChineloListras Masculino -', '', '79,99', 'Reserva', 'Bege e Marrom', '3', '40,43', 'Sintético', '0'),
(12, 'Sapato Social Couro Básico Masculino ', 'O Sapato Social Walkabout é ideal para compor o visual em estilo clássico elegante. Desenvolvido em couro e design moderno.', '99,99', 'Walkabout ', 'Preto', '14', '38,39,43', 'Couro', '2'),
(13, 'Tênis Vision Nobuck Masculino ', 'Ideal para complementar o look esportivo em grande estilo, o Tênis Ferracini Vision Nobuck Masculino traz um toque clássico.', '365,00', 'Ferracini ', 'Preto', '50', '38,39,43,44', 'Têxtil e Sintético', '0'),
(14, 'Tênis Montecar Feminino', 'Autêntico, o Tênis Beira Rio Montecar Feminino garante conforto e destaca looks casuais inspirados na moda esportiva. ', '55,60', 'Beira Rio', 'Branco', '30', '33,34,35,36,38', 'Sintético', '0'),
(15, 'Bota Cano Curto Bico Fino Salto Grosso Feminina', 'Um toque clássico e fashion com a Bota Cano Curto Couro Jorge Bischoff Bico Fino Salto Grosso Feminina. ', '180,00', 'Jorge Bischoff ', 'Preto', '10', '34,35,36,38', 'Couro', '6'),
(16, 'Sandália Salto Grosso ', 'Sandália Griffe Salto Grosso Tiras Cruzadas Feminina ', '75,00', 'Griffe ', 'Azul Marinho', '5', '35,38', 'Couro', '8');


ALTER TABLE tblogin
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

