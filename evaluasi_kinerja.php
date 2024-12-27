<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evaluasi Kinerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        td[colspan="2"], .kriteria {
            text-align: left;
        }
        .section-header {
            text-align: left;
            font-weight: bold;
        }
        .radio-group, .select-group {
            text-align: left;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        .submit-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>B. EVALUASI KINERJA</h2>
    <table>
        <thead>
            <tr>
            <th>Nilai</th>
            <th>Arti Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>sangat tidak baik/sangat rendah/tidak pernah</td>
            </tr>
            <tr>
                <td>2</td>
                <td>tidak baik/rendah/jarang</td>
            </tr>
            <tr>
                <td>3</td>
                <td>biasa/cukup/kadang-kadang</td>
            </tr>
            <tr>
                <td>4</td>
                <td>baik/tinggi/sering</td>
            </tr>
            <tr>
                <td>5</td>
                <td>sangat baik/sangat tinggi/selalu</td>
            </tr>
        </tbody>
    </table>
    <form action="" method="post">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kriteria</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3" class="section-header">B.1 Mahasiswa</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="kriteria">Rerata kemampuan kognitif</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="mahasiswa_kognitif" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="kriteria">Rerata kemampuan afektif</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="mahasiswa_afektif" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="kriteria">Kedisiplinan/ketepatan pengumpulan tugas (jika tidak ada, nilai = 1)</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="mahasiswa_kedisiplinan" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="kriteria">Keterlibatan/suasana kelas</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="mahasiswa_keterlibatan" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="section-header">B.2 Dosen (Evaluasi Diri dalam PBM)</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="kriteria">Pembahasan latihan soal</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="dosen_latihan" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="kriteria">Kualitas diskusi dan tanya jawab</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="dosen_diskusi" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="kriteria">Kemampuan menjelaskan materi</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="dosen_materi" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="kriteria">Pemanfaatan materi kuliah</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="dosen_pemanfaatan" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="kriteria">Kemampuan menjawab pertanyaan</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="dosen_pertanyaan" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td class="kriteria">Penguasaan kelas</td>
                    <td class="radio-group">
                        <?php for ($i=1; $i<=5; $i++): ?>
                            <label><input type="radio" name="dosen_penguasaan" value="<?= $i ?>"> <?= $i ?></label>
                        <?php endfor; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="section-header">Keterlambatan waktu mengajar</td>
                </tr>
                <tr>
                    <td colspan="3" class="radio-group">
                        <label><input type="radio" name="keterlambatan_mengajar" value="> 20 menit"> > 20 menit</label>
                        <label><input type="radio" name="keterlambatan_mengajar" value="11-20 menit"> 11-20 menit</label>
                        <label><input type="radio" name="keterlambatan_mengajar" value="1-10 menit"> 1-10 menit</label>
                        <label><input type="radio" name="keterlambatan_mengajar" value="Tepat waktu"> Tepat waktu</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="section-header">Jumlah mahasiswa yang terlambat</td>
                </tr>
                <tr>
                    <td colspan="3" class="radio-group">
                        <label><input type="radio" name="mahasiswa_terlambat" value="> 6 mhs"> > 6 mhs</label>
                        <label><input type="radio" name="mahasiswa_terlambat" value="2-5 mhs"> 2-5 mhs</label>
                        <label><input type="radio" name="mahasiswa_terlambat" value="1-2 mhs"> 1-2 mhs</label>
                        <label><input type="radio" name="mahasiswa_terlambat" value="Tidak ada"> Tidak ada</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="section-header">Pemberian sanksi mahasiswa bermasalah</td>
                </tr>
                <tr>
                    <td colspan="3" class="radio-group">
                        <label><input type="radio" name="pemberian_sanksi" value="Ya"> Ya</label>
                        <label><input type="radio" name="pemberian_sanksi" value="Tidak"> Tidak</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="section-header">Pembahasan tugas (jika ada)</td>
                </tr>
                <tr>
                    <td colspan="3" class="radio-group">
                        <label><input type="radio" name="pembahasan_tugas" value="< 25%"> < 25%</label>
                        <label><input type="radio" name="pembahasan_tugas" value="25-50%"> 25-50%</label>
                        <label><input type="radio" name="pembahasan_tugas" value="50-75%"> 50-75%</label>
                        <label><input type="radio" name="pembahasan_tugas" value="75-100%"> 75-100%</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="section-header">Tingkat kejenuhan mengajar hari ini</td>
                </tr>
                <tr>
                    <td colspan="3" class="radio-group">
                        <label><input type="radio" name="tingkat_kejenuhan" value="Sangat jenuh"> Sangat jenuh</label>
                        <label><input type="radio" name="tingkat_kejenuhan" value="Jenuh"> Jenuh</label>
                        <label><input type="radio" name="tingkat_kejenuhan" value="Enjoy"> Enjoy</label>
                        <label><input type="radio" name="tingkat_kejenuhan" value="Sangat Enjoy"> Sangat Enjoy</label>
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="OK" class="submit-btn">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mahasiswa_kognitif = $_POST['mahasiswa_kognitif'];
        $mahasiswa_afektif = $_POST['mahasiswa_afektif'];
        $mahasiswa_kedisiplinan = $_POST['mahasiswa_kedisiplinan'];
        $mahasiswa_keterlibatan = $_POST['mahasiswa_keterlibatan'];
        $dosen_latihan = $_POST['dosen_latihan'];
        $dosen_diskusi = $_POST['dosen_diskusi'];
        $dosen_materi = $_POST['dosen_materi'];
        $dosen_pemanfaatan = $_POST['dosen_pemanfaatan'];
        $dosen_pertanyaan = $_POST['dosen_pertanyaan'];
        $dosen_penguasaan = $_POST['dosen_penguasaan'];
        $keterlambatan_mengajar = $_POST['keterlambatan_mengajar'];
        $mahasiswa_terlambat = $_POST['mahasiswa_terlambat'];
        $pemberian_sanksi = $_POST['pemberian_sanksi'];
        $pembahasan_tugas = $_POST['pembahasan_tugas'];
        $tingkat_kejenuhan = $_POST['tingkat_kejenuhan'];

        $nilai_arti = [
            1 => 'sangat tidak baik/sangat rendah/tidak pernah',
            2 => 'tidak baik/rendah/jarang',
            3 => 'biasa/cukup/kadang-kadang',
            4 => 'baik/tinggi/sering',
            5 => 'sangat baik/sangat tinggi/selalu'
        ];

        echo "<h2>Hasil Evaluasi Kinerja</h2>";
        echo "<b>B.1 Mahasiswa</b><br>";
        echo "Rerata kemampuan kognitif: " . $mahasiswa_kognitif . " (" . $nilai_arti[$mahasiswa_kognitif] . ")<br>";
        echo "Rerata kemampuan afektif: " . $mahasiswa_afektif . " (" . $nilai_arti[$mahasiswa_afektif] . ")<br>";
        echo "Kedisiplinan/ketepatan pengumpulan tugas: " . $mahasiswa_kedisiplinan . " (" . $nilai_arti[$mahasiswa_kedisiplinan] . ")<br>";
        echo "Keterlibatan/suasana kelas: " . $mahasiswa_keterlibatan . " (" . $nilai_arti[$mahasiswa_keterlibatan] . ")<br><br>";

        echo "<b>B.2 Dosen (Evaluasi Diri dalam PBM)</b><br>";
        echo "Pembahasan latihan soal: " . $dosen_latihan . " (" . $nilai_arti[$dosen_latihan] . ")<br>";
        echo "Kualitas diskusi dan tanya jawab: " . $dosen_diskusi . " (" . $nilai_arti[$dosen_diskusi] . ")<br>";
        echo "Kemampuan menjelaskan materi: " . $dosen_materi . " (" . $nilai_arti[$dosen_materi] . ")<br>";
        echo "Pemanfaatan materi kuliah: " . $dosen_pemanfaatan . " (" . $nilai_arti[$dosen_pemanfaatan] . ")<br>";
        echo "Kemampuan menjawab pertanyaan: " . $dosen_pertanyaan . " (" . $nilai_arti[$dosen_pertanyaan] . ")<br>";
        echo "Penguasaan kelas: " . $dosen_penguasaan . " (" . $nilai_arti[$dosen_penguasaan] . ")<br>";
        echo "Keterlambatan waktu mengajar: " . $keterlambatan_mengajar . "<br>";
        echo "Jumlah mahasiswa yang terlambat: " . $mahasiswa_terlambat . "<br>";
        echo "Pemberian sanksi mahasiswa bermasalah: " . $pemberian_sanksi . "<br>";
        echo "Pembahasan tugas: " . $pembahasan_tugas . "<br>";
        echo "Tingkat kejenuhan mengajar hari ini: " . $tingkat_kejenuhan . "<br>";
    }
    ?>
</body>
</html>
