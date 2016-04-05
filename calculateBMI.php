<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_POST['btnClear'])) {
            include 'index.php';
            return;
        }
        // put your code here
        $txtFeet = $_POST['txtFeet'];
        $txtInches = $_POST['txtInches'];
        $txtWeight = $_POST['txtWeight'];
        $feetError = "";
        $inchesError = "";
        $weightError = "";
        $bodyMassIndex = "";

        //height
        if (trim($txtFeet == "")) {
            $feetError = $feetError . "Feet is required";
        } else {
            if (!is_numeric($txtFeet)) {
                $feetError = $feetError . "Feet must be numeric";
            } else {
                if (($txtFeet > 8) || ($txtFeet < 2)) {
                    $feetError = $feetError . "Feet must be between 2 and 8";
                }
            }
        }


        if (trim($txtInches == "")) {
            $inchesError = $inchesError . "Inches is required";
        } else {
            if (!is_numeric($txtInches)) {
                $inchesError = $inchesError . "Inches must be numeric";
            } else {
                if (($txtInches > 12) || ($txtFeet < 0)) {
                    $inchesError = $inchesError . "Inches must be between 0 and 12";
                }
            }
        }

        if (trim($txtWeight == "")) {
            $weightError = $weightError . "Weight is required";
        } else {
            if (!is_numeric($txtWeight)) {
                $weightError = $weightError . "Weight must be numeric";
            } else {
                if (($txtWeight > 600) || ($txtWeight < 85)) {
                    $weightError = $weightError . "Weight must be between 85 and 600";
                }
            }
        }


        if (trim($feetError || $inchesError || $weightError) != "") {
            include 'index.php';
            return;
        }


        // Data Correct perform Calculations
        $height = ($txtFeet * 12) + $txtInches;
        $bodyMassIndex = ($txtWeight / pow($height, 2)) * 703;
        $weightStatus = '';
        if ($bodyMassIndex < 18.5) {
            $weightStatus = $weightStatus . "Underweight";
        } else {
            if ($bodyMassIndex <= 24.9) {
                $weightStatus = $weightStatus . "Normal";
            } else {
                if ($bodyMassIndex <= 29.9) {
                    $weightStatus = $weightStatus . "Overweight";
                } else {
                    $weightStatus = $weightStatus . "Obese";
                }
            }
        }

        // $bodyMassIndex = $txtWeight / 
        ?>
        <h1>BMI Calculator</h1>
        <table>
            <tr>
                <td>
                    <b>Height:</b> <input type="text" name="txtFeet"/>
                </td>
                <td>
                    <input type="text" name="txtInches"/>
                </td>
            </tr>
            <tr>
                <td><b>(Feet)</b></td>
                <td><b>(Inches)</b></td>
            </tr>
            <tr>
                <td><b>Weight:</b> <input type="text" name="txtWeight"/></td>
            </tr>
            <tr>
                <td><b>(Pounds)</b></td>
            </tr>
        </table>
        <input type="submit" name="btnCalculate" value="Calculate BMI"/>
        <input type="submit" name="btnClear" value="Clear"/>
        <?php echo "<b>" . (number_format($bodyMassIndex, 1) . " - " . $weightStatus) . "</b>"; ?>
    </body>
</html>
