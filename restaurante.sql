-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jul-2021 às 04:54
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `imagem` varchar(150) NOT NULL,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(35) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `imagem`, `titulo`, `subtitulo`, `descricao`, `link`) VALUES
(1, '26-06-2021-23-35-45-foto.png', 'Bem Vindo', 'Papitos - Gastro House', 'Venha conhecer o mais novo e agradável bar de Trindade.', 'http://www.google.com'),
(2, '22-03-2021-13-37-55-2.jpg', 'Venha Esperimentar', 'Nossas Massas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.', 'http://www.google.com'),
(3, '22-03-2021-13-39-00-3.jpg', 'Delicias', 'Carnes Nobres', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao_1` text NOT NULL,
  `descricao_2` text DEFAULT NULL,
  `descricao_3` text DEFAULT NULL,
  `author` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(150) NOT NULL,
  `palavras` varchar(200) NOT NULL,
  `url_titulo` varchar(100) NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `descricao_1`, `descricao_2`, `descricao_3`, `author`, `data`, `imagem`, `palavras`, `url_titulo`, `visitas`) VALUES
(2, 'Aprenda como fazer um cordeiro Assado', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remainim.', '25', '2021-03-22', '22-03-2021-14-49-44-lasanha.jpg', 'aprender a cozinhar, cozinhar cordeiro, cordeiro assado', 'aprenda-como-fazer-um-cordeiro-assado', 4),
(3, 'Fritas com Cheddar Assadas', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of LetraseLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.t sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ' Lorem Ipsum is simLorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '21', '2021-03-22', '22-03-2021-17-15-39-fritas.jpg', 'fritas, cheddar, assar', 'fritas-com-cheddar-assadas', 3),
(4, 'Novo Post teste', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '29', '2021-06-28', '28-06-2021-23-53-56-22-03-2021-17-15-39-fritas.jpg', 'aaaa', 'novo-post-teste', 0),
(5, 'Post Teste 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n ', '29', '2021-06-28', '28-06-2021-23-59-12-22-03-2021-17-15-39-fritas.jpg', 'jkasjkn', 'post-teste-2', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `nome`) VALUES
(1, 'Recepcionista'),
(3, 'Faxineira'),
(4, 'Manobrista'),
(5, 'Entregador'),
(9, 'Garçon'),
(10, 'Chef'),
(13, 'Administrador'),
(14, 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Bebidas'),
(2, 'Vinhos'),
(3, 'Porções'),
(4, 'Sanduíches'),
(5, 'Pizzas'),
(9, 'Carnes'),
(10, 'Peixes'),
(12, 'Prato Feito'),
(13, 'Sobremesas'),
(14, 'Massas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_img`
--

CREATE TABLE `categoria_img` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria_img`
--

INSERT INTO `categoria_img` (`id`, `nome`) VALUES
(1, 'Pratos'),
(3, 'Restaurante'),
(4, 'Drinks'),
(5, 'Ambiente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chef`
--

CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `especialidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chef`
--

INSERT INTO `chef` (`id`, `funcionario`, `facebook`, `instagram`, `linkedin`, `twitter`, `imagem`, `especialidade`) VALUES
(1, 13, 'https://www.google.com', 'https://www.google.com', '', '', '22-03-2021-17-45-27-chef-1.jpg', 'Massas'),
(3, 14, 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', '22-03-2021-17-20-18-chef-2.jpg', 'Sobremesas'),
(5, 16, 'https://www.google.com', '', 'https://www.google.com', 'https://www.google.com', '22-03-2021-17-49-10-chef-3.jpg', 'Peixes'),
(6, 17, '', '', '', '', '22-03-2021-17-49-48-chef-4.jpg', 'Saladas'),
(7, 18, '', '', '', '', '22-03-2021-17-50-22-chef-6.jpg', 'Entradas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `email`) VALUES
(1, 'Paula Silva', '(25) 55555-5555', 'paula@hotmail.com'),
(2, 'Marcelo Silva', '(45) 85554-4444', 'marcelo@hotmail.com'),
(3, 'Kamilah Souza', '(65) 95555-5555', 'kamila@hotmail.com'),
(5, 'Pedro Freitas', '(45) 54555-5555', 'pedro@hotmail.com'),
(6, 'Hugo Vasconcelos', '(55) 55555-5555', 'contato@hugocursos.com.br'),
(7, 'Marcos Silva', '(48) 88888-8888', 'hugovasconcelosf@hotmail.com'),
(8, 'Marcela Silva', '(59) 46666-6669', 'marcela@hotmail.com'),
(9, 'Jennifer Campos', '(58) 45665-5555', 'jeni@hotmail.com'),
(10, 'Jeff Silva', '(48) 56666-6666', 'jeff@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comentario` text NOT NULL,
  `post` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `email`, `comentario`, `post`, `data`, `hora`) VALUES
(8, 'Marcos Wesley', 'marcos.wesley@hotmail.com.br', 'Teste comentário', 2, '2021-06-28', '21:50:40'),
(11, 'Stephanie Rodrigues', 'marcos.wesley@hotmail.com.br', 'Lorem ipsum comentário', 2, '2021-06-28', '23:11:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `data` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `pago` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `total`, `data`, `usuario`, `fornecedor`, `pago`) VALUES
(4, '37.50', '2021-03-22', 21, 2, 'Não'),
(5, '2.00', '2021-03-22', 21, 2, 'Sim'),
(6, '80.00', '2021-03-22', 21, 2, 'Não'),
(7, '175.00', '2021-03-30', 29, 2, 'Não'),
(8, '110.00', '2021-03-30', 29, 2, 'Não'),
(9, '126.50', '2021-03-30', 29, 2, 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_pagar`
--

CREATE TABLE `contas_pagar` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `usuario` int(11) NOT NULL,
  `pago` varchar(5) NOT NULL,
  `data` date NOT NULL,
  `vencimento` date DEFAULT NULL,
  `arquivo` varchar(150) DEFAULT NULL,
  `id_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contas_pagar`
--

INSERT INTO `contas_pagar` (`id`, `descricao`, `valor`, `usuario`, `pago`, `data`, `vencimento`, `arquivo`, `id_compra`) VALUES
(4, 'Compra de Produtos', '37.50', 21, 'Não', '2021-03-22', '2021-03-22', 'sem-foto.jpg', 4),
(5, 'Compra de Produtos', '2.00', 26, 'Sim', '2021-03-22', '2021-03-22', 'sem-foto.jpg', 5),
(6, 'Compra de Produtos', '80.00', 21, 'Não', '2021-03-22', '2021-03-22', 'sem-foto.jpg', 6),
(8, 'Conta de Luz', '1150.00', 26, 'Não', '2021-03-24', '2021-03-25', '24-03-2021-12-35-07-16-02-2021-18-51-45-conta.jpg', 0),
(9, 'Conta de Água', '840.00', 26, 'Sim', '2021-03-24', '2021-03-24', '24-03-2021-12-41-42-16-02-2021-19-20-42-produtos.pdf', 0),
(11, 'Compra de Produtos', '175.00', 29, 'Não', '2021-03-30', '2021-03-30', 'sem-foto.jpg', 7),
(12, 'Compra de Produtos', '110.00', 29, 'Não', '2021-03-30', '2021-03-30', 'sem-foto.jpg', 8),
(13, 'Compra de Produtos', '126.50', 29, 'Não', '2021-03-30', '2021-03-30', 'sem-foto.jpg', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_receber`
--

CREATE TABLE `contas_receber` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `usuario` int(11) NOT NULL,
  `pago` varchar(5) NOT NULL,
  `data` date NOT NULL,
  `vencimento` date NOT NULL,
  `arquivo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contas_receber`
--

INSERT INTO `contas_receber` (`id`, `descricao`, `valor`, `usuario`, `pago`, `data`, `vencimento`, `arquivo`) VALUES
(1, 'Marcos Silva Cliente', '400.00', 26, 'Não', '2021-03-24', '2021-03-24', '24-03-2021-13-06-19-16-02-2021-18-55-44-16-02-2021-18-51-45-conta.jpg'),
(2, 'Tesete', '580.00', 26, 'Não', '2021-03-24', '2021-03-24', 'sem-foto.jpg'),
(3, 'Conta Teste', '250.00', 26, 'Sim', '2021-03-24', '2021-03-24', '24-03-2021-13-06-40-16-02-2021-19-20-42-produtos.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `produto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome`, `email`, `telefone`, `endereco`, `produto`) VALUES
(1, 'Patricia Silva', 'patricia@hotmail.com', '(54) 55555-5555', 'Rua C', 'Bebidas'),
(2, 'Mauricio Campos', 'mauricio@hotmail.com', '(54) 55555-5789', 'Rua C', 'Vinhos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cargo` int(11) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `email`, `telefone`, `endereco`, `cargo`, `data_cadastro`) VALUES
(1, 'Marcos Santos 2', '554.545.666-66', 'marcos@hotmail.com', '(33) 33333-3333', 'Rua Almeida Campos 150', 5, '2021-03-16'),
(6, 'Pedro Silva', '454.555.555-60', 'pedro@hotmail.com', '(66) 64444-4444', 'Rua Almeida Campos 150', 4, '2021-03-16'),
(8, 'Marta', '584.588.887-85', 'marta@hotmail.com', '(55) 66555-5555', 'Rua Almeida Campos 150', 9, '2021-03-17'),
(13, 'Gustavo Silva', '488.844.444-44', 'gustavo@hotmail.com', '(45) 55555-5555', 'Rua Almeida Campos 150', 10, '2021-03-22'),
(14, 'Patricia Silva', '484.856.556-65', 'patricia@hotmail.com', '(55) 58666-6666', 'Patricia', 10, '2021-03-22'),
(16, 'Carlos Ribeiro', '548.555.455-55', 'carlos@hotmail.com', '(54) 85455-5555', 'Rua Almeida Campos 150', 10, '2021-03-22'),
(17, 'Fernando Simão', '659.765.666-66', 'fernando@hotmail.com', '(65) 58555-5555', 'Rua C', 10, '2021-03-22'),
(18, 'Ambrósio Freitas', '685.256.555-55', 'freitas@hotmail.com', '(56) 52222-2222', 'Rua Almeida Campos 150', 10, '2021-03-22'),
(19, 'Paloma Freitas', '454.548.855-65', 'paloma@hotmail.com', '(54) 55555-5555', 'Rua Almeida Campos 150', 1, '2021-03-23'),
(21, 'Administrador', '000.000.000-00', 'contato@hugocursos.com.br', '(33) 3333-3333', '', 14, '2021-03-24'),
(22, 'Mateus Santos', '268.888.888-88', 'mateus@hotmail.com', '(84) 44444-4444', 'Rua Almeida Campos 150', 9, '2021-03-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `imagem`, `categoria`) VALUES
(3, '01-07-2021-06-29-36-1.jpg', 1),
(4, '01-07-2021-06-29-43-2.jpg', 4),
(5, '01-07-2021-06-29-50-6.jpg', 1),
(6, '01-07-2021-06-29-58-5.jpg', 1),
(7, '01-07-2021-06-30-12-8.jpg', 5),
(8, '01-07-2021-06-30-18-3.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedidos`
--

CREATE TABLE `itens_pedidos` (
  `id` int(11) NOT NULL,
  `pedido` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `mesa` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens_pedidos`
--

INSERT INTO `itens_pedidos` (`id`, `pedido`, `item`, `tipo`, `valor`, `quantidade`, `total`, `mesa`, `status`) VALUES
(1, 18, 8, 'Produto', '4.50', 2, '9.00', '1', 'Pronto'),
(2, 18, 10, 'Prato', '15.00', 2, '30.00', '1', 'Pronto'),
(3, 18, 9, 'Prato', '25.00', 1, '25.00', '1', 'Pronto'),
(4, 20, 10, 'Produto', '22.50', 1, '22.50', '7', 'Pronto'),
(5, 20, 8, 'Produto', '4.50', 2, '9.00', '7', 'Pronto'),
(6, 20, 9, 'Prato', '25.00', 1, '25.00', '7', 'Pronto'),
(7, 20, 8, 'Prato', '18.00', 1, '18.00', '7', 'Pronto'),
(8, 20, 7, 'Prato', '9.99', 1, '9.99', '7', 'Pronto'),
(9, 21, 8, 'Produto', '4.50', 1, '4.50', '7', 'Pronto'),
(10, 21, 7, 'Produto', '3.50', 1, '3.50', '7', 'Pronto'),
(11, 21, 8, 'Prato', '18.00', 1, '18.00', '7', 'Pronto'),
(12, 21, 9, 'Prato', '25.00', 1, '25.00', '7', 'Pronto'),
(13, 21, 10, 'Prato', '15.00', 1, '15.00', '7', 'Preparando'),
(14, 21, 7, 'Prato', '9.99', 1, '9.99', '7', 'Preparando'),
(15, 19, 10, 'Produto', '22.50', 1, '22.50', '2', 'Pronto'),
(16, 19, 8, 'Produto', '4.50', 1, '4.50', '2', 'Pronto'),
(17, 19, 10, 'Prato', '15.00', 1, '15.00', '2', 'Preparando'),
(18, 19, 9, 'Prato', '25.00', 1, '25.00', '2', 'Preparando'),
(19, 22, 10, 'Produto', '22.50', 1, '22.50', '5', 'Pronto'),
(20, 22, 8, 'Produto', '4.50', 1, '4.50', '5', 'Pronto'),
(21, 22, 10, 'Prato', '15.00', 1, '15.00', '5', 'Preparando'),
(22, 22, 9, 'Prato', '25.00', 1, '25.00', '5', 'Preparando'),
(23, 23, 10, 'Produto', '22.50', 1, '22.50', '5', 'Pronto'),
(24, 23, 8, 'Produto', '4.50', 1, '4.50', '5', 'Pronto'),
(25, 24, 10, 'Produto', '22.50', 1, '22.50', '1', 'Pronto'),
(26, 24, 8, 'Produto', '4.50', 2, '9.00', '1', 'Pronto'),
(27, 24, 9, 'Prato', '25.00', 1, '25.00', '1', 'Preparando'),
(28, 25, 10, 'Produto', '22.50', 1, '22.50', '11', 'Pronto'),
(29, 25, 8, 'Produto', '4.50', 1, '4.50', '11', 'Pronto'),
(30, 25, 9, 'Prato', '25.00', 1, '25.00', '11', 'Preparando'),
(31, 26, 10, 'Produto', '22.50', 1, '22.50', '2', 'Pronto'),
(32, 26, 8, 'Produto', '4.50', 3, '13.50', '2', 'Pronto'),
(33, 26, 9, 'Prato', '25.00', 1, '25.00', '2', 'Preparando'),
(34, 26, 8, 'Prato', '18.00', 1, '18.00', '2', 'Pronto'),
(35, 26, 7, 'Prato', '9.99', 1, '9.99', '2', 'Preparando'),
(36, 27, 8, 'Produto', '4.50', 2, '9.00', '8', 'Pronto'),
(37, 27, 7, 'Produto', '3.50', 1, '3.50', '8', 'Pronto'),
(38, 27, 8, 'Prato', '18.00', 1, '18.00', '8', 'Preparando'),
(39, 27, 9, 'Prato', '25.00', 1, '25.00', '8', 'Preparando'),
(40, 23, 8, 'Prato', '18.00', 1, '18.00', '5', 'Pronto'),
(41, 28, 10, 'Produto', '22.50', 1, '22.50', '3', 'Pronto'),
(42, 28, 10, 'Prato', '15.00', 1, '15.00', '3', 'Preparando'),
(43, 28, 8, 'Prato', '18.00', 1, '18.00', '3', 'Pronto'),
(44, 28, 7, 'Prato', '9.99', 1, '9.99', '3', 'Preparando'),
(45, 29, 8, 'Prato', '18.00', 1, '18.00', '2', 'Pronto'),
(46, 29, 7, 'Produto', '3.50', 1, '3.50', '2', 'Pronto'),
(47, 29, 10, 'Prato', '15.00', 1, '15.00', '2', 'Preparando'),
(48, 30, 3, 'Prato', '29.99', 1, '29.99', '2', 'Preparando'),
(49, 31, 10, 'Prato', '15.00', 1, '15.00', '2', 'Preparando'),
(50, 31, 9, 'Prato', '25.00', 1, '25.00', '2', 'Preparando'),
(51, 31, 8, 'Prato', '18.00', 1, '18.00', '2', 'Preparando'),
(52, 31, 9, 'Prato', '25.00', 1, '25.00', '2', 'Preparando'),
(53, 32, 1, 'Prato', '15.00', 1, '15.00', '2', 'Preparando'),
(54, 33, 10, 'Prato', '15.00', 1, '15.00', '3', 'Preparando'),
(55, 33, 8, 'Prato', '18.00', 1, '18.00', '3', 'Preparando'),
(56, 34, 10, 'Prato', '15.00', 1, '15.00', '2', 'Preparando'),
(57, 34, 10, 'Produto', '22.50', 1, '22.50', '2', 'Pronto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesas`
--

INSERT INTO `mesas` (`id`, `nome`, `descricao`) VALUES
(1, '1', 'Mesa Esquerda Porta'),
(2, '2', 'Mesa Fundo'),
(3, '3', ''),
(4, '4', ''),
(5, '5', ''),
(7, '6', '6'),
(8, '7', '7'),
(9, '8', '8'),
(10, '9', '9'),
(11, '10', ''),
(12, '11', '11'),
(13, '12', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacoes`
--

CREATE TABLE `movimentacoes` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `id_mov` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `movimentacoes`
--

INSERT INTO `movimentacoes` (`id`, `tipo`, `descricao`, `valor`, `usuario`, `data`, `id_mov`) VALUES
(1, 'Saída', 'Conta de Água', '840.00', 26, '2021-03-24', 9),
(2, 'Saída', 'Compra de Produtos', '2.00', 26, '2021-03-24', 5),
(3, 'Entrada', 'Conta Teste', '250.00', 26, '2021-03-24', 3),
(4, 'Entrada', 'Pedido Mesa 1', '74.00', 26, '2021-03-30', 18),
(5, 'Entrada', 'Pedido Mesa 5', '83.70', 26, '2021-03-30', 22),
(6, 'Entrada', 'Pedido Mesa 11', '62.00', 26, '2021-03-30', 25),
(7, 'Entrada', 'Pedido Mesa 2', '107.89', 26, '2021-03-30', 26),
(8, 'Entrada', 'Pedido Mesa 8', '71.05', 26, '2021-03-30', 27),
(9, 'Entrada', 'Pedido Mesa 7', '102.94', 26, '2021-03-30', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `mesa` int(11) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `garcon` int(11) NOT NULL,
  `data` date NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `comissao` decimal(8,2) NOT NULL,
  `couvert` decimal(8,2) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `pago` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `valor`, `mesa`, `funcionario`, `garcon`, `data`, `obs`, `comissao`, `couvert`, `subtotal`, `pago`) VALUES
(18, '64.00', 1, 19, 13, '2021-03-30', '', '0.00', '10.00', '74.00', 'Sim'),
(19, '67.00', 2, 19, 13, '2021-03-30', '', '6.70', '10.00', '83.70', 'Não'),
(20, '84.49', 7, 19, 13, '2021-03-30', 'Observações da mesa 7', '8.45', '10.00', '102.94', 'Sim'),
(21, '0.00', 7, 19, 13, '2021-03-30', '', '0.10', '10.00', '0.00', 'Não'),
(22, '67.00', 5, 22, 30, '2021-03-30', 'Mesa do garçon Mateus', '6.70', '10.00', '83.70', 'Sim'),
(23, '0.00', 5, 22, 30, '2021-03-30', '', '0.10', '10.00', '0.00', 'Não'),
(24, '56.50', 1, 19, 13, '2021-03-30', '', '5.65', '10.00', '72.15', 'Não'),
(25, '52.00', 11, 19, 30, '2021-03-30', '', '0.00', '10.00', '62.00', 'Sim'),
(26, '88.99', 2, 22, 30, '2021-03-30', '', '8.90', '10.00', '107.89', 'Sim'),
(27, '55.50', 8, 19, 30, '2021-03-30', '', '5.55', '10.00', '71.05', 'Sim'),
(28, '0.00', 3, 19, 13, '2021-03-31', '', '0.10', '10.00', '0.00', 'Não'),
(29, '36.50', 2, 8, 13, '2021-06-26', '', '3.65', '10.00', '50.15', 'Não'),
(30, '29.99', 2, 22, 30, '2021-06-26', '', '3.00', '10.00', '42.99', 'Não'),
(31, '83.00', 2, 19, 30, '2021-06-26', '', '8.30', '10.00', '101.30', 'Não'),
(32, '0.00', 2, 22, 30, '2021-06-26', '', '0.10', '10.00', '0.00', 'Não'),
(33, '33.00', 3, 21, 13, '2021-07-01', '', '3.30', '10.00', '46.30', 'Não'),
(34, '0.00', 2, 19, 13, '2021-07-01', '', '0.10', '10.00', '0.00', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `categoria` int(11) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`id`, `nome`, `descricao`, `valor`, `categoria`, `imagem`, `ativo`) VALUES
(1, 'Feijoada do Chef', 'Porção de Feijoada preparada pelo chef....', '15.00', 3, '22-03-2021-15-51-12-feijoada.jpg', 'Sim'),
(3, 'Porção de Fritas', 'Porção de Fritas 400 g', '29.99', 3, '22-03-2021-15-51-42-fritas.jpg', 'Sim'),
(6, 'Sopa 350 Gramas', 'Esperimente nossa sopa, vários legumes...', '9.99', 3, '22-03-2021-16-02-08-sopa.jpg', 'Sim'),
(7, 'Prato Tradicional', 'PF Tradicional com direito a uma carne', '9.99', 12, '22-03-2021-16-03-07-tradicional.jpg', 'Sim'),
(8, 'Feijão Tropeiro', 'Porção para duas pessoas', '18.00', 3, '22-03-2021-16-03-32-tropeiro.jpg', 'Sim'),
(9, 'Taça de Açaí 500 ML', 'Taça de Açaí de 500 ML', '25.00', 13, '22-03-2021-19-59-23-acai-1.jpeg', 'Sim'),
(10, 'Petit Gateau', 'Petit Gateau 300 ML', '15.00', 13, '22-03-2021-20-01-23-petit.jpg', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `valor_compra` decimal(8,2) NOT NULL,
  `valor_venda` decimal(8,2) NOT NULL,
  `categoria` int(11) NOT NULL,
  `fornecedor` int(11) NOT NULL,
  `estoque` int(11) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `valor_compra`, `valor_venda`, `categoria`, `fornecedor`, `estoque`, `imagem`) VALUES
(7, 'Coca Cola Lata', 'Coca Cola 350 ML', '2.30', '3.50', 1, 2, 58, '22-03-2021-17-58-05-refri.jpg'),
(8, 'Cerveja Lata', '350 ML', '3.50', '4.50', 1, 2, 30, '22-03-2021-17-57-59-brahma.jpg'),
(10, 'Açaí 1 Litro', 'Pote de Açãí de 1 Litro', '2.00', '22.50', 1, 2, 43, '22-03-2021-18-02-07-acai-2.jpeg'),
(11, 'Dom Bosco', '', '0.00', '50.00', 2, 0, 0, '27-06-2021-00-16-23-vinho_tinto_suave_dom_bosco_garrafa_750ml_5792485_1_20200921173346.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `mesa` int(11) NOT NULL,
  `pessoas` int(11) DEFAULT NULL,
  `obs` varchar(50) DEFAULT NULL,
  `funcionario` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `cliente`, `mesa`, `pessoas`, `obs`, `funcionario`, `data`) VALUES
(1, 3, 11, 3, 'Cliente vai chegar por volta das 20:00 hrs', 26, '2021-03-24'),
(3, 2, 5, 3, 'Reserva as 18:00.', 19, '2021-03-24'),
(4, 1, 4, 1, 'Nenhuma.', 19, '2021-03-24'),
(5, 2, 9, 1, 'Nenhuma.', 19, '2021-03-24'),
(6, 3, 3, 1, '17:00 hrs.', 19, '2021-03-24'),
(8, 3, 7, 3, '17:00 hrs.', 19, '2021-03-25'),
(12, 3, 3, 1, '', 19, '2021-03-25'),
(13, 1, 4, 1, '', 19, '2021-03-25'),
(15, 2, 9, 1, '', 19, '2021-03-25'),
(16, 3, 8, 3, 'Vão chegar cedo.', 19, '2021-03-24'),
(18, 3, 11, 3, '', 19, '2021-03-25'),
(21, 2, 10, 1, '', 19, '2021-03-24'),
(22, 3, 6, 1, '', 19, '2021-03-24'),
(24, 3, 1, 1, '', 19, '2021-02-24'),
(25, 2, 3, 1, '', 19, '2021-02-24'),
(26, 3, 8, 1, '', 19, '2021-02-24'),
(27, 2, 9, 1, '', 19, '2021-02-24'),
(28, 2, 10, 1, '', 19, '2021-02-24'),
(29, 2, 5, 1, '', 19, '2021-01-24'),
(30, 3, 3, 1, '', 19, '2021-01-24'),
(31, 2, 7, 1, '', 19, '2021-01-24'),
(32, 3, 12, 1, '', 19, '2021-01-24'),
(36, 3, 12, 1, 'Reserva para as 18:00', 19, '2021-03-25'),
(37, 3, 4, 3, '', 19, '2021-03-29'),
(38, 1, 9, 1, '', 19, '2021-03-29'),
(39, 3, 9, 1, '', 19, '2021-03-30'),
(40, 2, 4, 1, '', 19, '2021-03-30'),
(43, 5, 9, 1, '', 19, '2021-03-31'),
(46, 5, 6, 3, 'Teste', 19, '2021-03-31'),
(50, 5, 8, 3, 'Teste', 19, '2021-03-31'),
(51, 5, 4, 3, 'Teste', 19, '2021-03-31'),
(57, 5, 1, 3, 'Teste', 19, '2021-03-31'),
(61, 6, 12, 1, '', 19, '2021-03-31'),
(62, 5, 2, 3, 'Teste', 19, '2021-03-31'),
(63, 5, 3, 3, 'Teste', 19, '2021-03-31'),
(64, 8, 1, 5, 'Reservar uma mesa', 19, '2021-04-01'),
(65, 10, 3, 1, '', 19, '2021-06-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas_email`
--

CREATE TABLE `reservas_email` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `pessoas` int(11) NOT NULL,
  `data` date NOT NULL,
  `mensagem` varchar(255) DEFAULT NULL,
  `reservado` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reservas_email`
--

INSERT INTO `reservas_email` (`id`, `nome`, `email`, `telefone`, `pessoas`, `data`, `mensagem`, `reservado`) VALUES
(3, 'Pedro Freitas', 'pedro@hotmail.com', '(45) 54555-5555', 3, '2021-03-31', 'Teste', 'Sim'),
(5, 'Marcela Silva', 'marcela@hotmail.com', '(59) 46666-6669', 5, '2021-04-01', 'Reservar uma mesa', 'Sim'),
(6, 'Jennifer Campos', 'jeni@hotmail.com', '(58) 45665-5555', 3, '2021-04-01', 'Vamos chegar por volta das 20:00.', 'Não'),
(7, 'Jeff Silva', 'jeff@hotmail.com', '(48) 56666-6666', 6, '2021-03-30', '', 'Não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `nivel`) VALUES
(11, 'Pedro Silva', '454.555.555-60', 'pedro@hotmail.com', '123', 'Manobrista'),
(13, 'Marta', '584.588.887-85', 'marta@hotmail.com', '123', 'Garçon'),
(20, 'Gustavo Silva', '488.844.444-44', 'gustavo@hotmail.com', '123', 'Chef'),
(21, 'Patricia Silva', '484.856.556-65', 'patricia@hotmail.com', '123', 'Chef'),
(23, 'Carlos Ribeiro', '548.555.455-55', 'carlos@hotmail.com', '123', 'Chef'),
(24, 'Fernando Simão', '659.765.666-66', 'fernando@hotmail.com', '123', 'Chef'),
(25, 'Ambrósio Freitas', '685.256.555-55', 'freitas@hotmail.com', '123', 'Chef'),
(26, 'Paloma Freitas', '454.548.855-65', 'paloma@hotmail.com', '123', 'Recepcionista'),
(29, 'Administrador', '000.000.000-00', 'marcos.wesley@hotmail.com.br', '123', 'Administrador'),
(30, 'Mateus Santos', '268.888.888-88', 'mateus@hotmail.com', '123', 'Garçon'),
(31, 'Tela', '111.111.111-11', 'tela@tela.com', '123', 'Tela');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria_img`
--
ALTER TABLE `categoria_img`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contas_pagar`
--
ALTER TABLE `contas_pagar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `itens_pedidos`
--
ALTER TABLE `itens_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `movimentacoes`
--
ALTER TABLE `movimentacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reservas_email`
--
ALTER TABLE `reservas_email`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `categoria_img`
--
ALTER TABLE `categoria_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `contas_pagar`
--
ALTER TABLE `contas_pagar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `itens_pedidos`
--
ALTER TABLE `itens_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `movimentacoes`
--
ALTER TABLE `movimentacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `reservas_email`
--
ALTER TABLE `reservas_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
