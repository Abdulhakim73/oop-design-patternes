<?php 

// kerak bo'lmagan methodlarni private qilib kerak bolganlarini public qilib qoyamiz
// misol tariqasida cofee mashinaa client suvini quyish uchun tugma orqali alohida alohida buyruq bermaydi 1 yoki 2 ta
// knopkani bossa kifoya unga coffee tayorlanishni boshlaydi
class Tea 
{
    private function boildWater()
    {
        echo "boiling water,";
    }

    private function addSugar()
    {
        echo " addding Sugar,";
    }

    private function addingSomeTea()
    {
        echo " added some tea";
    }

    //exp: bottom make tea
    public function make()
    {
        $this->boildWater();
        $this->addSugar();
        $this->addingSomeTea();
    }
}

$tea = new Tea();
echo $tea->make();