CREATE TABLE `job-finder`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(20) NOT NULL ,
  `full_name` VARCHAR(20) NOT NULL ,
  `password` VARCHAR(50) NOT NULL ,
  `type` VARCHAR(20) NOT NULL ,
  `date_naissance` DATE NOT NULL ,
  PRIMARY KEY (`id`),
  UNIQUE (`email`)
);

