<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    <script src="jquery.js"></script>
	<!-- CSS -->
		<link rel="stylesheet" href="iInterface.css" />
	<!-- Titre du site -->
		<title> SL Manager Web </title>
  <!-- CSS -->
    <STYLE>
    </STYLE>
  <!-- JavaScript -->
    <SCRIPT type="text/JavaScript" language="JavaScript" src="iInterface.js"> </SCRIPT>
	</head>

		<!-- Code HTML -->
	<body>
      <!-- Code Header -->
      <header>
          <h1> SL Manager Web </h1>
      </header>

<!-- Interface -->

<form> <!-- Debut formulaire -->

<h2> Pédales </h2>

<!-- Bloc Pedale -->
<aside id="radio_block">
  <p id="para_r1">
      <input type="radio" name="pedal" id="imgPedal_1" onclick="isChecked();">
      <label for="imgPedal_1" border="none"><img src="pedal_black.png" id="img1"></label>
  </p>
  <p id="para_r2">
      <input type="radio" name="pedal" id="imgPedal_2" onclick="isChecked();">
      <label for="imgPedal_2"><img src="pedal_black.png" id="img2"></label>
  </p>
  <p id="para_r3">
      <input type="radio" name="pedal" id="imgPedal_3" onclick="isChecked();">
      <label for="imgPedal_3"><img src="pedal_black.png" id="img3"></label>
  </p>
  <p id="para_r4">
      <input type="radio" name="pedal" id="imgPedal_4" onclick="isChecked();">
      <label for="imgPedal_4"><img src="pedal_black.png" id="img4"></label>
  </p>
  <p id="para_r5">
      <input type="radio" name="pedal" id="imgPedal_5" onclick="isChecked();">
      <label for="imgPedal_5"><img src="pedal_black.png" id="img5"></label>
  </p>

</aside>

