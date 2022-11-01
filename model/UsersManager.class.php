<?php

namespace Model;

class UsersManager extends Model
{
    /**
     * register
     *
     * @param  Users $user
     * @return int
     */
    public function register(Users $user): ?int
    {
        $id = $user->getId();
        $username = $user->getUsername();
        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $status = $user->getStatus();
        $password = $user->getPassword();

        $sql = "INSERT INTO users (user_id, username, firstname, lastname, status, password) VALUES(:id, :username, :firstname, :lastname, :status, :password)";
        $req = Model::getBdd()->prepare($sql);
        $result = $req->execute([
            ":id" => $id,
            ":username" => $username,
            ":firstname" => $firstname,
            ":lastname" => $lastname,
            ":status" => $status,
            ":password" => $password
        ]);
        return $result;
    }

    public function usernameExists(string $username): bool
    {
        $req = Model::getBdd()->prepare("SELECT username FROM users WHERE username = :username");
        $req->execute([':username' => $username]);
        if ($req->rowCount() > 0) {
            return true;
        }
        return false;
    }
}
