<?php
class BankAccount{
    private $balance;

    public function getBalance(){
        return $this->balance;
    }

    public function deposite($amount){
        if($amount > 0){
            $this->balance += $amount;
        }
        return $this;
    }
}

class SavingAccount extends BankAccount{
    private $interestRate;

    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    public function addIterest(){
        $interest = $this->interestRate * $this->getBalance();
        $this->deposite($interest);
    }
}
$ac1 = new SavingAccount();
$ac1->deposite(100);
$ac1->setInterestRate(0.05);
$ac1->addIterest();
echo $ac1->getBalance();

?>