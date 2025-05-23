<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katılsana Etkinlikleri</title>
    <style>
       
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
header {
    background-color: #516C8D;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
.logo {
    display: flex;
    align-items: center;
}
.logo img {
    margin-left: 10px;
    margin-right: 10px;
    width: 100px; 
    height: auto; 
}
.menu-items {
    display: flex;
}

.menu-item {
    margin-right: 20px;
}

.menu-item:last-child {
    margin-right: 0;
}

.user-actions {
    margin-left: auto; 
}

.user-actions a {
    margin-left: 10px;
}

header .menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.menu-item:hover .submenu {
    display: block;
}
.submenu {
    display: none;
    position: absolute;
    background-color: #333;
    padding: 10px;
    z-index: 1;
}
.submenu a {
    display: block;
    color: #fff;
    text-decoration: none;
    margin-bottom: 5px;
}
.submenu a:hover {
    background-color: #3cb371; 
}
footer {
    background-color: #516C8D;
    color: #0D242F;
    padding: 20px 0;
    text-align: center;
}
footer .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
footer .footer-content .col {
    flex: 1 1 20%;
    margin: 10px;
}
footer h4 {
    font-size: 16px;
    margin-bottom: 10px;
}
footer p {
    font-size: 14px;
    margin-bottom: 5px;
}
footer a {
    font-size: 14px;
    text-decoration: none;
    color: #0D242F;
    display: block;
    margin-bottom: 5px;
}
.event-container {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap; 
    margin: 0 40px;
}

.event-card {
    color: #0D242F;
    background-color:#FFF7F1;
    margin-top: 20px;
    margin-right: 20px;
    margin-left : 20px;
    margin-bottom: 20px; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
    padding: 20px; 
}

.event-img {
    display: block;
    width: 300px; 
    height: auto;
    margin: 0 auto;
    border-radius: 5px;

}

.event-details {
    flex: 1;
    overflow: hidden;
    
}
.event-description {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
}

.search-bar {
    margin: 0 auto; 
    text-align: center; 
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    max-width: 400px; 
    width: 100%;
}
.search-bar input[type="text"] {
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 5px;
    flex: 1;
    margin-right: 5px;
}
.search-bar button[type="submit"] {
    background-color: #DDDDDD;
    color: #0D242F;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.search-bar button[type="submit"]:hover {
    background-color: #9EB8D9;
}
.btn-login {
    background-color: #DDDDDD; 
    color: #0D242F;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    margin-right: 10px;
}
.btn-login:hover {
    background-color: #9EB8D9; 
}
.btn-register {
    background-color: #DDDDDD; 
    color: #0D242F;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    margin-right: 10px;
}
.btn-register:hover {
    background-color: #9EB8D9; 
}
.btn-more {
    display: block;
    margin-top: 10px;
    background-color: #DDDDDD;
    color: #0D242F;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}
.btn-more:hover {
    background-color: #9EB8D9;
}
 .menu-button {
    background-color: #DDDDDD; 
    color: #0D242F;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    margin-right: 20px;
}

.menu-button:last-child {
    margin-right: 0;
}

.menu-button:hover {
    background-color: #9EB8D9; 
}
.home-icon {
    cursor: pointer;
}
.home-icon img {
    width: 35px;
    height: auto;
}
        .tooltip {
    position: relative; 
    display: inline-block; 
}

.tooltip::after {
    content: attr(title); 
    position: absolute;
    background-color: black; 
    color: white; 
    padding: 5px; 
    border-radius: 5px; 
    z-index: 1; 
    opacity: 0; 
    transition: opacity 0.3s; 
    bottom: 125%; 
    left: 50%; 
    transform: translateX(-50%); 
}

.tooltip:hover::after {
    opacity: 1;
}

        </style>
</head>
<body>
</head>
<body>
<body style="background-color: #DDDDDD;">
<header>
    <div class="container">
        <div class="logo">
            <div class="home-icon" onclick="goToHomePage()">
                <img src="images/home_icon.png" alt="Ana Sayfa">
            </div>
        </div>
        <div class="menu-items">
            <a href="next_event.php" class="menu-button">Gelecek Etkinlikler</a>
            <a href="hizmetler.php" class="menu-button">Hizmetlerimiz</a>
            <a href="references.php" class="menu-button">Referanslarımız</a>
            <a href="etkinlik_yarat.php" class="menu-button">Etkinliğini Yarat</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Etkinlik Ara...">
            <button type="submit">Ara</button>
        </div>
        <div class="user-actions">
            <a href="log_in.php" class="btn-login">Giriş Yap</a>
            
        </div>
    </div>
</header>
<div class="container">
    

    <!-- Etkinlik Kartları -->
    <div class="event-container">
        <div class="event-card" style= "color: #0D242F">
            <img src="images/araba.png"  alt="Etkinlik Görseli" width="500">
            <div class="event-details">
                <h2>JOD Japanfest 2025</h2>
                <p class="event-description">JAPAN Fest; her sene Avrupa, çoğu Asya ülkesinde ve Amerika'da Japon Otomobil kullanıcılarının katılımıyla gerçekleştirilen bir festival organizasyonudur. Türkiye'de bu organizasyon tek bir kurum/kuruluş üzerinden yapılmaktadır.</p>
                <a href="otmtv_fuar.php" class="btn-more">Daha Fazlasını Gör</a>
            </div>
        </div>
        <div class="event-card" style= "color: #0D242F">
            <img src="images/yzlm.png" class="event-img" alt="Etkinlik Görseli">
            <div class="event-details">
                <h2>YAZILIM FUARI</h2>
                <p class="event-description">"Dijital dönüşümün öncüsü olan yazılım dünyasının en son yeniliklerini ve gelecek vadeden teknolojilerini keşfetmek için, Yazılım Fuarı'na katılmaya davetlisiniz. Sektör liderlerinin, girişimcilerin ve yazılım uzmanlarının bir araya geldiği bu etkinlik, interaktif sunumlar, eğitici atölye çalışmaları ve ilham verici konuşmalarla dolu bir deneyim sunuyor. Siz de geleceğin yazılım dünyasını şekillendiren teknolojik gelişmelere adım atmak ve sektördeki en son trendler hakkında bilgi sahibi olmak için Yazılım Fuarı'na katılın!"</p>
                <a href="yzlm_fuar.php" class="btn-more">Daha Fazlasını Gör</a>
            </div>
        </div> 
    </div>
</div>

<footer>
    <div class="footer-content">
        <div class="col">
            <h4>Bize Ulaşın</h4>
            <p><strong>Adres:</strong> Katılsana Aş. Kocaeli/Derince </p>
            <p><strong>Telefon:</strong> +90 (544) 199 4254</p>
            <p><strong>Çalışma Saatleri:</strong> 09:00 - 18:00, Hafta İçi Her Gün</p>
        </div>
        <div class="col">
            <h4>Hakkında</h4>
            <a href="#">Hakkımızda</a>
            <a href="#">Etkinliklerimiz</a>
            <a href="#">Gizlilik Politikası</a>
            <a href="#">Şartlar ve koşullar</a>
            <a href="#">Bize Ulaşın</a>
        </div>
        <div class="col">
            <h4>Hesap</h4>
            <a href="#">Giriş Yap</a>
            <a href="#">Kayıt Ol</a>
            <a href="#">Etkinliklerim</a>
            <a href="#">Sipariş Takip</a>
            <a href="#">Yardım</a>
        </div>
        <div class="col">
            <h4>Uygulamayı İndir</h4>
            <p>Google Play veya App Store</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Güvenli Ödeme</p>
            <img src="img/pay/pay.png" alt="">
        </div>
    </div>
    <div class="copyright">
        <p>© Katılsana Aş. - Tüm Hakları Saklıdır.</p>
    </div>
</footer>

<script>
    
    function toggleDropdown() {
        var dropdownMenu = document.getElementById("dropdownMenu");
        dropdownMenu.style.display = dropdownMenu.style.display === "none" ? "block" : "none";
    }

    function goToHomePage() {
        window.location.href = "index.php"; 
    }

    function toggleDropdown() {
        var dropdownMenu = document.getElementById("dropdownMenu");
        dropdownMenu.style.display = dropdownMenu.style.display === "none" ? "block" : "none";
    }
</script>
</body>
</html>
