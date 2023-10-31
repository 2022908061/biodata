CREATE TABLE `chelsea` (
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `chelsea` (`name`, `father`, `mother`, `address`, `phone`, `hobby`, `age`, `gender`, `email`, `images`) VALUES
('011224120276', 'Chelsea Evva Bernard', 'Bernard Fredrerine', 'Sylvia Stanislaus', 'Penampang, Sabah', '013509874',  22, 'Female', 'chelseaevva@gmail.com', 'chels.jpg');
