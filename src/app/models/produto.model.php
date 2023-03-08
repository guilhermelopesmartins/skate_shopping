<?php
require_once "../config/connection.php";
    class Produto extends Connection {
        public static function mostraProdutos() {
            try {
                $sql = "SELECT * from skate_shopping.tb_produto";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }

        public static function comprar($data) {
            try {
                $sql = "INSERT INTO skate_shopping.tb_compra 
                (id_produto, id_usuario, dt_compra) 
                values (:id_produto, :id_usuario, :dt_compra)";
                $stmt = Connection::getConnection()->prepare($sql);
                $stmt->bindParam(':id_produto', $data['id_produto']);
                $stmt->bindParam(':id_usuario', $data['id_usuario']);
                $stmt->bindParam(':dt_compra', $data['dt_compra']);
                $stmt->execute();
                return true;
            } catch (PDOException $th) {
                echo $th->getMessage();
            }
        }
    }

?>