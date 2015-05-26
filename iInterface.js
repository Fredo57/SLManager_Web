
var current_pedal = "";

/* Activation Select LOOP  avec SL et desactivation avec PP*/
function Activation1()
{
	var Radio_SL = document.getElementById("SL");
	var Radio_PP = document.getElementById("PP");

	if (Radio_SL.checked)
	{
		$("#s_loop").addClass("Activation");
		$("#in_number_GTV").addClass("Desactivation");
		$("#s_loop").removeClass("Desactivation");
		$("#in_number_GTV").removeClass("Activation");

		$("#pedal1_radio4").prop("disabled", false);
		$("#pedal1_radio5").prop("disabled", false);
		$("#pedal1_radio6").prop("disabled", false);
		$("#s_Actions1").prop("disabled", false);
		$("#s_loop").prop("disabled", false);		
	}
	if (Radio_PP.checked) 
	{
		$("#s_loop").addClass("Desactivation");
		$("#in_number_GTV").addClass("Activation");
		$("#s_loop").removeClass("Activation");
		$("#in_number_GTV").removeClass("Desactivation");

		$("#pedal1_radio4").prop("disabled", true);
		$("#pedal1_radio5").prop("disabled", true);
		$("#pedal1_radio6").prop("disabled", true);
		$("#s_Actions1").prop("disabled", true);
		$("#in_number_GTV").prop("disabled", false);
	}


}
function Activation2()
{
	var Radio_SL = document.getElementById("SL2");
	var Radio_PP = document.getElementById("PP2");

	if (Radio_SL.checked)
	{
		$("#s_loop2").addClass("Activation");
		$("#in_number_GTV2").addClass("Desactivation");
		$("#s_loop2").removeClass("Desactivation");
		$("#in_number_GTV2").removeClass("Activation");

		$("#pedal2_radio4").prop("disabled", false);
		$("#pedal2_radio5").prop("disabled", false);
		$("#pedal2_radio6").prop("disabled", false);
		$("#s_Actions2").prop("disabled", false);
	}
	if (Radio_PP.checked) 
	{
		$("#s_loop2").addClass("Desactivation");
		$("#in_number_GTV2").addClass("Activation");
		$("#s_loop2").removeClass("Activation");
		$("#in_number_GTV2").removeClass("Desactivation");

		$("#pedal2_radio4").prop("disabled", true);
		$("#pedal2_radio5").prop("disabled", true);
		$("#pedal2_radio6").prop("disabled", true);
		$("#s_Actions2").prop("disabled", true);
	}
}
function Activation3()
{
	var Radio_SL = document.getElementById("SL3");
	var Radio_PP = document.getElementById("PP3");

	if (Radio_SL.checked)
	{
		$("#s_loop3").addClass("Activation");
		$("#in_number_GTV3").addClass("Desactivation");
		$("#s_loop3").removeClass("Desactivation");
		$("#in_number_GTV3").removeClass("Activation");

		$("#pedal3_radio4").prop("disabled", false);
		$("#pedal3_radio5").prop("disabled", false);
		$("#pedal3_radio6").prop("disabled", false);
		$("#s_Actions3").prop("disabled", false);
	}
	if (Radio_PP.checked) 
	{
		$("#s_loop3").addClass("Desactivation");
		$("#in_number_GTV3").addClass("Activation");
		$("#s_loop3").removeClass("Activation");
		$("#in_number_GTV3").removeClass("Desactivation");

		$("#pedal3_radio4").prop("disabled", true);
		$("#pedal3_radio5").prop("disabled", true);
		$("#pedal3_radio6").prop("disabled", true);
		$("#s_Actions3").prop("disabled", true);
	}
}
function Activation4()
{
	var Radio_SL = document.getElementById("SL4");
	var Radio_PP = document.getElementById("PP4");

	if (Radio_SL.checked)
	{
		$("#s_loop").addClass("Activation");
		$("#in_number_GTV4").addClass("Desactivation");
		$("#s_loop4").removeClass("Desactivation");
		$("#in_number_GTV4").removeClass("Activation");

		$("#pedal4_radio4").prop("disabled", false);
		$("#pedal4_radio5").prop("disabled", false);
		$("#pedal4_radio6").prop("disabled", false);
		$("#s_Actions4").prop("disabled", false);
	}
	if (Radio_PP.checked) 
	{
		$("#s_loop4").addClass("Desactivation");
		$("#in_number_GTV4").addClass("Activation");
		$("#s_loop4").removeClass("Activation");
		$("#in_number_GTV4").removeClass("Desactivation");

		$("#pedal4_radio4").prop("disabled", true);
		$("#pedal4_radio5").prop("disabled", true);
		$("#pedal4_radio6").prop("disabled", true);
		$("#s_Actions4").prop("disabled", true);
	}
}
function Activation5()
{
	var Radio_SL = document.getElementById("SL5");
	var Radio_PP = document.getElementById("PP5");

	if (Radio_SL.checked)
	{
		$("#s_loop5").addClass("Activation");
		$("#in_number_GTV5").addClass("Desactivation");
		$("#s_loop5").removeClass("Desactivation");
		$("#in_number_GTV5").removeClass("Activation");

		$("#pedal5_radio4").prop("disabled", false);
		$("#pedal5_radio5").prop("disabled", false);
		$("#pedal5_radio6").prop("disabled", false);
		$("#s_Actions5").prop("disabled", false);
	}
	if (Radio_PP.checked) 
	{
		$("#s_loop5").addClass("Desactivation");
		$("#in_number_GTV5").addClass("Activation");
		$("#s_loop5").removeClass("Activation");
		$("#in_number_GTV5").removeClass("Desactivation");

		$("#pedal5_radio4").prop("disabled", true);
		$("#pedal5_radio5").prop("disabled", true);
		$("#pedal5_radio6").prop("disabled", true);
		$("#s_Actions5").prop("disabled", true);
	}
}

