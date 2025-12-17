-- Création de la base de données
CREATE DATABASE IF NOT EXISTS gestion_etudiants CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE gestion_etudiants;

-- Table des utilisateurs
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table des étudiants
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    birth_date DATE,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertion d'un utilisateur par défaut (mot de passe: admin123)
INSERT INTO users (username, password, email) 
VALUES ('admin', '$2y$10$tS5ihCdWe9ErWBzfHHGhh.QYB5IwVenvlxwKDtGCnbnW0NmfvQnua', 'admin@example.com');

-- Insertion d'étudiants de test
INSERT INTO students (first_name, last_name, email, phone, birth_date, address) VALUES
('Jean', 'Dupont', 'jean.dupont@example.com', '0123456789', '2000-05-15', '123 Rue de Paris, 75001 Paris'),
('Marie', 'Martin', 'marie.martin@example.com', '0987654321', '1999-11-22', '456 Avenue des Champs, 69000 Lyon'),
('Pierre', 'Durand', 'pierre.durand@example.com', '0678912345', '2001-03-08', '789 Boulevard de la Mer, 13000 Marseille');
