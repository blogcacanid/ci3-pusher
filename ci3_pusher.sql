CREATE DATABASE ci3_pusher;
USE ci3_pusher;
 
CREATE TABLE `product` (
  `product_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Dumping data for table `pegawai`
INSERT INTO `product` (`product_name`, `product_price`) VALUES
('SO KLIN Bio-matic Front Load 2kg Box', 59500),
('SO KLIN Softergent 1.8kg Bag', 36500),
('SO KLIN Softerner 800g Bag', 17000),
('SO KLIN Bi0-matic Liquid 800ml pch', 23500),
('SO KLIN Liquid 800ml pch', 17700),
('ROYALE Pelembut Pakaian 800ml pch', 25500),
('SO KLIN RAPIKA Pelicin Pakaian 400ml', 6000),
('MAMA LEMON 800ml pch', 11900),
('MORIN Jam Strawberry 170g btl', 19000),
('MORIN Jam Hazelnut with Cocoa 150g btl', 22500),
('MORIN Jam Choco Peanut 150g btl', 17700),
('NUSANTARA Madu Murni 250ml btl', 58500),
('NUSANTARA Madu Murni Royal Jelly Bee Pollen 250ml btl', 68500),
('PIKOPI Kopi Instant 3 in 1 10x20g pck', 8800),
('LUWAK White Koffie Tarik Malaka 6x30g pck', 12900),
('TOP Coffee 2 in 1 Kopi+Gula 10s pck', 8200);
