<?php
    class Question {
        // Properties
        public $id;
        public $quizzId;
        public $value;
        public $response;
        

        public function __construct($id, $quizzId, $value, $response)
        {
            $this->id = $id;
            $this->quizzId = $quizzId;
            $this->value = $value;
            $this->response = $response;
        }


        public function __serialize(): array
        {
            return [
                'id' => $this->id,
                'quizzId' => $this->quizzId,
                'value' => $this->value,
                'response' => $this->response,
              ];
        }

        public function __unserialize(array $data): void
        {
            $this->id = $data['id'];
            $this->quizzId = $data['quizzId'];
            $this->value = $data['value'];
            $this->response = $data['response'];
        }
    }
?>