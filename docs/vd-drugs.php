<?php
  require '../inc/header.php';
?>
    <div class="wrapper">
      <aside class="doc__nav">
        <ul>
          <a href="index.php"><li class="">Get Started</li></a>
          <a href="vd-drugs.php"><li class="selected">VD-Drugs</li></a>
          <a href="vd-barjob.php"><li class="">VD-BarJob</li></a>
          <a href="vd-coffeeshopjob.php"><li class="">VD-CoffeeShopJob</li></a>
          <a href="vd-restaurantjob.php"><li class="">VD-RestaurantJob</li></a>
          <a href="vd-fastfoodjob.php"><li class="">VD-FastFoodJob</li></a>
        </ul>
      </aside>
      <article class="doc__content">
        <section class="js-section">
          <h3 class="section__title">Get Started</h3>
          <h4>Download</h4>
            <p>VD-Drugs - <a href="https://keymaster.fivem.net/" target="_blank">https://keymaster.fivem.net</a> (login to the account you used to checkout on Tebex, Once logged in click on Granted Assets, Find VD-Drugs and click Download)</p>
            <img style="max-width:100%; width:auto; height:auto;" src="../assets/imgs/docs/keymaster.png">
            <img style="max-width:100%; width:auto; height:auto;" src="../assets/imgs/docs/granted-assets-vd-drugs.png">
            <p>bob74_ipl - <a href="https://github.com/qbcore-framework/bob74_ipl" target="_blank">https://github.com/qbcore-framework/bob74_ipl</a><br />
            <img style="max-width:100%; width:auto; height:auto;" src="../assets/imgs/docs/bob74_ipl.png">
            QB-Core - <a href="https://github.com/qbcore-framework/qb-core" target="_blank">https://github.com/qbcore-framework/qb-core</a><br />
            <img style="max-width:100%; width:auto; height:auto;" src="../assets/imgs/docs/qb-core.png">
            QB-Inventory - <a href="https://github.com/qbcore-framework/qb-inventory" target="_blank">https://github.com/qbcore-framework/qb-inventory</a></p>
            <img style="max-width:100%; width:auto; height:auto;" src="../assets/imgs/docs/qb-inventory.png">
            <p>-- Optional --</p>
            QB-Drugs - <a href="https://github.com/qbcore-framework/qb-drugs" target="_blank">https://github.com/qbcore-framework/qb-drugs</a></p>
            <img style="max-width:100%; width:auto; height:auto;" src="../assets/imgs/docs/qb-drugs.png">
        </section>
        <section class="js-section">
          <h3 class="section__title">Installation</h3>
          <p>After downloading all the files above, extract them into your FiveM servers resources folder</p>
          <img style="max-width:100%; width:auto; height:auto;" src="../assets/imgs/docs/vd-drugs-resource-folder.png">
          <p>Your resources folder should look similar to the one above (you may have more scripts installed and your folder may look different, as long as these folder are in there you should be fine)</p>
          <h3 class="section__title">QB-Inventory Setup</h3>
          In your resources folder go to qb-inventory/html/images and copy the files from VD-Drugs/images here.
          <img style="max-width:100%; width:auto; height:auto;" src="../assets/imgs/docs/vd-drugs-items.png">
          <h3 class="section__title">*OPTIONAL* QB-Drugs Setup</h3>
          <p>If you want to use the drug dealing from QB-Drugs which I personally like better, change this line in the VD-Drugs config.lua file</p>
          <pre class="code code--block">
            <code>
              Config.CornersToggle = true
            </code>
          </pre>
          <p>to this</p>
          <pre class="code code--block">
            <code>
              Config.CornersToggle = false
            </code>
          </pre>
          <p>and then navigate to qb-drugs/config.lua and find this section of code</p>
          <pre class="code code--block">
            <code>
              Config.CornerSellingDrugsList = {
                "weed_white-widow",
                "weed_skunk",
                "weed_purple-haze",
                "weed_og-kush",
                "weed_amnesia",
                "weed_ak47",
                "crack_baggy",
                "cokebaggy",
                "meth",
              }
            </code>
          </pre>
          <p>and add this after "meth"</p>
          <pre class="code code--block">
            <code>
              "packagedcoca",
              "packagedweed",
              "packagedmeth"
            </code>
          </pre>
          <p>it should now look similar to this</p>
          <pre class="code code--block">
            <code>Config.CornerSellingDrugsList = {
              "weed_white-widow",
              "weed_skunk",
              "weed_purple-haze",
              "weed_og-kush",
              "weed_amnesia",
              "weed_ak47",
              "crack_baggy",
              "cokebaggy",
              "meth",
              "packagedcoca",
              "packagedweed",
              "packagedmeth"
            }
            </code>
          </pre>
          <p>now find Config.DrugPrice</p>
          <pre class="code code--block">
            <code>
              Config.DrugsPrice = {
                ["weed_white-widow"] = {
                  min = 15,
                  max = 24,
                },
                ["weed_og-kush"] = {
                  min = 15,
                  max = 28,
                },
                ["weed_skunk"] = {
                  min = 15,
                  max = 31,
                },
                ["weed_amnesia"] = {
                  min = 18,
                  max = 34,
                },
                ["weed_purple-haze"] = {
                  min = 18,
                  max = 37,
                },
                ["weed_ak47"] = {
                  min = 18,
                  max = 40,
                },
                ["crack_baggy"] = {
                  min = 18,
                  max = 34,
                },
                ["cokebaggy"] = {
                  min = 300,
                  max = 500,
                },
                ["meth"] = {
                  min = 200,
                  max = 450,
                },
                ["weed"] = {
                  min = 150,
                  max = 450,
                },
              }
            </code>
          </pre>
          <p>and add this to it</p>
          <pre class="code code--block">
            <code>
            ["packagedcoca"] = {
              min = 45,
              max = 80,
            },
            ["packagedweed"] = {
              min = 20,
              max = 50,
            },
            ["packagedmeth"] = {
              min = 45,
              max = 80,
            },
          </code>
        </pre>
        <p>feel free to adjust the prices to fit your needs</p>
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
                ensure VD-Drugs
              </code>
            </pre>
            <p>Optional Lines</p>
            <pre class="code code--block">
              <code>
                ensure qb-drugs
              </code>
            </pre>
          </div>
          <p>now restart your server and load in game</p>
          <p>Please Note you will have to provide a way to get the items requied to produce the drugs, a few methods I use are provided at the bottom of this page</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Locations</h3>
          <p>all production locations require a lab card to enter</p>
          <p>Meth Production:</p>
          <pre class="code code--block">
            <code>
              809.89, -490.92, 30.63
            </code>
          </pre>
          <p>Weed Production:</p>
          <pre class="code code--block">
            <code>
              951.24, -1711.76, 30.92
            </code>
          </pre>
          <p>Cocaine Production:</p>
          <pre class="code code--block">
            <code>
              1004.6, -1572.88, 30.8
            </code>
          </pre>
          <p>Counterfeit Money Production:</p>
          <pre class="code code--block">
            <code>
              84.04, -1551.96, 29.6
            </code>
          </pre>
          <p>Corner Selling:</p>
          <p>Once at at corner type /cornerselling to start selling</p>
          <p>Weed Corner</p>
          <pre class="code code--block">
            <code>
              2339.41, 2569.62, 47.72
            </code>
          </pre>
          <p>Cocaine Corner</p>
          <pre class="code code--block">
            <code>
              -1385.7, -38.19, 52.6
            </code>
          </pre>
          <p>Meth Corner</p>
          <pre class="code code--block">
            <code>
              1713.69, 4932.37, 42.08
            </code>
          </pre>
        </section>
        <section class="js-section">
          <h3 class="section__title">Trash Search by IngPleb</h3>
          <p>Adding the Lab Card to Trash Search so you have a chance of finding it rooting through the garbage</p>
          <p>head over to <a href="https://forum.cfx.re/t/qb-core-qb-trashsearch/4843057" target="_blank">https://forum.cfx.re/t/qb-core-qb-trashsearch/4843057</a> and download and install the resource following their instructions</p>
          <p>navigate to qb-trashsearch/config.lua and find ItemList</p>
          <pre class="code code--block">
            <code>
              ItemList = {
                "water_bottle", "metalscrap", "plastic", "copper", "glass", "lockpick",
                "cryptostick","binoculars","lighter","beer","tosti"
              }
            </code>
          </pre>
          <p>add this item to it</p>
          <pre class="code code--block">
            <code>
              "labcard"
            </code>
          </pre>
          <p>it should look something like this</p>
          <pre class="code code--block">
            <code>
              ItemList = {
                "water_bottle", "metalscrap", "plastic", "copper", "glass", "lockpick",
                "cryptostick","binoculars","lighter","beer","tosti", "labcard"
              }
            </code>
          </pre>
          <p>restart your server or the resource and you can now search trash cans and find the lab card</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">QB-Shops</h3>
          <p>download QB-Shops from here  and install it with the instructions they provide<p>
          <p>navigate to qb-shops/config.lua and find this line</p>
          <pre class="code code--block">
            <code>
              ["hardware"] = {
            </code>
          </pre>
          <p>at the bottom of this section right after</p>
          <pre class="code code--block">
            <code>
              [15] = {
                name = "advancedrepairkit",
                price = 500,
                amount = 50,
                info = {},
                type = "item",
                slot = 15,
                requiredJob = { "mechanic" }
              },
            </code>
          </pre>
          <p>add this</p>
          <pre class="code code--block">
            <code>
              [16] = {
                name = "ammonia",
                price = 750,
                amount = 999999,
                info = {},
                type = "item",
                slot = 16
              },
              [17] = {
                name = 'sacid',
                price = 800,
                amount = 999999,
                info = {},
                type = 'item',
                slot = 17,
              }
            </code>
          </pre>
          <p>this will add the items to the hardware stores in game</p>
        </section>
      </article>
    </div>
<?php
  require '../inc/footer.php';
?>
