USE tienda_pdo;
CREATE TABLE usuarios (
  id     INT UNSIGNED  AUTO_INCREMENT PRIMARY KEY, 
  nombre  VARCHAR(100)  NOT NULL,                   
  email VARCHAR(255)   NOT NULL UNIQUE,                   
  contra VARCHAR(255)    NOT NULL                          
);
 
INSERT INTO usuarios (nombre, email, contra) VALUES
  ('Luis',       'luis@gg.es',   '1234'),
  ('Ana',        'ana@tt.es',     '1234'),
  ('Dani',    'dani@gg.es',     '1234');
