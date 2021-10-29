<?php 
  ini_set('display_errors', 1);

  include_once ('./Client.php');
  include_once ('./script.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho André Junior</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <main>
    <div class="titles">
      <h1>André Gonçalves de Souza Junior</h1>
    </div>

    <form action="" method="post" class="form">
      <input type="text"
        class="input-form"
        name="calculator"
        id="calculator"
        placeholder="0"
        autocomplete="off"
        readonly="off"
        value="<?= $results ?>"
      >
      <input type="hidden" name="operation" id="operation">

      <div class="group_button">
        <button type="button" class="col-3" onclick="handleClearInput()"> AC </button>
        <button type="button" class="operations" onclick="handleOperation('/')"> / </button>
        <button type="button" onclick="handleAddNumber(7)"> 7 </button>
        <button type="button" onclick="handleAddNumber(8)"> 8 </button>
        <button type="button" onclick="handleAddNumber(9)"> 9 </button>
        <button type="button" class="operations" onclick="handleOperation('x')"> x </button>
        <button type="button" onclick="handleAddNumber(4)"> 4 </button>
        <button type="button" onclick="handleAddNumber(5)"> 5 </button>
        <button type="button" onclick="handleAddNumber(6)"> 6 </button>
        <button type="button" class="operations" onclick="handleOperation('-')"> - </button>
        <button type="button" onclick="handleAddNumber(1)"> 1 </button>
        <button type="button" onclick="handleAddNumber(2)"> 2 </button>
        <button type="button" onclick="handleAddNumber(3)"> 3 </button>
        <button type="button" class="operations" onclick="handleOperation('+')"> + </button>
        <button type="button" onclick="handleAddNumber(0)" class="col-2-zero"> 0 </button>
        <button type="submit" class="operations col-2"> = </button>
      </div>
    </form>
  </main>

  <script>
    const inputCalculator = document.getElementById('calculator');
    const inputOperator = document.getElementById('operation');
    let hasOperation = false;
    
    const handleAddNumber = (number) => {
      var valueInput = inputCalculator.value;
      
      valueInput = `${valueInput}${number}`;
      
      if (inputOperator.value === '/') {
        hasCaracter = valueInput.charAt(valueInput.indexOf('/') + 1);

        if (number === 0 && hasCaracter === '0') {
          alert('Número não divisivel por 0');
          return;
        }
      }


      inputCalculator.value = valueInput;
    }
    
    
    const handleOperation = (operation) => {
      if (hasOperation) {
        alert('Só é permitido uma operação por vez')
        return;
      }

      var valueInput = inputCalculator.value;

      valueInput = `${valueInput}${operation}`;

      inputCalculator.value = valueInput;

      hasOperation = true;
      inputOperator.value = operation;
    }
    
    const handleClearInput = () => {
      inputCalculator.value = '';
      hasOperation = false;
      inputOperator.value = '';
    }
  </script>
  
</body>
</html>