let display = document.getElementById('display');
let currentNumber = '';
let currentOperator = '';
let result = 0;

function appendNumber(number) {
  currentNumber += number;
  display.value = currentNumber;
}

function appendOperator(operator) {
  if (currentOperator !== '') {
    calculate();
  }
  currentOperator = operator;
  result = parseFloat(currentNumber);
  currentNumber = '';
}

function calculate() {
  let number = parseFloat(currentNumber);
  switch (currentOperator) {
    case '+':
      result += number;
      break;
    case '-':
      result -= number;
      break;
    case '*':
      result *= number;
      break;
    case '/':
      result /= number;
      break;
    case '^':
      result = Math.pow(result, number);
      break;
    case '%':
      result = result % number;
      break;
    case 'sqrt':
      result = Math.sqrt(result);
      break;
  }
  display.value = result;
  currentNumber = '';
  currentOperator = '';
}

function clearDisplay() {
  display.value = '';
  currentNumber = '';
  currentOperator = '';
  result = 0;
}