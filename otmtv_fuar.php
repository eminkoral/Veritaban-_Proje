<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japan Fest</title>
    <style>
        @font-face {
        font-family: 'CustomFont';
        src: url('font/Involve-VF.ttf') format('ttf'), /* WOFF2 formatı */
        }
        body {
            font-family: 'CustomFont', ;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            
        }

        header {
            background-color: #2B4865;
            color: #fff;
            padding: 20px;
            display: flex;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        footer {
            background-color: #2B4865;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #F4E6B3;
            color: #836F45;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #CDB97F
        }

        .logo {
            width: 150px;
            height: auto;
            margin-right: 20px;
        }

        .card {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 800px; 
            margin-left: auto; 
            margin-right: auto; 
        }

        .card img {
            width: 100%; 
        }

        .card-body {
            padding: 20px;
            margin: 20px auto; 
            
            
        }

        .card-title {
            font-size: 18px; 
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px; 
            line-height: 1.6;
            
        }

        .text-body-secondary {
            font-size: 12px; 
            color: #666;
        }
    </style>
</head>
<body>
<body style="background-color: #DDDDDD;">

<header>
    <img src="images/jod.png" alt="Otomotiv Fuarı Logo" class="logo">
    <nav>
        <ul>
            <li><a href="index.php" class="button">Ana Sayfa</a></li>
            <li><a href="https://www.japanfest.com.tr/bilet" class="button">Kayıt</a></li>
            <li><a href="iletisim.php" class="button">İletişim</a></li>
        </ul>
    </nav>
</header>
    <main>
    
    <section>
        <div class="card" style="background-color: #fff;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/araba.png" class="img-fluid rounded-start" alt="Otomotiv Fuarı Görseli">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h2 class="card-title">Hoş Geldiniz!</h2>
            <p class="card-text">JAPAN Fest; her sene  Avrupa, çoğu Asya ülkesinde ve Amerika'da Japon Otomobil kullanıcılarının katılımıyla gerçekleştirilen bir festival organizasyonudur. Türkiye'de bu organizasyon tek bir kurum/kuruluş üzerinden yapılmaktadır.</p>
        
            <h2 class="card-title">Neden JAPAN FEST 2025'de olmalısın? (Çünkü sen yoksan bir kişi eksiğiz!)</h2>
            <p class="card-text">2025'in ilk sürprizi; Doğukan Manço'ya ait GT-R projesinin final hali ilk kez görücüye çıkıyor,<br>
            <br>2025'in 2. Sürprizi Barış Manço'ya ait Honda Prelude marka, model araç ilk kez görücüye çıkıyor,<br>
            <br>2025'in 3. Sürprizi ilerleyen günlerde açıklanacak,<br>
            <br>2025'in 4. Sürprizi ilerleyen günlerde açıklanacak,<br>
            <br>İkonik Japon Araçlarının fotoğraflarını çekebilme imkanı,<br>
            <br>Alanda bulunacak sponsorlarımızın dağıtacağı ikramlar eşliğinde alanın tadını çıkartabilme imkanı,<br>
            <br>Anime karakterler ile bir araya gelerek fotoğraf çekebilme imkanı,<br>
            <br>Araç simülasyonlarını kullanarak arkadaşların ile challange yapabilme imkanı,<br>
            <br>JOD özel ürünlerini %25'e varan indirimli fiyatlar ile alabilme imkanı,</p>
        
        <section>
        <h2 class="card-title">Kayıt</h2>
         <p>
         <p class="card-text">Etkinliğimize katılmak için şimdi kayıt olun ve bu heyecan verici deneyimi kaçırmayın! Kayıt için <a href="https://www.japanfest.com.tr/bilet">tıklayın</a>.
        </p>
        <h2 class="card-title">İletişim</h2>
         <p>
        <p class="card-text">Herhangi bir sorunuz veya geri bildiriminiz mi var? Bizimle iletişime geçmekten çekinmeyin. İletişim sayfamızdan <a href="iletisim.php">bize ulaşın</a>.
         </p>
         <p class="card-text"><small class="text-body-secondary">Son güncelleme: 3 dakika önce</small></p>
    </main>
    <footer>
        <p>&copy; JODFEST 2025</p>
    </footer>
</body>
</html>
