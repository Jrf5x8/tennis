<?php

    $opponent = $_GET['opponent']

    print '<form id="scores" method="post" action="reportScores.php">
                <p>Score vs <span id="opponent">Dan</span>:</p>
                    <table>
                    <tr>
                        <td><label for="set1games">1st Set: </label></td>
                        <td><input type="number" name="set1games" min="0" max="7" maxlength="1" size="3"> - </td>
                        <td><input type="number" name="set1games2" min="0" max="7" maxlength="1" size="3"></td>
                    </tr>
                    <tr>
                        <td><label for="set2games">2nd Set: </label></td>
                        <td><input type="number" name="set2games" min="0" max="7" maxlength="1" size="3"> - </td>
                        <td><input type="number" name="set2games" min="0" max="7" maxlength="1" size="3"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="submit"></td>
                    </tr>
            </form>';

?>