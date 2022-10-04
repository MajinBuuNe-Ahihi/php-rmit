<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once('./head.php')
  ?>
</head>

<body>
  <?php
  require_once('./header.php');
  ?>

  <section id="success" style="margin: 100px auto;
  flex-direction: column;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
  width: 100%;
  font-size: 20px;
  text-algin:center;
  color: #FFD400;">
    <div>you resgister successfully and Us will contact you soon</div>
    <div style="color:#00AAFF ">redirect home in <span id="second">5<span> seconds</div>
  </section>
  <script src="./js/index.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      let second = document.getElementById('second');
      let current = 5000
      let interval = setInterval(() => {
        second.innerText = current / 1000 + " seconds"
        current -= 1000;
        if (current == -1000) {
          location.href = "http://localhost/testphp/index.php"
          clearInterval(interval);
        }
      }, 1000)
    })
  </script>
  <?php
  require_once('./footer.php')
  ?>
</body>

</html>