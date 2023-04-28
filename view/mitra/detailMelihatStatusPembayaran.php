<?php include 'header_M.php'; ?>
<style>
    *{
        box-sizing: border-box;
    }
    .row{
        padding-top: 4rem;
        display:grid;
        grid-template-columns: 33.33% 33.33% 33.33%;
        justify-content: center;
        text-align: left;
        font-size: 20px;
        height: 300px;
        color: #159895;
    }
    .column1 {
        margin: 20%;
        width: 300px;
    }
    .column2, .column3 {
        margin-top: 10%;
    } 
    .btn_edit {
        background: #159895;
        color: white;
        width: 100px;
        text-align: center;
        float: left;
        border-radius: 5px;
        margin-top: 10px;
        margin-left: 10%;
    }
    .btn_tambah {
        background: #159895;
        color: white;
        width: 100px;
        text-align: center;
        float: right;
        border-radius: 5px;
        margin-right: 10%;
        margin-top: 10px;

    }
    .btn_simpan {
        position: absolute;
        margin-top: 10px;
        float: unset;
        text-align: center;
        background: #005B45;
        color: white;
        width: 100px;
        border-radius: 5px;
        font-size: 20px;
        align-items: center;
        left: 50%;
    }
    hr {
        margin-top: 0;
        border: 0;
        width: 50px;
        height: 4px;
        background: #159895;
        margin-left:5%
    }
    /* .deskripsi_pembayaran {
        margin-top: 80px;
        margin-left: 20%;
        text-align: center;
        background: #159895;
        height: 60px;
        width: 50%;
    } */
</style>

<body>
    <h1 style="margin-left:5% ;" >Profile</h1>
    <hr>
        <div class="row">
            <div class="column1">
                <img src="../../image/mitra/tomat.jpg" alt="">
                <!-- <div class="btn_edit">
                    <a href="editUpdateProfilAgro.php">Edit</a>
                </div>
                <div class="btn_tambah">
                        <a href="editUpdateProfilAgro.php">Tambah</a>
                    </div> -->

            </div>
            <div class="column2">
                <label for="">Nama Pelaku Agro</label><br>
                    <input type="text" name="name" id="" style="height: 10%; width: 60%" ><br><br>
                <label for="">Nomor Telepon</label><br>
                    <input type="number" name="name" id="" style="height: 10%; width: 60%"><br><br>
                <label for="">Nama Usaha</label><br>
                    <input type="text" name="name" id="" style="height: 10%; width: 60%"><br><br>
            </div>
            <div class="column3">
                <label for="">Lokasi</label><br>
                        <input type="email" name="name" id="" style="height: 10%; width: 60%" ><br><br>
                    <label for="">Harga</label><br>
                        <input type="number" name="name" id="" style="height: 10%; width: 60%"><br><br>
                    <label for="">Nomer Rekening</label><br>
                        <input type="number" name="name" id="" style="height: 10%; width: 60%"><br><br>
            </div>
        </div>
        <div class="deskripsi_pembayaran">
            <input type="text" name="name" id="" style="align-items: center; margin-top: 80px;margin-left: 25%;text-align: center;background: #159895;height: 60px;width: 50%; font-size:25px; color:white;" >
        </div>
        <div class="btn_simpan">
            <a href="uploadBuktiPembayaran.php">Bayar</a>
        </div>
</body>