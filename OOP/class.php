<?php
$sale = new Sale(10.5, date("y-m-d"));
$concept = new Concept("Cerveza", 10);
$sale->addConcepts($concept);
print_r($sale->concepts);

class Sale{
    public float $total;
    public string $date;
    public array $concepts;
    public static $count = 0;

    public function __construct(float $total, string $date) {
        $this->total = $total;
        $this->date = $date;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcepts(Concept $concepts)  {
        $this->concepts[] = $concepts;
    }

    public static function reset(){
        self::$count = 0;
    }

    public function createInvoice(): string{
        return "Se crea la factura";
    }


}

Class Concept {
    public string $description;
    public float|int $amount;

    public function __construct(string $description, float|int $amount) {
        $this->description = $description;
        $this->amount = $amount;
    }
}