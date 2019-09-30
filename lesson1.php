<?php
/*
1. Придумать класс, который описывает любую сущность 
из предметной области интернет-магазинов: 
продукт, ценник, посылка и т.п.
*/
class ShopObjects
{
    public $product;
    public $price;
    public $package;
    public $cart;
    public $user;
}
/*
2. Описать свойства класса из п.1 (состояние).
*/
class ShopObjects
{
    public $product = 'popular';
    public $price = 'low';
    public $package = 'heavy';
    public $cart = true;
    public $user = 1;
}
/*
3. Описать поведение класса из п.1 (методы).
*/
class ShopObjects
{
    public $product = 'popular';
    public $price = 'low';
    public function price()
    {
        if ($amount > 100) {
            $price = 'high';
        } elseif ($amount > 40 && $amount < 60) {
            $price = 'normal';
        } else {
            $price = 'low';
        }
    }
    public $package = 'heavy';
    public $cart = true;
    public $user = 1;
    public function user()
    {
        if ($user !== 0) {
            $profile = 1;
        } else {
            $profile = 0;
        }
    }
}
/*
4. Придумать наследников класса из п.1. Чем они будут отличаться?
*/
class ShopObjects
{
    public $product = 'popular';
    public $price = 'low';
    public function price()
    {
        if ($amount > 100) {
            $price = 'high';
        } elseif ($amount > 40 && $amount < 60) {
            $price = 'normal';
        } else {
            $price = 'low';
        }
    }
    public $package = 'heavy';
    public $cart = true;
    public $user = 1;
    public function user()
    {
        if ($user !== 0) {
            $profile = 1;
        } else {
            $profile = 0;
        }
    }
}
// для оптовых клиентов своя история определения что для них высокая цена, что нет
class BulkPartner extends ShopObjects
{
    public function price()
    {
        if ($amount > 200) {
            $price = 'high';
        } elseif ($amount > 90 && $amount < 140) {
            $price = 'normal';
        } else {
            $price = 'low';
        }
    }
}
/*
5. Дан код: Что он выведет на каждом шаге? Почему?
*/
class A
{
    public function foo()
    {
        static $x = 0; // задали статическое свойство переменной
        echo ++$x; // сначала плюсуем
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // первый вызов, к 0 добавляем 1
$a2->foo(); //к 1 добавляем еще 1
$a1->foo(); // к 2 добавляем 1
$a2->foo(); // к 3 добаляем 1
// в итоге получаем увеличение на единицу в связи с тем что переменная $x указана как статическая, то есть наследующая всё что происходит дальше
/*
Немного изменим п.5
*/
class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A
{
}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
// в данном случае так как мы создали два разных экзепляра класса, то наследование происходит внутри созданного экземпляра
/*
6. Объясните результаты в этом случае. *Дан код:
*/
// тут не понял, так как на мой взгяд всё тоже самое.
class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A
{
}
$a1 = new A; // пытался нагуглить про эти скобки, но не получилось найти
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
?>