<?php
    class Player {
        // Properties
        public $id;
        public $login;
        public $email;
        public $isAdmin;
        

        public function __construct($id, $login, $email, $isAdmin)
        {
            $this->id = $id;
            $this->login = $login;
            $this->email = $email;
            $this->isAdmin = $isAdmin;
        }


        public function __serialize(): array
        {
            return [
                'id' => $this->id,
                'login' => $this->login,
                'email' => $this->email,
                'isAdmin' => $this->isAdmin,
              ];
        }

        public function __unserialize(array $data): void
        {
            $this->id = $data['id'];
            $this->login = $data['login'];
            $this->email = $data['email'];
            $this->isAdmin = $data['isAdmin'];
        }
    }
?>