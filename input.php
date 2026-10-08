<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body align="center">
    <form method="POST" action="process.php">
        <table align="center">
            <tr>
                <td><label for="Fname">Student Name:</label></td>
                <td><input type="text" id="Fname" name="Fname" required></td>
         
            <tr>
                <td><label for="Fid">Student ID:</label></td>
                <td><input type="text" id="Fid" name="Fid" required></td>
            </tr>
            <tr>
                <td><label for="Fid">Student ID:</label></td>
                <td><input type="text" id="Fid" name="Fid" required></td>
            </tr>
            <tr>
                <td><label for="Ftrade">Student Trade:</label></td>
                <td>
                    <select id="Ftrade" name="Ftrade" required>
                        <option value="">-- Select Trade --</option>
                        <option value="Computer Science">SOD</option>
                        <option value="Electrical Engineering">NIT</option>
                        <option value="Mechanical Engineering">SCIENCE</option>
                      
                    </select>
                </td class="row">
            </tr>
            <tr>
                <td><label for="Fclass">Student Class:</label></td>
                <td>
                    <select id="Fclass" name="Fclass" required>
                        <option value="">-- Select Class --</option>
                        <option value="Class A">L3 A</option>
                        <option value="Class B">L4 B</option>
                        <option value="Class C">Clas C</option>
                        <option value="Class D">Class D</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="Femail">Student Email:</label></td>
                <td><input type="email" id="Femail" name="Femail" required></td>
            </tr>
            <tr>
                <td><label for="Fphone">Student Phone:</label></td>
                <td><input type="tel" id="Fphone" name="Fphone" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Show">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>