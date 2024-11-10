<?php
interface SendInterface {
    public function send(string $message);
}

interface SaveInterface {
    public function save();
}

class Document implements SendInterface, SaveInterface {
    public function send(string $message) {
        echo "Se envia la venta". $message;
    }

    public function save(){
        echo "Se guarda la venta en la nube";
    }
}

class BeerRepository implements SaveInterface {
    public function save() {
        echo "se guarda en una bd";
    }
}