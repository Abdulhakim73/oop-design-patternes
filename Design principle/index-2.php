<?php

//coffee machine narxlarni hisoblash
// bu yerda shundayki is a has a logikasi ishlatilgan, yani bizda sugar, syrop, sut ingredientlar bor ammo
// hammasini ham ishlatmaymiz keraklilarini ovolamiz
// {has a relationship} better than {is a relationship}.
interface Ingredient
{
    public function cost();

    public function name();
}


class AddMilk implements Ingredient
{
    public function cost()
    {
        return 500;
    }

    public function name()
    {
        return "milk";
    }
}

class AddSugar implements Ingredient
{
    public function cost()
    {
        return 200;
    }

    public function name()
    {
        return "sugar";
    }
}

class AddSyrup implements Ingredient
{
    public function cost()
    {
        return 400;
    }

    public function name()
    {
        return "syrup";
    }
}

// calculate
class Coffee
{
    public int $cost = 1000;
    public array $ingredients = [];

    public function addIngredient(Ingredient $ingredient): void
    {
        $this->cost += $ingredient->cost();
        $this->ingredients[] = $ingredient->name();
    }
}

$newCoffee = new Coffee();
$newCoffee->addIngredient(new AddMilk());
$newCoffee->addIngredient(new AddSugar());
echo $newCoffee->cost;
