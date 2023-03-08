<?php
require_once "./app/config/connection.php";
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
                $sql = "insert into skate_shopping.tb_usuario values (:nome, :login, :senha, :data_nascimento, :email)";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->bindParam(':nome', $data[nome]);
                $stmt->bindParam(':login', $data[login]);
                $stmt->bindParam(':senha', $data[senha]);
                $stmt->bindParam(':data_nascimento', $data[data_nascimento]);
                $stmt->bindParam(':email', $data[email]);
                $stmt->execute();
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }
    }
?>