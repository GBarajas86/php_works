<?php

declare(strict_types=1);

$sale = new Sale(date("y-m-d"));
$concept = new Concept("Cerveza", 10);
$concept2 = new Concept("Botanas", 40);
$sale->addConcepts($concept2);
$sale->addConcepts($concept);
echo $sale->getTotal();


$onlineSale = new OnlineSale(date("y-m-d"), "debit card");
// echo $onlineSale->createInvoice();
// echo $onlineSale->showInfo();



class Sale{
    protected float $total;
    public string $date;
    private array $concepts;
    public static $count = 0;

    public function __construct(string $date) {
        $this->total = 0;
        $this->date = $date;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcepts(Concept $concept)  {
        $this->concepts[] = $concept;
        $this->total += $concept->amount;
    }

    public function getTotal(): float {
        return $this->total;
    }

    public static function reset(){
        self::$count = 0;
    }

    public function createInvoice(): string{
        return "Se crea la factura";
    }


}

class OnlineSale extends Sale {
    public $paymentMethod;

    public function __construct(string $date, string $paymentMethod) {
        parent::__construct($date);
        $this->paymentMethod = $paymentMethod;
    }

    function showInfo() : string {
        return "La venta tiene un monto de $this->total";
    }
}

class Concept {
    public string $description;
    public float|int $amount;

    public function __construct(string $description, float|int $amount) {
        $this->description = $description;
        $this->amount = $amount;
    }
}