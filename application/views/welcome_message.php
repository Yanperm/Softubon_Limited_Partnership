
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ห้างหุ้นส่วนจำกัด ซอฟต์อุบล,สินค้าไอที,พัฒนาซอฟต์แวร์,ประกันภัยทุกประเภท">
    <meta name="keywords" content="สินค้าไอที,พัฒนาซอฟต์แวร์,ประกันภัยทุกประเภท,วางระบบไอที">
    <meta name="author" content="ห้างหุ้นส่วนจำกัด ซอฟต์อุบล">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Softubon.co.th | ห้างหุ้นส่วนจำกัด ซอฟต์อุบล | สินค้าไอที | พัฒนาซอฟต์แวร์ | ประกันภัยทุกประเภท</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
	<style>
		body {
      font-family: 'Kanit', sans-serif;
  background-image: url("../images/bg.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  text-align: center;
  justify-content: center;
  align-items: center; }
  @media (max-width: 767px) {
    body {
      background-position: bottom right; } }

main {
  max-width: 495px;
  padding: 15px; }

.header-img {
  margin-bottom: 37px;
  max-width: 413px;
  width: 100%; }

.page-title {
  font-size: 40px;
  font-weight: bold;
  text-align: center;
  color: #000000;
  margin-bottom: 22px; }
  @media (max-width: 767px) {
    .page-title {
      font-size: 25px; } }

.page-description {
  font-size: 18px;
  color: #a1a9af;
  margin-bottom: 37px; }
  @media (max-width: 767px) {
    .page-description {
      font-size: 14px; } }

.mail-capture-form {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 37px; }
  .mail-capture-form .form-group {
    margin-right: 11px;
    max-width: 302px;
    margin-bottom: 0; }
    @media (max-width: 767px) {
      .mail-capture-form .form-group {
        max-width: 180px; } }
  .mail-capture-form .form-control {
    background-color: #eff5f9;
    border-radius: 24px;
    border: 0;
    height: 48px;
    padding: 16px 30px;
    font-size: 14px;
    color: #000000; }
    @media (max-width: 767px) {
      .mail-capture-form .form-control {
        padding: 12px 20px;
        height: 42px; } }
  .mail-capture-form .btn-submit {
    padding: 16px 20px;
    font-size: 13px;
    font-weight: bold;
    color: #ffffff;
    border-radius: 23.5px;
    line-height: 15px;
    background-color: #ffba97;
    background: linear-gradient(90deg, #ffba97 0%, #fe7795 100%);
    height: 48px;
    border: 0; }
    @media (max-width: 767px) {
      .mail-capture-form .btn-submit {
        padding: 14px 15px;
        font-size: 11px;
        height: 42px; } }

.notify-btn {
  padding: 15px 80px;
  background-color: #ffffff;
  border-radius: 24px;
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  outline: none;
  border: 0;
  margin-bottom: 72px; }
  @media (max-width: 767px) {
    .notify-btn {
      padding: 15px 50px;
      margin-bottom: 30px; } }

.footer-social-links .social-link {
  display: inline-block;
  text-align: center;
  line-height: 40px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid #d5dae2;
  color: #000000;
  margin-right: 8px;
  margin-left: 8px;
  transition: all 0.3s ease-in-out; }
  .footer-social-links .social-link:hover {
    text-decoration: none;
    background-color: #000000;
    color: #ffffff; }

footer {
  font-size: 14px;
  color: #919aa3;
  padding: 40px 0; }
  @media (max-width: 767px) {
    footer {
      padding: 36px 0; } }

/*# sourceMappingURL=bd-coming-soon.css.map */
	</style>
</head>

<body class="min-vh-100 d-flex flex-column">
    <main class="my-auto">
        <img src="<?php echo base_url(); ?>assets/coming-soon.jpeg" alt="Coming soon" class="header-img img-fluid">
        <h1 class="page-title">ห้างหุ้นส่วนจำกัด ซอฟต์อุบล</h1>
        <p class="page-description">สินค้าไอที,พัฒนาซอฟต์แวร์,ประกันภัยทุกประเภท</p>
        <form class="form-inline mail-capture-form" action="<?php echo base_url('app/mail'); ?>" method="POST">
            <div class="form-group">
                <label for="Email" class="sr-only">Email</label>
                <input type="email" name="Email" id="Email" class="form-control" placeholder="email address" required>
            </div>
            <button type="submit" class="btn btn-submit">Notify Me</button>
        </form>
        <nav class="footer-social-links">
            <a href="#!" class="social-link"><i class="mdi mdi-facebook-box"></i></a>
            <a href="#!" class="social-link"><i class="mdi mdi-twitter"></i></a>
            <a href="#!" class="social-link"><i class="mdi mdi-google"></i></a>
        </nav>
    </main>
    <footer>
        Copyright 2022 นิติบุคคลผู้เสียภาษี 0343564005061
    </footer>
</body>

</html>