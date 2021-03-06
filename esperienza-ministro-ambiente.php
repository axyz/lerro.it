<!DOCTYPE html>
<?php include("basedir.php"); ?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php echo $basedir;?>stylesheets/font-awesome.css">
	<link rel="stylesheet" href="<?php echo $basedir;?>stylesheets/jquery.maximage.css">
	<link rel="stylesheet" href="<?php echo $basedir;?>stylesheets/app.css">
	<link rel="stylesheet" href="<?php echo $basedir;?>stylesheets/style.css">

	<script src="<?php echo $basedir;?>javascripts/foundation/modernizr.foundation.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'>
<title>titolo</title><nav class="top-bar fixed">
    <ul>
      <li class="name"><h1><a href="<?php echo $basedir;?>"><img src="images/logo.png" id="logo2" class="hide-for-small"/><img src="images/logo.png" id="logo" class="show-for-small"/></a></h1></li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>
    <section>
      <ul class="right" id="main-menu">
        <li><a href="profilo.php">PROFILO</a></li>
        <li><a href="attivita.php">ATTIVIT&Agrave;</a></li>
        <li><a href="esperienza.php">STORIE</a></li>
        <li><a href="costi.php">COSTI</a></li>
        <li><a href="#">BLOG</a></li>
        <li><a href="<?php echo $basedir;?>contatti.php">CONTATTI</a></li>
      </ul>
    </section>
  </nav>
<div id="maximage"><img src="images/bg/esperienza-ok-salute.jpg"/></div><br/><br/><br/><br/><br/>
<div id="content" class="row">
  <div class="four columns">
    <div class="panel contact-box">
      <ul class="side-nav">
        <li> <a href="esperienza-venture-consulting.php">Venture Consulting</a></li>
        <li> <a href="esperienza-proras-vs-ce.php">Proras vs. CE</a></li>
        <li> <a href="esperienza-ciappetta.php">Ciappetta</a></li>
        <li> <a href="esperienza-perry-ellis.php">Perry Ellis</a></li>
        <li> <a href="esperienza-ok-salute.php">OK Salute</a></li>
        <li> <a href="esperienza-azioni-contro-gruppo-efim.php">Azioni contro il Gruppo EFIM</a></li>
        <li> <a href="esperienza-biopolis.php">Biopolis</a></li>
        <li> <a href="esperienza-ministero-ambiente.php">Ministero dell’ambiente</a></li>
      </ul>
    </div>
  </div>
  <div class="eight columns">
    <div class="panel contact-box">
      <h3>Ministero dell’ambiente<small>&nbsp;</small></h3>
      <p>Per circa dieci anni, fino al limite massimo di legge, l’avv. Lerro è stato consulente esterno del Ministero dell’ambiente con la qualifica di “esperto giuridico” e componente della Segreteria Tecnica. In tale veste si è occupato di aree naturali protette, acque e difesa del suolo.</p>
      <p>L’attività svolta per il Ministero è consistita in redazione di documenti e rapporti per il Ministro, nella redazione di atti normativi e regolamentari, nel supporto dell’attività politico-istituzionale del Ministro (risposte ad interpellanze ed interrogazioni, question time, relazioni con enti nazionali e regionali). Inoltre, l’avv. Lerro ha contribuito, per gli aspetti giuridici all’analisi e redazione di piani territoriali, alla costituzione e regolamentazione di Enti Parco nazionali e regionali, alla gestione delle relazioni istituzionali tra amministrazioni centrali e periferiche.</p>
    </div>
  </div>
</div><br><br><br>
<footer class="row" id="footer">

      <div class="four columns">
          <p>&copy; Copyright lerro.it 2012.</p>
      </div>

      <div class="four columns">
        <ul id="social" class="link-list">
            <li><a href="#" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="icon-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="icon-linkedin"></i></a></li>
          </ul>
      </div>

      <div class="four columns">
        <ul class="button-group right">
          <li><a href="<?php echo $basedir;?>" class="tiny button" >Home</a></li>
          <li><a href="#" class="tiny button" data-reveal-id="legal">Legal</a></li>
          <li><a href="#" class="tiny button" data-reveal-id="privacy">Privacy</a></li>
          <li><a href="#" class="tiny button" data-reveal-id="credits">Credits</a></li>
        </ul>
      </div>

</footer>

