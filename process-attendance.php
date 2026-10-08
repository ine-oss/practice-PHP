<?php

$studentInfo = [
    'name'    => $_POST['name'] ?? '',
    'class'   => $_POST['class'] ?? '',
    'age'     => $_POST['age'] ?? '',
    'address' => $_POST['address'] ?? ''
];


$days = [
    'Day 1' => $_POST['d1'] ?? 0,
    'Day 2' => $_POST['d2'] ?? 0,
    'Day 3' => $_POST['d3'] ?? 0,
    'Day 4' => $_POST['d4'] ?? 0,
    'Day 5' => $_POST['d5'] ?? 0
];

$attendanceTotal = array_sum($days);
$attendancePercentage = ($attendanceTotal / 5) * 100;

$subjects = [
    'PHP'            => ['mark' => $_POST['php'] ?? 0,  'weight' => 20],
    'JAVA'           => ['mark' => $_POST['java'] ?? 0, 'weight' => 15],
    'DATA STRUCTURE' => ['mark' => $_POST['dsa'] ?? 0,  'weight' => 10],
    'DATABASE'       => ['mark' => $_POST['db'] ?? 0,   'weight' => 10],
                    'FRENCH'         => ['mark' => $_POST['fr'] ?? 0,   'weight' => 5],
    'ATTENDANCE'     => ['mark' => $attendancePercentage, 'weight' => 20]
];


$totalWeighted = 0;
$totalWeight   = 0;

foreach ($subjects as $name => $data) {
    $weightedMark = $data['mark'] * $data['weight'];
    $subjects[$name]['weighted'] = $weightedMark;
    $totalWeighted += $weightedMark;
    $totalWeight   += $data['weight'];
}


$average = $totalWeight > 0 ? ($totalWeighted / $totalWeight) : 0;


if ($average >= 80) {
    $grade = "A";
} elseif ($average >= 70) {
    $grade = "B";
} elseif ($average >= 60) {
    $grade = "C";
} elseif ($average >= 50) {
    $grade = "D";
} else {
    $grade = "F";
}


$status = ($average >= 50) ? "PASS" : "FAIL";


if ($average >= 70) {
    $decision = "PASS";
} elseif ($average >= 50) {
    $decision = "NEEDS TO TRY";
} else {
    $decision = "REPEAT";
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Report</title>
</head>
<body>

<center>
    <h1>STUDENT REPORT CARD</h1>

    <table border="1" cellpadding="8" cellspacing="0" style="text-align:left; width: 70%;">
        <tr>
            <th colspan="2" style="text-align:center;">STUDENT INFORMATION</th>
        </tr>
        <tr>
            <td><strong>Name</strong></td>
            <td><?= $studentInfo['name']; ?></td>
        </tr>
        <tr>
            <td><strong>Class</strong></td>
            <td><?= $studentInfo['class']; ?></td>
        </tr>
        <tr>
            <td><strong>Age</strong></td>
            <td><?= $studentInfo['age']; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?= $studentInfo['address']; ?></td>
        </tr>

        <tr>
            <th colspan="2" style="text-align:center;">SUBJECT REPORT</th>
        </tr>
        <?php foreach ($subjects as $subjectName => $info): ?>
            <tr>
                <td><?= $subjectName; ?></td>
                <td><?= $info['mark']; ?> (Weight: <?= $info['weight']; ?>)</td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td><strong>Total Weighted Mark</strong></td>
            <td><?= $totalWeighted; ?></td>
        </tr>
        <tr>
            <td><strong>Total Weight</strong></td>
            <td><?= $totalWeight; ?></td>
        </tr>
        <tr>
            <td><strong>Final Average</strong></td>
            <td><?= number_format($average, 2); ?>%</td>
        </tr>
        <tr>
            <td><strong>Grade</strong></td>
            <td><?= $grade; ?></td>
        </tr>
        <tr>
            <td><strong>Status</strong></td>
            <td><?= $status; ?></td>
        </tr>
        <tr>
            <td><strong>Final Decision</strong></td>
            <td><?= $decision; ?></td>
        </tr>
    </table>

    <h3>END OF STUDENT REPORT</h3>
</center>

</body>
</html>