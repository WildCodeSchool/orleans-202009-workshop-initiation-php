<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculator PHP</h1>

    <form>
        <label for="firstValue">First value</label>
        <input type="number" id="firstValue" name="firstValue">
        
        <label for="operator">Operator</label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <label for="secondValue">Second value</label>
        <input type="number" id="secondValue" name="secondValue">
        
        <button>Calculate</button>
    </form>
    <?php 

    $result = 'Pas de valeur';
        if(!empty($_GET)) {
        switch ($_GET['operator']) {
            case '+':
                $result = (int)$_GET['firstValue'] + (int)$_GET['secondValue'];
                break;
            case '-':
                $result = (int)$_GET['firstValue'] - (int)$_GET['secondValue'];
                break;
            case '*':
                $result = (int)$_GET['firstValue'] * (int)$_GET['secondValue'];
                break;
            case '/':
                if($_GET['secondValue'] == 0) {
                    $result = "Error: Division by zero";
                } else {
                    $result = (int)$_GET['firstValue'] / (int)$_GET['secondValue'];
                }
                break;
            
            default:
                $result = "Invalid operator";
                break;
        }
    }

        echo $result;
        
    ?>
</body>
</html>