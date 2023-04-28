<?php include 'header.php'; ?>
<!-- <body>
    <style>
        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x));
            padding-right: 15%;
            padding-left: 15%;
            text-align: center;
            width: 100%;
            color: #159895;
            
        }
        .form_kiri.col {
            text-align: right;
            flex: 1 0 0%;
        }
        .form_kanan.col {
            text-align: left;
            flex: 1 0 0%;
        }
    </style>
    <div class="tambah_data">
        <form action="tabelPencatatan.php">
            <div class="container">
                <div class="row">
            <div class="form_kanan col">
                <label>Tanggal Produksi</label> <br>
                    <input type="date" name="tanggal_produksi" style="height: 30%; width: 50%;" >
                    <br>
                    <label>Produksi Awal</label> <br>
                        <input name="name" type="number" style="height: 30%; width: 50%;">Kg
                </div>

            <div class="form_kiri col">
                    <label style="margin-right: 40%;">Deskripsi</label> <br>
                        <input name="name" type="text" placeholder="Masukkan deskripsi" style="height: 30%; width: 55%;">
                        <br>
                        <label style="margin-right: 30%;">Produksi Akhir</label> <br>
                        <input name="name" type="number" style="height: 30%; width: 50%;">Kg
                    <br> 
                </div>
                </div>
                </div>
                <div class="row">
                    <button style="margin-top: 10%;">Submit</button> 
                </div>
            </div>
                </div>
            </div>

        </form>

    </div>
</body> -->
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column_1, .column_2 {
    color: #159895;
    position: relative;
    margin: 0;
    float: left;
    width: 50%;
    padding: 15px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.btn___simpan {
    position: relative;
    top: 0;
    text-align: center;
    float: unset;
    background: #159895;
    color: white;
    width: 100px;
    border-radius: 5px;
    font-size: 20px;
    align-items: center;
    left: 50%;
}
</style>
</head>
<body>

<div class="row">
    <div class="column_1">
        <label>Tanggal Produksi</label> <br>
            <input type="date" name="tanggal_produksi" style="height: 15%; width: 50%;" ><br><br>
        <label>Produksi Awal</label> <br>
            <input name="name" type="number" style="height: 15%; width: 50%;">Kg
    </div>
    <div class="column_2">
        <label style="margin-right: 40%;">Deskripsi</label> <br>
            <input name="name" type="text" placeholder="Masukkan deskripsi" style="height: 15%; width: 50%;"><br>
            <br>
            <label style="margin-right: 30%;">Produksi Akhir</label> <br>
            <input name="name" type="number" style="height: 15%; width: 50%;">Kg
    </div>
</div>
<div class="btn___simpan">
    <a href="">Simpan</a>
</div>
</body>