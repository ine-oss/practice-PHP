
<html>

<head>
    <title><mark>STUDENT REPORT DETAILS</mark></title>
</head>

<body>

<center>

    <h1>STUDENT INFORMATION</h1>

    <form method="POST" action="process-attendance.php">

        <table  cellpadding="12">

            <!-- TABLE HEADINGS -->
            <tr>
                <th>STUDENT PERSONAL INFORMATION</th>
                <th>ATTENDANCE</th>
                <th>SUBJECT MARKS</th>
            </tr>
            <tr>

              <td>

                    <label> STUDENT NAME:</label>
                    <input type="text" name="name" required>

                    <br><br>

                    <label>CLASS:</label>

                    <select name="class" required>

                        <option value="">Select class</option>
                        <option value="l3">Level 3</option>
                        <option value="l4">Level 4</option>
                        <option value="l5">Level 5</option>

                    </select>

                    <br><br>

                    <label>AGE:</label>
                    <input type="text" name="age" required>

                    <br><br>

                    <label>ADDRESS:</label>
                    <input type="text" name="address" required>

                </td>


                <!-- ATTENDANCE -->
                <td>

                    <label>DAY 1:</label>
                    <input type="text" name="d1" required>

                    <br><br>

                    <label>DAY 2:</label>
                    <input type="text" name="d2" required>

                    <br><br>

                    <label>DAY 3:</label>
                    <input type="text" name="d3" required>

                    <br><br>

                    <label>DAY 4:</label>
                    <input type="text" name="d4" required>

                    <br><br>

                    <label>DAY 5:</label>
                    <input type="text" name="d5" required>

                </td>


                <!-- SUBJECT MARKS -->
                <td>

                    <label>PHP:</label>
                    <input type="text" name="php" required>

                    <br><br>

                    <label>JAVASCRIPT:</label>
                    <input type="text" name="java" required>

                    <br><br>

                    <label>DATA STRUCTURE:</label>
                    <input type="text" name="dsa" required>

                    <br><br>

                    <label>DATABASE:</label>
                    <input type="text" name="db" required>

                    <br><br>

                    <label>FRENCH:</label>
                    <input type="text" name="fr" required>

                </td>

            </tr>


            <!-- SUBMIT BUTTON -->
            <tr>

                <td colspan="3" align="center">

                    <button type="submit">
                        GET REPORT
                    </button>

                </td>

            </tr>

        </table>

    </form>

</center>

</body>

</html>

