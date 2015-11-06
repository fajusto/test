-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06-Nov-2015 às 17:57
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `cpf` varchar(250) NOT NULL,
  `birthday` date NOT NULL,
  `Is_active` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`firstName`, `lastName`, `email`, `cpf`, `birthday`, `Is_active`, `id`) VALUES
('FabrÃ­cio', 'Justo', 'fabriciosjjb@gmail.com', '39065395806', '0000-00-00', 0, 1),
('FabrÃ­cio', 'Justo', 'fabriciosjjb@gmail.com', '39065395806', '1992-12-16', 0, 2),
('Bruna', 'Souza', 'bruba2012catieli@gmail.com', '22255566622', '1993-08-01', 0, 3),
('Bruna', 'Souza', 'bruba2012catieli@gmail.com', '22255566622', '1993-08-01', 0, 4),
('Mauricio', 'Justo', 'mauricio.justo@gmail.com', '22255566622', '1993-08-01', 0, 5),
('Leila', 'Justo', 'mauricio.justo@gmail.com', '22255566622', '1993-08-01', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
