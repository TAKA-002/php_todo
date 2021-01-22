CREATE TABLE `users` (
  `id` int auto_increment NOT NULL,
  `name` varchar(25) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '',
  `updated_at` datetime NOT NULL COMMENT '',
  PRIMARY KEY (`id`)
) CHARSET=utf8 COMMENT='';

CREATE TABLE `todos` (
  `id` int auto_increment NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `details` mediumtext NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` datetime NOT NULL COMMENT '',
  `updated_at` datetime NOT NULL COMMENT '',
  `completed_at` datetime NOT NULL COMMENT '',
  `deleted_at` datetime NOT NULL COMMENT '',
  PRIMARY KEY (`id`)
) CHARSET=utf8 COMMENT='TODO';



INSERT INTO
 `users` (`id`, `name`, `mail`, `created_at`, `updated_at`)
VALUES
 (1, 'miura', 'aaaaaaaa@gmail.com', now(), now());


INSERT INTO
 `todos` (`title`, `user_id`, `details`, `status`, `created_at`, `updated_at`, `completed_at`, `deleted_at`)
VALUES
 ('wakeup morning', 1, '7oclock', 0, now(), now(), now(), now());
