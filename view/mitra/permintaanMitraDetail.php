<?php include 'header_M.php'; ?>
<style>
    .kemitraanDetail__section{
        padding-top: 4rem;
    }
    .kemitraanDetail{
        grid-template-columns: repeat(auto-fit,minmax(200px, 1fr));
        align-items: flex-end;
        justify-content: center;
        padding-top: 2.5rem;
    }
    .kemitraan-img{
        max-height: 400px;
    }
    .kemitraanDetail__left{
        display: flex;
        justify-content: center;
    }
    .kemitraanDetail__right h1{
        font-size: 4rem;
        font-weight: 600;
        padding-bottom: 2.5rem;
    
    }
    .leftName__info,.leftLoc__info{
        flex-direction: row;
        gap: 1.5rem;
        align-items: center;
        font-size: 1.5rem;
        padding-bottom: .5rem;
        font-weight: 500;
    }
    .leftDetail__info{
        font-weight: 500;
        padding-bottom: 1.5rem;
    }
    .kemitraanDetail__button{
        padding: .8rem 1.5rem;
        background-color: var(--hijau-muda);
        color: white;
        font-size: 1.5rem;
        border-radius: .5rem;
        border: none;
        cursor: pointer;
        transition: background .3s;
    }
    .kemitraanDetail__button:hover{
        background-color: var(--hijau-tua);
    }
</style>
<body>
<section class="kemitraanDetail__section container">
    <div class="kemitraanDetail grid">
        <div class="kemitraanDetail__left">
            <img class="kemitraan-img" src="../../image/mitra/kangkung.jpg" alt="">
        </div>
        <div class="kemitraanDetail__right">
            <h1 class="leftUsaha__info">
                Kangkung <br>Hidroponik
            </h1>
            <div class="leftName__info flex">
                <i class="ri-user-line" style="margin-right: 10px;"></i>Dani Sumargo
            </div>
            <div class="leftName__info flex">
            <i class="ri-money-dollar-circle-line" style="margin-right: 10px;"></i>Rp.18.000/Kg
            </div>
            <div class="leftLoc__info flex">
                <i class="ri-map-pin-line" style="margin-right: 10px;" ></i>Jember, Jawa Timur
            </div>
            <p class="leftDetail__info">
                lorem ipsum dolot sit amet, lorem ipsum dolot sit amet lorem
                sit amet lorem ipsum dolot lorem ipsum dolot sit amet
            </p>
            <button class="kemitraanDetail__button" onclick="location.href='pembuatanFormulirMitra.php'">
            AJUKAN KERJASAMA
            </button>
        </div>
    </div>
</section>
</body>