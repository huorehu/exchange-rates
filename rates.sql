create table rates (
	id INT PRIMARY KEY AUTO_INCREMENT,
    ccy INT,
    base_ccy INT,
    FOREIGN KEY (ccy)  REFERENCES rate_names (id),
    FOREIGN KEY (base_ccy)  REFERENCES rate_names (id),
    price DECIMAL(10,5),
    timestamp TIME
) CHARACTER SET UTF8;
