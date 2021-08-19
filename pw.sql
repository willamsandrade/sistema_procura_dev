-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Ago-2021 às 22:32
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dev`
--

CREATE TABLE `dev` (
  `idDev` int(11) NOT NULL,
  `nomeDev` varchar(25) NOT NULL,
  `sobreDev` varchar(150) NOT NULL,
  `emailDev` varchar(150) NOT NULL,
  `senhaDev` varchar(150) NOT NULL,
  `githubDev` varchar(150) NOT NULL,
  `idLang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dev`
--

INSERT INTO `dev` (`idDev`, `nomeDev`, `sobreDev`, `emailDev`, `senhaDev`, `githubDev`, `idLang`) VALUES
(84, 'Willams', 'Silva Andrade', 'wsa.juazeiro@gmail.com', '83683ced7fd9379cbbd1c206e99b7b15835e2362', 'willamsandrade', 1);

--
-- Acionadores `dev`
--
DELIMITER $$
CREATE TRIGGER `tr_dev_mensagem` BEFORE DELETE ON `dev` FOR EACH ROW DELETE FROM mensagem
       				WHERE mensagem.idDev = old.idDev
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lang`
--

CREATE TABLE `lang` (
  `idLang` int(11) NOT NULL,
  `descLang` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lang`
--

INSERT INTO `lang` (`idLang`, `descLang`) VALUES
(4, 'Javascript'),
(1, 'PHP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `idMensagem` int(11) NOT NULL,
  `idDev` int(11) NOT NULL,
  `nomeMensagem` varchar(250) NOT NULL,
  `emailMensagem` varchar(250) NOT NULL,
  `whatsappMensagem` varchar(20) NOT NULL,
  `mensagem` varchar(250) NOT NULL,
  `statusMensagem` tinyint(1) NOT NULL,
  `controleMensagem` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`idMensagem`, `idDev`, `nomeMensagem`, `emailMensagem`, `whatsappMensagem`, `mensagem`, `statusMensagem`, `controleMensagem`) VALUES
(30, 84, 'João', 'joao@joao.com', '(45) 45454-5454', 'asdfdsaf', 0, '1629404792');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dev`
--
ALTER TABLE `dev`
  ADD PRIMARY KEY (`idDev`),
  ADD UNIQUE KEY `emailDev` (`emailDev`),
  ADD KEY `fk_lang_dev` (`idLang`);

--
-- Índices para tabela `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`idLang`),
  ADD UNIQUE KEY `descLang` (`descLang`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`idMensagem`),
  ADD UNIQUE KEY `controleMensagem` (`controleMensagem`),
  ADD KEY `pk_mensagem_dev` (`idDev`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dev`
--
ALTER TABLE `dev`
  MODIFY `idDev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de tabela `lang`
--
ALTER TABLE `lang`
  MODIFY `idLang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `idMensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `dev`
--
ALTER TABLE `dev`
  ADD CONSTRAINT `fk_lang_dev` FOREIGN KEY (`idLang`) REFERENCES `lang` (`idLang`);

--
-- Limitadores para a tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `pk_mensagem_dev` FOREIGN KEY (`idDev`) REFERENCES `dev` (`idDev`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
