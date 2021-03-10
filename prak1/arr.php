<?php
    $students=[
        [
            'nama'=> 'Ihaq',
            'nim' => '192410101141',
        ],
        [
            'nama' => "Vivi",
            'nim' => '192410101040',
        ],
        [
            'nama' => "Abi",
            'nim' => '192410101070',
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?= $student ['nama'] ?></td>
                <td><?= $student ['nim'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>
