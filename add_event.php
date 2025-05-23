<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etkinlik Ekle</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #DDDDDD;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .event-card {
            padding: 20px;
            background-color: #FFF7F1;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .event-card h2 {
            margin-top: 0;
            color: #0D242F;
        }
        .event-card input[type="text"],
        .event-card input[type="date"],
        .event-card textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .event-card textarea {
            height: 100px;
        }
        .event-card button[type="submit"] {
            background-color: #516C8D;
            color: #FFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .event-card button[type="submit"]:hover {
            background-color: #2C3E50;
        }
        .custom-button {
            background-color: #DDDDDD; 
            color: #0D242F;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-right: 5px;
        }
        .custom-button:hover{
            background-color: #9EB8D9;
        }
    </style>
</head>
<body>
<div class="container">
<div class="mb-3">
            <button class="custom-button" onclick="goToIndexPage()">Ana Sayfa</button>
            </div>
    <div class="event-card">
        <h2>Etkinlik Ekle</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <div>
                <label for="eventImage">Etkinlik Görseli:</label>
                <input type="file" id="eventImage" name="eventImage" accept="image/*" required>
            </div>
            <div>
                <label for="title">Başlık:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="date">Tarih:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div>
                <label for="description">Açıklama:</label>
                <textarea id="description" name="description" rows="4" cols="50"></textarea>
            </div>
            <button type="submit" name="submit">Etkinlik Ekle</button>
        </form>
        <?php
        if(isset($_POST['submit'])) {
            // Veritabanına yeni etkinliği ekle
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "etkinlik_db";

            // Veritabanı bağlantısını oluştur
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Bağlantıyı kontrol et
            if ($conn->connect_error) {
                die("Veritabanına bağlanılamadı: " . $conn->connect_error);
            }

            // Formdan gelen verileri al
            $title = $_POST['title'];
            $date = $_POST['date'];
            $description = $_POST['description'];

            // Etkinlik tablosuna yeni etkinliği ekle
            $sql = "INSERT INTO EVENTS (etkinlik_ad, etkinlik_tarih, tanim) VALUES ('$title', '$date', '$description')";

            if ($conn->query($sql) === TRUE) {
                echo '<p style="color: green;">Yeni etkinlik başarıyla eklendi</p>';

                // Son eklenen etkinlik ID'sini al
                $etkinlik_id = $conn->insert_id;

                // Etkinlik adı ile etkinlik ID'sini birleştirerek dosya adını oluştur
                $dosya_adı = $etkinlik_id . "_etkinlik.jpg";
                $gecici_dizin = $_FILES['eventImage']['tmp_name'];
                $hedef_dizin = "D:/XAMPP/htdocs/php_kayit_sitesi-main/php_kayit_sitesi-main/images/" . $dosya_adı; 

                // Dosyayı taşıma işlemi
                if (move_uploaded_file($gecici_dizin, $hedef_dizin)) {
                    echo '<p style="color: green;">Dosya başarıyla yüklendi</p>';
                } else {
                    echo '<p style="color: red;">Dosya yüklenirken bir hata oluştu</p>';
                }
            } else {
                echo '<p style="color: red;">Hata: ' . $sql . "<br>" . $conn->error . '</p>';
            }

            $conn->close();
        }
        ?>
    </div>
</div>
<script>
        function goToIndexPage() {
            window.location.href = "admin.php"; 
        }
    </script>

</body>
</html>