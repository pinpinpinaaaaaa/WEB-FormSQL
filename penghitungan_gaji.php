<!DOCTYPE html>
<html>
<head>
    <title>Form Penghitungan Gaji dan PPh</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Form Penghitungan Gaji dan PPh</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Golongan:</td>
                <td>
                    <select name="golongan">
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jabatan Fungsional:</td>
                <td>
                    <select name="jabatan_fungsional">
                        <option value="Asisten ahli">Asisten ahli</option>
                        <option value="Lektor">Lektor</option>
                        <option value="Lektor Kepala">Lektor Kepala</option>
                        <option value="Guru Besar">Guru Besar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jabatan Struktural:</td>
                <td>
                    <select name="jabatan_struktural">
                        <option value="Ketua Prodi">Ketua Prodi</option>
                        <option value="Wakil ketua prodi">Wakil ketua prodi</option>
                        <option value="Dekan">Dekan</option>
                        <option value="Pembantu dekan">Pembantu dekan</option>
                        <option value="Rektor">Rektor</option>
                        <option value="Pembantu rektos">Pembantu rektos</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pinjaman:</td>
                <td><input type="text" name="pinjaman"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $nama = $_POST['nama'];
        $golongan = $_POST['golongan'];
        $jabatan_fungsional = $_POST['jabatan_fungsional'];
        $jabatan_struktural = $_POST['jabatan_struktural'];
        $pinjaman = floatval($_POST['pinjaman']);

        //variabel masukin dulu kawan
        $gaji_pokok = 0;
        $tunjangan_fungsional = 0;
        $tunjangan_struktural = 0;
        $pph = 0;
        $total_pemasukan = 0;
        $total_pengeluaran = 0;
        $total_penerimaan = 0;

        // tentuin gaji pokok berdasarkan golongan
        switch ($golongan) {
            case 'I':
                $gaji_pokok = 1000000;
                $pph_rate = 0.1;
                break;
            case 'II':
                $gaji_pokok = 2000000;
                $pph_rate = 0.1;
                break;
            case 'III':
                $gaji_pokok = 2500000;
                $pph_rate = 0.15;
                break;
            case 'IV':
                $gaji_pokok = 3000000;
                $pph_rate = 0.175;
                break;
            default:
                // kalau golongan tidak valid
                echo "Golongan tidak valid!";
                return;
        }

        // tunjangan fungsional berdasarkan jabatan fungsional
        switch ($jabatan_fungsional) {
            case 'Asisten ahli':
                $tunjangan_fungsional = 400000;
                break;
            case 'Lektor':
                $tunjangan_fungsional = 1000000;
                break;
            case 'Lektor Kepala':
                $tunjangan_fungsional = 2000000;
                break;
            case 'Guru Besar':
                $tunjangan_fungsional = 5000000;
                break;
            default:
                // jika jabatan fungsional tidak valid
                echo "Jabatan fungsional tidak valid!";
                return;
        }

        // tunjangan struktural berdasarkan jabatan struktural
        switch ($jabatan_struktural) {
            case 'Ketua Prodi':
                $tunjangan_struktural = 5000000;
                break;
            case 'Wakil ketua prodi':
                $tunjangan_struktural = 4000000;
                break;
            case 'Dekan':
                $tunjangan_struktural = 10000000;
                break;
            case 'Pembantu dekan':
                $tunjangan_struktural = 7000000;
                break;
            case 'Rektor':
                $tunjangan_struktural = 15000000;
                break;
            case 'Pembantu rektos':
                $tunjangan_struktural = 10000000;
                break;
            default:
                // kalau jabatan struktural tidak valid
                echo "Jabatan struktural tidak valid!";
                return;
        }

        // ngitung total pemasukan
        $total_pemasukan = $gaji_pokok + $tunjangan_fungsional + $tunjangan_struktural;

        // ngitung PPh
        $pph = $total_pemasukan * $pph_rate;

        // ngitung total pengeluaran
        $total_pengeluaran = $pph + $pinjaman;

        // ngitung total penerimaan
        $total_penerimaan = $total_pemasukan - $total_pengeluaran;

        // nampilin hasil perhitungan dalam tabel
        echo "<h2>Hasil Perhitungan</h2>";
        echo "<table>";
        echo "<tr><th colspan='2'>Detail Penghitungan</th></tr>";
        echo "<tr><td>Nama</td><td>$nama</td></tr>";
        echo "<tr><td>Gaji Pokok</td><td>Rp " . number_format($gaji_pokok, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Tunjangan Fungsional</td><td>Rp " . number_format($tunjangan_fungsional, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Tunjangan Struktural</td><td>Rp " . number_format($tunjangan_struktural, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Pinjaman</td><td>Rp " . number_format($pinjaman, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>PPh</td><td>Rp " . number_format($pph, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Total Pemasukan</td><td>Rp " . number_format($total_pemasukan, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Total Pengeluaran</td><td>Rp " . number_format($total_pengeluaran, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>Total Penerimaan</td><td>Rp " . number_format($total_penerimaan, 0, ',', '.') . "</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
