<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Xi Xiu Cosmetic</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: barlow , sans-serif;
      background: linear-gradient(0deg, rgb(255, 204, 255), rgb(255, 255, 255));
      min-height: 100vh;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: 100% 100%;
      color: #D885BD;
      margin: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .logo {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-top: 30px;
    }

    .title {
      font-size: 20px;
      font-weight: 800;
      margin-top: 10px;
      color: #d875b3;
      text-align: center;
      display: flex;
    }

    .tagline {
      font-size: 14px;
      font-weight: 500;
      margin: 8px 0;
      color: #d885bd;
      line-height: 1,5;
      font-weight: 500;
      text-align: center;
      text-wrap: balanced;
      box-sizing: inherit;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin: 10px 0 24px;
    }

    .social-icons a {
      font-size: 30px;
      color: #db71bb;
    }

    .card-custom {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      max-width:  550px;
      width: 100%;
      position: relative;
      margin-bottom: 20px;
    }

    .card-custom img {
      width: 100%;
      border-radius: 20px;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .banner-overlay {
      position: absolute;
      bottom: 12px;
      left: 16px;
      color: white;
      font-size: 16px;
      text-shadow: 0 2px 4px rgba(0,0,0,0.4);
      z-index: 1;
    }

    .banner-dots {
      position: absolute;
      bottom: 12px;
      right: 16px;
      font-size: 20px;
      color: white;
      background: transparent;
      border: none;
      cursor: pointer;
      text-shadow: 0 2px 4px rgba(0,0,0,0.4);
      z-index: 1;
    }

    .links-container {
      display: flex;
      flex-direction: column;
      gap: 16px;
      width: 100%;
      max-width:  550px;
      color: #D885BD;
    }

    .link-btn {
      position: relative;
      background: white;
      padding: 14px 20px 18px 64px;
      border-radius: 20px;
      border: none;
      text-align: center;
      text-decoration: none;
      color: #D885BD;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
      transition: 0.3s;
      font-size: 17.6px;
    }

    .link-btn:hover {
      transform: translateY(-2px);
      background-color: #ffffff;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    }

    .link-btn img.icon-img {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      object-fit: contain;
      border-radius: 6px;
    }

    .link-btn .dots {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 18px;
      color: #D885BD;
    }

    @media (max-width: 480px) {
      .logo {
        width: 80px;
        height: 80px;
      }

      .title {
        font-size: 20px;
      }

      .tagline {
        font-size: 16px;
      }

      .social-icons a {
        font-size: 20px;
      }
    }
    .link-btn-small {
      color: black;
      font-weight: 600;
      font-size: 16px;
      padding: 10px 14px 12px 48px;
      max-width: 300px;
      align-self: center;
    }
    .link-btn-small .dots {
      font-size: 14px;
    }
    .last-link-btn {
      margin-top: 15px;
      margin-bottom: 80px;}
      </style>
    </head>
<body>

  <img src="img/Logo XIXIU.png" alt="Xi Xiu Logo" class="logo">
  <div class="title">XI XIU COSMETIC</div>
  <div class="tagline">#BeautyForEveryone #FromIndonesiaWithLove</div>

  <div class="social-icons">
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-tiktok"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fab fa-facebook"></i></a>
  </div>


  <div class="card card-custom">
    <a href="https://xixiucosmetic.id/" class="banner-link">
      <img src="img/WEBSITE XIUSIU.JPG" alt="Banner Image">
      <div style="position: absolute; left:0; bottom: 0px;  width:550px; height: 165px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));
      border-bottom-right-radius: 20px; border-bottom-left-radius: 20px;  overflow: hidden; pointer-events: none;"></div>
      <div class="banner-overlay">OFFICIAL WEBSITE</div>
      <span class="banner-dots">⋮</span>
    </a>
  </div>

  <div class="links-container">
    <a href="https://shopee.co.id/xixiuofficial" class="link-btn">
      <img class="icon-img" src="https://ugc.production.linktr.ee/9e528437-02fa-4d1b-9297-723ee957097f_6504B0F1-BCBD-482A-89CD-F7D3374DDC1F.png" alt="Shopee Icon"> SHOPEE <span class="dots">⋮</span>
    </a>
    <a href="#" class="link-btn">
      <img class="icon-img" src="https://ugc.production.linktr.ee/f6ecdb5b-f81f-4f4f-921c-90ec04a23578_88D2AC6F-1CA0-418A-B8C9-A8820B292517.png" alt="TikTok Shop Icon"> TIKTOK SHOP <span class="dots">⋮</span>
    </a>
    <a href="https://www.tokopedia.com/xixiuofficial" class="link-btn">
      <img class="icon-img" src="https://ugc.production.linktr.ee/0db17396-b8c1-45d7-96f1-98f1c5521bc0_79F5876F-711D-4CEB-AD16-20474F0311CA.png" alt="Tokopedia Icon"> TOKOPEDIA <span class="dots">⋮</span>
    </a>
    <a href="https://www.lazada.co.id/shop/xi-xiu" class="link-btn">
      <img class="icon-img" src="https://ugc.production.linktr.ee/06dd0a06-8d81-404f-be60-ae0545a939c1_D23CDEAE-6384-4237-925D-95AFE0704FDD.png" alt="Lazada Icon"> LAZADA <span class="dots">⋮</span>
    </a>
    <a href="https://www.blibli.com/merchant/xi-xiu/XIX-70000?pickupPointCode=PP-3176553" class="link-btn">
      <img class="icon-img" src="https://ugc.production.linktr.ee/31d0bc29-9476-44de-b5cb-7b59d6f4cba4_EAB7D0DA-E7A6-4A36-9E9A-EC2ACEEA0633.png" alt="Blibli Icon"> BLIBLI <span class="dots">⋮</span>
    </a>
    <a href="https://api.whatsapp.com/send/?phone=6285212947790&text&type=phone_number&app_absent=0" class="link-btn">
      <img class="icon-img" src="https://ugc.production.linktr.ee/be454ae3-2dc0-4d46-9ceb-84f3a13c0814_whatsapp-icon-concept-23-2147897840.png" alt="WhatsApp Icon"> WHATSAPP (CS) <span class="dots">⋮</span>
    </a>
    <a href="https://www.linkedin.com/in/pt-satya-pranata-jaya-a1b91326a/" class="link-btn">
      Join Our Team! <span class="dots">⋮</span>
    </a>
    <a href="#" class="link-btn">
      Partnership & Collaboration <span class="dots">⋮</span>
    </a>

    <a href="#" class="link-btn link-btn-small last-link-btn" style="display: flex; align-items: center; justify-content: center; width: 100%; background-color: #ffffff; border-radius: 20px; padding: 10px 14px;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" height="16px" style="display: block; width: auto; margin-right: 4px;">
        <path d="M13.5108 5.85343L17.5158 1.73642L19.8404 4.11701L15.6393 8.12199H21.5488V11.4268H15.6113L19.8404 15.5345L17.5158 17.8684L11.7744 12.099L6.03299 17.8684L3.70842 15.5438L7.93745 11.4361H2V8.12199H7.90944L3.70842 4.11701L6.03299 1.73642L10.038 5.85343V0H13.5108V5.85343ZM10.038 16.16H13.5108V24.0019H10.038V16.16Z" fill="#000000"></path>
      </svg>
      <span style="font-size: 16px; color: #000000;">Join xixiucosmetic.id on Linktree</span>
    </a>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
