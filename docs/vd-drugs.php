<?php
  require '../inc/header.php';
?>
    <div class="wrapper">
      <aside class="doc__nav">
        <ul>
          <a href="index.php"><li class="">Get Started</li></a>
          <a href="vd-drugs.php"><li class="selected">VD-Drugs</li></a>
          <a href="vd-tequilalajob.php"><li class="">VD-TequilalaJob</li></a>
          <a href="vd-coffeeshopjob.php"><li class="">VD-CoffeeShopJob</li></a>
          <a href="vd-lalinternas.php"><li class="">VD-LaLinternas</li></a>
        </ul>
      </aside>
      <article class="doc__content">
        <section class="js-section">
          <h3 class="section__title">Get Started</h3>
          <h4>Download</h4>
            <p>VD-Drugs - <a href="https://keymaster.fivem.net/" target="_blank">https://keymaster.fivem.net</a> (login to the account you used to checkout on Tebex, Once logged in click on Granted Assets, Find VD-Drugs and click Download)<br />
            bob74_ipl - <a href="https://github.com/qbcore-framework/bob74_ipl" target="_blank">https://github.com/qbcore-framework/bob74_ipl</a><br />
            QB-Core - <a href="https://github.com/qbcore-framework/qb-core" target="_blank">https://github.com/qbcore-framework/qb-core</a><br />
            QB-Inventory - <a href="https://github.com/qbcore-framework/qb-inventory" target="_blank">https://github.com/qbcore-framework/qb-inventory</a></p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Installation</h3>
          <p>After downloading all the files above, extract them into your FiveM servers resources folder</p>
          <img src="../assets/imgs/docs/vd-drugs-resource-folder.png">
          <p>Your resources folder should look similar to the one above (you may have more scripts installed and your folder may look different, as long as these folder are in there you should be fine)</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Edit server.cfg file</h3>
          <div class="code__block code__block--notabs">
            <p>Required Lines</p>
            <pre class="code code--block">
              <code>
                ensure bob74_ipl
                ensure qb-core
                ensure qb-inventory
                ensure vd-drugs
              </code>
            </pre>
            <p>Optional Lines</p>
            <pre class="code code--block">
              <code>
                ensure qb-drugs
              </code>
            </pre>
          </div>
        </section>
      </article>
    </div>
<?php
  require '../inc/footer.php';
?>