/* Fonction Envoie des données au serveur */
function send() 
{
	document.getElementById('pedal-form-'+current_pedal).submit();
}
/* Fonction Sauvegarde des données dans le fichier XML */
function save() 
{
	document.getElementById('pedal-form-'+current_pedal).submit();
}
/* Fonction Check si le bouton radio est actif ou pas + changement de l'image*/
function isChecked()
{
	var ButtonR_1 = document.getElementById('imgPedal_1');
	var ButtonR_2 = document.getElementById('imgPedal_2');
	var ButtonR_3 = document.getElementById('imgPedal_3');
	var ButtonR_4 = document.getElementById('imgPedal_4');
	var ButtonR_5 = document.getElementById('imgPedal_5');
	var Result;

	if (ButtonR_1.checked)
		{	
		document.getElementById("img1").src="pedal_white.png";
		document.getElementById("img2").src="pedal_black.png";
		document.getElementById("img3").src="pedal_black.png";
		document.getElementById("img4").src="pedal_black.png";
		document.getElementById("img5").src="pedal_black.png";
		Result == ButtonR_1;
		document.getElementById("pedal1").disabled=false;
		document.getElementById("pedal2").disabled=true;
		document.getElementById("pedal3").disabled=true;
		document.getElementById("pedal4").disabled=true;
		document.getElementById("pedal5").disabled=true;
		current_pedal ="1";
		return Result;
		}
	if (ButtonR_2.checked)
		{		
		document.getElementById("img1").src="pedal_black.png";
		document.getElementById("img2").src="pedal_white.png";
		document.getElementById("img3").src="pedal_black.png";
		document.getElementById("img4").src="pedal_black.png";
		document.getElementById("img5").src="pedal_black.png";
		Result == ButtonR_2;
		document.getElementById("pedal1").disabled=true;
		document.getElementById("pedal2").disabled=false;
		document.getElementById("pedal3").disabled=true;
		document.getElementById("pedal4").disabled=true;
		document.getElementById("pedal5").disabled=true;
		current_pedal ="2";
		return Result;
		}	
	if (ButtonR_3.checked)
		{	
		document.getElementById("img1").src="pedal_black.png";
		document.getElementById("img2").src="pedal_black.png";
		document.getElementById("img3").src="pedal_white.png";
		document.getElementById("img4").src="pedal_black.png";
		document.getElementById("img5").src="pedal_black.png";
		Result == ButtonR_3;
		document.getElementById("pedal1").disabled=true;
		document.getElementById("pedal2").disabled=true;
		document.getElementById("pedal3").disabled=false;
		document.getElementById("pedal4").disabled=true;
		document.getElementById("pedal5").disabled=true;
		current_pedal ="3";
		return Result;
		}
		
	if (ButtonR_4.checked)
		{	
		document.getElementById("img1").src="pedal_black.png";
		document.getElementById("img2").src="pedal_black.png";
		document.getElementById("img3").src="pedal_black.png";
		document.getElementById("img4").src="pedal_white.png";
		document.getElementById("img5").src="pedal_black.png";
		Result == ButtonR_4;
		document.getElementById("pedal1").disabled=true;
		document.getElementById("pedal2").disabled=true;
		document.getElementById("pedal3").disabled=true;
		document.getElementById("pedal4").disabled=false;
		document.getElementById("pedal5").disabled=true;
		current_pedal ="4";
		return Result;
		}
	if (ButtonR_5.checked)
		{	
		document.getElementById("img1").src="pedal_black.png";
		document.getElementById("img2").src="pedal_black.png";
		document.getElementById("img3").src="pedal_black.png";
		document.getElementById("img4").src="pedal_black.png";
		document.getElementById("img5").src="pedal_white.png";
		Result = ButtonR_5;
		document.getElementById("pedal1").disabled=true;
		document.getElementById("pedal2").disabled=true;
		document.getElementById("pedal3").disabled=true;
		document.getElementById("pedal4").disabled=true;
		document.getElementById("pedal5").disabled=false;
		current_pedal ="5";
		return Result;
		}
}

