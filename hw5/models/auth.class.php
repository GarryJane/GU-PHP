<?php

class Auth
{
    public function __construct($link, $username, $password)
    {
        if (!$this->ifAuth())
            self::login($link, $username, $password);
        else return true;
    }

    private function login($link, $username, $password)
    {
        if($this->ifAuth()) {
            echo "Вы уже вошли под именем {$_SESSION['user']}!";
            return false;
        }
        $query = "SELECT * FROM shop.users
                      WHERE name='$username' AND password='$password'";
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['id'] = mysqli_fetch_assoc($result)['id'];
            $_SESSION['user'] = $username;
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

    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        header('Location: login.php');
    }
}