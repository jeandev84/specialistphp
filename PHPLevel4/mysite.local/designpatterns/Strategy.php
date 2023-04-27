<?php

/**
 * @param $a
 * @param $b
 * @return int
*/
function foo($a, $b): int {
   if ($a == $b) return 0;
   return ($a < $b) ? -1 : 1;
}

$arrays = [1, 2, 3, 4, 5];

// Объект контекст (Object Context)
usort($arrays, 'foo');



// Объект стратегия (Object Strategy)
interface OperationTwoNumbersStrategy
{
      public function doOperation(int $number1, int $number2);
}


class OperationAddition implements OperationTwoNumbersStrategy
{

    /**
     * @param int $number1
     * @param int $number2
     * @return int
    */
    public function doOperation(int $number1, int $number2): int
    {
        return ($number1 + $number2);
    }
}



class OperationSubtract implements OperationTwoNumbersStrategy
{

    public function doOperation(int $number1, int $number2)
    {
         return ($number1 - $number2);
    }
}


class OperationMultiplication implements OperationTwoNumbersStrategy
{

    public function doOperation(int $number1, int $number2)
    {
         return ($number1 * $number2);
    }
}



class OperationDivision implements OperationTwoNumbersStrategy
{

    public function doOperation(int $number1, int $number2)
    {
        if ($number2 === 0) { throw new Exception("Could not divide number by zero."); }

        return ($number1 / $number2);
    }
}



interface OperationTwoNumbersContextInterface
{
     public function execute(int $number1, int $number2);
}


class OperationTwoNumbersContext implements OperationTwoNumbersContextInterface
{
    private OperationTwoNumbersStrategy  $strategy;

    /**
     * @param OperationTwoNumbersStrategy $strategy
    */
    public function __construct(OperationTwoNumbersStrategy $strategy)
    {
         $this->strategy = $strategy;
    }


    /**
     * @param int $number1
     * @param int $number2
     * @return mixed
    */
    public function execute(int $number1, int $number2)
    {
        return $this->strategy->doOperation($number1, $number2);
    }
}


$context = new OperationTwoNumbersContext(new OperationAddition());
echo $context->execute(3, 4); // 7


class Calculator implements OperationTwoNumbersContextInterface
{

     protected OperationTwoNumbersStrategy $strategy;


     /**
      * @param string $operation
     */
     public function __construct(string $operation)
     {
           switch ($operation) {
               case '+': $this->strategy = new OperationAddition(); break;
               case '-': $this->strategy = new OperationSubtract(); break;
               case '*': $this->strategy = new OperationMultiplication(); break;
               case '/': $this->strategy = new OperationDivision(); break;
           }
     }

    /**
     * @param int $number1
     * @param int $number2
     * @return float|int
     * @throws Exception
     */
     public function execute(int $number1, int $number2)
     {
         return $this->strategy->doOperation($number1, $number2);
     }
}

$calculator = new Calculator('+');
$calculator->execute(2, 3);