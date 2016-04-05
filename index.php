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
        <style>
            p {
                color: red;
            }
        </style>
    </head>
    <body>


        <h1>BMI Calculator</h1>
        <form action="calculateBMI.php" method="post">
            <table>
                <tr>
                    <td>
                        <b>Height:</b> <input type="text" name="txtFeet"/>

                    </td>
                    <td>
                        <p>
                        <?php
                        if (isset($feetError)) {

                            echo($feetError);
                        }
                        ?>
                        </p>
                    </td>
                    <td>
                        <input type="text" name="txtInches"/>
                    </td>
                    <td>
                        <p>
                        <?php
                        if (isset($inchesError)) {

                            echo($inchesError);
                        }
                        ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><b>(Feet)</b></td>
                    <td><b>(Inches)</b></td>
                </tr>
                <tr>
                    <td><b>Weight:</b> <input type="text" name="txtWeight"/></td>
                    <td>
                        <p>
                        <?php
                        if (isset($weightError)) {

                            echo($weightError);
                        }
                        ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><b>(Pounds)</b></td>
                </tr>
            </table>
            <input type="submit" name="btnCalculate" value="Calculate BMI"/>
            <input type="submit" name="btnClear" value="Clear"/>

        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
