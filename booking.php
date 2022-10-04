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
  <section>
    <div class="main-booking">
      <form method="post" action="./appointments.php">
        <table>
          <tr>
            <td>Patient Id</td>
            <td>
              <input id="pid" type="text" name="pid" style="border:<?php echo !empty($_GET['pid']) ? '1px solid red' : 'none'
                                                                    ?> ">
              <?php if (!empty($_GET['pid'])) {
                echo ('<br/> <span style="color: red"> Patient Id' . $_GET['pid'] . '<span>');
              }
              ?>
            </td>
          </tr>
          <tr>
            <td>
              Date
            </td>
            <td>
              <input type="date" id="date" name="date" style="border:<?php echo !empty($_GET['date']) ? '1px solid red' : 'none' ?> ">
              <?php if (!empty($_GET['date'])) {
                echo ('<br/><span style="color: red"> Date' . $_GET['date'] . '<span>');
              } ?>
            </td>
          </tr>
          <tr>
            <td>Time</td>
            <td class="time">
              <div class="pillgroup">
                <label class="pillgroup__element">9am - 12pm</label>
                <label class="pillgroup__element">12pm - 3pm</label>
                <label class="pillgroup__element">3pm - 6pm</label>
              </div>
              <input type="checkbox" class="checkbox" value="1" name="time" checked> </input>
              <input type="checkbox" class="checkbox" value="2" name="time"> </input>
              <input type="checkbox" class="checkbox" value="3" name="time"> </input>
            </td>
          </tr>
          <tr>
            <?php if (!empty($_GET['time'])) {
              echo ("<br/> <span style='color: red'> Date" . $_GET['time'] . '<span>');
            } ?>
          </tr>
          <tr>
            <td>Reason</td>
            <td>
              <select name="reason" id="reason">
                <option value="0"> advice option</option>
                <option value="1">Childhood Vaccination Shots</option>
                <option value="2">Influenza Shot</option>
                <option value="3">Covid BoosterShot</option>
                <option value="4">Blood test</option>
              </select>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <span class="advice">
                Childhood vaccines: A disclaimer that multiple vaccines are normally
                administered in combination and may cause the child to be sluggish
                or feverous for 24 – 48 hours afterwards.
              </span>
              <span class="advice">
                Influenza: The best time to get vaccinated is in April and May each
                year for optimal protection over the winter months.
              </span>
              <span class="advice">
                Covid Booster Shot: Advice that everyone should arrange to have
                their third shot as soon as possible and adults over the age of 30
                should have their fourth shot to protect against new variant strains.
              </span>
              <span class="advice">
                Blood test: That some tests require some fasting ahead of time and
                that a staff member will advise them on this prior to the
                appointment.
              </span>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input id="submitbtn" type="submit" value="submit form"></td>
          </tr>
        </table>
      </form>
    </div>
  </section>
  <script src="./js/index.js"></script>
  <?php
  require_once('./footer.php')
  ?>
</body>

</html>