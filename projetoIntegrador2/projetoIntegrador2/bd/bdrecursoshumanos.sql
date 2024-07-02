-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jul-2024 às 15:50
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdrecursoshumanos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbancotalentos`
--

CREATE TABLE `tbbancotalentos` (
  `id` int(11) NOT NULL,
  `dataCadastro` date NOT NULL DEFAULT current_timestamp(),
  `nome` varchar(60) NOT NULL,
  `idade` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `setor` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `anosExperiencia` int(11) NOT NULL,
  `notaEntrevista` int(11) NOT NULL,
  `avaliacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbbancotalentos`
--

INSERT INTO `tbbancotalentos` (`id`, `dataCadastro`, `nome`, `idade`, `email`, `telefone`, `cidade`, `setor`, `cargo`, `anosExperiencia`, `notaEntrevista`, `avaliacao`) VALUES
(3, '2024-07-02', 'Ana Silva', 18, 'ana.silva@gmail.com', '(11)98765-4321', 'São Paulo/SP', 'Setor de RH & DP', 'Analista', 0, 1, 'Sem novas observações'),
(4, '2024-07-02', 'Bruno Oliveira', 19, 'bruno.oliveira@gmail.com', '(21)91234-5678', 'Rio de Janeiro/RJ', 'Setor Administrativo', 'Gerente I', 0, 6, 'Sem novas observações'),
(5, '2024-07-02', 'Carolina Santos', 20, 'carolina.santos@gmail.com', '(31)99876-5432', 'Belo Horizonte/MG', 'Setor Operacional', 'Auxiliar', 0, 5, 'Sem novas observações'),
(6, '2024-07-02', 'Daniel Pereira', 21, 'daniel.pereira@gmail.com', '(51)98765-4321', 'Porto Alegre/RS', 'Setor Administrativo', 'Gerente II', 8, 8, 'Sem novas observações'),
(7, '2024-07-02', 'Eduardo Costa', 22, 'eduardo.costa@gmail.com', '(41)91234-5678', 'Curitiba/PR', 'Setor Estrategico', 'Analista', 1, 0, 'Sem novas observações'),
(8, '2024-07-02', 'Fernanda Almeida', 23, 'fernanda.almeida@gmail.com', '(71)99876-5432', 'Salvador/BA', 'Setor Estrategico', 'Pesquisador', 9, 5, 'Sem novas observações'),
(9, '2024-07-02', 'Gabriel Rodrigues', 24, 'gabriel.rodrigues@gmail.com', '(85)98765-4321', 'Fortaleza/CE', 'Setor Operacional', 'Auxiliar', 8, 9, 'Sem novas observações'),
(10, '2024-07-02', 'Helena Martins', 25, 'helena.martins@gmail.com', '(61)91234-5678', 'Brasília/DF', 'Setor Administrativo', 'Auxiliar', 1, 3, 'Sem novas observações'),
(11, '2024-07-02', 'Igor Fernandes', 26, 'igor.fernandes@gmail.com', '(81)99876-5432', 'Recife/PE', 'Setor Operacional', 'Auxiliar', 1, 8, 'Sem novas observações'),
(12, '2024-07-02', 'Juliana Lima', 27, 'juliana.lima@gmail.com', '(92)98765-4321', 'Manaus/AM', 'Setor Estrategico', 'Desenvolvedor', 5, 0, 'Sem novas observações'),
(13, '2024-07-02', 'Karen Souza', 28, 'karen.souza@gmail.com', '(91)91234-5678', 'Belém/PA', 'Setor de RH & DP', 'Analista', 0, 5, 'Sem novas observações'),
(14, '2024-07-02', 'Lucas Barbosa', 29, 'lucas.barbosa@gmail.com', '(62)99876-5432', 'Goiânia/GO', 'Setor de RH & DP', 'Auxiliar', 6, 8, 'Sem novas observações'),
(15, '2024-07-02', 'Mariana Araújo', 30, 'mariana.araújo@gmail.com', '(27)98765-4321', 'Vitória/ES', 'Setor Estrategico', 'Gerente', 7, 5, 'Sem novas observações'),
(16, '2024-07-02', 'Nelson Ribeiro', 31, 'nelson.ribeiro@gmail.com', '(48)91234-5678', 'Florianópolis/SC', 'Setor Operacional', 'Operador', 0, 9, 'Sem novas observações'),
(17, '2024-07-02', 'Olivia Dias', 32, 'olivia.dias@gmail.com', '(67)99876-5432', 'Campo Grande/MS', 'Setor de RH & DP', 'Entrevistador', 0, 5, 'Sem novas observações'),
(18, '2024-07-02', 'Pedro Gomes', 33, 'pedro.gomes@gmail.com', '(65)98765-4321', 'Cuiabá/MT', 'Setor Administrativo', 'Analista', 8, 8, 'Sem novas observações'),
(19, '2024-07-02', 'Raquel Carvalho', 34, 'raquel.carvalho@gmail.com', '(83)91234-5678', 'João Pessoa/PB', 'Setor Estrategico', 'Supervisor', 2, 2, 'Sem novas observações'),
(20, '2024-07-02', 'Samuel Teixeira', 35, 'samuel.teixeira@gmail.com', '(79)99876-5432', 'Aracaju/SE', 'Setor Operacional', 'Operador', 0, 5, 'Sem novas observações'),
(21, '2024-07-02', 'Tatiana Moreira', 36, 'tatiana.moreira@gmail.com', '(82)98765-4321', 'Maceió/AL', 'Setor de RH & DP', 'Entrevistador', 9, 5, 'Sem novas observações'),
(22, '2024-07-02', 'Victor Mendes', 37, 'victor.mendes@gmail.com', '(84)91234-5678', 'Natal/RN', 'Setor Administrativo', 'Coordenador', 1, 5, 'Sem novas observações'),
(23, '2024-07-02', 'Alice Ferreira', 38, 'alice.ferreira@gmail.com', '(86)99876-5432', 'Teresina/PI', 'Setor Estrategico', 'Coordenador', 1, 2, 'Sem novas observações'),
(24, '2024-07-02', 'Bernardo Nascimento', 39, 'bernardo.nascimento@gmail.com', '(98)98765-4321', 'São Luís/MA', 'Setor Administrativo', 'Coordenador', 6, 0, 'Sem novas observações'),
(25, '2024-07-02', 'Clara Azevedo', 40, 'clara.azevedo@gmail.com', '(63)91234-5678', 'Palmas/TO', 'Setor de RH & DP', 'Auxiliar', 5, 3, 'Sem novas observações'),
(26, '2024-07-02', 'Diego Ramos', 41, 'diego.ramos@gmail.com', '(95)99876-5432', 'Boa Vista/RR', 'Setor Operacional', 'Operador', 7, 9, 'Sem novas observações'),
(27, '2024-07-02', 'Elisa Pinto', 42, 'elisa.pinto@gmail.com', '(96)98765-4321', 'Macapá/AP', 'Setor Operacional', 'Operador', 9, 0, 'Sem novas observações'),
(28, '2024-07-02', 'Felipe Castro', 43, 'felipe.castro@gmail.com', '(69)91234-5678', 'Porto Velho/RO', 'Setor Estrategico', 'Desenvolvedor', 1, 8, 'Sem novas observações'),
(29, '2024-07-02', 'Giovana Correia', 44, 'giovana.correia@gmail.com', '(68)99876-5432', 'Rio Branco/AC', 'Setor Administrativo', 'Coordenador', 5, 7, 'Sem novas observações'),
(30, '2024-07-02', 'Henrique Melo', 45, 'henrique.melo@gmail.com', '(13)98765-4321', 'Santos/SP', 'Setor de RH & DP', 'Gerente', 9, 4, 'Sem novas observações'),
(31, '2024-07-02', 'Isabela Rocha', 46, 'isabela.rocha@gmail.com', '(19)91234-5678', 'Campinas/SP', 'Setor Administrativo', 'Coordenador', 5, 0, 'Sem novas observações'),
(32, '2024-07-02', 'João Duarte', 47, 'joão.duarte@gmail.com', '(21)99876-5432', 'Niterói/RJ', 'Setor Estrategico', 'Desenvolvedor', 2, 0, 'Sem novas observações'),
(33, '2024-07-02', 'Laura Vieira', 48, 'laura.vieira@gmail.com', '(34)98765-4321', 'Uberlândia/MG', 'Setor Operacional', 'Líder', 9, 3, 'Sem novas observações'),
(34, '2024-07-02', 'Marcelo Moraes', 49, 'marcelo.moraes@gmail.com', '(43)91234-5678', 'Londrina/PR', 'Setor de RH & DP', 'Supervisor', 4, 9, 'Sem novas observações'),
(35, '2024-07-02', 'Natália Cardoso', 50, 'natália.cardoso@gmail.com', '(47)99876-5432', 'Joinville/SC', 'Setor Estrategico', 'Analista', 3, 8, 'Sem novas observações'),
(36, '2024-07-02', 'Otávio Guimarães', 18, 'otávio.guimarães@gmail.com', '(15)98765-4321', 'Sorocaba/SP', 'Setor Administrativo', 'Assistente', 0, 3, 'Sem novas observações'),
(37, '2024-07-02', 'Patrícia Fonseca', 19, 'patrícia.fonseca@gmail.com', '(32)91234-5678', 'Juiz de Fora/MG', 'Setor Operacional', 'Líder', 0, 4, 'Sem novas observações'),
(38, '2024-07-02', 'Ricardo Cunha', 20, 'ricardo.cunha@gmail.com', '(16)99876-5432', 'Ribeirão Preto/SP', 'Setor de RH & DP', 'Coordenador', 0, 4, 'Sem novas observações'),
(39, '2024-07-02', 'Silvia Tavares', 21, 'silvia.tavares@gmail.com', '(54)98765-4321', 'Caxias do Sul/RS', 'Setor Operacional', 'Líder', 8, 3, 'Sem novas observações'),
(40, '2024-07-02', 'Thiago Pires', 22, 'thiago.pires@gmail.com', '(12)91234-5678', 'São José dos Campos/SP', 'Setor Estrategico', 'Analista', 8, 0, 'Sem novas observações'),
(41, '2024-07-02', 'Vanessa Monteiro', 23, 'vanessa.monteiro@gmail.com', '(11)99876-5432', 'Jundiaí/SP', 'Setor Administrativo', 'Assistente', 3, 4, 'Sem novas observações'),
(42, '2024-07-02', 'William Antunes', 24, 'william.antunes@gmail.com', '(14)98765-4321', 'Bauru/SP', 'Setor de RH & DP', 'Entrevistador', 1, 5, 'Sem novas observações');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbbancotalentos`
--
ALTER TABLE `tbbancotalentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbbancotalentos`
--
ALTER TABLE `tbbancotalentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
