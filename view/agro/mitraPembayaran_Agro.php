<?php include 'header.php'; ?>

<style>
    .tulisan_bukti {
        font-size: 30px;
        color: #159895;
        text-align: center;
        margin-bottom: 10px;
    }
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
</style>
<body>
    <div class="tulisan_bukti">
        <p>Bukti Pembayaran</p>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Mitra</th>
            <th>Status</th>
            <th>Bukti</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Aris</td>
            <td>Status</td>
            <td><a href="mitraDetailPembayaran_Agro.php">Lihat</a></td>
    </tr>
    </table>
</body>