<!-- Bloc Modification -->
 <aside id="under_block">

    <fieldset id="pedal0" disabled>
        <legend>Pedale n°0</legend>
        <form id="pedal-form-0" method="POST" action="iProjet.php">
        <input type="hidden" name="pedal" value="0"/>
        </form>
    </fieldset>

    <fieldset id="pedal1" disabled>
      <legend>Pedale n°1</legend>

      <form id="pedal-form-1" method="POST" action="iProjet.php">
            <input type="hidden" name="pedal" value="1"/>
      <input type="radio" id="SL" name="Choix_SL_PP" value="SL" onclick="Activation1();"><label>SL</label>
      <input type="radio" id="PP" name="Choix_SL_PP" value="PP" onclick="Activation1();"><label>PP</label>

              <select class="s_option" name="choix_press">
                <option value="Simple_Press">Simple_Press</option>
                <option value="Double_Press">Double_press</option>
                <option value="Long_Press">Long_press</option>
              </select>

              <div>
                <input type="radio" value="27" name="radio" id="pedal1_radio1" class="radio" />
                <label for="pedal1_radio1">Prev</label>
              </div>

              <div id="D_next">
                <input type="radio" value="26" name="radio" id="pedal1_radio2" class="radio"/>
                <label for="pedal1_radio2">Next</label>
              </div>

              <div> 
                <input type="radio" value="GTV" name="radio" id="pedal1_radio3" class="radio"/>
                <label for="pedal1_radio3">Go_to</label>
              </div>

              <div>
                <input type="number" name="GTV" min="0" max="123" step="1" id="in_number_GTV">
                <select id="s_loop" name="choix_loop">
                  <option value="25">Loop5</option>
                  <option value="24">Loop4</option>  
                  <option value="23">Loop3</option>
                  <option value="21">Loop1</option>                 
                </select>
              </div>

              <div id="D_add"> 
                <input type="radio" value="28" name="radio" id="pedal1_radio4" class="radio"/>
                <label for="pedal1_radio4">ADD</label>
              </div>

              <div> 
                <input type="radio" value="29" name="radio" id="pedal1_radio5" class="radio"/>
                <label for="pedal1_radio5">DEL</label>
              </div>

              <div> 
                <input type="radio" value="Actions" name="radio" id="pedal1_radio6" class="radio" />
                <label for="pedal1_radio6">Actions</label>
              </div>

              <div>
               <select id="s_Actions1" name="choix_actions">
                  <option value="0">Undo</option>
                  <option value="1">Redo</option>
                  <option value="2">Record</option>
                  <option value="3">Overdub</option>
                  <option value="4">Multiply</option>
                  <option value="5">Load</option>
                  <option value="6">Save</option>
                  <option value="7">Trig</option>
                  <option value="8">Once</option>
                  <option value="9">Mute</option>
                  <option value="10">Solo</option>
                  <option value="11">Replace</option>
                  <option value="12">Substitute</option>
                  <option value="13">Insert</option>
                  <option value="14">Delay</option>
                  <option value="15">Rev</option>
                  <option value="16">Scratch</option>
                  <option value="17">Pause</option>
               </select>
              </div>

        </form>
   </fieldset> 

   <fieldset id="pedal2" disabled>
       <legend>Pedale n°2</legend>

      <form id="pedal-form-2" method="POST" action="iProjet.php">
            <input type="hidden" name="pedal" value="2"/>
      <input type="radio" id="SL2" name="Choix_SL_PP" value="SL" onclick="Activation2();"><label>SL</label>
      <input type="radio" id="PP2" name="Choix_SL_PP" value="PP" onclick="Activation2();"><label>PP</label>

              <select class="s_option" name="choix_press">
                <option value="Simple_Press">Simple_Press</option>
                <option value="Double_Press">Double_press</option>
                <option value="Long_Press">Long_press</option>
              </select>

              <div>
                <input type="radio" value="27" name="radio" id="pedal2_radio1" class="radio" />
                <label for="pedal2_radio1">Prev</label>
              </div>

              <div id="D_next">
                <input type="radio" value="26" name="radio" id="pedal2_radio2" class="radio"/>
                <label for="pedal2_radio2">Next</label>
              </div>

              <div> 
                <input type="radio" value="GTV" value="20" name="radio" id="pedal2_radio3" class="radio"/>
                <label for="pedal2_radio3">Go_to</label>
              </div>

              <div>
                <input type="number" name="GTV" min="0" max="123" step="1" id="in_number_GTV2">
                <select id="s_loop2" name="choix_loop">
                  <option value="25">Loop5</option>
                  <option value="24">Loop4</option>  
                  <option value="23">Loop3</option>
                  <option Value="22">Loop2</option>
                  <option value="21">Loop1</option>                 
                </select>
              </div>

              <div id="D_add">
                <input type="radio" value="28" name="radio" id="pedal2_radio4" class="radio"/>
                <label for="pedal2_radio4">ADD</label>
              </div>

              <div> 
                <input type="radio" value="29" name="radio" id="pedal2_radio5" class="radio"/>
                <label for="pedal2_radio5">DEL</label>
              </div>

              <div> 
                <input type="radio" value="Actions" name="radio" id="pedal2_radio6" class="radio" />
                <label for="pedal2_radio6">Actions</label>
              </div>

              <div>
               <select id="s_Actions2" name="choix_actions">
                  <option value="0">Undo</option>
                  <option value="1">Redo</option>
                  <option value="2">Record</option>
                  <option value="3">Overdub</option>
                  <option value="4">Multiply</option>
                  <option value="5">Load</option>
                  <option value="6">Save</option>
                  <option value="7">Trig</option>
                  <option value="8">Once</option>
                  <option value="9">Mute</option>
                  <option value="10">Solo</option>
                  <option value="11">Replace</option>
                  <option value="12">Substitute</option>
                  <option value="13">Insert</option>
                  <option value="14">Delay</option>
                  <option value="15">Rev</option>
                  <option value="16">Scratch</option>
                  <option value="17">Pause</option>
               </select>
              </div>

        </form>
   </fieldset>

   <fieldset id="pedal3" disabled>
       <legend>Pedale n°3</legend>

      <form id="pedal-form-3" method="POST" action="iProjet.php">
            <input type="hidden" name="pedal" value="3"/>
      <input type="radio" id="SL3" name="Choix_SL_PP" value="SL" onclick="Activation3();"><label>SL</label>
      <input type="radio" id="PP3" name="Choix_SL_PP" value="PP" onclick="Activation3();"><label>PP</label>

              <select class="s_option" name="choix_press">
                <option value="Simple_Press">Simple_Press</option>
                <option value="Double_Press">Double_press</option>
                <option value="Long_Press">Long_press</option>
              </select>

              <div>
                <input type="radio" value="27" name="radio" id="pedal3_radio1" class="radio" />
                <label for="pedal3_radio1">Prev</label>
              </div>

              <div id="D_next">
                <input type="radio" value="26" name="radio" id="pedal3_radio2" class="radio"/>
                <label for="pedal3_radio2">Next</label>
              </div>

              <div> 
                <input type="radio" value="20" name="radio" id="pedal3_radio3" class="radio"/>
                <label for="pedal3_radio3">Go_to</label>
              </div>

              <div>
                <input type="number" name="GTV" min="0" max="123" step="1" id="in_number_GTV3">
                <select id="s_loop3" name="choix_loop">
                  <option value="25">Loop5</option>
                  <option value="24">Loop4</option>  
                  <option value="23">Loop3</option>
                  <option Value="22">Loop2</option>
                  <option value="21">Loop1</option>                 
                </select>
              </div>

              <div id="D_add"> 
                <input type="radio" value="28" name="radio" id="pedal3_radio4" class="radio"/>
                <label for="pedal3_radio4">ADD</label>
              </div>

              <div> 
                <input type="radio" value="29" name="radio" id="pedal3_radio5" class="radio"/>
                <label for="pedal3_radio5">DEL</label>
              </div>

              <div> 
                <input type="radio" value="Actions" name="radio" id="pedal3_radio6" class="radio" onchange=""/>
                <label for="pedal3_radio6">Actions</label>
              </div>

              <div>
               <select id="s_Actions3" name="choix_actions">
                  <option value="0">Undo</option>
                  <option value="1">Redo</option>
                  <option value="2">Record</option>
                  <option value="3">Overdub</option>
                  <option value="4">Multiply</option>
                  <option value="5">Load</option>
                  <option value="6">Save</option>
                  <option value="7">Trig</option>
                  <option value="8">Once</option>
                  <option value="9">Mute</option>
                  <option value="10">Solo</option>
                  <option value="11">Replace</option>
                  <option value="12">Substitute</option>
                  <option value="13">Insert</option>
                  <option value="14">Delay</option>
                  <option value="15">Rev</option>
                  <option value="16">Scratch</option>
                  <option value="17">Pause</option>
               </select>
              </div>

        </form>
   </fieldset>

    <fieldset id="pedal4" disabled>
      <legend>Pedale n°4</legend>

      <form id="pedal-form-4" method="POST" action="iProjet.php">
            <input type="hidden" name="pedal" value="4"/>
      <input type="radio" id="SL4" name="Choix_SL_PP" value="SL" onclick="Activation4();"><label>SL</label>
      <input type="radio" id="PP4" name="Choix_SL_PP" value="PP" onclick="Activation4();"><label>PP</label>

              <select class="s_option" name="choix_press">
                <option value="Simple_Press">Simple_Press</option>
                <option value="Double_Press">Double_press</option>
                <option value="Long_Press">Long_press</option>
              </select>

              <div>
                <input type="radio" value="27" name="radio" id="pedal4_radio1" class="radio" />
                <label for="pedal4_radio1">Prev</label>
              </div>

              <div id="D_next">
                <input type="radio" value="26" name="radio" id="pedal4_radio2" class="radio"/>
                <label for="pedal4_radio2">Next</label>
              </div>

              <div> 
                <input type="radio" value="GTV" name="radio" id="pedal4_radio3" class="radio"/>
                <label for="pedal4_radio3">Go_to</label>
              </div>

              <div>
                <input type="number" name="GTV" min="0" max="123" step="1" id="in_number_GTV4">
                <select id="s_loop4" name="choix_loop">
                  <option value="25">Loop5</option>
                  <option value="24">Loop4</option>  
                  <option value="23">Loop3</option>
                  <option Value="22">Loop2</option>
                  <option value="21">Loop1</option>                 
                </select>
              </div>

              <div id="D_add"> 
                <input type="radio" value="28" name="radio" id="pedal4_radio4" class="radio"/>
                <label for="pedal4_radio4">ADD</label>
              </div>

              <div> 
                <input type="radio" value="29" name="radio" id="pedal4_radio5" class="radio"/>
                <label for="pedal4_radio5">DEL</label>
              </div>

              <div> 
                <input type="radio" value="Actions" name="radio" id="pedal4_radio6" class="radio" onchange=""/>
                <label for="pedal4_radio6">Actions</label>
              </div>

              <div>
               <select id="s_Actions4" name="choix_actions">
                  <option value="0">Undo</option>
                  <option value="1">Redo</option>
                  <option value="2">Record</option>
                  <option value="3">Overdub</option>
                  <option value="4">Multiply</option>
                  <option value="5">Load</option>
                  <option value="6">Save</option>
                  <option value="7">Trig</option>
                  <option value="8">Once</option>
                  <option value="9">Mute</option>
                  <option value="10">Solo</option>
                  <option value="11">Replace</option>
                  <option value="12">Substitute</option>
                  <option value="13">Insert</option>
                  <option value="14">Delay</option>
                  <option value="15">Rev</option>
                  <option value="16">Scratch</option>
                  <option value="17">Pause</option>
               </select>
              </div>

        </form>
   </fieldset> 

    <fieldset id="pedal5" disabled>
      <legend>Pedale n°5</legend>

      <form id="pedal-form-5" method="POST" action="iProjet.php">
            <input type="hidden" name="pedal" value="5"/>
      <input type="radio" id="SL5" name="Choix_SL_PP" value="SL" onclick="Activation5();"><label>SL</label>
      <input type="radio" id="PP5" name="Choix_SL_PP" value="PP" onclick="Activation5();"><label>PP</label>

              <select class="s_option" name="choix_press">
                <option value="Simple_Press">Simple_Press</option>
                <option value="Double_Press">Double_press</option>
                <option value="Long_Press">Long_press</option>
              </select>

              <div>
                <input type="radio" value="27" name="radio" id="pedal5_radio1" class="radio" />
                <label for="pedal5_radio1">Prev</label>
              </div>

              <div id="D_next">
                <input type="radio" value="26" name="radio" id="pedal5_radio2" class="radio"/>
                <label for="pedal5_radio2">Next</label>
              </div>

              <div> 
                <input type="radio" value="GTV" name="radio" id="pedal5_radio3" class="radio"/>
                <label for="pedal5_radio3">Go_to</label>
              </div>

              <div>
                <input type="number" name="GTV" min="0" max="123" step="1" id="in_number_GTV5">
                <select id="s_loop5" name="choix_loop">
                  <option value="25">Loop5</option>
                  <option value="24">Loop4</option>  
                  <option value="23">Loop3</option>
                  <option Value="22">Loop2</option>
                  <option value="21">Loop1</option>                 
                </select>
              </div>

              <div id="D_add"> 
                <input type="radio" value="28" name="radio" id="pedal5_radio4" class="radio"/>
                <label for="pedal5_radio4">ADD</label>
              </div>

              <div> 
                <input type="radio" value="29" name="radio" id="pedal5_radio5" class="radio"/>
                <label for="pedal5_radio5">DEL</label>
              </div>

              <div> 
                <input type="radio" value="Actions" name="radio" id="pedal5_radio6" class="radio" onchange=""/>
                <label for="pedal5_radio6">Actions</label>
              </div>

              <div>
               <select id="s_Actions5" name="choix_actions">
                  <option value="0">Undo</option>
                  <option value="1">Redo</option>
                  <option value="2">Record</option>
                  <option value="3">Overdub</option>
                  <option value="4">Multiply</option>
                  <option value="5">Load</option>
                  <option value="6">Save</option>
                  <option value="7">Trig</option>
                  <option value="8">Once</option>
                  <option value="9">Mute</option>
                  <option value="10">Solo</option>
                  <option value="11">Replace</option>
                  <option value="12">Substitute</option>
                  <option value="13">Insert</option>
                  <option value="14">Delay</option>
                  <option value="15">Rev</option>
                  <option value="16">Scratch</option>
                  <option value="17">Pause</option>
               </select>
              </div>

        </form>
   </fieldset> 

</aside >
 <!-- Bloc  Send-Reset-Save -->   
<div id="Bloc_send">
	<aside class="Input_send">
      		<p class="Center"><input type="button" name="save" value="Sauvegarder" id="save"></p>
      		<p class="Center"><input type="button" name="send" value="Envoyer" id="send" onclick="send()"></p> 
      		<p class="Center"><input type="button" name="reset" value="Reinitialiser" id="reset" onClick="Javascript:window.document.location.href='iInterface.php';"></p>
	</aside>
</div>

</form> <!-- Fin formulaire -->

	</body>
</html>
