SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `balanse` varchar(255) NOT NULL,
  `charge` int(255) DEFAULT NULL,
  `invites` int(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

INSERT INTO
  `users` (`username`, `balanse`, `charge`, `invites`, `id`)
VALUES
  ('Dev_Scorpian', '483', 5000, 0, 1);

ALTER TABLE
  `users`
ADD
  PRIMARY KEY (`id`);

ALTER TABLE
  `users`
MODIFY
  `id` int(255) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;

COMMIT;
