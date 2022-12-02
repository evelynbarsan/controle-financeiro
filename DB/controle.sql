-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Nov-2022 às 14:59
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `gastos`
--

DROP TABLE IF EXISTS `gastos`;
CREATE TABLE IF NOT EXISTS `gastos` (
  `lugar` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `Tipo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `pagamento` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `parcelas` decimal(3,0) DEFAULT NULL,
  `valor` decimal(50,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `gastos`
--

INSERT INTO `gastos` (`lugar`, `descricao`, `Tipo`, `pagamento`, `parcelas`, `valor`) VALUES
('loja', 'roupa', 'VestuÃ¡riob - Roupa, Sapato, bolsa e afins', 'cartÃ£o', '3', '38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
