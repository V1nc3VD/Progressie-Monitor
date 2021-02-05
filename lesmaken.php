  <!-- Chosen template -->
  <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet" />
  <form action="./php/lesmaken/lesmaken-script.php" method="post">

      <div class="lesmakencontent">

          <h1>Maak u les</h1>

          <label for="docent">Welke docent:</label>

          <select class="docent chosen-select" name="docent">
              <option value="">-- Maak u keuze --</option>
              <option value="henkbouwman">H.Bouwman</option>
              <option value="pieterjansen">P.Jansen</option>
              <option value="janhouten">J.Houten</option>
              <option value="klaasrozen">K.Rozen</option>
          </select>

          <label for="vakken">De vakken van de cursusen:</label>

          <select class="vakken chosen-select" name="vakken">
              <option value="">-- Maak u keuze --</option>

              <option value="nederlands">NL/Nederlands</option>
              <option value="engels">EN/Engels</option>
              <option value="website">WEB/Website</option>
              <option value="game">Game</option>
              <option value="rekenen">REK/Rekenen</option>
              <option value="wiskunde">WIS/Wiskunde</option>
              <option value="begeleiding">BEGL/begeleiding</option>
              <option value="kunst">Kunst</option>
              <option value="muziek">Muziek</option>
              <option value="project">Project</option>
          </select>

          <label for="cursus">Cursus:</label>

          <select class="cursus chosen-select" name="cursus">
              <option value="">-- Maak u keuze --</option>

              <option value="1">1</option>
              <option value="2">2</option>
          </select>

          <label for="deadline">Deadline:</label>

          <input type="date" name="deadline" class="deadline">


          <label for="opdracht">opdracht:</label>

          <select data-placeholder="-- Maak u keuze --" multiple class="opdracht chosen-select" name="opdracht">
              <option value="">-- Maak u keuze --</option>
              <option value="opdracht1">Opdracht 1</option>
              <option value="opdracht2">Opdracht 2</option>
              <option value="opdracht3">Opdracht 3</option>
              <option value="opdracht4">Opdracht 4</option>
              <option value="opdracht5">Opdracht 5</option>
              <option value="opdracht6">Opdracht 6</option>
              <option value="opdracht7">Opdracht 7</option>
              <option value="opdracht8">Opdracht 8</option>
              <option value="opdracht9">Opdracht 9</option>
              <option value="opdracht10">Opdracht 10</option>
          </select>

          <label for="klas">klas:</label>

          <select class="klas chosen-select" name="klas">
              <option value="">-- Maak u keuze --</option>

              <option value="AM1A">AM1A</option>
              <option value="AM1B">AM1B</option>
              <option value="AM1C">AM1C</option>
              <option value="AM2A">AM2A</option>
              <option value="AM2B">AM2B</option>
              <option value="AM2C">AM2C</option>
          </select>

          <label for="leerling">Leerling:</label>

          <select data-placeholder="-- Maak u keuze --" multiple class="leerling chosen-select" name="leerling">
              <!-- <option value=""></option> -->

              <option value="peter">peter</option>
              <option value="jan">jan</option>
              <option value="klaas">klaas</option>
              <option value="henk">henk</option>
          </select>

          <input id="submit" class="btn" type="submit" value="Verstuur">

      </div>
  </form>

  <!-- chosen script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>

  <script>
      $(".chosen-select").chosen({
          no_results_text: "Oops, nothing found!"
      })
  </script>