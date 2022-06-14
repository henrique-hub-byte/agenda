set SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
set time_zone = "+00:00";

CREATE TABLE `agendas` (
  `codigo` int (11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  `email` varchar(45) NOT NULL,
  `email` varchar(15) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1

--
-- Fazendo dump de dados para tabela `agenda`
--


INSERT INTO `agendas` (`codigo`, `nome`, `sexo`, `email`, `telefone`, `obs`) VALUES (1, 'teste teste', 'M', 'teste@teste.com.br', '(041) 9876-5432', 'nenhum\r\n');

ALTER TABLE `agendas` ADD PRIMARY KEY (`codigo`);


ALTER TABLE `agendas` MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,  AUTO_INCREMENT=2;