<?php 

?>
      <div class="lesmakencontent">

          <h1>Mijn cursussen</h1>

          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">Vak</th>
                      <th scope="col">Cursus</th>
                      <th scope="col">Status</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Web</td>
                      <td>Laravel-essentials</td>
                      <td>Op schema</td>
                  </tr>
                  <tr>
                      <td>ASP</td>
                      <td>ASP.NET Advanced</td>
                      <td>Achterstand</td>
                  </tr>
                  <tr>
                      <td>Project</td>
                      <td>Project-cursus</td>
                      <td>Op Schema</td>
                  </tr>
              </tbody>
          </table>

          <!-- chosen script -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>

          <script>
              $(".chosen-select").chosen({
                  no_results_text: "Oops, nothing found!"
              })
          </script>