<?php




$data = [
    [
        "nama" => "Bagas A.P",
        "alamat" => "Ngagel",
        "no" => "0851",
        "img" => "kobomad.png"
    ],
    [
        "nama" => "Zulfikar E.F",
        "alamat" => "Karangrejo",
        "no" => "0845",
        "img" => "koboswag.png"
    ],
    [
        "nama" => "Achmad Satria",
        "alamat" => "Jambangan",
        "no" => "0892",
        "img" => "kobouwu.png"
    ],
    [
        "nama" => "Kinnaras Aryapoetra",
        "alamat" => "Ketintang",
        "no" => "0871",
        "img" => "koboprit.png"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h1>Data Siswa (admin)</h1>
    <table border="1" cellpadding="3" cellspacing="1" width="40%">
        <tr align="center">
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($data as $id => $nama) :?>
            <tr align="center">
                <td><?= $id + 1?></td>
                <td><img src="img/<?= $nama['img'];?>" alt=""></td>
                <td><?= $nama['nama']?></td>
                <td>
                    <a href="detail.php?nama=<?=$nama["nama"];?>&alamat=<?=$nama["alamat"];?>&no=<?=$nama["no"];?>&img=<?=$nama["img"]?>">
                        <button>Detail</button>
                    </a>
                </td>
            </tr>

        <?php endforeach?>
    </table>
</body>
</html>