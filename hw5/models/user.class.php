<?php
class User
{
    private $cartArr = []; // массив товаров в корзине

    public function __construct($db, $username, $password)
    {
        if (!$this->ifAuth())
            self::login($db, $username, $password);
        else return true;
    }

    /**
     * Метод авторизации пользователя
     * @param $db
     * @param $username
     * @param $password
     * @return bool
     */
    private function login($db, $username, $password)
    {
        if($this->ifAuth()) {
            echo "Вы уже вошли под именем" . $_SESSION['user'];
            return false;
        }
        $query = "SELECT * FROM shop.users
                           WHERE name='$username' AND password='$password'";
        $result = $db->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION= [
                'id' => $row['id'],
                'user' => $username,
                'password' => $row['password']
            ];
            return true;
        }
        return false;
    }
    /**
     * Метод определяет авторизован ли пользователь.
     * @return bool
     */
    // @todo в этом методе можно добавить дополнительный превки, например существования пользователя в базе.
    public function ifAuth()
    {
        if (isset($_SESSION['user'])) {
            return true;
        }
        return false;
    }
    /**
     * Logout
     */
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        header('Location: login.php');
    }

    /**
     * Метод возвращает содержимое корзины
     * @return array
     */
    public function cartShow() {
        return $this->cartArr;
    }

    /**
     * Метод добавления товара в корзину
     * @param $product
     */
    public function cartAddProduct($product)
    {
    }

    /**
     * Метод удаления товара из корзины.
     * @param $cartID
     */
    public function cartRmProduct($cartID)
    {
    }
}