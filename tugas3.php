<?php 
$data = [
    [
        'nama' => 'M. Nurul Alam',
        'nim' => '21.240.0098',
        'nilai' => '100',
    ],
    [
        'nama' => 'Sabardi',
        'nim' => '21.240.0099',
        'nilai' => '70',
    ],
    [
        'nama' => 'M. Fikri',
        'nim' => '21.240.0100',
        'nilai' => '90',
    ],
    [
        'nama' => 'M. Rizal',
        'nim' => '21.240.0101',
        'nilai' => '85',
    ],
    [
        'nama' => 'M. Rizky',
        'nim' => '21.240.0102',
        'nilai' => '65',
    ],
    [
        'nama' => 'Ahmad',
        'nim' => '21.240.0103',
        'nilai' => '60',
    ],
    [
        'nama' => 'Caca',
        'nim' => '21.240.0104',
        'nilai' => '70',
    ],
    [
        'nama' => 'Dzaki',
        'nim' => '21.240.0105',
        'nilai' => '75',
    ],
    [
        'nama' => 'Nurul',
        'nim' => '21.240.0106',
        'nilai' => '50',
    ],
    [
        'nama' => 'Andro',
        'nim' => '21.240.0107',
        'nilai' => '90',
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center ">
                        <h2 class="fw-bold">Data Mahaiswa</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Nilai</th>
                                    <th>Keterangan</th>
                                    <th>Grade</th>
                                    <th>Predikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php 
                                    foreach ($data as $d) : 
                                        $nilai = array_column($data, 'nilai');
                                        $max = max($nilai);
                                        $min = min($nilai);
                                        $avg = array_sum($nilai) / count($nilai);
                                        $jumlah = count($nilai);
                                        $countScore = 0;
                                        foreach ($nilai as $n) {
                                            $countScore += $n;
                                        }

                                ?>
                                <tr>
                                    <td width="5px" class="text-center"><?= $no++; ?></td>
                                    <td><?= $d['nama']; ?></td>
                                    <td><?= $d['nim']; ?></td>
                                    <td class="text-center"><?= $d['nilai']; ?></td>
                                    <td class="text-center">
                                        <!-- ternary -->
                                        <?= $d['nilai'] >= 65 ? '<span class="badge bg-success">Lulus</span>' : '<span class="badge bg-danger">Tidak Lulus</span>'; ?>
                                    </td>

                                    <td class="text-center">
                                        <?php
                                        if ($d['nilai'] >= 90) {
                                            echo 'A';
                                        } elseif ($d['nilai'] >= 80) {
                                            echo 'B';
                                        } elseif ($d['nilai'] >= 70) {
                                            echo 'C';
                                        } elseif ($d['nilai'] >= 65) {
                                            echo 'D';
                                        } else {
                                            echo 'E';
                                        }
                                        ?>
                                    </td>

                                    <td class="text-center">
                                        <?php
                                        switch ($d['nilai']) {
                                            case $d['nilai'] >= 90:
                                                echo 'Memuaskan';
                                                break;
                                            case $d['nilai'] >= 80:
                                                echo 'Bagus';
                                                break;
                                            case $d['nilai'] >= 70:
                                                echo 'Cukup';
                                                break;
                                            case $d['nilai'] >= 65:
                                                echo 'Kurang';
                                                break;
                                            default:
                                                echo 'Buruk';
                                                break;

                                        }
                                        
                                        ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>

                            <!-- tfot to view max,min,avg -->
                            <tfoot class="text-center fw-bold bg-gray">
                                <tr>
                                    <td colspan="4" class="text-center">Nilai Tertinggi</td>
                                    <td colspan="3" class="text-center"><?= $max; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">Nilai Terendah</td>
                                    <td colspan="3" class="text-center"><?= $min; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">Rata-rata Nilai</td>
                                    <td colspan="3" class="text-center"><?= $avg; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">Jumlah Mahasiswa</td>
                                    <td colspan="3" class="text-center"><?= $jumlah; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">Jumlah Keseluruhan Nilai</td>
                                    <td colspan="3" class="text-center"><?= $countScore; ?></td>
                                </tr>

                            </tfoot>

                        </table>
                    </div>
                    <div class="card-footer text-center fw-bold">
                        <p>&copy; 2024 - M. Nurul Alam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>