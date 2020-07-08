<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>contact</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <header>
    <nav class="nav" id="nav_f">
      <ul>
        <li><a href="index.html" class="list">TOP</a></li>
        <li><a href="#profile" class="list">PROPFILE</a></li>
        <li><a href="#skill" class="list">SKILL</a></li>
        <li><a href="#works" class="list">WORKS</a></li>
      </ul>
    </nav>
  <div class="main">
    <div class="thanks-message">送信が完了しました。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ 年齢</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ お問い合わせの種類</div>
      <?php echo $_POST['category']; ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>

    </div>
  </div>
</body>
</html>
