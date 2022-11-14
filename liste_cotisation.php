<?php
session_start();
error_reporting(0);
//connexion au SGBDMysql.
$connexion=mysql_connect('localhost','root','');
//selection de la BD
mysql_select_db('clubelit_bd',$connexion);
$id_cotisation=isset($_POST['valeur'])? $_POST['valeur']:'';
{//recherche
$sql="select*from cotisation where id_cotisation='$id_cotisation'";
$req=mysql_query($sql)or die(mysql_error());
while($data=mysql_fetch_array($req))
{
   $id_cotisation= $data[0];
   $montant_cotisation= $data[1];
   $date_cotisation= $data[2];
   $id_etudiant= $data[3];
}
}

?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="stylecss/index.css" type="text/css" media="screen";/>
<title>Liste_cotisation</title>

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body id="body" onload="MM_preloadImages('image/Icone/facebook-icone-4426-128.png','image/SAM_7058 - Copie - Copie.JPG','image/IMG_0317.JPG','image/IMG_0050.JPG','image/20151213_115709.jpg')">

<div id="globale">




<div id="entete"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','image/20151213_115709.jpg',1)"><img src="image/dsl.jpeg" name="Image5" width="700" height="250" border="0" id="Image5" /></a></div>


<div id="menu">
<ul>
<li><a href="index.php">Accueil</a></li>
<li><a href="#">Gestion des activités</a>
<ul>
<li><a href="ajout_activite.php">Ajout_activité</a></li>
<li><a href="liste_activite.php">Liste_activités</a></li>
<li><a href="activite_cours.php">Activité_cours</a></li>
</ul>
</li>
<li><a href="#">Gestion des cotisations</a>
<ul>
<li><a href="ajout_cotisation.php">Ajout_cotisation</a></li>
<li><a href="liste_cotisation.php">Liste_cotisés</a></li>
<li><a href="liste_non_cotise.php">Liste_non_cotises</a></li>
</ul>
</li>
<li><a href="#">Gestion des étudiants</a>
<ul>
<li><a href="ajoutcotisation_etudiant.php">Ajout_cotis_étudiant</a></li>
<li><a href="liste_cotise_etudiant.php">Liste_étud_cotisés</a></li>
<li><a href="liste_noncotise_etudiant.php">Liste_etud_non_cotisés</a></li>
</ul>
</li>
</ul>
</div>

 <div id="cercle">
<div id="centrale">


<div id="coller">
<form action="" method="post" name="ok" id="ok">
<table width="428" border="0" align="center" bordercolor="#060">
  <tr>
   <!--<td>Choix</td>-->
    <td width="46" align="center" bgcolor="#FFCC66">id_cotisation:</td>
    <td width="328" align="center" bgcolor="#FFCC66">montant_cotisation:</td>
    <td width="452" align="center" bgcolor="#FFCC66">date_cotisation:</td>
	<td width="452" align="center" bgcolor="#FFCC66">id_etudiant:</td>
  </tr>
<?php
{
include('connexion.php');
//affichage
$sql="select*from cotisation";
$resultat=mysql_query($sql)or die("erreur sql! $sql". mysql_error());
while($data=mysql_fetch_array($resultat))
{?>
  <tr>
  <!--<td><input name="valeur" type="radio" onclick="recherche()" value=<?php echo $data[0];?>
    <?php if (isset($news_id)) if ($news_id==$data[0]) echo "checked";?>></td>-->
    <td align="center" bgcolor="#BBBBBB"><?php echo $data[0];?></td>
    <td align="center" bgcolor="#BBBBBB"><?php echo $data[1];?></td>
    <td align="center" bgcolor="#BBBBBB"><?php echo $data[2];?></td>
	 <td align="center" bgcolor="#BBBBBB"><?php echo $data[3];?></td>
	  <td align="center" bgcolor="#BBBBBB"><?php echo $data[4];?></td>
  </tr>
<?php }
}    
?>
</table>
</form>
</div>

<div id="youl">
<ul align="center" >Galerie</ul>
<div id="youl1"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','image/SAM_7058 - Copie - Copie.JPG',1)"><img src="image/IMG_0051.JPG" name="Image2" width="150" height="150" border="0" id="Image2" /></a></div>


<div id="youl2"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','image/IMG_0317.JPG',1)"><img src="image/IMG_0023.JPG" name="Image3" width="150" height="150" border="0" id="Image3" /></a></div>
<div id="youl3"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','image/IMG_0050.JPG',1)"><img src="image/IMG_3606.JPG" name="Image4" width="150" height="150" border="0" id="Image4" /></a></div>
</div>
</div>




<div id="gauche">
<div id="gauche1">


<marquee direction="down" behavior="alternate" class="marq"><h1 align="center"> ELIT</h1> </marquee>
			<marquee direction="left" behavio="alternate" class="marq">Elit pour toujour</marquee>
</div>

<div id="gauche2">   

<img src="image/google.png" />





</div>

<div id="gauche3">


  <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','image/Icone/facebook-icone-4426-128.png',1)"><img src="image/Icone/youtube-icone-8916-128.png" name="Image1" width="190" height="190" border="0" id="Image1" /></a>
  
  
  
  </div>


</div>



<div id="piedpage">
<marquee><h5> ELIT POUR TOUJOUR UN POUR TOUS; TOUS POUR UN...!!!</h5></marquee>
</div>
</div>
</div>
</div>

</body>
</html>
