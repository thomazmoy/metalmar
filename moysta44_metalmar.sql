-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/09/2026 às 16:43
-- Versão do servidor: 5.7.44-48
-- Versão do PHP: 8.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moysta44_metalmar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkbanner` longtext COLLATE utf8mb4_unicode_ci,
  `imgbanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgmobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `linkbanner`, `imgbanner`, `imgmobile`, `created_at`, `updated_at`) VALUES
(1, 'MetalMar Manutenção Mecânica Industrial e Naval', 'https://wa.me/5591993496184', 'uploads/banner/gLiqMO98FMg1PfarWutNa9zsl8emuj2ZTPj5mnfg.webp', 'uploads/banner/K0m8s8SIckPbZihHhHnVKrzH0JHCFsQq1RwgzJDN.webp', '2023-09-28 06:34:24', '2026-06-17 14:33:19');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urltitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` longtext COLLATE utf8mb4_unicode_ci,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe` longtext COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgwhats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_categoria` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `urltitulo`, `texto`, `descricao`, `iframe`, `img`, `img2`, `img3`, `imgwhats`, `id_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Manutenção Naval em Navios Mercantes e Seus Desafios', 'manutencao-naval-em-navios-mercantes-e-seus-desafios', '<p>Na vastid&atilde;o dos oceanos, onde a economia global navega, os navios mercantes s&atilde;o os valentes transportadores de mercadorias que conectam continentes e impulsionam o com&eacute;rcio internacional. Contudo, dentro desse cen&aacute;rio desafiador, um elemento crucial muitas vezes &eacute; negligenciado: a manuten&ccedil;&atilde;o adequada dessas imponentes embarca&ccedil;&otilde;es.</p>\r\n\r\n<h4><strong>Desafios da Neglig&ecirc;ncia</strong></h4>\r\n\r\n<p>A aus&ecirc;ncia de manuten&ccedil;&atilde;o meticulosa em navios mercantes pode desencadear uma cascata de problemas. Desde riscos iminentes &agrave; seguran&ccedil;a da tripula&ccedil;&atilde;o at&eacute; impactos ambientais devastadores e a perda de efici&ecirc;ncia operacional, os custos de ignorar a manuten&ccedil;&atilde;o n&atilde;o podem ser subestimados.</p>\r\n\r\n<h4><strong>Seguran&ccedil;a em Primeiro Lugar</strong></h4>\r\n\r\n<p>Nada &eacute; mais valioso do que a seguran&ccedil;a da tripula&ccedil;&atilde;o em alto-mar. A falta de manuten&ccedil;&atilde;o adequada coloca em risco n&atilde;o apenas as vidas humanas, mas tamb&eacute;m a integridade estrutural das embarca&ccedil;&otilde;es. Imagine enfrentar uma falha mec&acirc;nica no meio do oceano - &eacute; um risco que simplesmente n&atilde;o podemos correr.</p>\r\n\r\n<h4><strong>Efici&ecirc;ncia e Sustentabilidade</strong></h4>\r\n\r\n<p>Al&eacute;m da seguran&ccedil;a, a efici&ecirc;ncia operacional &eacute; vital. A manuten&ccedil;&atilde;o inadequada leva a atrasos nas viagens, aumenta os custos de combust&iacute;vel e prejudica a competitividade. Al&eacute;m disso, n&atilde;o podemos ignorar os impactos ambientais nefastos de vazamentos de &oacute;leo e polui&ccedil;&atilde;o marinha, que mancham a reputa&ccedil;&atilde;o das empresas e comprometem a sustentabilidade dos ecossistemas marinhos.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Navio mercante no mar com containers\" src=\"https://www.metalmar.ind.br/storage/uploads/blog/8VQepPnHXut5CKF1KBemFgCb8aNXGHKySZDsDamc.webp\" style=\"width:100%\"></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4><strong>A Solu&ccedil;&atilde;o: Parceria com Especialistas em Manuten&ccedil;&atilde;o Naval</strong></h4>\r\n\r\n<p>No entanto, h&aacute; uma luz brilhante no horizonte tempestuoso dos desafios mar&iacute;timos: a contrata&ccedil;&atilde;o de empresas especializadas em manuten&ccedil;&atilde;o naval. Esses especialistas trazem consigo uma riqueza de conhecimento t&eacute;cnico e experi&ecirc;ncia que garantem a m&aacute;xima confiabilidade e seguran&ccedil;a para sua frota.</p>\r\n\r\n<h4><strong>Investimento Inteligente para o Futuro</strong></h4>\r\n\r\n<p>Ao investir em manuten&ccedil;&atilde;o naval, voc&ecirc; est&aacute; investindo no futuro de sua empresa. A redu&ccedil;&atilde;o de custos a longo prazo, a melhoria da confiabilidade operacional e a conformidade regulat&oacute;ria s&atilde;o apenas alguns dos muitos benef&iacute;cios tang&iacute;veis que acompanham essa decis&atilde;o s&aacute;bia.</p>\r\n\r\n<h4><strong>Conclus&atilde;o: Navegando Rumo ao Sucesso</strong></h4>\r\n\r\n<p>A manuten&ccedil;&atilde;o naval n&atilde;o &eacute; apenas uma despesa, mas um investimento estrat&eacute;gico para o sucesso cont&iacute;nuo de sua empresa. Proteger vidas, preservar o meio ambiente e otimizar a efici&ecirc;ncia operacional s&atilde;o objetivos que todos compartilhamos. Portanto, n&atilde;o deixe que a neglig&ecirc;ncia afunde sua jornada rumo ao sucesso. Em vez disso, embarque na jornada da excel&ecirc;ncia atrav&eacute;s da manuten&ccedil;&atilde;o naval especializada. O futuro de sua frota - e de nossa ind&uacute;stria na totalidade - depende disso.</p>', 'A manutenção naval não é apenas uma despesa, mas um investimento estratégico para o sucesso contínuo de sua empresa.', NULL, 'uploads/blog/HDKVYxBYiShvy0dezimopYZeXTtbRZJJk3k8fBEY.webp', 'uploads/blog/8VQepPnHXut5CKF1KBemFgCb8aNXGHKySZDsDamc.webp', NULL, NULL, 1, '2024-05-09 14:18:05', '2024-05-27 12:27:13'),
(2, 'Os Desafios da Soldagem em Espaços Confinados', 'os-desafios-da-soldagem-em-espacos-confinados', '<p>Soldar em espa&ccedil;os confinados apresenta desafios &uacute;nicos que v&atilde;o desde quest&otilde;es de seguran&ccedil;a at&eacute; dificuldades pr&aacute;ticas. Imagine ter que realizar um trabalho delicado enquanto est&aacute; confinado em um espa&ccedil;o apertado, com pouca luz e circula&ccedil;&atilde;o de ar limitada. Isso n&atilde;o apenas torna o trabalho mais dif&iacute;cil, mas tamb&eacute;m aumenta os riscos para os trabalhadores envolvidos.</p>\r\n\r\n<h4><strong>Efici&ecirc;ncia, Conformidade Regulat&oacute;ria e Seguran&ccedil;a</strong></h4>\r\n\r\n<p>Os riscos de seguran&ccedil;a s&atilde;o uma preocupa&ccedil;&atilde;o primordial. Espa&ccedil;os confinados podem conter uma mistura perigosa de gases, vapores ou poeira que podem representar riscos de explos&atilde;o, inc&ecirc;ndio ou intoxica&ccedil;&atilde;o. Al&eacute;m disso, a falta de ventila&ccedil;&atilde;o adequada pode levar &agrave; acumula&ccedil;&atilde;o de fuma&ccedil;a e gases t&oacute;xicos durante o processo de soldagem, colocando os trabalhadores em risco de danos &agrave; sa&uacute;de.</p>\r\n\r\n<p>A acessibilidade tamb&eacute;m &eacute; uma preocupa&ccedil;&atilde;o. Muitas vezes, os soldadores t&ecirc;m que se contorcer em posi&ccedil;&otilde;es desconfort&aacute;veis ​​ou trabalhar em &acirc;ngulos dif&iacute;ceis para alcan&ccedil;ar as &aacute;reas que precisam ser soldadas. Isso n&atilde;o apenas torna o trabalho mais cansativo, mas tamb&eacute;m pode afetar a qualidade do trabalho realizado.</p>\r\n\r\n<p>A visibilidade &eacute; outro desafio. Com pouca luz e fuma&ccedil;a densa, os soldadores podem ter dificuldade em ver claramente o que est&atilde;o fazendo, o que pode levar a erros e acidentes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Técnico fazendo inspeção em espaço confinado na caverna de um navio\" src=\"https://www.metalmar.ind.br/storage/uploads/blog/SrbWDD26oUy2deEf1yPj45C28uc6gZ71XM8nyCwa.webp\" style=\"width:100%\"></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr>\r\n<p>A <strong><a href=\"https://www.gov.br/trabalho-e-emprego/pt-br/acesso-a-informacao/participacao-social/conselhos-e-orgaos-colegiados/comissao-tripartite-partitaria-permanente/normas-regulamentadora/normas-regulamentadoras-vigentes/norma-regulamentadora-no-33-nr-33\" target=\"_blank\">NR-33</a></strong> &eacute; uma norma do Minist&eacute;rio do Trabalho e Emprego do Brasil que estabelece requisitos para garantir a seguran&ccedil;a e sa&uacute;de dos trabalhadores em espa&ccedil;os confinados, como tanques, silos e tubula&ccedil;&otilde;es. Ela aborda:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Identifica&ccedil;&atilde;o e Avalia&ccedil;&atilde;o de Riscos</li>\r\n	<li>Permiss&atilde;o de Entrada e Trabalho (PET)</li>\r\n	<li>Capacita&ccedil;&atilde;o e Treinamento</li>\r\n	<li>Monitoramento e Controle de Riscos</li>\r\n	<li>Equipamentos de Prote&ccedil;&atilde;o Individual (EPIs)</li>\r\n	<li>Procedimentos de Resgate e Emerg&ecirc;ncia</li>\r\n</ol>\r\n\r\n<p>Os benef&iacute;cios incluem reduzir acidentes, melhoria da qualidade do trabalho, conformidade legal e prote&ccedil;&atilde;o &agrave; sa&uacute;de dos trabalhadores. Implementar a NR-33 &eacute; crucial para um ambiente de trabalho seguro e eficiente.</p>\r\n\r\n<hr>\r\n<p>Contratar uma empresa especializada em soldagem em espa&ccedil;os confinados pode mitigar esses desafios de v&aacute;rias maneiras. Essas empresas t&ecirc;m experi&ecirc;ncia em lidar com as complexidades &uacute;nicas desse tipo de trabalho e est&atilde;o bem equipadas com ferramentas e tecnologias especializadas para garantir a seguran&ccedil;a e a efici&ecirc;ncia.</p>\r\n\r\n<p>Al&eacute;m disso, elas t&ecirc;m procedimentos rigorosos de seguran&ccedil;a em vigor para garantir que todos os aspectos do trabalho sejam realizados com o mais alto padr&atilde;o de seguran&ccedil;a. Isso inclui a prepara&ccedil;&atilde;o adequada do local de trabalho, o uso de equipamentos de prote&ccedil;&atilde;o individual apropriados e a implementa&ccedil;&atilde;o de medidas de controle de qualidade durante todo o processo de soldagem.</p>\r\n\r\n<p>Ao optar por uma empresa especializada, como a MetalMar, voc&ecirc; est&aacute; investindo na seguran&ccedil;a e no sucesso do seu projeto. Temos o conhecimento, a experi&ecirc;ncia e os recursos necess&aacute;rios para enfrentar os desafios da soldagem em espa&ccedil;os confinados e garantir que o trabalho seja conclu&iacute;do com seguran&ccedil;a e efici&ecirc;ncia.</p>', 'Soldar em espaços confinados apresenta desafios únicos que vão desde questões de segurança até dificuldades práticas', NULL, 'uploads/blog/5wOOSVuPFzv8cCUVblvkZQXcRzK7fANJgJni5X4U.webp', 'uploads/blog/SrbWDD26oUy2deEf1yPj45C28uc6gZ71XM8nyCwa.webp', NULL, NULL, 1, '2024-05-22 13:21:48', '2024-05-27 13:14:12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Notícias', '2023-09-28 13:08:39', '2023-09-28 13:08:39');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assunto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensagem` longtext COLLATE utf8mb4_unicode_ci,
  `situacao` enum('Recebido','Em Atendimento','Finalizado','Cancelado') COLLATE utf8mb4_unicode_ci DEFAULT 'Recebido',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `situacao`, `created_at`, `updated_at`) VALUES
(3, 'JMA ELETRIC', 'contato@jmaeletric.com.br', '(11) 94472-7014', 'ATENCAO... AO DEPARTAMENTO DE COMPRAS/SUPRIMENTOS', 'ATENCAO AO DEPARTAMENTO DE COMPRAS/SUPRIMENTOS.\r\n\r\n\r\nOlá, tudo bem? somos a JMA ELETRIC, trabalhamos no ramo de MATERIAIS  ELETRICOS.\r\n\r\nPrezando sempre pela qualidade dos produtos e pela segurança de nossos clientes.\r\n\r\n\r\nTrabalhamos com os seguintes materiais:\r\n\r\n\"              Cobos de Aco Cobreado. ( 16MM,25MM,35MM,50MM,70MM,95MM)\r\n                ATERRAMENTO.\r\n\r\n\"              Cabos de media  Tensao - 3,6-6 kv  ate 15-25 kv\r\n \r\n\"	Cordoalha de Aço. ( 3/16 , 1/4 , 5/16 , 3/8 -pol ) \r\n\r\n\"	Eletro Ferragens. ( cintas para poste , armacao secondaria) \r\n\r\n\"	Isoladores de porcelana, polimericos. Para-Raios 15kv - polimerios\r\n\r\n\"              Preformados. (alca preformadas ) \r\n\r\n\"              Solda exotermica. e martial para ATERRAMENTO.  \r\n\r\n \r\n\r\nCoutinho\r\nResponsavel.\r\n\r\n(11) 9 6458-7946 / (11) 9 4472-7014\r\nmarcuscoutinho@jmaeletric.com.br\r\n\r\nNOSSO SITE - WWW.JMAELETRIC.COM.BR\r\nConfira no LinkedIn e comprove nossa excelência:', 'Recebido', '2024-05-24 23:08:25', '2024-05-24 23:08:25'),
(4, 'KeyGifts', 'contato@keygif.com.br', '(11) 2157-8200', 'Sua marca em destaque: Brindes personalizados que encantam e geram resultados!', 'A KeyGifts oferece brindes personalizados para empresas, com o objetivo de fortalecer a marca, fidelizar clientes, motivar colaboradores e gerar leads.\r\n\r\nOferecemos:\r\n\r\n    Grande variedade de produtos\r\n    Personalização completa\r\n    Alta qualidade\r\n    Prazo rápido de entrega\r\n    Atendimento personalizado\r\n\r\nVisite nosso site e solicite um orçamento sem compromisso!\r\n\r\nhttps://www.keygifts.com.br\r\nTelefone:11 2157-8200 \r\n\r\nKeyGifts: Brindes personalizados que fazem a diferença!', 'Recebido', '2024-06-01 08:01:26', '2024-06-01 08:01:26'),
(5, 'BRINDES PERSONALIZADOS', 'vendas@brindespersonalizados.net', '(11) 913578339', 'Brindes para Empresas', 'Olá,\r\n\r\nSomos fornecedores de Brindes Personalizados e gostariamos se possivel participar das futuras cotações de Brindes desta conceituada Empresa.\r\n\r\nwww.brindespersonalizados.net\r\n\r\nVanderlei Evandro \r\nWhatsApp: (11) 913578339\r\nE-mail:vendas@brindespersonalizados.net\r\nWeb: www.brindespersonalizados.net', 'Recebido', '2024-07-04 14:08:50', '2024-07-04 14:08:50'),
(6, 'MAURICIO BREVFIX', 'vendas3@brevfixx.com.br', '11954721912', 'FORNECEDOR BREVFIXX', 'BREVFIXX FIXADORES\r\nFABRICAMOS PARAFUSOS PORCAS ARRUELAS\r\nPROCURAMOS PARCEIROS PARA VENDAS DIRETAS\r\nFAVOR ENCAMINHAR AO DPTO DE COMPRAS OU SUPRIMENTOS \r\nGRATO!', 'Recebido', '2024-07-19 11:28:26', '2024-07-19 11:28:26'),
(7, 'SRV BRINDES', 'vendas@brindespersonalizados.srv.br', '(11) 913578339', 'Brindes para Empresas', 'Olá,\r\n\r\nSomos fornecedores de Brindes Personalizados e gostariamos se possivel participar das futuras cotações de Brindes desta conceituada Empresa.\r\n\r\n2500 brindes para personalizar\r\n\r\n\r\nVanderlei Toledo\r\nwww.brindespersonalizados.srv.br\r\nvendas@brindespersonalizados.srv.br\r\nWhatsApp (11) 913578339', 'Recebido', '2024-08-21 14:23:53', '2024-08-21 14:23:53'),
(8, 'Estúdio - SP', 'contato@studiosp.com.br', '(11) 70724011', 'Coloque seu site no topo do Google', 'Olá, no Estúdio - SP ajudamos seu site a aparecer no topo das buscas do Google com SEO. Aumente o tráfego orgânico e ganhe mais visibilidade com estratégias comprovadas, como links de outros sites que apontam para o seu (backlinks). Vamos conversar? WhatsApp: (11) 97072-4016.', 'Recebido', '2024-09-29 22:45:29', '2024-09-29 22:45:29'),
(9, 'Estúdio - SP', 'contato@studiosp.com.br', '(11) 70724011', 'Impulsione Seu Negócio com Nossos Serviços de SEO e Marketing Digital!', 'O Estúdio - SP oferece serviços de SEO para otimizar sua presença online, Criação de Sites personalizados para atender às suas necessidades, especialização em WordPress para garantir que seu site funcione perfeitamente, e estratégias eficazes de Marketing Digital para aumentar sua visibilidade e atrair mais clientes. Entre em contato e descubra como podemos ajudar seu negócio a crescer! WhatsAPP (11)97072-4016 - CEO - Fábio', 'Recebido', '2024-10-13 16:36:35', '2024-10-13 16:36:35'),
(10, 'Deivison Gouvêa Nogueira', 'deivisongouveanogueira@gmail.com', '91985749300', 'Montagem e Desmontagem de Andaimes', 'Sou montador de andaimes', 'Recebido', '2024-10-29 22:41:55', '2024-10-29 22:41:55'),
(11, 'JMA ELETRIC', 'contato@jmaeletric.com.br', '(11) 94472-7014', 'ATENCAO... AO DEPARTAMENTO DE COMPRAS/SUPRIMENTOS', 'ATENCAO AO DEPARTAMENTO DE COMPRAS/SUPRIMENTOS.\r\n\r\n\r\nOlá, tudo bem? somos a JMA ELETRIC, trabalhamos no ramo de MATERIAIS ELETRICOS\r\n\r\nPrezando sempre pela qualidade dos produtos e pela segurança de nossos clientes.\r\n\r\n\r\nTrabalhamos com os seguintes materiais:\r\n\r\n\"              CABOS DE ACO COBREADO PARA A LINHA DE ATERRAMENTO\r\n\r\n                ( 16MM,25MM,35MM,50MM,70MM,95MM)\r\n\r\n                21%. IACS. TODOS COM 7 FIOS.\r\n\r\n\"              Cabos de media  Tensao - 3,6-6 kv  ate 15-25 kv\r\n\r\n\"	Eletro Ferragens. ( cintas para poste , armacao secondaria) \r\n\r\n\"	Isoladores de porcelana, polimericos. Para-Raios 15kv - polimerios\r\n \r\n \r\n\r\n \r\n\r\nCoutinho\r\nResponsavel.\r\n\r\n(11) 9 6458-7946 / (11) 9 4472-7014\r\nmarcuscoutinho@jmaeletric.com.br\r\n\r\nNOSSO SITE - WWW.JMAELETRIC.COM.BR\r\nConfira no LinkedIn e comprove nossa excelência:', 'Recebido', '2024-11-05 16:20:32', '2024-11-05 16:20:32'),
(12, 'JMA ELETRIC', 'contato@jmaeletric.com.br', '(11) 94472-7014', 'ATENCAO... AO DEPARTAMENTO DE COMPRAS/SUPRIMENTOS', 'ATENCAO AO DEPARTAMENTO DE COMPRAS/SUPRIMENTOS.\r\n\r\n\r\nOlá, tudo bem? somos a JMA ELETRIC, trabalhamos no ramo de MATERIAIS ELETRICOS\r\n\r\nPrezando sempre pela qualidade dos produtos e pela segurança de nossos clientes.\r\n\r\n\r\nTrabalhamos com os seguintes materiais:\r\n\r\n\"              CABOS DE ACO COBREADO PARA A LINHA DE ATERRAMENTO\r\n\r\n                ( 16MM,25MM,35MM,50MM,70MM,95MM)\r\n\r\n                21%. IACS. TODOS COM 7 FIOS.\r\n\r\n\"              Cabos de media  Tensao - 3,6-6 kv  ate 15-25 kv\r\n\r\n\"	Eletro Ferragens. ( cintas para poste , armacao secondaria) \r\n\r\n\"	Isoladores de porcelana, polimericos. Para-Raios 15kv - polimerios\r\n \r\n \r\n\r\n \r\n\r\nCoutinho\r\nResponsavel.\r\n\r\n(11) 9 6458-7946 / (11) 9 4472-7014\r\nmarcuscoutinho@jmaeletric.com.br\r\n\r\nNOSSO SITE - WWW.JMAELETRIC.COM.BR\r\nConfira no LinkedIn e comprove nossa excelência:', 'Recebido', '2024-11-05 20:40:27', '2024-11-05 20:40:27'),
(13, 'Heloisa', 'st.superbraco@gmail.com', '21964149002', 'Montagem e Desmontagem de Andaimes', 'Boa tarde, gostaria de maiores informações sobre o curso de montagem e desmontagem de andaimes.', 'Recebido', '2024-12-04 19:10:46', '2024-12-04 19:10:46'),
(14, 'William Pereira', 'williampereira1525@gmail.com', '91984947028', 'Montagem e Desmontagem de Andaimes', 'Gostaria de saber se a empresa esta precisando de montador de andaime e estrutura metálica? Obrigado.', 'Recebido', '2025-03-02 00:17:33', '2025-03-02 00:17:33'),
(17, 'Carlos Eduardo', 'carlos.eduardo@jackfiber.com.br', '+5511962591748', 'Fornecimento de material', 'Prezados(a), boa tarde!\r\nMe chamo Eduardo da empresa Jackfiber do Brasil, somos do Grupo Derocha e atuamos a mais de 25 anos no mercado, oferecendo soluções para isolamento térmico e acústico. Trabalhamos com materiais para isolamento térmico e acústicos, e estamos com excelentes condições nesse mês de maio de 2025, não deixe de cotar com a gente caso precise de algum material.\r\n\r\nPrincipais Materiais:\r\nLã de Rocha\r\nPainéis Acústicos\r\nLã de Pet\r\nPainéis de lã de vidro\r\nFeltro (Rolo) de lã de vidro\r\nPlaca de fibra cerâmica\r\nTubos (Calha) de lã de vidro\r\nPainéis de Lã de rocha (alta densidade)\r\nTubo bi-partidos de lã de rocha (Para isolamento de tubulações de diversos tipos e medidas)\r\nMantas de lã de rocha\r\nFeltros de lã de rocha\r\nFlocos de lã de rocha\r\n\r\n\r\nGostaria de falar com o responsável por compras?\r\n\r\n\r\nGrato!', 'Recebido', '2025-05-23 17:49:53', '2025-05-23 17:49:53'),
(18, 'Carlos Eduardo', 'carlos.eduardo@jackfiber.com.br', '+5511962591748', 'Fornecimento de material', 'Prezados(a), boa tarde!\r\nMe chamo Eduardo da empresa Jackfiber do Brasil, somos do Grupo Derocha e atuamos a mais de 25 anos no mercado, oferecendo soluções para isolamento térmico e acústico. Trabalhamos com materiais para isolamento térmico e acústicos, e estamos com excelentes condições nesse mês de maio de 2025, não deixe de cotar com a gente caso precise de algum material.\r\n\r\nPrincipais Materiais:\r\nLã de Rocha\r\nPainéis Acústicos\r\nLã de Pet\r\nPainéis de lã de vidro\r\nFeltro (Rolo) de lã de vidro\r\nPlaca de fibra cerâmica\r\nTubos (Calha) de lã de vidro\r\nPainéis de Lã de rocha (alta densidade)\r\nTubo bi-partidos de lã de rocha (Para isolamento de tubulações de diversos tipos e medidas)\r\nMantas de lã de rocha\r\nFeltros de lã de rocha\r\nFlocos de lã de rocha\r\n\r\n\r\nGostaria de falar com o responsável por compras?\r\n\r\n\r\nGrato!', 'Recebido', '2025-05-23 17:49:55', '2025-05-23 17:49:55'),
(20, 'Filipe minczuk', 'filipe@franik.com.br', '21990111578', 'Boa tarde somos distribuidores de válvulas e conexões no Brasil', 'Boa tarde me chamo Filipe minczuk, sou da empresa Franik válvulas e conexões somos distribuidores de materiais industriais, poderia me informar qual o setor de compras/ suprimentos, para enviar um prospecto da nossa empresa', 'Recebido', '2025-07-25 18:06:13', '2025-07-25 18:06:13'),
(21, 'Mkt Formulários', 'vendas@mktformularios.com.br', '(11) 915325790', 'Envio Rápido de Mkt', 'Olá,\r\n\r\nA MKT FORMULARIOS é  uma empresa que envia seu anúncio  nos formulários  de contatos  dos sites das empresa automaticamente.  Alcance imediato: Seu anúncio pode ser enviado\r\npara até 300 mil sites com formulários ativos,\r\ngerando visibilidade em larga escala.\r\n\r\n\r\nMKT FORMULÁRIOS\r\nwww.mktformularios.com.br\r\nvendas@mktformularios.com.br\r\nWhatsApp  (11) 913578339', 'Recebido', '2025-07-31 23:02:37', '2025-07-31 23:02:37'),
(22, 'Ricardo Andrade Martinez', 'ricardo.rs@cash.com.br', '(11) 3974-8312', 'Ferragens e Luminárias Blindadas para Barcos e Embarcações', 'Me chamo Ricardo Andrade e represento a Cash Componentes Industriais Ltda, distribuidor SOUTHCO maior fabricante de ferragens para barco e embarcações.\r\nSegue material pertinente a vossa área de atuação.\r\nHavendo interesse nos produtos ou uma parceria ficamos à disposição\r\n\r\nSaudações\r\n\r\nRicardo Andrade\r\nCash Componentes Industriais Ltda\r\nTelefone e Whatsapp: +55 11 3974-8312\r\nhttps://www.facebook.com/CashSouthco\r\nhttp://www.cashlux.com.br/', 'Recebido', '2025-09-05 15:10:06', '2025-09-05 15:10:06'),
(23, 'Deivis F. Pulga', 'comercial6@pisebem.com.br', '44988186571', 'Apresentação – Distribuidora PiseBem | Especialistas em EPIs', 'Boa tarde, tudo ótimo?\r\nMeu nome é Deivis Pulga, faço parte da equipe comercial da distribuidora PiseBem,\r\nempresa especializada na distribuição de EPIs com foco em qualidade, agilidade e parceria com o cliente.\r\nGostaria de me colocar à disposição para apresentar melhor as nossas soluções, \r\ncondições comerciais e entender como podemos contribuir com o seu negócio. \r\nTemos um portfólio diversificado, \r\npronta entrega e uma equipe dedicada a oferecer o melhor atendimento do mercado.\r\nCaso tenha interesse, podemos agendar uma conversa rápida sem compromisso.\r\n\r\n\r\nAgradeço pela atenção e fico no aguardo do seu retorno.\r\n\r\n\r\n\r\n\r\nAtenciosamente,\r\nDeivis Fernando Pulga\r\nDepartamento Comercial – PiseBem\r\n📞 [044] 98818-6571\r\n📧 comercial6@pisebem.com.br\r\n🌐 https://pisebemlog.com.br', 'Recebido', '2025-09-05 18:55:37', '2025-09-05 18:55:37'),
(24, 'Deivis F. Pulga', 'comercial6@pisebem.com.br', '44988186571', 'Apresentação – Distribuidora PiseBem | Especialistas em EPIs', 'Boa tarde, tudo ótimo?\r\nMeu nome é Deivis Pulga, faço parte da equipe comercial da distribuidora PiseBem,\r\nempresa especializada na distribuição de EPIs com foco em qualidade, agilidade e parceria com o cliente.\r\nGostaria de me colocar à disposição para apresentar melhor as nossas soluções, \r\ncondições comerciais e entender como podemos contribuir com o seu negócio. \r\nTemos um portfólio diversificado, \r\npronta entrega e uma equipe dedicada a oferecer o melhor atendimento do mercado.\r\nCaso tenha interesse, podemos agendar uma conversa rápida sem compromisso.\r\n\r\n\r\nAgradeço pela atenção e fico no aguardo do seu retorno.\r\n\r\n\r\n\r\n\r\nAtenciosamente,\r\nDeivis Fernando Pulga\r\nDepartamento Comercial – PiseBem\r\n📞 [044] 98818-6571\r\n📧 comercial6@pisebem.com.br\r\n🌐 https://pisebemlog.com.br', 'Recebido', '2025-09-05 18:58:18', '2025-09-05 18:58:18'),
(26, 'Silvestre da Conceição Junior', 'samgab@samgab.com.br', '27992690767', 'Compras e Suprimentos', 'Prezados(as),\r\n\r\nMeu nome é Silver e represento a SamGab, empresa especializada na comercialização de correntes em aço inox e galvanizadas. Atendemos com qualidade, agilidade e ótimo custo-benefício empresas dos mais diversos setores, como náutica, industrial, agrícola, construção civil, entre outros.\r\n\r\nOferecemos:\r\nCorrentes de aço inoxidável (304/316) – resistência à corrosão e excelente durabilidade\r\nCorrentes galvanizadas – custo acessível com proteção contra oxidação\r\nDiversos modelos e bitolas disponíveis\r\nEntregas rápidas para todo o Brasil.\r\n\r\nEstamos à disposição para enviar uma cotação personalizada ou agendar uma conversa para entender melhor as necessidades da sua empresa.\r\n\r\nCaso tenha interesse, basta responder este e-mail ou entrar em contato pelo WhatsApp: (27) 9.9269-0767.\r\n\r\nAgradeço sua atenção e fico no aguardo de uma oportunidade de parceria.\r\n\r\nAtt,\r\nSilver\r\n📧 samgab@samgab.com.br\r\n📱 (27) 9.9269-0767\r\n🌐 www.samgab.com.br', 'Recebido', '2025-09-11 23:33:56', '2025-09-11 23:33:56'),
(27, 'Silvestre da Conceição Junior', 'samgab@samgab.com.br', '27992690767', 'Fornecedor', 'Prezados(as),\r\n\r\nMeu nome é Silver e represento a SamGab, empresa especializada na comercialização de correntes em aço inox e galvanizadas. Atendemos com qualidade, agilidade e ótimo custo-benefício empresas dos mais diversos setores, como náutica, industrial, agrícola, construção civil, entre outros.\r\n\r\nOferecemos:\r\nCorrentes de aço inoxidável (304/316) – resistência à corrosão e excelente durabilidade\r\nCorrentes galvanizadas – custo acessível com proteção contra oxidação\r\nDiversos modelos e bitolas disponíveis\r\nEntregas rápidas para todo o Brasil.\r\n\r\nEstamos à disposição para enviar uma cotação personalizada ou agendar uma conversa para entender melhor as necessidades da sua empresa.\r\n\r\nCaso tenha interesse, basta responder este e-mail ou entrar em contato pelo WhatsApp: (27) 9.9269-0767.\r\n\r\nAgradeço sua atenção e fico no aguardo de uma oportunidade de parceria.\r\n\r\nAtt,\r\nSilver\r\n📧 samgab@samgab.com.br\r\n📱 (27) 9.9269-0767\r\n🌐 www.samgab.com.br', 'Recebido', '2025-09-11 23:54:36', '2025-09-11 23:54:36'),
(28, 'Vinicius Volmei Dal Pra', 'vinicius@armazemautopecas.com.br', '49984367520', 'Parceria Comercial', 'Bom dia, tudo bem? \r\n\r\nMe chamo Vinícius e falo aqui do Armazém Auto Peças de Chapecó-SC. Somos importadores e distribuidores de autopeças e nossos parceiros da RCS Itália compartilharam o seu contato conosco para entrarmos em contato e retomarmos a parceria. \r\n\r\nHoje, conseguimos entregar 100% de todas as peças necessárias para as manutenções dos motores de vocês em até 15 dias. Gostaria de um contato para poder retomar essa parceria. Obrigado !', 'Recebido', '2025-09-16 13:18:49', '2025-09-16 13:18:49'),
(31, 'Psiu - O Indicador', 'ekipe7@outlook.com', '(11) 90000-0009', 'Suplementos e Receitas.', 'Produtos, Serviços e Indicações Em Um Único Lugar!\r\n\r\nDescubra um mundo de informações, dicas de saúde e alimentação, além de produtos essenciais tanto para você quanto para a sua empresa.\r\n\r\nAqui estão algumas delas:\r\n\r\nPrograma Receitas Para Secar.\r\nHidra Pele - Alcanse resultados incríveis com o Hidra Pele.\r\nArtes finais, Cartões de Visita, Identidade, Visual, Estamparia e Muito +!\r\n--\r\nNão perca a oportunidade, confira agora mesmo!\r\n\r\nVisite o nosso site:\r\nhttps://www.psiuoindicador.com.br', 'Recebido', '2025-10-10 16:23:55', '2025-10-10 16:23:55'),
(32, 'Alessandra Nunes - Comercial Roma Industrial', 'Alessandra.nunes@comercialroma.net', '11944526071', 'CORREIAS E MANGUEIRAS INDUSTRIAIS CONTINENTAL', 'Me chamo Alessandra Nunes, sou consultora de vendas na Comercial Roma, empresa com mais de 50 anos de experiência no mercado de mangueiras e correias industriais.\r\nColoco à sua disposição nossas soluções completas e personalizadas, sempre com foco em qualidade, durabilidade e eficiência, trabalhando com marcas de renome como a Continental, entre outras.\r\nWhats: (11) 94452-6071', 'Recebido', '2025-10-17 13:29:54', '2025-10-17 13:29:54'),
(33, 'SRV BRINDES', 'vendas@srvbrindes.com.br', '(11) 913578339', 'Brindes Final de Ano', 'Olá,\r\n\r\nAntecipe seus Brindes de final e Ano.\r\nTemos nosso Web Site atualizado.\r\n\r\nEvandro\r\nvendas@srvbrindes.com.br\r\nwww.srvbrindes.com.br\r\n11913578339 WA', 'Recebido', '2025-11-11 21:44:53', '2025-11-11 21:44:53'),
(35, 'Pedro Luis Mesquita', 'plmesquita63@gmail.com', '14997092741', 'Vaga Capitão Fluvial', 'Boa tarde recebi hoje um comunicado de uma vaga de Capitão fluvial na metalmar por acaso seria com vocês. Se for por onde que eu mando o meu currículo.', 'Recebido', '2025-11-27 16:36:00', '2025-11-27 16:36:00'),
(37, 'Diego Rodrigues', 'diego.rodrgues@yahoo.com', '31985529632', 'Curriculo', 'Olá tudo bem qual e-mail que possas encaminhar currículo para empresa', 'Recebido', '2025-12-27 02:45:48', '2025-12-27 02:45:48'),
(41, 'Acerto Digital', 'acertodigital.ltda@gmail.com', '(11) 97840-1460', 'Revenda Oficial UniTv', 'Nosso WhatsApp de Atendimento\r\n\r\nhttps://wa.link/recargas-unitv\r\n\r\nSite Online para Compras\r\n\r\nhttps://lojarec.com/\r\n\r\nhttps://academiarecargas.com/\r\n\r\nhttps://acertorecarga.com/', 'Recebido', '2026-02-09 05:20:46', '2026-02-09 05:20:46'),
(42, 'Andre anderson cruz freire', 'freirecruzandersonandre@gmail.com', '98981507915', 'CURRICULUM MOÇO DE CONVÉS', 'onde posso enviar curriculo?', 'Recebido', '2026-02-10 02:43:23', '2026-02-10 02:43:23'),
(44, 'Diogo Mafra - Villefer', 'vendas6@villefer.com.br', '(47) 98912-6453', 'Cotações', 'Segue anexo o item o qual trabalhamos .\r\nDesde já lhe agradeço e me coloco a Disposição \r\nTemos estoque imediato de:\r\n✔ Chapas (pretas ou zincadas – lisas e xadrez)\r\n✔ Vigas I U W e H\r\n✔ Cantoneiras\r\n✔ Barras chatas e redondas\r\n\r\n📌 Itens de inox e aluminio: Atuamos sob encomenda, diretamente da fábrica, com prazos competitivos!\r\n\r\n\r\nGarantimos os *melhores preços da região* e estamos à disposição para orçamentos ou dúvidas. \r\nConte conosco!\r\n\r\nAtenciosamente,\r\nDiogo Mafra\r\nVendas | Villefer\r\n📧 vendas6@villefer.com.br\r\n📞 (47) 98912- 6453', 'Recebido', '2026-02-18 18:42:09', '2026-02-18 18:42:09'),
(46, 'Filipe da Rocha Abboud', 'filipe.abboud@onnolog.com.br', '34 997270144', 'Orçamento Rio Marabá', 'Bom dia, falo do RML em Marabá e estamos com algumas manutenções para realizar em nosso estaleiro de atracação.\r\nConsigo uma visita ou detalhamento para orçamento das correções?', 'Recebido', '2026-04-25 15:14:29', '2026-04-25 15:14:29'),
(47, 'Diego viana', 'dviana30@gmail.com', '91982284543', 'Vaga para engenheiro mecânico', 'Bom dia, prezados!\r\n\r\nSou engenheiro mecânico e tenho interesse em uma possível oportunidade disponível.', 'Recebido', '2026-04-27 01:17:17', '2026-04-27 01:17:17'),
(49, 'Vitor Barile', 'vendas@lgv.com.br', '1142286992', 'Apresentação - LGV corte laser - jato d\'agua', 'Bom dia! tudo bem?\r\n\r\nGostaríamos de verificar como estão os projetos de corte laser e jato d\'agua?\r\n\r\nConte com a LGV para seus cortes, envie desenhos ( VENDAS@LGV.COM.BR )', 'Recebido', '2026-05-13 16:36:50', '2026-05-13 16:36:50'),
(50, 'Ana Lívia Braga', 'negocios@prontlog.com.br', '31 98318 5556', 'ProntLog Transportes', 'Olá, tudo bem? 😊\r\n\r\nMe chamo Ana, da ProntLog Transportes.\r\n\r\nSomos especializados em:\r\n\r\n* Transporte rodoviário de cargas pesadas\r\n* Transporte de máquinas e equipamentos\r\n* Transportes químicos\r\n* Transportes metalúrgicos\r\n* Operações dedicadas\r\n\r\nPoderia, por gentileza, me informar quem é o responsável pela área de logística, transporte ou contratação de transportadoras na Distribuidora Itabaiana?\r\n\r\nAgradeço desde já pela atenção e fico à disposição! 🚛', 'Recebido', '2026-05-14 16:26:49', '2026-05-14 16:26:49'),
(57, 'Roy Smith', 'heinrichgunter50@gmail.com', '89871757789', 'Would you be interested in this proposal? let me hear from', 'My name is Roy Smith, I am a research head with Hamilton Laboratory UK known for vast manufacturing. \r\n \r\nI am reaching out to discuss a promising business opportunity that could be highly advantageous for both of us. I need a dependable foreign business partner to assist me in procuring a rare Premium Herbal Extract known as Kolmogorovian HG57. \r\n \r\nAlthough this may not fall within your usual area of expertise, it presents an opportunity for an additional revenue stream for you or your organization. The limited availability of this raw material has impeded product development at my company. Our previous supplier in Ukraine has ceased operations due to the ongoing conflict in the region. \r\n \r\nPROPOSAL: I am requesting your agreement to act as a new contractor between the manufacturer and Hamilton Laboratory to facilitate this project/contract. \r\n \r\nWe would share the profits from this venture, with 80% allocated to you and 20% to me. I am unable to bid for the supply contract myself, as I prefer to avoid direct contact between my company and the manufacturer, which also falls outside the scope of my employment contract. \r\n \r\nPlease respond to this email roy.smith@hamiltonpharmaceuticals.com so that I can provide you with further details regarding the process. \r\n \r\nI look forward to establishing a mutually beneficial partnership. \r\n \r\nKind regards, \r\nRoy Smith. \r\nResearch & Development Department \r\nDurham Pharmaceuticals Limited \r\nroy.smith@hamiltonpharmaceuticals.com \r\nhttps://hamiltonpharmaceuticals.com', 'Recebido', '2026-07-04 15:37:50', '2026-07-04 15:37:50'),
(58, 'Hugo L Mateo', 'info@anwarcapitalllc.com', '83876134816', 'Flexible Loan Offer Designed for You', 'Dear Sirs/ma, \r\n \r\nTake advantage of our limited?time loan offer and gain vital access to a flexible repayment plan designed to fit your budget. \r\n \r\nWhy choose this offer: Discounted interest rate, Instant approval, No collateral required, and 100% online processing, Including a face to face table meeting for closing. \r\n \r\nThis offer is valid and made available to all sectors, lucrative and projects with high value of returns. \r\n \r\nTo proceed, kindly reply to this email with your confirmation. \r\n \r\nDon’t miss out on this opportunity to fund your plans with ease. \r\n \r\nSincerely, \r\n \r\nHugo L Mateo \r\n \r\nFinancial Broker Authority \r\nDohat Al-Adab Street, Al-Khuwair, \r\nLevel 43, Building 115, King Abdullah Financial. \r\nanwar@anwarcapitalllc.com \r\nW: +96875039067', 'Recebido', '2026-07-08 12:54:59', '2026-07-08 12:54:59'),
(59, '2026 EDITORA RÍGEL', 'ruidesouza79@gmail.com', '(51) 982513471', 'EDITORA RÍGEL PUBLIQUE SEU LIVRO!', 'BRIZOLA VIVE 2026 EDITORA RÍGEL PUBLIQUE SEU LIVRO! LIVROSBRASIL\r\n\r\nAvaliação de originais • Assessoramento a autores • Edições cooperativadas\r\n\r\nhttps://www.livrosbrasil.com.br/livro-um-tempo-bem-melhor-para-se-viver\r\n\r\nhttps://www.livrosbrasil.com.br/livro-o-jornal-panfleto-e-a-construcao-do-brizolismo\r\n\r\nhttps://www.livrosbrasil.com.br/livro-o-menino-que-se-tornou-brizola\r\n\r\nhttps://www.livrosbrasil.com.br/livro-o-jornal-panfleto-e-a-construcao-do-brizolismo\r\n\r\nhttps://www.livrosbrasil.com.br/livro-bases-e-sugestoes-para-uma-politica-social\r\n\r\nNOS AJUDEM A COMPARTILHAR  ! Publique seu livro:\r\n\r\nhttps://www.youtube.com/shorts/E0SircUcBRE\r\n\r\nDesde já agradecemos sua atenção.', 'Recebido', '2026-08-03 18:20:10', '2026-08-03 18:20:10'),
(60, 'Leilson da Silva', 'leilsondasilva4@gmail.com', '91988718856', 'Montagem e Desmontagem de Andaimes', 'Tenho experiência com montador de andaime mas não tenho curso', 'Recebido', '2026-08-03 19:28:36', '2026-08-03 19:28:36'),
(61, 'DivulgaMais Publicidade e Marketing', 'primorar2012@gmail.com', '(15) 93275-5168', 'Frramentas para melhorar seu sitte', 'https://catalogoapp.mobi/acertodigital\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931671-codigo-unitv\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931672-comprar-unitv\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931726-recarga-unitv\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931153-recarga-unitv-anual\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931142-recarga-unitv-mensal\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931151-recarga-unitv-trimestral\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931670-unitv\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931674-unitv-1-mes\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931673-unitv-30dias\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1932852-unitv-anual\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1931669-unitv-mensal\r\n\r\nhttps://catalogoapp.mobi/acertodigital/product?code=1932853-unitv-trimestral', 'Recebido', '2026-08-07 05:45:54', '2026-08-07 05:45:54');

-- --------------------------------------------------------

--
-- Estrutura para tabela `depoimento`
--

CREATE TABLE `depoimento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` longtext COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` longtext COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_01-01_000000_create_banner_table', 1),
(2, '2023_01-01_000000_create_blog_table', 1),
(3, '2023_01-01_000000_create_categoria_table', 1),
(4, '2023_01-01_000000_create_depoimento_table', 1),
(5, '2023_01-01_000000_create_solucao_table', 1),
(6, '2023_01-01_000000_create_contato_table', 1),
(7, '2023_01-01_000000_create_failed_jobs_table', 1),
(8, '2023_01-01_000000_create_galeria_table', 1),
(9, '2023_01-01_000000_create_newsletter_table', 1),
(10, '2023_01-01_000000_create_password_resets_table', 1),
(11, '2023_01-11_000000_create_privacidade_table', 1),
(12, '2023_01-01_000000_create_quemsomos_table', 1),
(13, '2023_01-01_000000_create_siteconfig_table', 1),
(14, '2023_01-01_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `newsletter`
--

CREATE TABLE `newsletter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situacao` enum('Ativo','Desativado') COLLATE utf8mb4_unicode_ci DEFAULT 'Ativo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `privacidade`
--

CREATE TABLE `privacidade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `privacidade`
--

INSERT INTO `privacidade` (`id`, `titulo`, `texto`, `created_at`, `updated_at`) VALUES
(1, 'Sua Navegação Segura', '<p><strong><em>Atualizada em 28.09.2023</em></strong></p>\r\n\r\n<p>A sua privacidade &eacute; muito importante para n&oacute;s. &Eacute; pol&iacute;tica da <strong>METALMAR</strong> respeitar a sua privacidade em rela&ccedil;&atilde;o a qualquer informa&ccedil;&atilde;o sua que coletemos no site <strong>METALMAR</strong>, e outros sites que possu&iacute;mos e operamos.</p>\r\n\r\n<p>Solicitamos informa&ccedil;&otilde;es apenas quando realmente precisamos delas para lhe fornecer um servi&ccedil;o. Realizamos por meios justos e legais, com o seu conhecimento e consentimento. Tamb&eacute;m informamos por que estamos coletando e como ser&aacute; usado.</p>\r\n\r\n<p>Apenas retemos as informa&ccedil;&otilde;es coletadas pelo tempo necess&aacute;rio para fornecer o servi&ccedil;o solicitado. Quando armazenamos dados, protegemos em meios comercialmente aceit&aacute;veis para evitar perdas e roubos, bem como acesso, divulga&ccedil;&atilde;o, c&oacute;pia, uso ou modifica&ccedil;&atilde;o n&atilde;o autorizados.</p>\r\n\r\n<p>N&atilde;o compartilhamos informa&ccedil;&otilde;es de identifica&ccedil;&atilde;o pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>\r\n\r\n<p>O nosso site pode ter links para sites externos que n&atilde;o s&atilde;o operados por n&oacute;s. Esteja ciente de que n&atilde;o temos controle sobre o conte&uacute;do e pr&aacute;ticas desses sites e n&atilde;o podemos aceitar responsabilidade por suas respectivas pol&iacute;ticas de privacidade.</p>\r\n\r\n<p>Voc&ecirc; &eacute; livre para recusar a nossa solicita&ccedil;&atilde;o de informa&ccedil;&otilde;es, entendendo que talvez n&atilde;o possamos fornecer alguns dos servi&ccedil;os desejados. O uso continuado de nosso site ser&aacute; considerado aceita&ccedil;&atilde;o de nossas pr&aacute;ticas em torno de privacidade e informa&ccedil;&otilde;es pessoais. Se voc&ecirc; tiver alguma d&uacute;vida sobre como lidamos com dados do usu&aacute;rio e informa&ccedil;&otilde;es pessoais, entre em contato conosco.</p>\r\n\r\n<p>Pol&iacute;tica de Cookies <strong>METALMAR</strong></p>\r\n\r\n<p><strong>O que s&atilde;o cookies?</strong></p>\r\n\r\n<p>Como &eacute; pr&aacute;tica comum em quase todos os sites profissionais, este site usa cookies, que s&atilde;o pequenos arquivos baixados no seu computador, para melhorar sua experi&ecirc;ncia. Esta p&aacute;gina descreve quais informa&ccedil;&otilde;es eles coletam, como as usamos e por que &agrave;s vezes precisamos armazenar esses cookies. Tamb&eacute;m compartilharemos como voc&ecirc; pode impedir que esses cookies sejam armazenados, no entanto, isso pode fazer o downgrade ou &#39;quebrar&#39; certos elementos da funcionalidade do site.</p>\r\n\r\n<p><strong>Como usamos os cookies?</strong></p>\r\n\r\n<p>Utilizamos cookies por v&aacute;rios motivos, detalhados abaixo. Infelizmente, geralmente, n&atilde;o existem op&ccedil;&otilde;es padr&atilde;o do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. &Eacute; recomend&aacute;vel que voc&ecirc; deixe todos os cookies se n&atilde;o tiver certeza se precisa ou n&atilde;o deles, caso sejam usados ​​para fornecer um servi&ccedil;o que voc&ecirc; usa.</p>\r\n\r\n<p><strong>Desativar cookies</strong></p>\r\n\r\n<p>Voc&ecirc; pode impedir a configura&ccedil;&atilde;o de cookies ajustando as configura&ccedil;&otilde;es do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativa&ccedil;&atilde;o de cookies afetar&aacute; a funcionalidade deste e de muitos outros sites que voc&ecirc; visita. A desativa&ccedil;&atilde;o de cookies geralmente resultar&aacute; na desativa&ccedil;&atilde;o de determinadas funcionalidades e recursos deste site. Portanto, &eacute; recomend&aacute;vel que voc&ecirc; n&atilde;o desative os cookies.</p>\r\n\r\n<p><strong>Cookies que definimos</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp; Cookies relacionados &agrave; conta</strong></p>\r\n\r\n<p>Esses cookies ser&atilde;o geralmente exclu&iacute;dos quando voc&ecirc; sai do sistema, por&eacute;m, em alguns casos, eles poder&atilde;o permanecer posteriormente para lembrar as prefer&ecirc;ncias do seu site ao sair.</p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp; Cookies relacionados ao login</strong></p>\r\n\r\n<p>Utilizamos cookies quando voc&ecirc; est&aacute; logado, para podermos lembrar dessa a&ccedil;&atilde;o. Isso evita que voc&ecirc; precise fazer login sempre que visitar uma nova p&aacute;gina. Esses cookies s&atilde;o normalmente removidos ou limpos quando voc&ecirc; efetua logout para garantir que voc&ecirc; possa acessar apenas a recursos e &aacute;reas restritas ao efetuar login.</p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp; Cookies de prefer&ecirc;ncias do site</strong></p>\r\n\r\n<p>Para proporcionar uma &oacute;tima experi&ecirc;ncia neste site, fornecemos a funcionalidade para definir suas prefer&ecirc;ncias de como esse site &eacute; executado quando voc&ecirc; o usa. Para lembrar suas prefer&ecirc;ncias, precisamos definir cookies para que essas informa&ccedil;&otilde;es possam ser chamadas sempre que voc&ecirc; interagir com uma p&aacute;gina for afetada por suas prefer&ecirc;ncias.</p>\r\n\r\n<p><strong>Compromisso do Usu&aacute;rio</strong></p>\r\n\r\n<p>O usu&aacute;rio se compromete a fazer uso adequado dos conte&uacute;dos e da informa&ccedil;&atilde;o que a <strong>METALMAR</strong> oferece no site e com car&aacute;ter enunciativo, mas n&atilde;o limitativo:</p>\r\n\r\n<p><strong>A)</strong> N&atilde;o se envolver em atividades que sejam ilegais ou contr&aacute;rias &agrave; boa-f&eacute; e &agrave; ordem p&uacute;blica;</p>\r\n\r\n<p><strong>B)</strong> N&atilde;o difundir propaganda ou conte&uacute;do de natureza racista, xenof&oacute;bica, ou sobre cassinos, casas de apostas (ex.:), jogos de sorte e azar, qualquer tipo de pornografia, de apologia ao terrorismo ou contra os direitos humanos;</p>\r\n\r\n<p><strong>C)</strong> N&atilde;o causar danos aos sistemas f&iacute;sicos (hardwares) e l&oacute;gicos (softwares) da <strong>METALMAR</strong>, de seus fornecedores ou terceiros, para introduzir ou disseminar v&iacute;rus inform&aacute;ticos ou quaisquer outros sistemas de hardware, ou software que consigam causar danos anteriormente mencionados.</p>\r\n\r\n<p><strong>Mais informa&ccedil;&otilde;es</strong></p>\r\n\r\n<p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que n&atilde;o tem certeza se precisa ou n&atilde;o, geralmente &eacute; mais seguro deixar os cookies ativados, caso interaja com um dos recursos que voc&ecirc; usa em nosso site.</p>\r\n\r\n<p><strong>&Acirc;mbito</strong></p>\r\n\r\n<p>Esta pol&iacute;tica aplica-se a qualquer usu&aacute;rio da <strong>METALMAR</strong>.</p>\r\n\r\n<p><strong>Respons&aacute;vel pelo tratamento dos dados</strong></p>\r\n\r\n<p>A <strong>METALMAR</strong> &eacute; respons&aacute;vel pelo tratamento dos dados.</p>\r\n\r\n<p><strong>Atualiza&ccedil;&otilde;es desta pol&iacute;tica</strong></p>\r\n\r\n<p>Ocasionalmente, poderemos atualizar esta pol&iacute;tica de privacidade. Se voc&ecirc; usar nossos servi&ccedil;os ap&oacute;s uma atualiza&ccedil;&atilde;o, voc&ecirc; consentir&aacute; a pol&iacute;tica atualizada.</p>', '2023-09-28 06:51:42', '2024-01-25 19:51:20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quemsomos`
--

CREATE TABLE `quemsomos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tituloum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulodois` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulotres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `textoum` longtext COLLATE utf8mb4_unicode_ci,
  `textodois` longtext COLLATE utf8mb4_unicode_ci,
  `textotres` longtext COLLATE utf8mb4_unicode_ci,
  `imgum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgdois` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgtres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframevideo` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `quemsomos`
--

INSERT INTO `quemsomos` (`id`, `tituloum`, `titulodois`, `titulotres`, `textoum`, `textodois`, `textotres`, `imgum`, `imgdois`, `imgtres`, `iframevideo`, `created_at`, `updated_at`) VALUES
(1, 'MetalMar Manutenção com Excelência', 'MetalMar é Garantia de Eficiência', '100% de Confiabilidade e Entregabilidade para Nossos Clientes e Parceiros', '<p>A <strong>MetalMar</strong> entende a import&acirc;ncia da <strong>Manuten&ccedil;&atilde;o Industrial e Naval</strong> para garantir a efici&ecirc;ncia operacional das m&aacute;quinas e equipamentos <strong>industriais e navais</strong>. Por isso, oferecemos servi&ccedil;os de inspe&ccedil;&atilde;o, diagn&oacute;stico, reparo e manuten&ccedil;&atilde;o programada, sempre utilizando as melhores t&eacute;cnicas e tecnologias.</p>\r\n\r\n<p>Dessa forma, nossos clientes t&ecirc;m a garantia de <em><strong>redu&ccedil;&atilde;o de custos operacionais, aumento da produtividade e maior seguran&ccedil;a no trabalho.</strong></em></p>', '<p><em><strong>Somos uma empresa especializada em execu&ccedil;&atilde;o e gest&atilde;o da manuten&ccedil;&atilde;o, com experi&ecirc;ncia na &aacute;rea industrial e naval, realizamos servi&ccedil;os de Metalmec&acirc;nica, e solu&ccedil;&otilde;es de engenharia.</strong></em></p>\r\n\r\n<p>Estamos no mercado<strong> desde 2014</strong> e, por isso, somos uma <strong>empresa experiente no ramo de manuten&ccedil;&atilde;o</strong>. Nosso escrit&oacute;rio est&aacute; localizado em <strong>Bel&eacute;m do Par&aacute;</strong>, nossos servi&ccedil;os s&atilde;o realizados conforme as normas, m&eacute;todos de engenharia, padr&otilde;es, seguran&ccedil;a, qualidade e produtividade.</p>\r\n\r\n<p>Nosso objetivo &eacute; ser <em><strong>refer&ecirc;ncia no mercado como empresa prestadora de servi&ccedil;os de manuten&ccedil;&atilde;o</strong></em> com foco em <strong>atividades mec&acirc;nicas, metal&uacute;rgicos, solu&ccedil;&otilde;es de engenharia de manuten&ccedil;&atilde;o e fornecimento de m&atilde;o de obra especializada industrial.</strong></p>', '<p><span style=\"color:#23639d\"><strong>MISS&Atilde;O</strong></span></p>\r\n\r\n<p><strong>Oferecer Presta&ccedil;&atilde;o de Servi&ccedil;os com Excel&ecirc;ncia, Desenvolvendo Solu&ccedil;&otilde;es com Qualidade T&eacute;cnica para atender as expectativas dos nossos clientes, fornecedores, prepostos e comunidade.</strong></p>\r\n\r\n<hr>\r\n<p><span style=\"color:#23639d\"><strong>VIS&Atilde;O</strong></span></p>\r\n\r\n<p><strong>Sermos Reconhecidos no Mercado como uma empresa da manuten&ccedil;&atilde;o naval, industrial na presta&ccedil;&atilde;o de servi&ccedil;os de forma segura com excel&ecirc;ncia, qualidade e confiabilidade.</strong></p>\r\n\r\n<hr>\r\n<p><span style=\"color:#23639d\"><strong>VALORES</strong></span></p>\r\n\r\n<p><strong>Honestidade, Transpar&ecirc;ncia, &Eacute;tica, Respeito e Compromisso.</strong></p>', 'uploads/quemsomos/MTI1D6LE26zqbqzhPS1NPnrh6NxNpoOkbLfdkyd7.webp', 'uploads/quemsomos/q1eGx7vDfkloJOx0fRGNNpeOmbTQYgUjUZVGRbgl.webp', 'uploads/quemsomos/slxErxtR5QQKbR446hUmru9TyJfkqCUkyQaqZBOc.webp', NULL, '2023-09-28 06:37:43', '2024-05-27 13:05:54');

-- --------------------------------------------------------

--
-- Estrutura para tabela `siteconfig`
--

CREATE TABLE `siteconfig` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomesite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` longtext COLLATE utf8mb4_unicode_ci,
  `palavraschave` longtext COLLATE utf8mb4_unicode_ci,
  `endereco` longtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkendereco` longtext COLLATE utf8mb4_unicode_ci,
  `iframemapa` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` longtext COLLATE utf8mb4_unicode_ci,
  `instagram` longtext COLLATE utf8mb4_unicode_ci,
  `whatsapp` longtext COLLATE utf8mb4_unicode_ci,
  `twitter` longtext COLLATE utf8mb4_unicode_ci,
  `linkedin` longtext COLLATE utf8mb4_unicode_ci,
  `youtube` longtext COLLATE utf8mb4_unicode_ci,
  `facebookid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taghead` longtext COLLATE utf8mb4_unicode_ci,
  `codchat` longtext COLLATE utf8mb4_unicode_ci,
  `logobranca` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logoescura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `siteconfig`
--

INSERT INTO `siteconfig` (`id`, `nomesite`, `descricao`, `palavraschave`, `endereco`, `email`, `celular`, `telefone`, `linkendereco`, `iframemapa`, `facebook`, `instagram`, `whatsapp`, `twitter`, `linkedin`, `youtube`, `facebookid`, `taghead`, `codchat`, `logobranca`, `logoescura`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'MetalMar Manutenção Mecânica Industrial e Naval', 'Somos uma empresa especializada em execução e gestão da manutenção, com experiência na área de mecânica industrial e naval.', 'manutencao mecanica industrial, manutencao mecanica naval, gestao de manutencao, industrial, naval', 'Av. Arthur Bernardes, 6331 - Tapanã, Belém - PA', 'comercial@metalmar.ind.br', '(91) 98567-9369', NULL, 'https://maps.app.goo.gl/771Qf6XDCrsP6rUJ6', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d791.4618494575512!2d-48.478915240215905!3d-1.345915903807891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a461ae8ef792cd%3A0x9343cbcbcbb77b80!2sMetalMar%20Manuten%C3%A7%C3%A3o%20Industrial%20e%20Naval!5e0!3m2!1spt-BR!2sbr!4v1733236350639!5m2!1spt-BR!2sbr\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.facebook.com/metalmaroficial', 'https://www.instagram.com/metalmaroficial/', 'https://wa.me/5591985679369', NULL, NULL, NULL, NULL, '<!-- Google tag (gtag.js) -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-B7S8D6E6FD\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-B7S8D6E6FD\');\r\n</script>', NULL, 'uploads/siteconfig/Eyf1qF5VtOSSL9ECgnTG5RMkEkJKqeBPQfm2AVEY.webp', 'uploads/siteconfig/12YXoznqxTxyrBFS0vVWX9PuPf67Hpe3c0W9O7iP.webp', 'uploads/siteconfig/MtepDhHZiPejnUfxDan9JViYRT6JgtemUpWoBg5s.webp', '2023-09-28 06:31:13', '2025-09-12 14:06:36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `solucao`
--

CREATE TABLE `solucao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urltitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` longtext COLLATE utf8mb4_unicode_ci,
  `descricao` longtext COLLATE utf8mb4_unicode_ci,
  `descricaodois` longtext COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situacao` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `solucao`
--

INSERT INTO `solucao` (`id`, `titulo`, `urltitulo`, `texto`, `descricao`, `descricaodois`, `img`, `img2`, `img3`, `situacao`, `created_at`, `updated_at`) VALUES
(1, 'Manutenção Mecânica Industrial', 'manutencao-mecanica-industrial-em-belem-do-para', '<p><strong>A MetalMar: Excel&ecirc;ncia em Manuten&ccedil;&atilde;o Mec&acirc;nica Industrial</strong></p>\r\n\r\n<p>A ind&uacute;stria moderna depende de equipamentos mec&acirc;nicos confi&aacute;veis e eficientes para garantir a produ&ccedil;&atilde;o cont&iacute;nua e a qualidade dos produtos. Nesse contexto, <em><strong>contar com um servi&ccedil;o de manuten&ccedil;&atilde;o mec&acirc;nica industrial especializado &eacute; fundamental para o bom funcionamento das m&aacute;quinas e a redu&ccedil;&atilde;o de poss&iacute;veis paradas n&atilde;o programadas.</strong></em></p>\r\n\r\n<p>A <strong>MetalMar</strong> &eacute; uma empresa renomada no ramo da <strong>manuten&ccedil;&atilde;o mec&acirc;nica industrial</strong>, oferecendo solu&ccedil;&otilde;es completas e personalizadas para as necessidades de seus clientes. Com uma equipe altamente qualificada e experiente, a <strong>MetalMar</strong> se destaca pela excel&ecirc;ncia em seus servi&ccedil;os e pelo compromisso em entregar resultados de alto n&iacute;vel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Equipe altamente qualificada e experiente\" src=\"https://www.metalmar.ind.br/storage/uploads/solucao/JgpWSTTFYOUeBNjuEkvinGXAqolXDFybX1iqMgJq.webp\" style=\"max-height:400px; text-align:center; width:100%\"></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Um dos principais diferenciais da <strong>MetalMar</strong> est&aacute; no fornecimento de <strong>manuten&ccedil;&atilde;o preventiva e corretiva</strong>. A manuten&ccedil;&atilde;o preventiva visa evitar falhas e prolongar a vida &uacute;til dos equipamentos, mediante inspe&ccedil;&otilde;es peri&oacute;dicas, limpeza, lubrifica&ccedil;&atilde;o e substitui&ccedil;&atilde;o de pe&ccedil;as desgastadas. J&aacute; a manuten&ccedil;&atilde;o corretiva atua no reparo imediato de problemas identificados, visando restabelecer o pleno funcionamento dos equipamentos o mais r&aacute;pido poss&iacute;vel.</p>\r\n\r\n<p>Al&eacute;m disso, a <strong>MetalMar</strong> tamb&eacute;m oferece servi&ccedil;os de diagn&oacute;stico, moderniza&ccedil;&atilde;o e retrofitting de equipamentos industriais. Atrav&eacute;s do uso de tecnologias avan&ccedil;adas e m&eacute;todos atualizados, <em><strong>a empresa &eacute; capaz de identificar falhas e propor solu&ccedil;&otilde;es eficientes para melhorar o desempenho dos equipamentos, aumentar sua vida &uacute;til e reduzir custos operacionais.</strong></em></p>\r\n\r\n<p>Outro destaque da <strong>MetalMar</strong> &eacute; o compromisso com a seguran&ccedil;a e o meio ambiente. A empresa segue rigorosamente todas as <strong>normas e regulamenta&ccedil;&otilde;es de seguran&ccedil;a</strong>, garantindo a integridade dos colaboradores e a prote&ccedil;&atilde;o do ambiente de trabalho. Al&eacute;m disso, <em><strong>a MetalMar busca constantemente solu&ccedil;&otilde;es sustent&aacute;veis, visando minimizar o impacto ambiental de suas atividades.</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Compromisso com a segurança e o meio ambiente\" src=\"https://www.metalmar.ind.br/storage/uploads/solucao/WiABJmH3zJyT6KR4mFsfYAnRDaE1C8m4Id4M4Ne9.webp\" style=\"max-height:400px; text-align:center; width:100%\"></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para atender &agrave;s necessidades espec&iacute;ficas de cada cliente, a <strong>MetalMar</strong> oferece um atendimento personalizado e flex&iacute;vel. <em><strong>A empresa est&aacute; preparada para lidar com diferentes tipos de equipamentos e setores industriais, adaptando-se &agrave;s demandas espec&iacute;ficas de cada projeto.</strong></em></p>\r\n\r\n<p>Em suma, a <strong>MetalMar</strong> se destaca como uma refer&ecirc;ncia no mercado de <strong>manuten&ccedil;&atilde;o mec&acirc;nica industrial</strong>. Com servi&ccedil;os de <strong>manuten&ccedil;&atilde;o preventiva e corretiva</strong>, diagn&oacute;stico avan&ccedil;ado e compromisso com a seguran&ccedil;a e o meio ambiente, a empresa oferece solu&ccedil;&otilde;es completas e confi&aacute;veis para seus clientes.</p>\r\n\r\n<p>Se voc&ecirc; busca excel&ecirc;ncia em manuten&ccedil;&atilde;o mec&acirc;nica industrial, conte com a <strong>MetalMar</strong>.</p>\r\n\r\n<p><strong>Entre em contato com a MetalMar e solicite uma visita t&eacute;cnica para avalia&ccedil;&atilde;o do seu projeto sem compromisso.</strong></p>', 'A MetalMar é uma empresa renomada no ramo da manutenção mecânica industrial, oferecendo soluções completas e personalizadas.', '<p>A <strong>MetalMar</strong> &eacute; uma empresa renomada no ramo da <strong>manuten&ccedil;&atilde;o mec&acirc;nica industrial</strong>, oferecendo solu&ccedil;&otilde;es completas e personalizadas para as necessidades de seus clientes.</p>\r\n\r\n<p>Com uma equipe altamente qualificada e experiente, a <strong>MetalMar</strong> se destaca pela excel&ecirc;ncia em seus servi&ccedil;os e pelo compromisso em entregar resultados de alto n&iacute;vel.</p>\r\n\r\n<p><strong>Entre em contato com a MetalMar e solicite uma visita t&eacute;cnica para avalia&ccedil;&atilde;o do seu projeto sem compromisso.</strong></p>', 'uploads/solucao/TMxeQcwlrwjN8RkyIYcuhj9BwfNSEwScfwmUxyPf.webp', 'uploads/solucao/JgpWSTTFYOUeBNjuEkvinGXAqolXDFybX1iqMgJq.webp', 'uploads/solucao/WiABJmH3zJyT6KR4mFsfYAnRDaE1C8m4Id4M4Ne9.webp', '1', '2023-09-28 06:41:47', '2024-05-27 13:14:52'),
(2, 'Manutenção Mecânica Naval', 'manutencao-mecanica-naval-em-belem-do-para', '<p><strong>Manuten&ccedil;&atilde;o Mec&acirc;nica Naval: Garantindo a Efici&ecirc;ncia e Seguran&ccedil;a com a MetalMar</strong></p>\r\n\r\n<p><em><strong>A manuten&ccedil;&atilde;o mec&acirc;nica naval desempenha um papel crucial na ind&uacute;stria mar&iacute;tima, garantindo o funcionamento seguro e eficiente das embarca&ccedil;&otilde;es.</strong></em> Nesse contexto, a <strong>MetalMar</strong> destaca-se como uma prestadora de servi&ccedil;os especializada em manuten&ccedil;&atilde;o preventiva e corretiva, oferecendo solu&ccedil;&otilde;es confi&aacute;veis e de alta qualidade para o setor naval.</p>\r\n\r\n<p><strong>Benef&iacute;cios da Manuten&ccedil;&atilde;o Preventiva</strong></p>\r\n\r\n<p>A manuten&ccedil;&atilde;o preventiva &eacute; essencial para evitar falhas mec&acirc;nicas inesperadas e minimizar o tempo de inatividade das embarca&ccedil;&otilde;es. A <strong>MetalMar</strong> compreende a import&acirc;ncia desse tipo de servi&ccedil;o e oferece um programa abrangente de <strong>manuten&ccedil;&atilde;o preventiva</strong>, baseado em an&aacute;lises t&eacute;cnicas e inspe&ccedil;&otilde;es regulares. Isso ajuda a identificar potenciais problemas antes que se tornem grandes obst&aacute;culos, aumentando a seguran&ccedil;a e prolongando a vida &uacute;til dos equipamentos.</p>\r\n\r\n<p><strong>Solu&ccedil;&otilde;es de manuten&ccedil;&atilde;o corretiva</strong></p>\r\n\r\n<p>Mesmo com a manuten&ccedil;&atilde;o preventiva adequada, problemas mec&acirc;nicos podem ocorrer. A <strong>MetalMar</strong> est&aacute; preparada para lidar com essas situa&ccedil;&otilde;es, oferecendo servi&ccedil;os de <strong>manuten&ccedil;&atilde;o corretiva eficientes e &aacute;geis</strong>. Seja para reparos emergenciais ou substitui&ccedil;&atilde;o de componentes danificados, a empresa possui uma equipe altamente qualificada e equipamentos modernos para resolver qualquer problema mec&acirc;nico naval.</p>\r\n\r\n<p><strong>Profissionalismo e expertise</strong></p>\r\n\r\n<p>A <strong>MetalMar</strong> destaca-se pela sua equipe t&eacute;cnica altamente capacitada, formada por profissionais experientes na &aacute;rea da manuten&ccedil;&atilde;o mec&acirc;nica naval. Com um profundo conhecimento dos sistemas e equipamentos utilizados em embarca&ccedil;&otilde;es, eles conseguem diagnosticar e solucionar problemas eficazmente, garantindo a m&aacute;xima efici&ecirc;ncia operacional das embarca&ccedil;&otilde;es.</p>\r\n\r\n<p><strong>Compromisso com a qualidade</strong></p>\r\n\r\n<p><em><strong>A MetalMar tem como princ&iacute;pio fundamental o compromisso com a qualidade em seus servi&ccedil;os.</strong></em> Utilizando pe&ccedil;as e componentes originais, seguindo as melhores pr&aacute;ticas da ind&uacute;stria e adotando tecnologias avan&ccedil;adas, a empresa assegura que cada trabalho de manuten&ccedil;&atilde;o seja realizado com excel&ecirc;ncia e precis&atilde;o.</p>\r\n\r\n<p><strong>Contrata&ccedil;&atilde;o</strong></p>\r\n\r\n<p>No setor naval, a manuten&ccedil;&atilde;o mec&acirc;nica &eacute; essencial para garantir a seguran&ccedil;a e o desempenho adequado das embarca&ccedil;&otilde;es. A <strong>MetalMar</strong> destaca-se como uma empresa confi&aacute;vel, oferecendo servi&ccedil;os de <strong>manuten&ccedil;&atilde;o preventiva e corretiva de alta qualidade</strong>, respaldados por profissionais qualificados e um compromisso inabal&aacute;vel com a excel&ecirc;ncia.</p>\r\n\r\n<p>Ao escolher a <strong>MetalMar</strong>, os clientes t&ecirc;m a garantia de que suas embarca&ccedil;&otilde;es ser&atilde;o cuidadas com o m&aacute;ximo profissionalismo e expertise.</p>\r\n\r\n<p><strong>Entre em contato com a MetalMar e solicite uma visita t&eacute;cnica para avalia&ccedil;&atilde;o do seu projeto sem compromisso.</strong></p>', 'A manutenção mecânica naval desempenha um papel crucial na indústria marítima, garantindo o funcionamento seguro e eficiente das embarcações.', '<p>No setor naval, a manuten&ccedil;&atilde;o mec&acirc;nica &eacute; essencial para garantir a seguran&ccedil;a e o desempenho adequado das embarca&ccedil;&otilde;es. A MetalMar destaca-se como uma empresa confi&aacute;vel, oferecendo servi&ccedil;os de <strong>manuten&ccedil;&atilde;o preventiva e corretiva de alta qualidade</strong>, respaldados por profissionais qualificados e um compromisso inabal&aacute;vel com a excel&ecirc;ncia.</p>\r\n\r\n<p>Ao escolher a MetalMar, os clientes t&ecirc;m a garantia de que suas embarca&ccedil;&otilde;es ser&atilde;o cuidadas com o m&aacute;ximo profissionalismo e expertise.</p>\r\n\r\n<p><strong>Entre em contato com a MetalMar e solicite uma visita t&eacute;cnica para avalia&ccedil;&atilde;o do seu projeto sem compromisso.</strong></p>', 'uploads/solucao/gKFef4JTRwLk8vbRqE1HTJ04cntMjXsOK4zrvdsz.webp', NULL, NULL, '1', '2023-09-28 06:49:23', '2024-01-25 19:41:44'),
(3, 'Fornecimento de Mão de Obra Qualificada', 'fornecimento-de-mao-de-obra-qualificada-em-belem-do-para', '<p><strong>O servi&ccedil;o de Fornecimento de M&atilde;o de Obra Qualificada para o setor de Manuten&ccedil;&atilde;o Industrial e Naval da empresa MetalMar</strong></p>\r\n\r\n<p>No setor <strong>industrial e naval</strong>, a manuten&ccedil;&atilde;o &eacute; um aspecto fundamental que garante o funcionamento seguro e eficiente das opera&ccedil;&otilde;es. Nesse contexto, a empresa <strong>MetalMar</strong> tem se destacado ao oferecer um servi&ccedil;o de <strong>fornecimento de m&atilde;o de obra qualificada</strong>, atendendo &agrave;s demandas espec&iacute;ficas do setor.</p>\r\n\r\n<p><strong>Benef&iacute;cios e vantagens desse servi&ccedil;o para a ind&uacute;stria e o segmento naval.</strong></p>\r\n\r\n<p><strong>1. Confiabilidade e expertise t&eacute;cnica:</strong></p>\r\n\r\n<p>A <strong>MetalMar</strong> se destaca ao fornecer profissionais altamente qualificados e experientes em manuten&ccedil;&atilde;o industrial e naval. <em><strong>Esses especialistas possuem um amplo conhecimento t&eacute;cnico, permitindo que lidem com uma ampla gama de equipamentos e sistemas complexos</strong></em>. Isso garante uma manuten&ccedil;&atilde;o confi&aacute;vel, reduzindo o tempo de inatividade n&atilde;o programado.</p>\r\n\r\n<p><strong>2. Flexibilidade e agilidade:</strong></p>\r\n\r\n<p>O servi&ccedil;o de <strong>fornecimento de m&atilde;o de obra qualificada</strong> da <strong>MetalMar</strong> oferece flexibilidade &agrave;s empresas do setor industrial e naval. Com uma equipe sob demanda, <em><strong>&eacute; poss&iacute;vel ajustar a quantidade de profissionais conforme as necessidades espec&iacute;ficas dos projetos</strong></em>. Al&eacute;m disso, a empresa consegue mobilizar rapidamente sua equipe para atender emerg&ecirc;ncias ou prazos apertados.</p>\r\n\r\n<p><strong>3. Redu&ccedil;&atilde;o de custos:</strong></p>\r\n\r\n<p><em><strong>Contratar m&atilde;o de obra qualificada para a manuten&ccedil;&atilde;o industrial e naval pode ser um processo oneroso para as empresas, envolvendo recrutamento, treinamento e encargos trabalhistas.</strong></em> Ao optar pelo servi&ccedil;o oferecido pela <strong>MetalMar</strong>, as empresas podem reduzir significativamente esses custos. A empresa &eacute; respons&aacute;vel por todo o processo de sele&ccedil;&atilde;o, treinamento e gerenciamento dos profissionais, permitindo que as empresas foquem em suas atividades principais.</p>\r\n\r\n<p><strong>4. Atualiza&ccedil;&atilde;o tecnol&oacute;gica</strong></p>\r\n\r\n<p>A ind&uacute;stria e o segmento naval est&atilde;o em constante evolu&ccedil;&atilde;o tecnol&oacute;gica. A <strong>MetalMar</strong> garante que sua equipe de profissionais esteja atualizada com as &uacute;ltimas tend&ecirc;ncias e tecnologias, proporcionando um servi&ccedil;o de manuten&ccedil;&atilde;o alinhado &agrave;s melhores pr&aacute;ticas do setor.<em><strong> Isso garante que as empresas se beneficiem das inova&ccedil;&otilde;es tecnol&oacute;gicas e melhorem sua efici&ecirc;ncia operacional.</strong></em></p>\r\n\r\n<p><strong>Contrata&ccedil;&atilde;o</strong></p>\r\n\r\n<p>O servi&ccedil;o de <strong>Fornecimento de M&atilde;o de Obra Qualificada</strong> para o setor de Manuten&ccedil;&atilde;o Industrial e Naval da empresa <strong>MetalMar</strong> se mostra uma solu&ccedil;&atilde;o eficaz <em><strong>para as empresas que buscam uma manuten&ccedil;&atilde;o confi&aacute;vel, flex&iacute;vel e especializada</strong></em>.</p>\r\n\r\n<p>Com sua equipe experiente, flexibilidade e foco na atualiza&ccedil;&atilde;o tecnol&oacute;gica, a <strong>MetalMar</strong> se torna uma parceira estrat&eacute;gica para o sucesso das opera&ccedil;&otilde;es industriais e navais.</p>\r\n\r\n<p><strong>Entre em contato com a MetalMar e solicite uma visita t&eacute;cnica para avalia&ccedil;&atilde;o do seu projeto sem compromisso.</strong></p>', 'O serviço de fornecimento de mão de obra qualificada da MetalMar oferece flexibilidade às empresas do setor industrial e naval.', '<p>O servi&ccedil;o de <strong>fornecimento de m&atilde;o de obra qualificada</strong> da <strong>MetalMar</strong> oferece flexibilidade &agrave;s empresas do setor industrial e naval. Com uma equipe sob demanda, <em><strong>&eacute; poss&iacute;vel ajustar a quantidade de profissionais conforme as necessidades espec&iacute;ficas dos projetos</strong></em>. Al&eacute;m disso, a empresa consegue mobilizar rapidamente sua equipe para atender emerg&ecirc;ncias ou prazos apertados.</p>\r\n\r\n<p><strong>Entre em contato com a MetalMar e solicite uma visita t&eacute;cnica para avalia&ccedil;&atilde;o do seu projeto sem compromisso.</strong></p>', 'uploads/solucao/SZHNSIIFR6ptadzdmIuyyQdAFAjqjdaaTcfKCaJL.webp', NULL, NULL, '1', '2023-09-28 21:07:15', '2024-01-25 19:43:26'),
(4, 'Montagem e Desmontagem de Andaimes', 'montagem-e-desmontagem-de-andaimes-em-belem-do-para', '<p><strong>Montagem e desmontagem de andaimes: a expertise da equipe capacitada da MetalMar</strong></p>\r\n\r\n<p>A <strong>montagem e desmontagem de andaimes</strong> &eacute; uma etapa crucial em diversos setores da constru&ccedil;&atilde;o civil, industrial e naval. &Eacute; fundamental contar com uma equipe capacitada para garantir a seguran&ccedil;a e efici&ecirc;ncia nesse processo. A <strong>MetalMar</strong> se destaca nesse segmento, oferecendo um servi&ccedil;o de qualidade, realizado por profissionais experientes e altamente treinados.</p>\r\n\r\n<p><strong>Seguran&ccedil;a em primeiro lugar</strong></p>\r\n\r\n<p>A seguran&ccedil;a &eacute; a principal preocupa&ccedil;&atilde;o da <strong>MetalMar</strong> ao realizar a montagem e desmontagem de andaimes. <em><strong>A equipe capacitada est&aacute; ciente das normas de seguran&ccedil;a vigentes e segue rigorosamente os procedimentos adequados</strong></em>. Isso garante um ambiente de trabalho seguro para todos os envolvidos, prevenindo acidentes e garantindo a integridade f&iacute;sica dos colaboradores.</p>\r\n\r\n<p><strong>Experi&ecirc;ncia e conhecimento t&eacute;cnico</strong></p>\r\n\r\n<p>A equipe da <strong>MetalMar</strong> possui ampla experi&ecirc;ncia na montagem e desmontagem de andaimes. <em><strong>Seus profissionais s&atilde;o treinados para lidar com diferentes tipos de andaimes, desde os mais simples at&eacute; os mais complexos</strong></em>. Eles possuem conhecimento t&eacute;cnico sobre as melhores pr&aacute;ticas de montagem, ajustes e estabilidade dos andaimes, garantindo um resultado confi&aacute;vel.</p>\r\n\r\n<p><strong>Efici&ecirc;ncia e agilidade</strong></p>\r\n\r\n<p>Al&eacute;m de priorizar a seguran&ccedil;a, a equipe capacitada da <strong>MetalMar</strong> tamb&eacute;m se destaca pela efici&ecirc;ncia e agilidade no servi&ccedil;o de <strong>montagem e desmontagem de andaimes</strong>. Com anos de experi&ecirc;ncia no ramo, eles s&atilde;o capazes de executar o trabalho com rapidez, sem comprometer a qualidade do servi&ccedil;o prestado. Isso &eacute; essencial para <em><strong>otimizar os prazos de constru&ccedil;&atilde;o e minimizar poss&iacute;veis interfer&ecirc;ncias nas atividades em andamento.</strong></em></p>\r\n\r\n<p><strong>Atendimento personalizado</strong></p>\r\n\r\n<p>A <strong>MetalMar</strong> valoriza o relacionamento com seus clientes e visa oferecer um atendimento personalizado em todos os projetos de <strong>montagem e desmontagem de andaimes</strong>. A equipe capacitada est&aacute; sempre dispon&iacute;vel para tirar d&uacute;vidas, fornecer orienta&ccedil;&otilde;es e oferecer solu&ccedil;&otilde;es adequadas &agrave;s necessidades espec&iacute;ficas de cada cliente.</p>\r\n\r\n<p><strong>Contrata&ccedil;&atilde;o</strong></p>\r\n\r\n<p>Ao escolher a <strong>MetalMar</strong> para a montagem e desmontagem de andaimes, voc&ecirc; estar&aacute; optando por um servi&ccedil;o de qualidade, executado por uma equipe capacitada e comprometida com a seguran&ccedil;a e efici&ecirc;ncia.</p>\r\n\r\n<p>Conte com a experi&ecirc;ncia e conhecimento t&eacute;cnico da MetalMar para garantir o sucesso do seu projeto.</p>\r\n\r\n<p><em><strong>Entre em contato hoje mesmo e conhe&ccedil;a mais sobre os servi&ccedil;os oferecidos.</strong></em></p>', 'A montagem e desmontagem de andaimes é uma etapa crucial em diversos setores da construção civil, industrial e naval.', NULL, 'uploads/solucao/1rPIj2jqoIFu1JbtEoVXOAYHzOT5YePdD7vNgiWN.webp', NULL, NULL, '1', '2023-09-28 21:53:58', '2024-01-25 19:44:23'),
(5, 'Manutenção em Caldeiras Industriais', 'manutencao-de-caldeiras-industriais', '<p><strong>Excel&ecirc;ncia e Seguran&ccedil;a no Servi&ccedil;o de Manuten&ccedil;&atilde;o de Caldeiras Industriais</strong></p>\r\n\r\n<p>As caldeiras industriais desempenham um papel fundamental em diversas ind&uacute;strias, proporcionando a gera&ccedil;&atilde;o de vapor essencial para processos industriais. No contexto desse cen&aacute;rio, a empresa <strong>MetalMar</strong> se destaca como refer&ecirc;ncia no mercado, oferecendo uma gama abrangente de servi&ccedil;os especializados em caldeiras industriais. Neste artigo, exploraremos os principais focos da <strong>MetalMar</strong>, destacando sua expertise em <strong>Estruturas de Rede de Tubula&ccedil;&otilde;es, Manuten&ccedil;&otilde;es Estruturais em Caldeiras, Fabrica&ccedil;&atilde;o e Reparo em Estruturas Met&aacute;licas, em Geral, e Execu&ccedil;&atilde;o de Projeto.</strong></p>\r\n\r\n<p><strong>1. Manuten&ccedil;&otilde;es Estruturais em Caldeiras</strong></p>\r\n\r\n<p>A manuten&ccedil;&atilde;o adequada das caldeiras &eacute; essencial para garantir sua opera&ccedil;&atilde;o segura e eficiente. A <strong>MetalMar</strong> oferece servi&ccedil;os de manuten&ccedil;&atilde;o estrutural em caldeiras, abrangendo <em><strong>inspe&ccedil;&otilde;es regulares, reparos preventivos e corretivos</strong></em>. Com uma equipe t&eacute;cnica altamente capacitada, a empresa identifica e soluciona problemas potenciais, promovendo a longevidade e confiabilidade das caldeiras, al&eacute;m de contribuir para a redu&ccedil;&atilde;o de custos operacionais.</p>\r\n\r\n<p><strong>2. Fabrica&ccedil;&atilde;o e Reparo em Estruturas Met&aacute;licas, em Geral</strong></p>\r\n\r\n<p>Al&eacute;m dos servi&ccedil;os espec&iacute;ficos em caldeiras, a <strong>MetalMar</strong> destaca-se na fabrica&ccedil;&atilde;o e reparo de estruturas met&aacute;licas, em geral. Seja na <em><strong>cria&ccedil;&atilde;o de componentes customizados para caldeiras ou na recupera&ccedil;&atilde;o de estruturas met&aacute;licas desgastadas</strong></em>, a empresa emprega t&eacute;cnicas avan&ccedil;adas de soldagem e materiais de alta qualidade. Essa versatilidade amplia a capacidade da <strong>MetalMar</strong> em atender &agrave;s diversas demandas dos clientes, proporcionando solu&ccedil;&otilde;es sob medida.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Estruturas de redes de tubulações\" src=\"https://www.metalmar.ind.br/storage/uploads/solucao/nTtTMrSk5gXuzNZFEoudPAnG4IA38KzYyVH8PZOt.webp\" style=\"text-align:center; width:100%\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3. Estruturas de Rede de Tubula&ccedil;&otilde;es</strong></p>\r\n\r\n<p>A efici&ecirc;ncia operacional de uma caldeira industrial depende, na maioria, da qualidade e integridade de sua rede de tubula&ccedil;&otilde;es. A <strong>MetalMar</strong> destaca-se na concep&ccedil;&atilde;o, instala&ccedil;&atilde;o e manuten&ccedil;&atilde;o de estruturas de rede de tubula&ccedil;&otilde;es,<strong> <em>garantindo n&atilde;o apenas o fluxo adequado de fluidos, mas tamb&eacute;m a conformidade com normas e regulamenta&ccedil;&otilde;es de seguran&ccedil;a</em>.</strong> Por isso, investimos em profissionais qualificados e tecnologias avan&ccedil;adas para assegurar a excel&ecirc;ncia nesse aspecto crucial.</p>\r\n\r\n<p><strong>4. Execu&ccedil;&atilde;o de Projetos</strong></p>\r\n\r\n<p>A <strong>MetalMar</strong> n&atilde;o se limita apenas &agrave; presta&ccedil;&atilde;o de servi&ccedil;os espec&iacute;ficos; a empresa tamb&eacute;m se destaca na execu&ccedil;&atilde;o completa de projetos relacionados a caldeiras industriais. <em><strong>Desde a concep&ccedil;&atilde;o inicial at&eacute; a implementa&ccedil;&atilde;o efetiva</strong></em>, a <strong>MetalMar</strong> trabalha em estreita colabora&ccedil;&atilde;o com os clientes para garantir que as solu&ccedil;&otilde;es propostas atendam n&atilde;o apenas &agrave;s expectativas, mas tamb&eacute;m aos mais elevados padr&otilde;es de qualidade e seguran&ccedil;a.</p>\r\n\r\n<p>Em um cen&aacute;rio industrial cada vez mais complexo e exigente, a <strong>MetalMar</strong> &eacute; uma empresa comprometida com a excel&ecirc;ncia em servi&ccedil;os relacionados a caldeiras industriais. Sua abordagem abrangente, que inclui <strong>Estruturas de Rede de Tubula&ccedil;&otilde;es, Manuten&ccedil;&otilde;es Estruturais em Caldeiras, Fabrica&ccedil;&atilde;o e Reparo em Estruturas Met&aacute;licas, em Geral, e Execu&ccedil;&atilde;o de Projetos</strong>, posiciona-a como uma parceira confi&aacute;vel para as ind&uacute;strias que dependem da efici&ecirc;ncia operacional de suas caldeiras.</p>\r\n\r\n<p>Com uma equipe qualificada e uma s&oacute;lida reputa&ccedil;&atilde;o no mercado, <strong>a MetalMar continua a ser uma refer&ecirc;ncia no setor, proporcionando solu&ccedil;&otilde;es inovadoras e de alta qualidade.</strong></p>\r\n\r\n<p><strong>Entre em contato com a MetalMar e solicite uma visita t&eacute;cnica para avalia&ccedil;&atilde;o do seu projeto sem compromisso.</strong></p>', 'Nossos serviços solucionam problemas potenciais, promovendo a longevidade e confiabilidade das caldeiras.', NULL, 'uploads/solucao/RwrRhIG9GwVGICGFkodNV3MrJoWnr5Ml3dNUwNha.webp', 'uploads/solucao/nTtTMrSk5gXuzNZFEoudPAnG4IA38KzYyVH8PZOt.webp', NULL, '0', '2023-12-20 14:50:46', '2025-04-14 16:40:48');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tomás Moy', 'contato@moystation.com', NULL, '$2y$10$eyvSnOvt3MkFlmHSqUinCeY.dxM9iTxAuwKAKMurKZ6tE/oF/0uaG', 'LkhVMgAsLai7RXGqV9iErBERSVjRSuttyvJC1sfxNUCNAVrz3olGfqKL0yfd', '2021-09-02 19:22:58', '2021-09-02 19:22:58'),
(2, 'Jailson Santos', 'comercial@metalmar.ind.br', NULL, '$2y$10$C3yltyTnZXSrGftAadVWAuvtBCgYHc75DfHJYPr2O.5JNEbMVgav2', '5wFW2qszWhDnW4MQwjtgsnxM2KQfhtsCMGmIHtOvAr9YQB5ULPe9Bd2KuTwM', '2023-09-28 14:03:17', '2023-09-28 14:03:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id_categoria_foreign` (`id_categoria`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `depoimento`
--
ALTER TABLE `depoimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `privacidade`
--
ALTER TABLE `privacidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `quemsomos`
--
ALTER TABLE `quemsomos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `siteconfig`
--
ALTER TABLE `siteconfig`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `solucao`
--
ALTER TABLE `solucao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `depoimento`
--
ALTER TABLE `depoimento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `privacidade`
--
ALTER TABLE `privacidade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `quemsomos`
--
ALTER TABLE `quemsomos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `siteconfig`
--
ALTER TABLE `siteconfig`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `solucao`
--
ALTER TABLE `solucao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
