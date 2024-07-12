<?php

//xohlagancha hayvon qoshaversak ham faqatgina run time da ozgartirish kiritish kerak boladi holos
interface Comunicateable
{
    public function speak();
}

class Dog implements Comunicateable
{
    public function speak()
    {
        return 'wow wow';
    }
}

class Cat implements Comunicateable
{
    public function speak()
    {
        return 'meow meow';
    }
}

Class Wolf implements Comunicateable
{
    public function speak()
    {
        return "auu auu";
    }
}


class Communication
{
        public function communicate (Comunicateable $animal)
        {
            return $animal->speak();
        }
}
$com =  new Communication();
echo $com->communicate(new Cat());

