<?php
// Nous créons une classe « XMLphp ».qui va lire et ecrire dans un fichier xml en utilisant du PHP
class XMLphp
{
    private $XMLfile = 'Test.xml';
    private $treeParse ;

    public function ParsingXML()
    {
      $this->treeParse=simplexml_load_file($this->XMLfile);
    }

    public function GetIp()
    {
      $gIP = $this->treeParse->Connection[0]->IP_Client;
      echo $gIP;
    }

    public function SetIp($newIP)
    {
      $sIP = $this->treeParse->Connection[0]->IP_Client = $newIP;
    }

    public function GetPort_Client()
    {
      $gPORT = $this->treeParse->Connection[0]->Port_Client;
      echo $gPORT;
    }

    public function GetPort_Server()
    {
      $gPORT = $this->treeParse->Connection[0]->Port_Server;
      echo $gPORT;
    }

    public function SetPort_Client($newPORT)
    { 
      $sPORT = $this->treeParse->Connection[0]->Port_Client = $newPORT;
    }

    public function SetPort_Server($newPORT)
    {
      $sPORT = $this->treeParse->Connection[0]->Port_Server = $newPORT;
    }

    public function GetPedal_O($number,$option)
    {
      $number = $number - 1;

      if ($number==0) 
      {
         $gPedal_O = $this->treeParse->Pedal_0->$option;
      }
      if ($number==1) 
      {
         $gPedal_O = $this->treeParse->Pedal_1->$option;
      }
      if ($number==2) 
      {
          $gPedal_O = $this->treeParse->Pedal_2->$option;
      }
      if ($number==3) 
      {
         $gPedal_O = $this->treeParse->Pedal_3->$option;
      }
      if ($number==4) 
      {
         $gPedal_O = $this->treeParse->Pedal_4->$option;
      }
      echo $gPedal_O;
    }

    public function SetPedal_O($number,$option,$new)
    {
      $number = $number - 1;

      if ($number==0) 
      {
         $sPedal_O = $this->treeParse->Pedal_0->$option = $new;
      }
      if ($number==1) 
      {
         $sPedal_O = $this->treeParse->Pedal_1->$option = $new;
      }
      if ($number==2) 
      {
         $sPedal_O = $this->treeParse->Pedal_2->$option = $new;
      }
      if ($number==3) 
      {
         $sPedal_O = $this->treeParse->Pedal_3->$option = $new;
      }
      if ($number==4) 
      {
         $sPedal_O = $this->treeParse->Pedal_4->$option = $new;
      }
    }

    public function GetPedal_A($number,$option2)
    {
      $number = $number - 1;

      if ($number==0) 
      {
         $gPedal_A = $this->treeParse->Pedal_0->Actions->$option2;
      }
      if ($number==1) 
      {
         $gPedal_A = $this->treeParse->Pedal_1->Actions->$option2;
      }
      if ($number==2) 
      {
          $gPedal_A = $this->treeParse->Pedal_2->Actions->$option2;
      }
      if ($number==3) 
      {
         $gPedal_A = $this->treeParse->Pedal_3->Actions->$option2;
      }
      if ($number==4) 
      {
         $gPedal_A = $this->treeParse->Pedal_4->Actions->$option2;
      }
      echo $gPedal_A;
    }

    public function SetPedal_A($number,$option2,$new)
    {
      $number = $number - 1;

      if ($number==0) 
      {
         $sPedal_A = $this->treeParse->Pedal_0->Actions->$option2 = $new;
      }
      if ($number==1) 
      {
         $sPedal_A = $this->treeParse->Pedal_1->Actions->$option2 = $new;
      }
      if ($number==2) 
      {
         $sPedal_A = $this->treeParse->Pedal_2->Actions->$option2 = $new;
      }
      if ($number==3) 
      {
         $sPedal_A = $this->treeParse->Pedal_3->Actions->$option2 = $new;
      }
      if ($number==4) 
      {
         $sPedal_A = $this->treeParse->Pedal_4->Actions->$option2 = $new;
      }
     }

