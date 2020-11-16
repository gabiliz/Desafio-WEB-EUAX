CREATE TABLE `projetos` (
  `idprojeto` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `projectname` text NOT NULL,
  `data1` date NOT NULL,
  `data2` date NOT NULL
) 
CREATE TABLE `atividades` (
    `idprojeto` int(11) NOT NULL,
    `idatividade` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `atividade` text NOT NULL,
    `data1` date NOT NULL,
    `data2` date NOT NULL,
    `finalizada` varchar(10) NOT NULL
)