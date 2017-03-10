<?php

namespace CalculatorBundle\Entity;

class Calculator {
    /**
     * @var float
     */
    private $leftOperand;

    /**
     * @var float
     */
    private $middleOperand;

    /**
     * @var float
     */
    private $rightOperand;

    /**
     * @var string
     */
    private $firstOperator;

    /**
     * @var string
     */
    private $secondOperator;

    /**
     * Get left operand
     *
     * @return float
     */
    public function getLeftOperand()
    {
        return $this->leftOperand;
    }


    /**
     * Set left operand
     *
     * @param float $operand
     * @return Calculator
     */
    public function setLeftOperand($operand){
        $this->leftOperand = $operand;
        return $this;
    }

    /**
     * Get middle operand
     *
     * @return float
     */
    public function getMiddleOperand()
    {
        return $this->middleOperand;
    }


    /**
     * Set middle operand
     *
     * @param float $operand
     * @return Calculator
     */
    public function setMiddleOperand($operand){
        $this->middleOperand = $operand;
        return $this;
    }

    /**
     * Get right operand
     *
     * @return float
     */
    public function getRightOperand(){
        return $this->rightOperand;
    }

    /**
     * Set right operand
     *
     * @param float $operand
     * @return Calculator
     */
    public function setRightOperand($operand){
        $this->rightOperand = $operand;
        return $this;
    }

    /**
     * Get firstOperator
     *
     * @return string
     */
    public function getFirstOperator(){
        return $this->firstOperator;
    }

    /**
     * Set firstOperator
     *
     * @param string $firstOperator
     * @return Calculator
     */
    public function setFirstOperator($firstOperator){
        $this->firstOperator = $firstOperator;
        return $this;
    }

    /**
     * Get secondOperator
     *
     * @return string
     */
    public function getSecondOperator(){
        return $this->secondOperator;
    }

    /**
     * Set secondOperator
     *
     * @param string $secondOperator
     * @return Calculator
     */
    public function setSecondOperator($secondOperator){
        $this->secondOperator = $secondOperator;
        return $this;
    }
}