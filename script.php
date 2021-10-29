<?php
  $results = '';

  if ($_POST && $_POST['calculator'] && $_POST['operation']) {
    $client = new Client();
  
    $service = $client->getInstance();

    $operation = $_POST['operation'];

    $numbers = explode($operation, $_POST['calculator']);
    
    switch ($operation) {
      case 'x':
        $parameters['Multiply'] = array('intA' => intval($numbers[0]), 'intB' => intval($numbers[1]));
        $results = $service->__soapCall('Multiply', $parameters)->MultiplyResult;
        break;
      case '+':
        $parameters['Add'] = array('intA' => intval($numbers[0]), 'intB' => intval($numbers[1]));
        $results = $service->__soapCall('Add', $parameters)->AddResult;
        break;
      case '-':
        $parameters['Subtract'] = array('intA' => intval($numbers[0]), 'intB' => intval($numbers[1]));
        $results = $service->__soapCall('Subtract', $parameters)->SubtractResult;
        break;
      case '/':
        $parameters['Divide'] = array('intA' => intval($numbers[0]), 'intB' => intval($numbers[1]));
        $results = $service->__soapCall('Divide', $parameters)->DivideResult;
        break;
      default:
        $results = '';
        break;
    }
  }
?>
