<?php

include_once "templates/head.html";

include_once "templates/navigation.html"; 

if (isset($_POST["numOne"])) {
    function myCalculator($numOne, $numTwo, $oper) {
        if ($oper == "add") {
            return $numOne + $numTwo;
        } elseif ($oper == "sub") {
            return $numOne - $numTwo;
        } else {
            return "There was an error!";
        }
    }
    
    $numOne = $_POST["numOne"];
    $numTwo = $_POST["numTwo"];
    $oper = $_POST["oper"];

    echo "<p>Value: " . myCalculator($numOne, $numTwo, $oper) . "</p>";
    echo "<a href='calculation.php' class='btn btn-dark mt-3'>Again!</a>";
} else {
    echo '
    <div class="row m-0 p-0 justify-content-center">
        <div class="col-4">
        <form action="calculation.php" method="POST">
                <label>Number One</label>
                <input type="number" name="numOne" class="form-control">
                <label>Operation</label>
                <select name="oper" class="form-control">
                    <option value="add">Add</option>
                    <option value="sub">Subtract</option>
                </select>
                <label>Number Two</label>
                <input type="number" name="numTwo" class="form-control">
                <button type="submit" class="btn btn-dark float-right my-3">Submit</button>
            </form>
        </div>
    </div>';
}

include_once "templates/footer.html"; 
