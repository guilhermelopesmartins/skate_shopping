<?php
require_once "../config/connection.php";//"./app/config/connection.php";
    class Usuario extends Connection {

        public static function mostrarDados() {
            try {
                $sql = "select * from skate_shopping.tb_usuario";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        public static function obterPorId ($id){
            try {
                $sql = "select * from skate_shopping.tb_usuario where id_usuario = :id";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        public static function inserirUsuario ($data) {
            try {
                $sql = "INSERT INTO skate_shopping.tb_usuario 
                (nm_nome, nm_login, senha, dt_nascimento, email)
                VALUES (:nome, :login, :senha, :data_nascimento, :email)";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->bindParam(':nome', $data['nome']);
                $stmt->bindParam(':login', $data['login']);
                $stmt->bindParam(':senha', $data['senha']);
                $stmt->bindParam(':data_nascimento', $data['data_nascimento']);
                $stmt->bindParam(':email', $data['email']);
                $stmt->execute();
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        public static function fazerLogin ($data) {
            try {
                $sql = "SELECT * FROM skate_shopping.tb_usuario
                WHERE nm_login = :login AND senha = :senha";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->bindParam(':login', $data['login']);
                $stmt->bindParam(':senha', $data['senha']);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        public static function excluirUsuario ($id) {
            try {
                $sql = "DELETE from skate_shopping.tb_usuario
                WHERE id_usuario = :id";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        public static function alterarUsuario ($data) {
            try {
                $sql = "UPDATE skate_shopping.tb_usuario SET 
                    nm_nome = :nome,
                    nm_login = :login,
                    senha = :senha,
                    dt_nascimento = :data_nascimento,
                    email = :email
                where id_usuario = :id";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->bindParam(':nome', $data['nome']);
                $stmt->bindParam(':login', $data['login']);
                $stmt->bindParam(':senha', $data['senha']);
                $stmt->bindParam(':data_nascimento', $data['data_nascimento']);
                $stmt->bindParam(':email', $data['email']);
                $stmt->bindParam(':id', $data['id']);
                $stmt->execute();
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }
    }
?>