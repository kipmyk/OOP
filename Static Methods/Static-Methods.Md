## How to Define and Call Static Methods in PHP OOP

It is east to define a static method in PHP OOP. You can do by simpling add the static keyword before the method name when defining the method within your class as:

```php
class Math {
  public static function average($numbers) {
    return array_sum($numbers) / count($numbers);
  }
}
```