<div id="legal" class="reveal-modal large">
  <h3>Legal</h3>
  <p>Lerro&amp;Partners (di seguito, “L&amp;P”) è un’associazione professionale con sede legale in Roma, via G. Severano 5, e sede operativa in Roma, via Famiano Nardini 1/C, iscritta presso il Consiglio dell’Ordine degli Avvocati di Roma P. IVA 08009971006 soggetta al Codice Deontologico Forense e alla Legge Professionale vigente.</p>
  <p>I contenuti disponibili sul Sito non costituiscono in alcun modo consulenza legale e non si sostituiscono in alcun modo alla necessaria consulenza e assistenza legale.</p>
  <p>I casi riportati sono pubblici ed i relativi fatti e nomi sono apparsi sulla stampa o su pubblicazioni specialistiche, o i soggetti coinvolti hanno espressamente autorizzato la relativa menzione sul Sito.</p>
  <p>Il sito www.lerro.it ed i contenuti relativi  sono di proprietà esclusiva di Lerro&amp;Partners e sono protetti dalla normativa vigente in materia di tutela del diritto d’autore.</p>
  <p>Il trattamento dei dati raccolti tramite il Sito e i diritti dei relativi titolari, sono disciplinati dall’Informativa Privacy disponibile sul Sito.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="privacy" class="reveal-modal large">
  <h3>Privacy</h3>
  <p>Ai sensi dell'art. 13 d. Lgs. 196/2003 (di seguito T.U.), ed in relazione ai dati personali di cui questo Studio Legale entrerà in possesso, La informiamo di quanto segue:</p>
  <ol>
    <li>Il trattamento è finalizzato unicamente alla corretta e completa esecuzione dell'incarico professionale ricevuto, sia in ambito giudiziale che in ambito stragiudiziale.</li>
    <li>Modalità del trattamento dei dati.a) Il trattamento è realizzato per mezzo delle operazioni o complesso di operazioni indicate all'art. 4 comma 1 lett. a) T.U.: raccolta, registrazione, organizzazione, conservazione, consultazione, elaborazione, modificazione, selezione, estrazione, raffronto, utilizzo, interconnessione, blocco, comunicazione, cancellazione e distruzione dei dati.b) Le operazioni possono essere svolte con o senza l'ausilio di strumenti elettronici o comunque automatizzati.c) Il trattamento è svolto dal titolare e/o dagli incaricati del trattamento.</li>
    <li>Il conferimento di dati personali comuni, sensibili e giudiziari è strettamente necessario ai fini dello svolgimento delle attività di cui al punto 1.</li>
    <li>L'eventuale rifiuto da parte dell'interessato di conferire dati personali nel caso di cui al punto 3 comporta l'impossibilità di adempiere alle attività di cui al punto 1.</li>
    <li>I dati personali possono venire a conoscenza degli incaricati del trattamento e possono essere comunicati per le finalità di cui al punto 1 a collaboratori esterni, soggetti operanti nel settore giudiziario, alle controparti e relativi difensori, a collegi di arbitri e, in genere, a tutti quei soggetti cui la comunicazione sia necessaria per il corretto adempimento delle finalità indicate nel punto 1.</li>
    <li>I dati personali non sono soggetti a diffusione.</li>
    <li>I dati personali possono essere trasferiti verso Paesi dell'Unione Europea e verso Paesi terzi rispetto all'Unione Europea nell'ambito delle finalità di cui al punto 1.</li>
    <li>L'art. 7 T.U. conferisce all'interessato l'esercizio di specifici diritti, tra cui quello di ottenere dal titolare la conferma dell'esistenza o meno di propri dati personali e la loro messa a disposizione in forma intelligibile; l'interessato ha diritto di avere conoscenza dell'origine dei dati, della finalità e delle modalità del trattamento, della logica applicata al trattamento, degli estremi identificativi del titolare e dei soggetti cui i dati possono essere comunicati; l'interessato ha inoltre diritto di ottenere l'aggiornamento, la rettificazione e l'integrazione dei dati, la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione della legge; il titolare ha il diritto di opporsi, per motivi legittimi, al trattamento dati.</li>
    <li>Titolare del trattamento è Lerro&amp;Partners. Responsabile del trattamento è l’avv. Alessandro M. Lerro.</li>
    <li>La presente informativa vale anche ai sensi della normativa vigente in materia di antiriciclaggio, essendo il professionista sottoposto agli obblighi di identificazione, registrazione e segnalazione di cui al D.Lvo 56/2004. A questo riguardo il cliente dichiara di essere il diretto interessato alla prestazione.</li>
  </ol>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="credits" class="reveal-modal large">
  <h3>Credits</h3>
  <p class="lead">Web Design &amp; Web Engineering</p>
  <p>Andrea Moretti - <a href="http://eikona.eu">Eikona Studio</a></p>
  <p class="lead">Fotografie di</p>
  <p><a href="http://guidofua.com">Guido Fu&agrave;</a> - <a href="http://eikona.eu">Eikona Studio</a></p>
  <a class="close-reveal-modal">&#215;</a>
  <p class="lead">Testi</p>
  <p>Alessandro Lerro</p>
</div><!-- Included JS Files (Uncompressed) -->
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.forms.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.topbar.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.event.move.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.magellan.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.clearing.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.tooltips.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.reveal.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.tabs.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.buttons.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.placeholder.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.navigation.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.accordion.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.alerts.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.cookie.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.orbit.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.event.swipe.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.joyride.js"></script>
	

  <!-- Application Javascript, safe to override -->
  <script src="<?php echo $basedir;?>javascripts/jquery.cycle.all.js"></script>
  <script src="<?php echo $basedir;?>javascripts/jquery.grid-a-licious.min.js"></script>
  <script src="<?php echo $basedir;?>javascripts/jquery.maximage.js"></script>
  <script src="<?php echo $basedir;?>javascripts/foundation/app.js"></script>
  <script src="<?php echo $basedir;?>javascripts/script.js"></script>
</body>
</html>