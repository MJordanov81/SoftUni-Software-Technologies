<?php

namespace CalculatorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function index(Request $request)
    {
        $calculator = new Calculator();

        $form = $this->createForm(CalculatorType::class, $calculator);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $leftOperand = $calculator->getLeftOperand();
            $middleOperand = $calculator->getMiddleOperand();
            $rightOperand = $calculator->getRightOperand();
            $firstOperator = $calculator->getFirstOperator();
            $secondOperator = $calculator->getSecondOperator();

            $firstResult = 0;
            $finalResult = 0;

            switch ($firstOperator) {
                case "+":
                    $firstResult = $leftOperand + $middleOperand;
                    break;

                case "-":
                    $firstResult = $leftOperand - $middleOperand;
                    break;

                case "*":
                    $firstResult = $leftOperand * $middleOperand;
                    break;

                case "/":
                    $firstResult = $leftOperand / $middleOperand;
                    break;

                case "^":
                    $firstResult = 1;
                    for ($i = 0; $i < $rightOperand; $i++)
                    {
                        $firstResult *= $leftOperand;
                    }
                    break;
            }


            switch ($secondOperator) {
                case "+":
                    $finalResult = $firstResult + $rightOperand;
                    break;

                case "-":
                    $finalResult = $firstResult - $rightOperand;
                    break;

                case "*":
                    $finalResult = $firstResult * $rightOperand;
                    break;

                case "/":
                    $finalResult = $firstResult / $rightOperand;
                    break;

                case "^":
                    $finalResult = 1;
                    for ($i = 0; $i < $rightOperand; $i++)
                    {
                        $finalResult *= $firstResult;
                    }
                    break;
            }

            return $this->render('calculator/index.html.twig', ['result' => $finalResult, 'calculator' => $calculator, 'form' => $form->createView()]);
        }

        return $this->render('calculator/index.html.twig', array('form' => $form->createView()));
    }
}
