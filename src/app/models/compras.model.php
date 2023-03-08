<?php
require_once "../config/connection.php";
    class Compras extends Connection {
        public static function mostrarCompras() {
            try {
                $sql = "SELECT p.nm_nome, p.descricao, p.preco
                from skate_shopping.tb_compra c, skate_shopping.tb_produto p
                where c.id_produto = p.id_produto";
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