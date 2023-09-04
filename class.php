<?php
class food{
   public $name;
   public $price;
   public function show_price(string $price){
    $this->price = $price;}
    public function __construct(string $name, string $price) {
        $this->name = $name;
        $this->price = $price;
    }
   
}
class animal{
    public $name;
    public $haight;
    public $weight;
    public function show_height(int $haight){
        $this->haight = $haight;
    }
    public function __construct(string $name, int $haight, int $weight) {
        $this->name = $name;
        $this->haight = $haight;
        $this->weight = $weight;
    }
}
$food = new food('egg', 'japan');
$animal = new animal('dog', '50', '2000') ;
print_r($food);
echo "<br>";
print_r($animal)
?>