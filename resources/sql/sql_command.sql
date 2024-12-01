CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    telefono VARCHAR(15)
);

INSERT INTO clientes (nombre, email, telefono) VALUES
('Juan Pérez', 'juan@example.com', '123456789'),
('María López', 'maria@example.com', '987654321');
