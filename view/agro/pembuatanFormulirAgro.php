<?php include 'header.php' ?>

<style>
    .formKemitraan{
    padding-top: 0;
}
.formKemitraangrid{
    grid-template-columns: repeat(auto-fit,minmax(250px, 1fr));
    justify-content: center;
    align-items: center;
    padding-top: 2.5rem;
}
.formleft div p,.formCenter div p,.formRight div p{
    font-size: 1.5rem;
    font-weight: 500;
    color: var(--hijau-tua);
}
.formleft div input, .formCenter div input,.formRight div input{
    padding: .5rem 2rem;
    width: 100%;
    font-size: 1rem;
    font-weight: 400;
    border: solid 1px var(--hijau-muda);
}
.buttonForm{
    padding-top: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
.formMitra{
    padding: .5rem 1.5rem;
    background-color: var(--hijau-muda);
    font-size: 1.5rem;
    font-weight: 500;
    color:white;
    border: none;
    cursor: pointer;
}
</style>
<body>
    <section class="formKemitraan container">
        <!-- <div class="back__tombol">
            <i class="ri-arrow-left-circle-fill"></i>
            <a href="mitra_kemitraanDetail.php">
                <h1>Halaman Kemitraan</h1>
            </a> -->
        </div>
        <div class="formKemitraangrid grid">
            <div class="formleft grid">
                <div class="formNama">
                    <p>Nama</p>
                    <input type="text" placeholder="Masukan Namamu">
                </div>
                <div class="formNik">
                    <p>NIK</p>
                    <input type="text" placeholder="NIK 16 Digit">
                </div>
                <div class="formAlasan">
                    <p>Alasan Bermitra</p>
                    <input type="text" placeholder="Berikan Alasanmu">
                </div>
            </div>
            <div class="formCenter grid">
                <div class="formUsaha">
                        <p>Nama Usaha</p>
                        <input type="text" placeholder="Masukan Nama Usaha">
                    </div>
                    <div class="formAlamat">
                        <p>Alamat</p>
                        <input type="text" placeholder="Masukan Alamat">
                    </div>
                    <div class="formDeskripsi">
                        <p>Deskripsi Usaha</p>
                        <input type="text" placeholder="Berikan Deskripsi singkat">
                    </div>
                </div>
            <div class="formRight grid">
                <div class="formTelepom ">
                        <p>No Telepon</p>
                        <input type="text" placeholder="No Handphone">
                    </div>
                    <div class="formNik">
                        <p>Kode Pos</p>
                        <input type="text" placeholder="Kode Pos">
                    </div>
                    <div class="formAlasan">
                        <p>Permintaan Suply</p>
                        <input type="text" placeholder="Apa yang kamu butuhkan">
                    </div>
                </div>
            </div>
            <div class="buttonForm">
                <button  class="formMitra button" onclick="location.href='#'" >
                Kirim
                </button> 
            </div>
        </div>
    </section>
</body>