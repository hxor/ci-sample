-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27 Mei 2018 pada 05.49
-- Versi Server: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cindex`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES
(1, 'Post 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(2, 'Post 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(3, 'Post 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(4, 'Post 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(5, 'Post 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(6, 'Post 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(7, 'Post 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(8, 'Post 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(9, 'Post 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(10, 'Post 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(11, 'Post 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(12, 'Post 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(13, 'Post 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(14, 'Post 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01'),
(15, 'Post 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus facilisis turpis vitae ultrices. Mauris id urna non nisl aliquet volutpat. Sed eu mattis odio.', '2018-05-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'User', 'user@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Member', '4kiddie04@gmail.com', 'b36acc8d695359a438f6c564053210fe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