    public function WriteXMl()
    {
      $this->treeParse->asXml($this->XMLfile);
    }

}

// Envoie de la trame avec les données recu de l'interface PHP

  $Pedal = intval($_POST['pedal']);
  $choix_option = $_POST['Choix_SL_PP'];
  $choix_press = $_POST['choix_press'];
  $pedal_radio = $_POST['radio'];
  $GTV = $_POST['GTV'];
  $choix_loop = $_POST['choix_loop'];
  $choix_actions = $_POST['choix_actions'];

if ($choix_option=="PP")
  {
    if ($pedal_radio==26) 
    {
      $pedal_radio=18;
    }
    else if ($pedal_radio==27) 
    {
      $pedal_radio=19;
    }
  }

echo $Pedal;
echo '<br>';
echo $choix_option;
echo '<br>';
echo $choix_press;
echo '<br>';
echo $pedal_radio;
echo '<br>';
echo  $GTV ;
echo '<br>';
echo  $choix_loop;
echo '<br>';
echo  $choix_actions ;
echo '<br>';

$host    = "127.0.0.1";
$port    = 9999;
$actions = 0;

if ($choix_option=="PP")
{
      if ($pedal_radio=="GTV")
      {
        $actions=$GTV+1000;
      }
      else
      {
         $actions=$pedal_radio;    
      }
}

else if ($choix_option=="SL")
{ 
      if ($pedal_radio=="GTV")
      {
         $actions=$choix_loop;
      }
      else if ($pedal_radio=="Actions")
      {
         $actions=$choix_actions;
      } 
      else
      {
          $actions=$pedal_radio;      
      }
}

$message = "set ".$Pedal." ".$choix_press." ".$actions;

echo "Message To server : ".$message;
// create socket
$socket = socket_create(AF_INET, SOCK_DGRAM, 0) or die("Could not create socket\n");
// connect to server
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");  
// send string to server
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
// close socket
socket_close($socket);

?>

<?php
// Partie du code permettant d'ecrire dans le fichier XML avec les fonctions de la classe ci-dessus

  $Pedal = intval($_POST['pedal']);
  $choix_option = $_POST['Choix_SL_PP'];
  $choix_press = $_POST['choix_press'];
  $pedal_radio = $_POST['radio'];
  $GTV = $_POST['GTV'];
  $choix_loop = $_POST['choix_loop'];
  $choix_actions = $_POST['choix_actions'];

if ($choix_option=="PP")
  {
    if ($pedal_radio==26) 
    {
      $pedal_radio=18;
    }
    else if ($pedal_radio==27) 
    {
      $pedal_radio=19;
    }
  }

echo $Pedal;
echo '<br>';
echo $choix_option;
echo '<br>';
echo $choix_press;
echo '<br>';
echo $pedal_radio;
echo '<br>';
echo  $GTV ;
echo '<br>';
echo  $choix_loop;
echo '<br>';
echo  $choix_actions ;
echo '<br>';

$XML = new XMLphp;
$XML->ParsingXML();

if ($choix_option=="PP")
{
      if ($pedal_radio=="GTV")
      {
        $XML->SetPedal_O($Pedal,"Go_to_value",$pedal_radio);
      }
      else
      {
        $XML->SetPedal_A($Pedal,$choix_press,$pedal_radio);        
      }
}
else if ($choix_option=="SL")
{ 
      if ($pedal_radio=="GTV")
      {
         $XML->SetPedal_A($Pedal,$choix_press,$choix_loop);
      }
      else if ($pedal_radio=="Actions")
      {
         $XML->SetPedal_A($Pedal,$choix_press,$choix_actions); 
      } 
      else
      {
         $XML->SetPedal_A($Pedal,$choix_press,$pedal_radio);        
      }
}

$XML->WriteXML();

/*
header('Location: iInterface.php');
exit();
*/

?>