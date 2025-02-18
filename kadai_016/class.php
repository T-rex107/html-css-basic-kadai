<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題16</title>
  </head>

  <body>
    <p>
      <?php
      class Food {
        private $name;
        private $price;

        public function __construct($name, $price) {
          $this->name = $name;
          $this->price = $price;
        }

        public function showInfo() {
          echo "Food Object ( [name:Food:private] => {$this->name} [price:Food:private] => {$this->price} )<br>";
        }

        public function getPrice() {
          return $this->price;
        }
      }

      class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct($name, $height, $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        public function showInfo() {
          echo "Animal Object ( [name:Animal:private] => {$this->name} [height:Animal:private] => {$this->height} [weight:Animal:private] => {$this->weight} )<br>";
        }

        public function getHeight() {
          return $this->height;
        }
      }

      // オブジェクトを作成して表示
      $potato = new Food("potato", 250);
      $potato->showInfo();

      $dog = new Animal("dog", 60, 5000);
      $dog->showInfo();

      // 追加の数値出力
      echo $potato->getPrice() . "<br>";
      echo $dog->getHeight();
      ?>
    </p>
  </body>
</html>