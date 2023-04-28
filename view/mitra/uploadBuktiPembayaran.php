<?php include 'header_M.php'; ?>

<style>
    .input__box{
        justify-content: center;
        padding-top: 9rem;
        display: flex;
        align-items: center;
    }
    .input__box input{
        outline: none;
        padding: .8rem 2rem .8rem 2rem;
        font-size: 16px;
        font-weight: 500;
        transition: all 0.3s ease;
        color: #159895;
        background: none;
        width: 30%;
        height: 100px;
        border-bottom: 2px solid #159895;
    }
    .input__box input:focus,
    .input__box input:valid{
        border-color: var(--first-color);
    }
</style>

<body>
    <div class="input__box">
        <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png" >
    </div>
    <div class="upload_bukti">
        <i class="ri-upload-cloud-2-line"><p>Upload Bukti Pembayaran</p>
        </i>
    </div>
</body>