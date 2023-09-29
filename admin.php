<?php

    if (isset($_POST['btnsave'])){ //Mengecek jika button save di klik
        $date = date('Y-m-d');

        $name = htmlspecialchars($_POST['name'], ENT_QUOTES); //Dibuat untuk menghindari user meng-inject 'Script' agar tidak tersimpan ke DB 
        $address = htmlspecialchars($_POST['address'], ENT_QUOTES); //Dibuat untuk menghindari user meng-inject 'Script' agar tidak tersimpan ke DB 
        $purpose = htmlspecialchars($_POST['purpose'], ENT_QUOTES); //Dibuat untuk menghindari user meng-inject 'Script' agar tidak tersimpan ke DB 
        $meet = htmlspecialchars($_POST['meet'], ENT_QUOTES); //Dibuat untuk menghindari user meng-inject 'Script' agar tidak tersimpan ke DB 
        $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES); //Dibuat untuk menghindari user meng-inject 'Script' agar tidak tersimpan ke DB
        
        //Mempersiapkan query save data
        // $save = mysqli_query($connection, "INSERT INTO tbtamu VALUES ('', '$date', '$name', '$address', '$purpose', '$meet','$phone')");
        $query = "INSERT INTO tbtamu (date, name, address, purpose, meet, phone) VALUES ('$date', '$name', '$address', '$purpose', '$meet', '$phone')";

        $save = mysqli_query($connection, $query);

        if($save){ //Mengecek jika save data sukses
            echo "<script>alert('Save Data Success, Thanks!')
                    document.location='?'</script>";
        } else{
            echo "<script>alert('Save Data Failed , Try Again!')
                    document.location='?'</script>";
        }
    }
?>