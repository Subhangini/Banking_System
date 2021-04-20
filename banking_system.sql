SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Subhangini', 'Nandini', 100),
('Varsha', 'Himanshu', 50),
('Pikansha', 'Nandini', 200),
('Sehaj', 'Ankit', 100),
('Yukta', 'Pranav', 110),
('Pranav', 'Tarun', 110);

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Subhangini', 'subhangini@gmail.com', 1010),
('Nandini', 'nandini@gmail.com', 990),
('Varsha', 'varsha@gmail.com', 1000),
('Himanshu', 'himanshu@gmail.com', 950),
('Pikansha', 'pikansha@gmail.com', 1000),
('Pranav', 'pranav@gmail.com', 1000),
('Sehaj', 'sehaj@gmail.com', 1000),
('Yukta', 'yukta@gmail.com', 1050),
('Tarun', 'tarun@gmail.com', 800),
('Ankit', 'ankit@gmail.com', 1200);
COMMIT;

