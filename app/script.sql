CREATE TABLE `catalog_products` (
                                    `id` INT NOT NULL AUTO_INCREMENT,
                                    `title` varchar(255) NOT NULL,
                                    `data_import` DATE NOT NULL,
                                    `data_make` DATE NOT NULL,
                                    `amount_product` INT NOT NULL,
                                    `weight` INT NOT NULL,
                                    `best_before` INT NOT NULL,
                                    `shop` varchar(255) NOT NULL,
                                    `category` varchar(255) NOT NULL,
                                    `barcode` varchar(255) NOT NULL,
                                    PRIMARY KEY (`id`)
);