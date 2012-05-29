        <h1>Online Boeking</h1>
<h2>Boek uw rit online, dan bellen we u zo snel mogelijk terug!</h2>
 <small>let op! alle velden zijn verplicht</small>
 
  <form name="bookingform" action="" method="post">
<fieldset><legend>Uw gegevens</legend>
        <label>Naam:</label>

      <input type="text" name="naam" id="textfield" class="qform"/>



<label>Telefoon:</label><input type="text" name="telefoon" id="textfield2" class="qform" />

<label>E-mail:</label>

<input type="text" name="email" id="textfield3" class="qform" />

</fieldset>
  <fieldset><legend>Adres gegevens</legend>

<label>Datum:</label>

<select size="1" name="datum">

            <option value="1">1</option>

            <option value="2">2</option>

            <option value="3">3</option>

            <option value="4">4</option>

            <option value="5">5</option>

            <option value="6">6</option>

            <option value="7">7</option>

            <option value="8">8</option>

            <option value="9">9</option>

            <option value="10">10</option>

            <option value="11">11</option>

            <option value="12">12</option>

            <option value="13">13</option>

            <option value="14">14</option>

            <option value="15">15</option>

            <option value="16">16</option>

            <option value="17">17</option>

            <option value="18">18</option>

            <option value="19">19</option>

            <option value="20">20</option>

            <option value="21">21</option>

            <option value="22">22</option>

            <option value="23">23</option>

            <option value="24">24</option>

            <option value="25">25</option>

            <option value="26">26</option>

            <option value="27">27</option>

            <option value="28">28</option>

            <option value="29">29</option>

            <option value="30">30</option>

            <option value="31">31</option>

          </select>

                            <select size="1" name="maand" class="qformselect">

                              <option value="Jan">Jan</option>

                              <option value="Feb">Feb</option>

                              <option value="  Mar">Mar</option>

                              <option value="Apr">Apr</option>

                              <option value=" May">Mei</option>

                              <option value=" Jun">Jun</option>

                              <option value="Jul">Jul</option>

                              <option value="Aug">Aug</option>

                              <option value="Sep">Sep</option>

                              <option value="Oct">Okt</option>

                              <option value=" Nov">Nov</option>

                              <option value=" Dec">Dec</option>

                            </select>

                            <select size="1" name="jaar" class="qformselect">

                              <option value="2012" selected="selected">2012</option>

                            </select>

<label>Tijd:</label>



<select size="1" name="uur" class="qformselect">

                  <option value="1">1</option>

                  <option value="2">2</option>

                  <option value="3">3</option>

                  <option value="4">4</option>

                  <option value="5">5</option>

                  <option value="6">6</option>

                  <option value="7">7</option>

                  <option value="8">8</option>

                  <option value="9">9</option>

                  <option value="10">10</option>

                  <option value="11">11</option>

                  <option value="12">12</option>

                  <option value="13">13</option>

                  <option value="14">14</option>

                  <option value="15">15</option>

                  <option value="16">16</option>

                  <option value="17">17</option>

                  <option value="18">18</option>

                  <option value="19">19</option>

                  <option value="20">20</option>

                  <option value="21">21</option>

                  <option value="22">22</option>

                  <option value="23">23</option>

                  <option value="00">00</option>

        </select>

                            <select size="1" name="minuut" class="qformselect">

                              <option value="00">00</option>

                              <option value="10">10</option>

                              <option value="20 ">20</option>

                              <option value="30">30</option>

                              <option value=" 40 ">40</option>

                              <option value=" 50 ">50</option>

                            </select>


        <label>Ophaal adres:</label>

        <input type="text" name="adres" id="textfield6" class="qform" />

      <label>Postcode:</label>

       <input type="text" name="postcode" id="textfield7" class="qform" />


                          <label>Bestemming:</label>

                          <input type="text" name="bestemming" id="textfield8" class="qform" />

                          <label>Reizigers</label>

                          <select size="1" name="reizigers" class="qformselect">

                                                                      <option value="0">0</option>

                                                                      <option value="1">1</option>

                                                                      <option value="2">2</option>

                                                                      <option value="3">3</option>

                                                                    <option value="4">4</option>

                          </select>


                         <label>Suggesties/opmerkingen:</label>

                          <textarea name="suggesties" id="textarea" cols="18" rows="2" class="qformtextarea"></textarea> <br><br>

                          <INPUT TYPE="submit" name="submit" value="Verzenden">                          

        <?php if( count($userErrors) > 0 ) : 
		  // Er zijn errors gevonden ?>
		<div class="error">
			<ul>
			<?php foreach( $userErrors as $err ) : ?>
				<li><?php echo $err; ?></li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
      <?php if(isset($confirm))
            echo $confirm;
      ?>
      </fieldset>
    </form>