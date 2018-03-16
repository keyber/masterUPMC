<!DOCTYPE html PUBLIC
 "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>MAPSI Main/Tuto Stat</title>
	<link href="http://webia.lip6.fr/~mapsi/pub/skins/skittlish/base.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">g_DefaultStyle="fixed blue";</script>
	<script type="text/javascript" src="http://webia.lip6.fr/~mapsi/pub/skins/skittlish/app.js"></script>
<!--[if IE]>
<link href="http://webia.lip6.fr/~mapsi/pub/skins/skittlish/base_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--HTMLHeader--><style type='text/css'><!--
.subpage h1, h1.subpage { margin:0px; margin-top:1.2em; margin-bottom:8px; 
    color: #006633;
	font-size: 150%; }
p.subpage { float: right; }
.editconflict { color:green; 
  font-style:italic; margin-top:1.33em; margin-bottom:1.33em; }
#siteheader .sitetitle a{height:0px; background: url(http://example.com/mylogo.gif) left top no-repeat} #siteheader .sitetitle a, #siteheader .sitetag{padding-left: 0px} #siteheader .sitetag{margin-top: 44px}
  table.markup { border:2px dotted #ccf; width:90%; }
  td.markup1, td.markup2 { padding-left:10px; padding-right:10px; }
  table.vert td.markup1 { border-bottom:1px solid #ccf; }
  table.horiz td.markup1 { width:23em; border-right:1px solid #ccf; }
  table.markup caption { text-align:left; }
  div.faq p, div.faq pre { margin-left:2em; }
  div.faq p.question { margin:1em 0 0.75em 0; font-weight:bold; }
  div.faqtoc div.faq * { display:none; }
  div.faqtoc div.faq p.question 
    { display:block; font-weight:normal; margin:0.5em 0 0.5em 20px; line-height:normal; }
  div.faqtoc div.faq p.question * { display:inline; }
   
    .frame 
      { border:1px solid #cccccc; padding:4px; background-color:#f9f9f9; }
    .lfloat { float:left; margin-right:0.5em; }
    .rfloat { float:right; margin-left:0.5em; }
a.varlink { text-decoration:none; }
/**
 * GeSHi Dynamically Generated Stylesheet
 * --------------------------------------
 * Dynamically generated stylesheet for python
 * CSS class: , CSS id: 
 * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann
 * (http://qbnz.com/highlighter/ and http://geshi.org/)
 * --------------------------------------
 */
.python .de1, .python .de2 {font-family: monospace; font-weight: normal;}
.python  {font-family:monospace;}
.python .imp {font-weight: bold; color: red;}
.python li, .python .li1 {font-family: monospace; color: black; font-weight: normal;}
.python .ln {width:1px;text-align:right;margin:0;padding:0 2px;vertical-align:top;}
.python .li2 {font-weight: bold;}
.python .kw1 {color: #ff7700;font-weight:bold;}
.python .kw2 {color: #008000;}
.python .kw3 {color: #dc143c;}
.python .kw4 {color: #0000cd;}
.python .co1 {color: #808080; font-style: italic;}
.python .coMULTI {color: #808080; font-style: italic;}
.python .es0 {color: #000099; font-weight: bold;}
.python .br0 {color: black;}
.python .sy0 {color: #66cc66;}
.python .st0 {color: #483d8b;}
.python .nu0 {color: #ff4500;}
.python .me1 {color: black;}
.python .ln-xtra, .python li.ln-xtra, .python div.ln-xtra {background-color: #ffc;}
.python span.xtra { display:block; }

.sourceblocklink {
  text-align: right;
  font-size: smaller;
}
.sourceblocktext {
  padding: 0.5em;
  border: 1px solid #808080;
  color: #000000;
  background-color: #fafafa;
}
.sourceblocktext div {
  font-family: monospace;
  font-size: small;
  line-height: 1;
  height: 1%;
}
.sourceblocktext div.head,
.sourceblocktext div.foot {
  font: italic medium serif;
  padding: 0.5em;
}

--></style><script type="text/javascript" src="http://webia.lip6.fr/~mapsi/pub/MathJax/MathJax.js">MathJax.Hub.Config({
    extensions: ["tex2jax.js","TeX/AMSmath.js","TeX/AMSsymbols.js"],
    jax: ["input/TeX", "output/HTML-CSS"],
    tex2jax: { inlineMath: [ ['{\$','\$}'] ], displayMath: [ ['{\$\$','\$\$}'] ] } });</script>  <meta name='robots' content='index,follow' />

</head>

<body class="$skittlish_Style">
<script type="text/javascript">
//<![CDATA[
	loadPreferences()
//]]>
</script>

	<div id="wrapper">
		<div id="header" class="clearfix">
			<div id="siteheader" class="clearfix">
				<!--PageHeaderFmt-->
				<h1 class='sitetitle'><a class='urllink' href='http://webia.lip6.fr/~mapsi/pmwiki.php' rel='nofollow'>MAPSI</a></h1>
<div class='sitetag' >Modèles et Algorithmes de Probabilités et Statistiques pour l'Informatique
</div>

				<!--/PageHeaderFmt-->
			</div>

			<!--PageTabsFmt-->
			<div id="menu">
				
			</div>
			<!--/PageTabsFmt-->
		</div>

		<div id="contentwrapper" class="clearfix">
			<div id="content">
				<div id="innerwrapper">
					<!--PageTitleGroupFmt-->
					<a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main' class="pagegroup">Main</a>
					<!--/PageTitleGroupFmt-->
					<!--PageTitleFmt--><!--/PageTitleFmt-->

					<!--PageText-->
<div id='wikitext'>
<div class='vspace'></div><h1>Quelques exercices sur des données réelles (Vélib)</h1>
<p>Nous faisons l'hypothèse que les étudiants ont les connaissances de base en <code>numpy</code> et <code>matplotlib</code>. Dans le cas contraire, se référer au premier tutoriel <a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoPython'>lien</a>
</p>
<div class='vspace'></div><hr />
<h3  style='background-color: #e6d8c0;'> Récupération des données</h3>
<p><strong>Solution 1: télécharger un fichier</strong>
</p>
<p class='vspace'>Le fichier suivant regroupe les informations sur les stations Vélib enrichies avec les altitudes (API Google)
<a class='urllink' href='http://webia.lip6.fr/~mapsi/uploads/Main/dataVelib.pkl' rel='nofollow'>dataVelib.pkl</a>
</p>
<div class='vspace'></div>
<div class='sourceblock ' id='sourceblock1'>
  <div class='sourceblocktext'><div class="python">fname <span class="sy0">=</span> <span class="st0">&quot;nomDeFichier.pkl&quot;</span><br />
f<span class="sy0">=</span> <span class="kw2">open</span><span class="br0">&#40;</span>fname<span class="sy0">,</span><span class="st0">'rb'</span><span class="br0">&#41;</span><br />
data <span class="sy0">=</span> pkl.<span class="me1">load</span><span class="br0">&#40;</span>f<span class="br0">&#41;</span><br />
f.<span class="me1">close</span><span class="br0">&#40;</span><span class="br0">&#41;</span></div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=1' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<p class='vspace'><strong>Solution 2: les API rest</strong> [Pour jouer <strong>A LA MAISON</strong>]
</p>
<p class='vspace'>Nous proposons de tracer quelques courbes de probabilité sur des données velib récupérée directement sur le web.
</p><ol><li>première étape: récupération des données, création d'un compte sur: <a class='urllink' href='https://developer.jcdecaux.com/#/signup' rel='nofollow'>https://developer.jcdecaux.com/#/signup</a>
</li><li>récupération d'une clé (XXX)
</li><li>Début du code:
</li></ol>
<div class='sourceblock ' id='sourceblock2'>
  <div class='sourceblocktext'><div class="python"><span class="kw1">import</span> requests<br />
<span class="kw1">import</span> <span class="kw3">pickle</span> <span class="kw1">as</span> pkl<br />
<span class="kw1">import</span> <span class="kw3">time</span><br />
<br />
url <span class="sy0">=</span> <span class="st0">&quot;https://api.jcdecaux.com/vls/v1/stations?contract=Paris&amp;apiKey=XXX&quot;</span><br />
dataStation <span class="sy0">=</span> requests.<span class="me1">get</span><span class="br0">&#40;</span>url<span class="br0">&#41;</span><br />
data <span class="sy0">=</span> dataStation.<span class="me1">json</span><span class="br0">&#40;</span><span class="br0">&#41;</span></div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=2' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<ol><li>enrichissement avec l'altitude à partir de l'API Google:
</li></ol>
<div class='sourceblock ' id='sourceblock3'>
  <div class='sourceblocktext'><div class="python">urlGoogleAPI <span class="sy0">=</span> <span class="st0">&quot;https://maps.googleapis.com/maps/api/elevation/json?locations=&quot;</span><br />
<br />
<span class="kw1">for</span> s <span class="kw1">in</span> data:<br />
&nbsp; &nbsp; position <span class="sy0">=</span> <span class="st0">&quot;%f,%f&quot;</span>%<span class="br0">&#40;</span>s<span class="br0">&#91;</span><span class="st0">'position'</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="st0">'lat'</span><span class="br0">&#93;</span><span class="sy0">,</span>s<span class="br0">&#91;</span><span class="st0">'position'</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="st0">'lng'</span><span class="br0">&#93;</span><span class="br0">&#41;</span><br />
&nbsp; &nbsp; alt <span class="sy0">=</span> requests.<span class="me1">get</span><span class="br0">&#40;</span>urlGoogleAPI+position<span class="br0">&#41;</span><br />
&nbsp; &nbsp; <span class="kw1">assert</span><span class="br0">&#40;</span>alt.<span class="me1">json</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#91;</span><span class="st0">'status'</span><span class="br0">&#93;</span> <span class="sy0">==</span> <span class="st0">&quot;OK&quot;</span><span class="br0">&#41;</span> <span class="co1"># verification de la réussite</span><br />
&nbsp; &nbsp; s<span class="br0">&#91;</span>u<span class="st0">'alt'</span><span class="br0">&#93;</span> <span class="sy0">=</span> alt.<span class="me1">json</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#91;</span><span class="st0">'results'</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="st0">'elevation'</span><span class="br0">&#93;</span> <span class="co1"># enrichissement</span><br />
&nbsp; &nbsp; <span class="kw3">time</span>.<span class="me1">sleep</span><span class="br0">&#40;</span><span class="nu0">0.1</span><span class="br0">&#41;</span> <span class="co1"># pour ne pas se faire bannir par Google</span><br />
<br />
f<span class="sy0">=</span> <span class="kw2">open</span><span class="br0">&#40;</span><span class="st0">'coordVelib.pkl'</span><span class="sy0">,</span><span class="st0">'wb'</span><span class="br0">&#41;</span><br />
pkl.<span class="me1">dump</span><span class="br0">&#40;</span>data<span class="sy0">,</span>f<span class="br0">&#41;</span> <span class="co1"># penser à sauver les données pour éviter de refaire les opérations</span><br />
f.<span class="me1">close</span><span class="br0">&#40;</span><span class="br0">&#41;</span></div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=3' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<div class='vspace'></div><div  style='background-color: #ffbbbb;' > 
<p><strong>Réflexe pickle:</strong> chaque fois que vous avez effectué des opérations coûteuses, penser à sauver le résultat! Le module pickle offre la possibilité de le faire en très peu de ligne!
</p>
<div class='sourceblock ' id='sourceblock4'>
  <div class='sourceblocktext'><div class="python">f<span class="sy0">=</span> <span class="kw2">open</span><span class="br0">&#40;</span><span class="st0">'coordVelib.pkl'</span><span class="sy0">,</span><span class="st0">'wb'</span><span class="br0">&#41;</span><br />
pkl.<span class="me1">dump</span><span class="br0">&#40;</span>data<span class="sy0">,</span>f<span class="br0">&#41;</span> <span class="co1"># penser à sauver les données pour éviter de refaire les opérations</span><br />
f.<span class="me1">close</span><span class="br0">&#40;</span><span class="br0">&#41;</span></div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=4' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

</div>
<hr />
<h3>Structure des données</h3>
<p>Les données sont dans une liste de dictionnaire (ie chaque station est un dictionnaire python). Les champs du dictionnaire sont:
</p><ul><li>'address': u"57 RUE DU CHATEAU D'EAU - 75010 PARIS",
</li><li>'alt': 35.79555130004883,
</li><li>'available_bike_stands': 2,
</li><li>'available_bikes': 17,
</li><li>'banking': True,
</li><li>'bike_stands': 19,
</li><li>'bonus': False,
</li><li>'contract_name': u'Paris',
</li><li>'last_update': 1410442143000,
</li><li>'name': u"10007 - CHATEAU D'EAU",
</li><li>'number': 10007,
</li><li>'position': {u'lat': 48.87242997325711, u'lng': 2.355489390173873},
</li><li>'status': u'OPEN'}
</li></ul><p class='vspace'>Pour faire défiler les stations dans la structure <code>data</code>:
</p>
<div class='sourceblock ' id='sourceblock5'>
  <div class='sourceblocktext'><div class="python"><span class="kw1">for</span> station <span class="kw1">in</span> data:<br />
&nbsp; &nbsp; ...</div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=5' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<p class='vspace'>Pour accéder à un champ d'une station:
</p>
<div class='sourceblock ' id='sourceblock6'>
  <div class='sourceblocktext'><div class="python"><span class="kw1">for</span> station <span class="kw1">in</span> data:<br />
&nbsp; &nbsp; nbVeloDispo <span class="sy0">=</span> station<span class="br0">&#91;</span><span class="st0">'available_bikes'</span><span class="br0">&#93;</span><br />
&nbsp; &nbsp; ...</div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=6' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<p class='vspace'><strong>Mise en forme et élimination du bruit</strong>
</p>
<p class='vspace'>Les données ne sont pas toutes correctes (comme la plupart des données réelles). Nous souhaitons aussi les mettre en forme dans un tableau.
</p><ul><li>Faire défiler les stations
</li><li>Extraire l'arrondissement [Champ 'number' / 1000 en division entière] et vérifier qu'il est compris entre 1 et 20
</li><li>Eliminer les autres stations
</li><li>Définir une matrice du bon nombre de lignes avec les colonnes contenant: 3 coordonnées géographiques, Arrondissement, Places totales, Places dispo.
</li></ul><div class='vspace'></div><hr />
<h3  style='background-color: #e6d8c0;'>  Distributions de probabilités</h3>
<p>Dans notre population, les individus sont des stations, qui ont différents caractères.
Nous allons étudier les variables aléatoires suivantes: 
</p><ul><li>Arrondissement (Ar) 
</li><li>Altitude (Al)
</li></ul><p><span  style='display: none;'> * Places totales (Ps)</span>
<span  style='display: none;'> * Places dispo (Pd)</span>
</p><ul><li>Station pleine (Sp) [variable binaire: valeur 1 si la station est pleine]
</li><li>Au moins 2 vélos disponibles (variable binaire) (Vd) [comme il y a souvent des vélos en panne, on considère qu'il faut 2 vélos dans une stations pour être sûr de pouvoir en prendre un.]
</li></ul><p class='vspace'>Construire les matrices suivantes:
</p><ul><li>{$P[Ar]$}
</li><li>{$P[Al]$} nous utiliserons une discrétisation de l'altitude en 100 intervalles de mêmes tailles
</li></ul>
<div class='sourceblock ' id='sourceblock7'>
  <div class='sourceblocktext'><div class="python">nItervalles <span class="sy0">=</span> <span class="nu0">30</span><br />
res <span class="sy0">=</span> plt.<span class="me1">hist</span><span class="br0">&#40;</span>altitudes<span class="sy0">,</span> nIntervalles<span class="br0">&#41;</span><br />
<span class="kw1">print</span> res<span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span> <span class="co1"># effectif dans les intervalles</span><br />
<span class="kw1">print</span> res<span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span> <span class="co1"># definition des intervalles (ATTENTION: 31 valeurs)</span></div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=7' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<ul><li>{$P[Sp | Al]$}
</li><li>{$P[Vd | Al]$}
</li><li>{$P[Vd | Ar]$}
</li></ul><div class='vspace'></div><hr />
<h3  style='background-color: #e6d8c0;'> Tracer un histogramme</h3>
<p>Tracer l'histogramme correspondant à la distribution {$P[Al]$}.<br /><strong>Attention:</strong> pour faire un tracé correct, il faut que l'aire de l'histogramme somme à 1. Il est donc nécessaire de réfléchir à la hauteur et largeur des différentes barres.
</p>
<div class='vspace'></div>
<div class='sourceblock ' id='sourceblock8'>
  <div class='sourceblocktext'><div class="python"><span class="co1"># stocker les altitudes + définir la largeur des intervalles:</span><br />
alt <span class="sy0">=</span> res<span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span><br />
intervalle <span class="sy0">=</span> alt<span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span>-alt<span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span><br />
<span class="co1"># définir la fréquence de répartition de la population dans les intervalles</span><br />
pAlt <span class="sy0">=</span> res<span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span>/res<span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span>.<span class="kw2">sum</span><span class="br0">&#40;</span><span class="br0">&#41;</span><br />
<span class="co1"># puis diviser la fréquence par la base de l'intervalle pour que ça somme à 1</span><br />
pAlt /<span class="sy0">=</span> intervalle<br />
<span class="br0">&#91;</span>...<span class="br0">&#93;</span> <span class="co1"># créer une figure</span><br />
plt.<span class="me1">bar</span><span class="br0">&#40;</span><span class="br0">&#40;</span>alt<span class="br0">&#91;</span><span class="nu0">1</span>:<span class="br0">&#93;</span>+alt<span class="br0">&#91;</span>:-<span class="nu0">1</span><span class="br0">&#93;</span><span class="br0">&#41;</span>/<span class="nu0">2</span><span class="sy0">,</span>pAlt<span class="sy0">,</span> alt<span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span>-alt<span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span><span class="br0">&#41;</span><br />
<span class="co1"># NB: dans bar, on donne: abscisse, ordonnées, largeur des barres</span></div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=8' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<div class='vspace'></div><div> <img width='500px' src='http://webia.lip6.fr/~mapsi/uploads/Main/2014_histAlt.png' alt='' title='' /></div>
<hr />
<h3  style='background-color: #e6d8c0;'> Calcul et tracé d'une probabilité conditionnelle</h3>
<p>On s'intéresse à  {$E[P[Vd | Al]]$}, c'est à dire, la probabilité d'avoir un vélo disponible en fonction de l'altitude.
Voici les étapes à respecter
</p><ol><li>calculer pour toutes les stations
<ol><li>Vd = 1 si au moins 2 vélos dispos, Vd = 0 sinon
</li><li>Al = [0,...,29] catégorie d'altitude (cf aide ci-dessous pour ce calcul)
</li><li>Construire la table à 2 lignes et 30 colonnes de {$P[Vd | Al]$} en cherchant pour chaque altitude:
<ol><li>Chercher les stations concernées [=réduction de l'univers pour les probas conditionnelles]
</li><li>Calculer la fréquence de Vd=1 
</li><li>Calculer la fréquence de Vd=0 
</li><li>Tracer {$P[Vd=1|Al]$} [={$P[Vd=1|Al]*1 + P[Vd=0|Al]*0$}estimation de l'espérance conditionnelle]
</li></ol></li></ol></li></ol><div class='vspace'></div>
<div class='sourceblock ' id='sourceblock9'>
  <div class='sourceblocktext'><div class="python"><span class="co1"># retrouver les catégories </span><br />
<span class="co1"># première colonne de station = altitude</span><br />
<span class="co1"># intervalle = largeur d'un intervalle</span><br />
catAlt <span class="sy0">=</span> np.<span class="me1">floor</span><span class="br0">&#40;</span><span class="br0">&#40;</span>stations<span class="br0">&#91;</span>:<span class="sy0">,</span><span class="nu0">1</span><span class="br0">&#93;</span>-stations<span class="br0">&#91;</span>:<span class="sy0">,</span><span class="nu0">1</span><span class="br0">&#93;</span>.<span class="kw2">min</span><span class="br0">&#40;</span><span class="br0">&#41;</span><span class="br0">&#41;</span> / intervalle<span class="br0">&#41;</span><br />
<br />
<span class="co1"># le début du code suivant peut-être</span><br />
pDispoSAlt <span class="sy0">=</span> np.<span class="me1">zeros</span><span class="br0">&#40;</span>np.<span class="me1">unique</span><span class="br0">&#40;</span>catAlt<span class="br0">&#41;</span>.<span class="me1">shape</span><span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span><span class="br0">&#41;</span><br />
<span class="kw1">for</span> a <span class="kw1">in</span> np.<span class="me1">unique</span><span class="br0">&#40;</span>catAlt<span class="br0">&#41;</span>: <span class="co1"># fonction pratique pour isoler les valeurs uniques</span><br />
&nbsp; &nbsp; <span class="br0">&#91;</span>...<span class="br0">&#93;</span></div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=9' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<div class='vspace'></div><hr />
<h3  style='background-color: #e6d8c0;'> Tracer la population des stations</h3>
<h4>Sanity check: affichage des arrondissements pour vérifier que tout est OK:</h4>

<div class='sourceblock ' id='sourceblock10'>
  <div class='sourceblocktext'><div class="python">x1 <span class="sy0">=</span> stations<span class="br0">&#91;</span>:<span class="sy0">,</span><span class="nu0">3</span><span class="br0">&#93;</span> <span class="co1"># recuperation des coordonnées </span><br />
x2 <span class="sy0">=</span> stations<span class="br0">&#91;</span>:<span class="sy0">,</span><span class="nu0">2</span><span class="br0">&#93;</span><br />
<span class="co1"># définition de tous les styles (pour distinguer les arrondissements)</span><br />
style <span class="sy0">=</span> <span class="br0">&#91;</span><span class="br0">&#40;</span>s<span class="sy0">,</span>c<span class="br0">&#41;</span> <span class="kw1">for</span> s <span class="kw1">in</span> <span class="st0">&quot;o^+*&quot;</span> <span class="kw1">for</span> c <span class="kw1">in</span> <span class="st0">&quot;byrmck&quot;</span> <span class="br0">&#93;</span> <br />
<br />
<span class="co1"># tracé de la figure</span><br />
plt.<span class="me1">figure</span><span class="br0">&#40;</span><span class="br0">&#41;</span><br />
<span class="kw1">for</span> i <span class="kw1">in</span> <span class="kw2">range</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">21</span><span class="br0">&#41;</span>:<br />
&nbsp; &nbsp; ind<span class="sy0">,</span> <span class="sy0">=</span> np.<span class="me1">where</span><span class="br0">&#40;</span>stations<span class="br0">&#91;</span>:<span class="sy0">,</span><span class="nu0">0</span><span class="br0">&#93;</span><span class="sy0">==</span>i<span class="br0">&#41;</span><br />
&nbsp; &nbsp; <span class="co1"># scatter c'est plus joli pour ce type d'affichage</span><br />
&nbsp; &nbsp; plt.<span class="me1">scatter</span><span class="br0">&#40;</span>x1<span class="br0">&#91;</span>ind<span class="br0">&#93;</span><span class="sy0">,</span>x2<span class="br0">&#91;</span>ind<span class="br0">&#93;</span><span class="sy0">,</span>marker<span class="sy0">=</span>style<span class="br0">&#91;</span>i-<span class="nu0">1</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="nu0">0</span><span class="br0">&#93;</span><span class="sy0">,</span>c<span class="sy0">=</span>style<span class="br0">&#91;</span>i-<span class="nu0">1</span><span class="br0">&#93;</span><span class="br0">&#91;</span><span class="nu0">1</span><span class="br0">&#93;</span><span class="sy0">,</span>linewidths<span class="sy0">=</span><span class="nu0">0</span><span class="br0">&#41;</span><br />
<br />
plt.<span class="me1">axis</span><span class="br0">&#40;</span><span class="st0">'equal'</span><span class="br0">&#41;</span> <span class="co1"># astuce pour que les axes aient les mêmes espacements</span><br />
plt.<span class="me1">legend</span><span class="br0">&#40;</span><span class="kw2">range</span><span class="br0">&#40;</span><span class="nu0">1</span><span class="sy0">,</span><span class="nu0">21</span><span class="br0">&#41;</span><span class="sy0">,</span> fontsize<span class="sy0">=</span><span class="nu0">10</span><span class="br0">&#41;</span><br />
plt.<span class="me1">savefig</span><span class="br0">&#40;</span><span class="st0">&quot;carteArrondissements.pdf&quot;</span><span class="br0">&#41;</span></div></div>
  <div class='sourceblocklink'><a href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=sourceblock&amp;num=10' type='text/plain'>[&#036;[Get Code]]</a></div>
</div>

<div class='vspace'></div><div> <img width='500px' src='http://webia.lip6.fr/~mapsi/uploads/Main/2014_velibArrond.png' alt='' title='' /></div>
<p>Tout est OK, on peut passer à l'exercice!
</p>
<div class='vspace'></div><h4>Disponibilité: </h4>
<p>Afin de réviser les usages de <code>np.where</code>
Projeter les stations sur la carte en mettant en:
</p><ul><li>rouge les stations pleines, 
</li><li>jaune les vides, 
</li><li>verte les autres.
</li></ul><div class='vspace'></div><h4>Moyenne, Médiane...</h4>
<p>Sur différentes cartes, afficher les stations suivantes:
</p><ul><li>stations dont l'altitude est inférieure à la moyenne (en conservant le code couleur précédent)
</li><li>stations dont l'altitude est supérieure à la médiane (en conservant le code couleur précédent)
</li></ul><div class='vspace'></div><hr />
<h3>Tests de corrélation</h3>
<ul><li>Calculer les corrélations entre les variables <em>Altitude</em> et <em>Vélo disponible</em>
</li><li>Calculer les corrélations entre les variables <em>Arrondissement</em> et <em>Vélo disponible</em>
</li></ul><p class='vspace'>Quel facteur est le plus lié au fait qu'(au moins) un vélo soit disponible dans une station?
</p>
<div class='vspace'></div><hr />
<h3>Pour s'amuser avec d'autres données:</h3>
<ul><li>Beaucoup de choses sur Paris: <a class='urllink' href='http://opendata.paris.fr' rel='nofollow'>http://opendata.paris.fr</a>
</li><li>Les données classique UCI: <a class='urllink' href='https://archive.ics.uci.edu/ml/datasets.html' rel='nofollow'>https://archive.ics.uci.edu/ml/datasets.html</a>
</li><li>Les challenges Kaggle: <a class='urllink' href='http://www.kaggle.com' rel='nofollow'>http://www.kaggle.com</a>
</li></ul>
</div>

				</div>
			</div>

			<div id="sidebar">
				<!--PageSearchFmt-->
				<div class="boxy short">
					<div id="search">
						<h3>Search</h3>

						<form id="searchform" action='http://webia.lip6.fr/~mapsi/pmwiki.php' method="get">
						<fieldset>
							<input type='hidden' name='n' value='Main.TutoStat' />
							<input type='hidden' name='action' value='search' />
							<input class='searchBox' type='text' id='q' name='q' value="" />
							<input class='searchButton' type='submit' value='Go' />
						</fieldset>
						</form>
					</div>
				</div>
				<!--/PageSearchFmt-->

				<!--PageRightFmt-->
				<div class="boxy tall">
					<p class='sidehead'> <a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoPython'>Tutoriel numpy</a>
</p>
<p class='vspace sidehead'> <a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.Salles'>Infos Cours/TD/TME</a>
</p>
<p class='vspace sidehead'> <a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.Annales'>Annales</a>
</p>
<p class='vspace sidehead'> Semainier
</p><ul><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine1'>Semaine 1</a>  
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine2'>Semaine 2</a>  
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine3'>Semaine 3</a>  
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine4'>Semaine 4</a>  
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine5'>Semaine 5</a>
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine6'>Semaine 6</a>  
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine7'>Semaine 7</a>  
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine8'>Semaine 8</a>  
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine9'>Semaine 9</a>  
</li><li><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Cours.Semaine10'>Semaine 10</a>  
</li></ul><p class='vspace sidehead'> <a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.Examen'>Infos Examen</a>
</p>
<p class='vspace sidehead'> Liens
</p>
<p class='vspace'  style='text-align: right;'> <span style='font-size:83%'><a class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Site.SideBar?action=edit'>edit SideBar</a></span>
</p>

				</div>
				<!--/PageRightFmt-->
			</div>
		</div>

		<div id="options-container">
			<!--PageOptionsFmt-->
			<div id="options">
				<h2>Options:</h2>
				<ul id="option_size">
					<li title="size: fixed" id="option_size_fixed" class="fixed"><a><span>fixed</span></a></li>
					<li title="size: fluid" id="option_size_fluid" class="fluid"><a><span>fluid</span></a></li>
				</ul>

				<ul id="option_color">
					<li title="color: orange" id="option_color_orange" class="orange"><a><span>orange</span></a></li>
					<li title="color: blue" id="option_color_blue" class="blue"><a><span>blue</span></a></li>
					<li title="color: green" id="option_color_green" class="green"><a><span>green</span></a></li>
					<li title="color: pink" id="option_color_pink" class="pink"><a><span>pink</span></a></li>
					<li title="color: cyan" id="option_color_cyan" class="cyan"><a><span>cyan</span></a></li>
					<li title="color: red" id="option_color_red" class="red"><a><span>red</span></a></li>
					<li title="color: violet" id="option_color_violet" class="violet"><a><span>violet</span></a></li>
				</ul>
			</div>
			<!--/PageOptionsFmt-->

			<!--PageActionFmt-->
			<div class="pageactions">
				<ul><li class='browse'>      <a accesskey=''  rel='nofollow'  class='selflink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat'>View</a>
</li><li class='edit'>      <a accesskey='e'  rel='nofollow'  class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=edit'>Edit</a>
</li><li class='diff'>   <a accesskey='h'  rel='nofollow'  class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=diff'>History</a>
</li><li class='print'>     <a accesskey=''  rel='nofollow'  class='wikilink' href='http://webia.lip6.fr/~mapsi/pmwiki.php?n=Main.TutoStat?action=print'>Print</a>
</li></ul>

			</div>
			<!--/PageActionFmt-->
		</div>

		<div id="footer">
			<!--PageFooterFmt-->
				<div class="footer"><p>Page last modified on June 26, 2017, at 04:04 PM EST
</p>
</div>
			<!--/PageFooterFmt-->
			<p id="credits"><a href="http://evil.che.lu/projects/skittlish">Skittlish</a> theme adapted by <a href="http://solidgone.org/Skins/">David Gilbert</a>, powered by <a href="http://pmwiki.com/">PmWiki</a></p>
		</div>
	</div>
<!--HTMLFooter-->
</body>
</html>
