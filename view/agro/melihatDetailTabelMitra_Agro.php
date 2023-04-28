<?php include 'header.php'; ?>

<style>
    .fotoUsaha {
        position: absolute;
        width: 200px;
        height: 372px;
        margin-left: 20%;
        top: 188px;
        margin-right: 30%;
        margin-bottom: 20%;
    }
    .isi_detail_usaha {
        position: absolute;
        margin-top: 30px;
        margin-left: 40%;
        width: 237px;
        height: 100px;
        font-style: normal;
        font-weight: 500;
        color: #159895;
    }
    .tabel_keperluan_usaha {
        position: fixed;
        align-items: center;
        grid-gap: 20px;
        top: 75%;
        left: 15%;
        color: white;
        font-size: 15px;
    }
    .btn_penuhi   {
        /* font-size: 15px;
        background: #22a4cf;
        color: white;
        border: white 3px solid;
        border-radius: 5px;
        padding: 12px ;
        top: 85%;
        height: 100%;
        width: 100px; */
        background: #005B45 ;
        position: absolute;
        top: 85%;
        padding: 10px;
        border-radius: 5px;
        color: white;
        left: 50%;
    }

</style>

<body>
    <div class="rincian_usaha">
        <div class="fotoUsaha">
            <img src="../../image/profile.JPG" alt="Foto Usaha">
        </div>
        <div class="isi_detail_usaha">
            <label for="">Nama Mitra</label><br>
                <input type="text" name="name" id="" style="height: 30%; width: 150%" ><br><br>
            <label for="">Nomor Telepon</label><br>
                <input type="number" name="name" id="" style="height: 30%; width: 150%"><br><br>
            <label for="">Usaha</label><br>
                <input type="text" name="name" id="" style="height: 30%; width: 150%">
        </div>
    </div>
    <div class="tabel_keperluan_usaha">
            <input type="text" name="name" id="" style="width: 1000px; border-radius:5px; -moz-border-radius:4px; background:#159895; height:50px;">
        </div>
    <div class="btn_penuhi">
        <a href="#">Penuhi</a>
    </div>
</body>