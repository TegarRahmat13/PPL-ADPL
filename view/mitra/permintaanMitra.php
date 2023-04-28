<?php include 'header_M.php'; ?>
<style>
    .kemitraan__section{
        padding-top: 4rem;
        position: relative;
    }
    .kemitraan__header{
        display: flex;
        justify-content: center;
        padding-top: 0rem;
        background-image:url("../../asset/mitra/kemitraan.png");
        height: 250px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .kemitraan__header-text{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .kemitraan__header-text h1{
        color: var(--hijau-muda);
        font-size: 4rem;
        font-weight: 600;
    }
    .kemitraan__header-text p{
        color: black;
        font-size: 1.5rem;
        font-weight: 500;
    }
    .kemitraan__usaha{
        padding-top: 0rem;
    }
    .kemitraan__list{
        display: flex;
        justify-content: center;
        gap: 2rem;
        padding-bottom: 4rem;
    }
    .kemitraan__page{
        background-color: var(--hijau-muda);
        color: aliceblue;
        font-weight: 500;
        padding: .5rem 1rem;
        border-radius: .5rem;
        cursor: pointer;
        transition: background .5s;
    }
    .kemitraan__usaha-prodcut {
        grid-template-columns: repeat(3, 1fr);
        align-items: center;
        row-gap: 4rem;
        column-gap: 2rem;
        padding-bottom: 4rem;
    }
    .usaha{
        grid-template-columns: repeat(2,1fr);
        background-color: white;
        box-shadow: 0 5px 15px rgb(0 0 0 / 0.2); /* [horizontal offset] [vertical offset] [blur radius] [optional spread radius] [color] */
    }
    .usaha-img{
        height: 250px;
        object-fit: cover;
        display: block;
    }
    .usaha__title{
        display: flex;
        justify-content: flex-end;
        flex-direction: column;
        padding-bottom: .5rem;
        padding-right: .8rem;
    }
    .usaha__title h1{
        padding-bottom: 1rem;
        font-weight: 600;
    }
    .usaha__title i{
        font-size: 1.2rem;
        font-weight: 600;
    }
    .usaha__user-icon,.usaha__loc-icon{
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: .8rem;
        padding-bottom: .8rem;
    }
    .usaha__title-but{
        background-color: var(--hijau-muda);
        color: aliceblue;
        padding: .5rem .85rem;
        border-radius: .8rem;
        border: none;
        display: block;
        font-size: 1rem;
        width: 70%;
        cursor: pointer;
        transition: background .3s ;
    }
    .usaha__title-but:hover{
        background-color: var(--hijau-tua);
    }
</style>

<body>
<section class="kemitraan__section">
    <div class="kemitraan__header">
        <div class="kemitraan__header-text">
            <h1>KEMITRAAN</h1>
            <p>Temukan mitra berpengalaman yang tersebar di seluruh Indoneisa</p>
        </div>
    </div>
    <div class="kemitraan__usaha container">
        <div class="kemitraan__usaha-page">
            <ul class="kemitraan__list">
                <li class="kemitraan__page">
                    <p class="All">1</p>
                </li>
                <li class="kemitraan__page">
                    <p class="Male">2</p>
                </li>
                <li class="kemitraan__page">
                    <p class="Female">3</p>
                </li>
                <li class="kemitraan__page">
                    <p class="Kids">4</p>
                </li>
            </ul>
        </div>
        <div class="kemitraan__usaha-prodcut grid">
            <div class="usaha grid">
                <img class="usaha-img" src="../../image/mitra/kangkung.jpg" alt="">
                <div class="usaha__title">
                    <h1>Kangkung Hidroponik</h1>
                    <div class="usaha__user-icon">
                        <i class="ri-user-line"></i>
                        <p>Ilham Zamzami</p>
                    </div>
                    <div class="usaha__loc-icon">
                        <i class="ri-map-pin-line"></i>
                        <p>Jember, Jawa Timur</p>
                    </div>
                    <button class="usaha__title-but" onclick="location.href='permintaanMitraDetail.php'">
                        Lihat detail
                    </button>
                </div>
            </div>
            <div class="usaha grid">
                <img class="usaha-img" src="../../image/mitra/bayam.jpeg" alt="">
                <div class="usaha__title">
                    <h1>Bayam Hidroponik</h1>
                    <div class="usaha__user-icon">
                        <i class="ri-user-line"></i>
                        <p>Rizal Maulana</p>
                    </div>
                    <div class="usaha__loc-icon">
                        <i class="ri-map-pin-line"></i>
                        <p>Situbondo, Jawa Timur</p>
                    </div>
                    <button class="usaha__title-but">
                        Lihat detail
                    </button>
                </div>
            </div>
            <div class="usaha grid">
                <img class="usaha-img" src="../../image/mitra/tomat.jpg" alt="">
                <div class="usaha__title">
                    <h1>Tomat Hidroponik</h1>
                    <div class="usaha__user-icon">
                        <i class="ri-user-line"></i>
                        <p>Zulfan Rizki</p>
                    </div>
                    <div class="usaha__loc-icon">
                        <i class="ri-map-pin-line"></i>
                        <p>Banyuwangi, Jawa Timur</p>
                    </div>
                    <button class="usaha__title-but">
                        Lihat detail
                    </button>
                </div>
            </div>
            <div class="usaha grid">
                <img class="usaha-img" src="../../image/mitra/usaha.jpg" alt="">
                <div class="usaha__title">
                    <h1>Tomat Hidroponik</h1>
                    <div class="usaha__user-icon">
                        <i class="ri-user-line"></i>
                        <p>Dani Sumargo</p>
                    </div>
                    <div class="usaha__loc-icon">
                        <i class="ri-map-pin-line"></i>
                        <p>Jember, Jawa Timur</p>
                    </div>
                    <button class="usaha__title-but">
                        Lihat detail
                    </button>
                </div>
            </div>
            <div class="usaha grid">
                <img class="usaha-img" src="../../image/mitra/usaha.jpg" alt="">
                <div class="usaha__title">
                    <h1>Tomat Hidroponik</h1>
                    <div class="usaha__user-icon">
                        <i class="ri-user-line"></i>
                        <p>Dani Sumargo</p>
                    </div>
                    <div class="usaha__loc-icon">
                        <i class="ri-map-pin-line"></i>
                        <p>Jember, Jawa Timur</p>
                    </div>
                    <button class="usaha__title-but">
                        Lihat detail
                    </button>
                </div>
            </div>
            <div class="usaha grid">
                <img class="usaha-img" src="../../image/mitra/usaha.jpg" alt="">
                <div class="usaha__title">
                    <h1>Tomat Hidroponik</h1>
                    <div class="usaha__user-icon">
                        <i class="ri-user-line"></i>
                        <p>Dani Sumargo</p>
                    </div>
                    <div class="usaha__loc-icon">
                        <i class="ri-map-pin-line"></i>
                        <p>Jember, Jawa Timur</p>
                    </div>
                    <button class="usaha__title-but">
                        Lihat detail
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
</body>