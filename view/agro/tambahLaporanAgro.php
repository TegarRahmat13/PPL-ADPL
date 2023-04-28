<?php 
include 'header.php';
include '../../linkconfig.php';
?>
<style>
    table {
        position: relative;
        width: 50%;
        top: 0;
        left: 25%;
        margin-bottom: 20px;
        text-align: center;
        border-collapse: collapse;

    }
    table, th, td {
        text-align: center;
        border: 3px solid #159895
    }
    th
    {
        background-color: #159895;
    }
    .btntambah {
        position: relative;
        top: 0;
        text-align: center;
    }
</style>
<body>
<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Produksi Awal</th>
        <th>Produksi Akhir</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Aris</td>
        <td>3mm3</td>
        <td></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Taufik</td>
        <td>3mm3</td>
        <td></td>
    </tr>
</table>
<a href="detailTambahLaporanAgro.php">
<div class="btntambah">
    <img src="../../image/add-circle-line.png" alt="">
    <br>Tambah Laporan
</div>
</a>

</body>