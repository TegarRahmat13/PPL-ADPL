<?php

include '../../linkconfig.php';
require PATH_CONTROLLER . "controller.php";
session_start();
$user_id = $_SESSION['id_agro'];
$userUpdater = new UserUpdater($conn, $user_id);
$userUpdater->updateProfile();
$messages = $userUpdater->getMessages();
error_reporting(E_ALL ^ E_NOTICE);
// $qry = new Query();
// session_start();
// $user_id = $_SESSION['id_agro'];
// $userUpdater = new UserUpdater($conn, $user_id);
// $userUpdater->updateProfile($user_id);
// $messages = $userUpdater->getMessages();
// error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['update_profil'])) {
   // $update_name =  $_POST['update_name'];
   // $update_email = $_POST['update_email'];
   // $update_namausaha =$_POST['update_namausaha'];
   // $update_deskripsi =$_POST['update_deskripsi'];
   // echo "User ID: ".$user_id."<br>";
   // echo "Name: ".$update_name."<br>";
   // echo "Email: ".$update_email."<br>";
   // echo "Nama Usaha: ".$update_namausaha."<br>";
   // echo "Deskripsi: ".$update_deskripsi."<br>";
   $qry->updateProfile($user_id);
}
// session_start();
// include '../../linkconfig.php';
// require PATH_CONTROLLER . "controller.php";
// $qry = new Query();

// $user_id = $_SESSION['id_agro'];
// $userUpdater = new UserUpdater($conn, $user_id);
// $userUpdater->updateProfile($user_id);
// $messages = $userUpdater->getMessages();
// error_reporting(E_ALL ^ E_NOTICE);
// if (isset($_POST['submit'])) {
//     $update_name =  $_POST['name'];
//     $update_email = $_POST['email'];
//     $update_nomortlp = $_POST['nomor_telepon_agro'];
//     $update_alamat = $_POST['alamatProfil'];
//     $update_namausaha =$_POST['namausaha'];
//     $update_deskripsi =$_POST['deskripsi'];
//     echo "User ID: ".$user_id."<br>";
//     echo "Name: ".$update_name."<br>";
//     echo "Email: ".$update_email."<br>";
//     echo "Nomor Telepon:".$update_nomortelepon. "<br>";
//     echo "Alamat:".$update_alamatProfil. "<br>";
//     echo "Nama Usaha: ".$update_namausaha."<br>";
//     echo "Deskripsi: ".$update_deskripsi."<br>";
//     echo "Harga ".$update_harga. "<br>";
//     $qry->updateProfile($user_id);



?>

<style>
    *{
        box-sizing: border-box;
        margin-top: 20px;
    }
    .row{
        display:grid;
        grid-template-columns: 33.33% 33.33% 33.33%;
        justify-content: center;
        text-align: left;
        font-size: 20px;
        height: 300px;
        color: #159895;
    }
    .column1 {
        justify-content: center;
        text-align: center;
        margin: 10px;
        width: 300px;
    }
    .btn_edit {
        background: #159895;
        color: white;
        width: 100px;
        text-align: center;
        float: left;
        border-radius: 5px;
        margin: 0;
    }
    .btn_tambah {
        background: #159895;
        color: white;
        width: 100px;
        text-align: center;
        float: right;
        border-radius: 5px;
        margin: 0;

    }
    .btn_simpan, .btn_submit {
        width: 100px;
        height: 30px;
        margin-left: 50%;
        margin-right: 50%;
        margin-top: 10%;
        color: white;
        
        /* position: absolute;
        margin-top: 10%;
        float: unset;
        text-align: center;
        background: #159895;
        color: white;
        width: 100px;
        border-radius: 5px;
        font-size: 20px;
        align-items: center;
        left: 50%; */
    }
    hr {
        margin-top: 0;
        border: 0;
        width: 50px;
        height: 4px;
        background: #159895;
        margin-left:5%
    }
    .btn_col1 {
        margin-left: 30%;
    }
</style>

<body>

<?php
      $conn =  mysqli_connect("localhost", "root", "", "ppl");
      $select = mysqli_query($conn, "SELECT * FROM `pelakuagro` WHERE id_agro = '$user_id'") or die('query failed');
      if (mysqli_num_rows($select) > 0) {
         $fetch = mysqli_fetch_assoc($select);
      }
      ?>


    <h1 style="margin-left:5% ;" >Profile</h1>
    <hr>
        <div class="row">
            <div class="column1">
            <form action="homeAgro.php" method="post" enctype="multipart/form-data">
                <?php
                if ($fetch['image'] == '') {
                    echo '<img src="images/default-avatar.png">';
                } else {
                    echo'<img src="../../upimage/' . $fetch['image'] . '" class="rounded" style="margin:20%; width: 300px;"
            alt="Avatar" />';
                    // echo '<img src="../../upimage/' . $fetch['image'] . '">';
                }
                if (isset($message)) {
                    foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                    }
                }
                ?><br>
            <div class="btn_col1">
                <div class="btn_tambah">
                            <!-- <a href="editUpdateProfilAgro.php">Tambah</a>
                        </div>
                    <div class="btn_edit">
                            <a href="editUpdateProfilAgro.php">Edit</a> -->
                        </div>
            </div>
            </div>
            <div class="column2">
                <label for="">Username</label><br>
                    <input type="text" name="update_name" class="form-control"  value="<?php echo $fetch['name']; ?>" id="exampleInputEmail1" style="height: 10%; width: 60%" ><br><br>
                <label for="">Nomor Telepon</label><br>
                    <input type="number" name="update_nomortelepon" class="form-control" value="<?php echo $fetch['nomortelepon']; ?>" id="exampleInputEmail1" style="height: 10%; width: 60%"><br><br>
                <label for="">Nama Usaha</label><br>
                    <input type="text" name="update_namausaha" class="form-control" value="<?php echo $fetch['namausaha']; ?>" id="exampleInputEmail1" style="height: 10%; width: 60%"><br><br>
                <label for="">Harga</label><br>
                    <input type="number" name="update_harga" class="form-control" value="<?php echo $fetch['harga']; ?>" id="exampleInputEmail1" style="height: 10%; width: 60%"><br><br>
            </div>
            <div class="column3">
                <label for="">Email</label><br>
                        <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" id="exampleInputEmail1" style="height: 10%; width: 60%" ><br><br>
                    <label for="">Alamat</label><br>
                        <input type="text" name="update_alamatProfil" value="<?php echo $fetch['alamatProfil']; ?>" id="exampleInputEmail1" style="height: 10%; width: 60%"><br><br>
                    <label for="">Deskripsi</label><br>
                        <input type="text" name="update_deskripsi" value="<?php echo $fetch['deskripsi']; ?>" id="exampleInputEmail1" style="height: 35%; width: 60%"><br><br>
            </div>
        </div>
        <div class="btn_simpan">
            <button type="submit" value="update profile" name="submit" class="btn_submit" style="background:#159895;">Submit</button>
        </div>
            </form>
</body>