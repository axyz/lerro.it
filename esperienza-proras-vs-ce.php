<!DOCTYPE html>
<?php if($_GET['lang'] == "en") { ?>
<script type="text/javascript">
  var eng = true;
</script>
<?php } else { ?>
<script type="text/javascript">
  var eng = false;
</script>
<?php } ?>
<?php include("basedir.php"); ?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="stylesheets/font-awesome.css">
	<link rel="stylesheet" href="stylesheets/jquery.maximage.css">
	<link rel="stylesheet" href="stylesheets/app.css">
	<link rel="stylesheet" href="stylesheets/style.css">

	<script src="javascripts/foundation/modernizr.foundation.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cardo' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'><?php if($_GET['lang'] == "en") { ?>
<title>Company vs. European Union - Law Firm - Rome</title></head>
<body><?php } else { ?>
<title>Azienda vs. Unione Europea - Studio Legale - Lerro&amp;Partners - Roma</title></head>
<body><?php } ?><nav class="top-bar fixed">
  <ul>
    <li class="name"><h1><?php if($_GET['lang'] == "en") { ?><a href="<?php echo $basedir;?>?lang=en"><?php } else { ?><a href="<?php echo $basedir;?>"><?php } ?><img src="images/logo.png" id="logo2" /></a></h1></li>
    <li class="toggle-topbar"><a href="#"></a></li>
  </ul>
  <section>
    <ul class="right" id="main-menu">
      <?php if($_GET['lang'] == "en") { ?>
      <li><a href="<?php echo $basedir;?>?lang=en">HOME</a></li>
      <li><a href="profilo.php?lang=en">PROFILE</a></li>
      <li><a href="attivita.php?lang=en">ACTIVITIES</a></li>
      <li><a href="esperienza.php?lang=en">STORIES</a></li>
      <li><a href="costi.php?lang=en">COSTS</a></li>
      <li><a href="http://avvocati.net">BLOG</a></li>
      <li><a href="contatti.php?lang=en">CONTACTS</a></li>
      <li><a href="<?php echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);?>"><img src="http://www.difesa.it/_layouts/MdDEvoluzione-Layouts/images/flag-italiano.png" /></a></li>
      <?php } else { ?>
      <li><a href="<?php echo $basedir;?>">HOME</a></li>
      <li><a href="profilo.php">PROFILO</a></li>
      <li><a href="attivita.php">ATTIVIT&Agrave;</a></li>
      <li><a href="esperienza.php">STORIE</a></li>
      <li><a href="costi.php">COSTI</a></li>
      <li><a href="http://avvocati.net">BLOG</a></li>
      <li><a href="contatti.php">CONTATTI</a></li>
      <li><a href="<?php echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);?>?lang=en"><img src="http://www.memoriaexpo.it/images/flag-en.png" /></a></li>
      <?php } ?>
    </ul>
  </section>
</nav>
<div id="maximage"><img src="images/bg/lp-bg.jpg"/></div><br/><br/><br/>
<div class="row">
  <div class="eleven columns centered">
    <div class="twelve columns panel box-title-fluid"><?php if($_GET['lang'] == "en") { ?>
      <h3>CASE HISTORIES</h3><?php } else { ?>
      <h3>STORIE</h3><?php } ?>
    </div>
  </div>
</div>
<div id="content" class="row">
  <div class="eleven columns centered">
    <div class="twelve columns panel box-fluid"><?php if($_GET['lang'] == "en") { ?>
  <div class="four columns">
    <ul class="side-nav">
      <li> <a href="esperienza-venture-consulting.php?lang=en">MANAGEMENT CONSULTING GROUP</a></li>
      <li> <a href="esperienza-proras-vs-ce.php?lang=en">COMPANY VS. EUROPEAN UNION</a></li>
      <li> <a href="esperienza-ciappetta.php?lang=en">INMATE VS. THE MINISTRY OF JUSTICE</a></li>
      <li> <a href="esperienza-perry-ellis.php?lang=en">SPORTS COMPANY</a></li>
      <li> <a href="esperienza-ok-salute.php?lang=en">COMPANY WEB</a></li>
      <li> <a href="esperienza-agusta-spa-responsabilita-amministratori.php?lang=en">DIRECTORS' RESPONSIBILITY</a></li>
      <li> <a href="esperienza-biopolis.php?lang=en">BIOTECH START UP</a></li>
      <li> <a href="esperienza-ministero-ambiente.php?lang=en">MINISTRY OF THE ENVIRONMENT</a></li>
    </ul>
  </div>
<?php } else { ?>
  <div class="four columns">
    <ul class="side-nav">
      <li> <a href="esperienza-venture-consulting.php">GRUPPO DI MANAGEMENT CONSULTING</a></li>
      <li> <a href="esperienza-proras-vs-ce.php">AZIENDA VS. UNIONE EUROPEA</a></li>
      <li> <a href="esperienza-ciappetta.php">DETENUTO VS. MIN. GIUSTIZIA</a></li>
      <li> <a href="esperienza-perry-ellis.php">AZIENDA SPORTIVA</a></li>
      <li> <a href="esperienza-ok-salute.php">AZIENDA WEB</a></li>
      <li> <a href="esperienza-agusta-spa-responsabilita-amministratori.php">RESPONSABILITÀ AMMINISTRATORI</a></li>
      <li> <a href="esperienza-biopolis.php">START UP BIOTECH</a></li>
      <li> <a href="esperienza-ministero-ambiente.php">MINISTERO DELL’AMBIENTE</a></li>
    </ul>
  </div>
<?php } ?>
      <div class="eight columns"><?php if($_GET['lang'] == "en") { ?>
        <h3>Company vs. European Union<small>&nbsp;</small></h3>
        <p>P. is a service and engineering company which in recent years has specialized in procurements in the area of European cooperation (European Union). The European Union is a difficult environment which is greatly complicated by political pressures from governments and by the fundamental importance attributed to the role of contractors outside the Community institutions.</p>
        <p>Following a dispute originated by a delivery, the client had been added to an unofficial blacklist and excluded from further bids and awards. This exclusion had caused significant damage, since the company was focused on engineering services in the context of EU tender procedures (particularly in the nuclear field), and thereby in procurements in the EU PHARE and TACIS.</p>
        <p>In view of the complete refusal of the European Commission to engage in any possible negotiation, we brought a civil action against the European Commission itself before the Court of First Instance of the European Community in Luxembourg. Pending the outcome we, on behalf of our clients, obtained a rather significant compensation. </p><?php } else { ?>
        <h3>Azienda vs. Unione Europea<small>&nbsp;</small></h3>
        <p>P. è una società di servizi e di ingegneria che negli ultimi anni si è specializzata in appalti nel settore della cooperazione europea. Si tratta di un ambiente difficile, notevolmente complicato sia dalle pressioni politiche dei Governi che da ruoli di fondamentale importanza attribuiti a contractor esterni alle istituzioni comunitarie.</p>
        <p>In seguito ad un contenzioso originato da una fornitura, il Cliente è stato inserito in una black list non ufficiale ed escluso da ulteriori gare ed aggiudicazioni. Tale esclusione ha provocato significativi danni, atteso che l’azienda era focalizzata su servizi di ingegneria nell’ambito di procedure di gara comunitarie  (in particolare nel settore nucleare),  e quindi su appalti dell’U.E. in ambito TACIS e PHARE.</p>
        <p>Vista la totale chiusura della Commissione Europea nei confronti di ogni possibile negoziazione, abbiamo promosso un’azione civile innanzi al Tribunale di primo grado delle Comunità Europee, in Lussemburgo, contro la stessa Commissione Europea. Nelle more del giudizio abbiamo ottenuto un risarcimento, peraltro piuttosto rilevante.</p><?php } ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="eleven columns centered"><div style="height:200px;" class="panel contact-box seven columns">
  <div id="testimonial" class="testimonial">
    <div>
      <blockquote><i id="testimonial-preview"></i><a href="#" data-reveal-id="testimonial-modal" style="font-size:0.618em;line-height:0;font-weight:bold;margin-left:2px;"><?php if($_GET['lang'] == "en") { ?>READ ALL<?php } else { ?>LEGGI TUTTO<?php } ?></a>
        <cite id="testimonial-preview-cite"></cite>
      </blockquote>
    </div>
  </div>
</div><?php if($_GET['lang'] == "en") { ?>
  <div style="width:39.5%; height:200px;" class="panel contact-box columns">
    <div id="blog-text" style="margin-top:-24px;" class="left">
      <h5> <a href="http://avvocati.net"><b style="font-size:95%;">Avvocati.net</b></a></h5>
      <p>News<br>Opinions<br>Events<br><br><small><b>BLOG BY</b><br><b style="position:relative;top:-10px;">Alessandro M. Lerro</b></small></p>
    </div><img id="blog-picture" src="images/avvocato-lerro.jpg" style="margin-top:0px;" class="th right"/>
  </div>
<?php } else { ?>
  <div style="width:39.5%; height:200px;" class="panel contact-box columns">
    <div id="blog-text" style="margin-top:-24px;" class="left">
      <h5> <a href="http://avvocati.net"><b style="font-size:95%;">Avvocati.net</b></a></h5>
      <p>Notizie<br>Opinioni<br>Eventi<br><br><small><b>BLOG A CURA DI</b><br><b style="position:relative;top:-10px;">Alessandro M. Lerro</b></small></p>
    </div><img id="blog-picture" src="images/avvocato-lerro.jpg" style="margin-top:0px;" class="th right"/>
  </div>
<?php } ?>
  </div>
</div><br/><br><br><br>
<footer class="row" id="footer">

      <div class="seven columns">
        <img src="https://twitter.com/images/resources/twitter-bird-light-bgs.png" style="position:absolute;bottom:19px;left:-14px;height:70px"/>
        <div id="twitter">
        </div>
      </div>

      <div class="five columns">
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
  <p>Lerro&amp;Partners (di seguito, “L&amp;P”) è un’associazione professionale con sede legale in Roma, via G. Severano 5, e sede operativa in Roma, via Famiano Nardini 1/C, iscritta presso il Consiglio dell’Ordine degli Avvocati di Roma P. IVA 08009971006 soggetta al Codice Deontologico Forense e alla Legge Professionale vigente. I professionisti associati, titolari dello Studio, sono l'avv. ALessandro Maria Lerro e l'avv. Lia Ruozi Berretta.</p>
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
  <p class="lead">Web Design &amp; Web Engineering &amp; Photography</p>
  <p><a href="http://eikona.eu"><img src="images/eikona.png" /></a></p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<?php if($_GET['lang'] == "en") { ?>
<div id="testimonial-modal" class="testimonial reveal-modal large">
  <h3> What They Say About Us</h3>
  <blockquote>
    <p><i>I met Alessandro in 1995; I needed the help of a lawyer for a delicate and important legal action to be carried out in Rome.</i></p>
    <p><i>Although he was very young, he immediately gave me a feeling of security, determination and a clear vision of how to address the situation in perfect balance between "fact" and "right". These characteristics, when present (not very often indeed) are usually the result of a long field experience.</i></p>
    <p><i>The professional collaboration has continued over the years and has turned into a splendid friendship that remains strong to this day, since that first meeting eighteen years ago!</i></p>
    <p><i>What a blessing, in a world and a society in which this "story" is a rare gem to keep and protect like a treasure."</i></p>
    <cite>Gabriele Brustenghi<br/>Founder of the Fitness Festival</cite>
  </blockquote>

  <blockquote>
    <p><i>For many years I called on Mr. Lerro and over time I have observed that the requested interventions have regularly led to very positive results.</i></p>
    <p><i>There are at least three characteristics that make him valuable: a clear, thorough legal expertise; absolute responsiveness which makes his action immediately reliable; and finally, a fundamental characteristic, the ability to avoid the unfortunately too frequent "if you follow path A, this happens; if you follow the path B that happens: now, you choose...”</i></p>
    <p><i>Conversely, Mr. Lerro has the courage and mental strength to suggest the legal path that appears the best and make a commitment alongside the client.</i></p>
    <cite>Ettore Pietrabissa<br/>General Manager Arcus spa</cite>
  </blockquote>

  <blockquote>
    <p><i>Napoleon said: 'Space we can recover, lost time never'.</i></p>
    <p><i>This quote clearly emphasizes the importance of one of the best features of L & P Law Firm: namely rapid strategy formulation and execution of tasks. This feature constitutes a perfect combination with the competence and effectiveness of the professionals working there.</i></p>
    <cite>Domenico Bizzoco<br/>CEO Glovax Asia-Pacific ltd</cite>
  </blockquote>

  <blockquote>
    <p><i>Mr. Lerro has earned over time my esteem and confidence, proving on many occasions to never manage cases with an approach limited to his institutional role, but always providing me with clear and precise detail, all the possible implications for each scenario for a solution presented to me. The considerable experience, expertise in also dealing with extremely technical and complex matters, together with his personal aptitude and a thorough approach as well as personalized service, have enabled me to assess the problem from unexpected points of view while always feeling protected and in good hands. The solutions presented and the results have always demonstrated his care and attention to a 360 ° assessment of the problem, without neglecting the economic and fiscal aspects. The perception and the demonstration that "my" problem was "his" problem and that my case and my company were not only "another case to handle", led me to confer my business' cases with confidence.</i></p>
    <cite>Vincenzo Santoni<br/>Founder Proras Ltd.</cite>
  </blockquote>

  <a class="close-reveal-modal">&#215;</a>
</div>
<?php } else { ?>
<div id="testimonial-modal" class="testimonial reveal-modal large">
  <h3> Dicono di Noi</h3>
  <blockquote>
    <p><i>Ho conosciuto Alessandro nel 1995 : mi serviva il supporto di un legale per una delicatissima ed importante azione legale da svolgere su Roma.</i></p>
    <p><i>Nonostante fosse giovanissimo, mi dette, immediata, la sensazione di sicurezza, determinazione e chiara visione  di come affrontare la situazione in un perfetto equilibrio fra “fatto” e “diritto”: tutte caratteristiche che, normalmente, quando ci sono (non tanto spesso) sono il frutto di una lunga esperienza sul campo.</i></p>
    <p><i>La collaborazione professionale è continuata negli anni e si è trasformata in una splendida amicizia che rimane, solida, a tutt’oggi quando sono passati,  da quel primo incontro, diciotto anni!</i></p>
    <p><i>Che ricchezza, in un mondo ed in una società in cui questa “storia” è una perla rara da conservare e difendere come un tesoro."</i></p>
    <cite>Gabriele Brustenghi<br/>Fondatore del Festival del Fitness</cite>
  </blockquote>

  <blockquote>
    <p><i>Da molti anni ricorro all’Avvocato Lerro e nel tempo ho osservato che gli interventi richiesti hanno regolarmente portato a risultati molto positivi.</i></p>
    <p><i>Sono almeno tre le caratteristiche che lo rendono prezioso: una evidente, profonda competenza legale; assoluta prontezza di intervento, che conferisce grande e immediata affidabilità alla sua azione; infine, caratteristica fondamentale, l’attitudine a evitare le purtroppo frequenti posizioni tipo “se si segue la strada A succede questo e se si segue la strada B succede quest’altro: veda Lei”, avendo invece Lerro  la forza mentale e il coraggio professionale di suggerire la via legale che sembra la migliore e di “compromettersi” accanto al cliente.</i></p>
    <cite>Ettore Pietrabissa<br/>Direttore Generale Arcus s.p.a.</cite>
  </blockquote>

  <blockquote>
    <p><i>Napoleone diceva: ‘Lo spazio puó essere recuperato, il tempo mai’.</i></p>
    <p><i>Questa citazione sottolinea bene l'importanza di una delle migliori caratteristiche dello Studio Legale L&P, cioé la rapiditá nella formulazione della strategia e nell’esecuzione degli incarichi. Questa dote forma un connubio perfetto con la competenza e l’efficacia dei professionisti vi lavorano.</i></p>
    <cite>Domenico Bizzoco<br/>CEO Glovax Asia-Pacific ltd</cite>
  </blockquote>

  <blockquote>
    <p><i>L’avv. Lerro si è guadagnato nel tempo la mia grande stima e fiducia, dimostrando in molteplici occasioni di non gestire mai il caso prospettato con un approccio limitato al proprio ruolo istituzionale, ma fornendomi sempre un chiaro e preciso dettaglio di tutte le possibili implicazioni per ogni scenario di soluzione presentatomi. La notevole esperienza, la competenza nell’affrontare anche materie estremamente tecniche e complesse, unitamente alla sua personale attitudine ed un approccio approfondito e personalizzato, mi hanno permesso di valutare il problema da inaspettate prospettive e di sentirmi sempre protetto ed in buone mani. Le soluzioni presentate ed i risultati ottenuti, hanno sempre dimostrato la sua cura ed attenzione ad una valutazione a 360° del problema, senza mai trascurare gli aspetti economici e fiscali.  La percezione e la dimostrazione che il “mio” problema era un “suo” problema e che il mio caso e la mia Azienda non erano solo “un caso da trattare”, mi hanno portato ad affidargli i miei casi aziendali con fiducia.</i></p>
    <cite>Vincenzo Santoni<br/>Fondatore Proras s.r.l.</cite>
  </blockquote>

  <a class="close-reveal-modal">&#215;</a>
</div>
<?php } ?><!-- Included JS Files (Uncompressed) -->
	<script src="javascripts/foundation/jquery.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.forms.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.topbar.js"></script>
	
	<script src="javascripts/foundation/jquery.event.move.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.magellan.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.clearing.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.tooltips.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.reveal.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.tabs.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.buttons.js"></script>
	
	<script src="javascripts/foundation/jquery.placeholder.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.navigation.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.accordion.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.alerts.js"></script>
	
	<script src="javascripts/foundation/jquery.cookie.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.orbit.js"></script>
	
	<script src="javascripts/foundation/jquery.event.swipe.js"></script>
	
	<script src="javascripts/foundation/jquery.foundation.joyride.js"></script>
	

  <!-- Application Javascript, safe to override -->
  <script src="javascripts/jquery.cycle.all.js"></script>
  <script src="javascripts/jquery.grid-a-licious.min.js"></script>
  <script src="javascripts/jquery.maximage.js"></script>
  <script src="javascripts/foundation/app.js"></script>

  <?php
    require_once("php/twitteroauth.php");

    $consumerkey = "SPKLJEHWzAMG4MGzOMEn5Q";
    $consumersecret = "VJ1XzXgzrlJFaWAFrnh66E0CYcWuwHokwgkZPzKOM";
    $accesstoken = "12844042-ftvYZlNjZckCv25JH8doiSDlYp7JWIWK9quRSIMN2";
    $accesstokensecret = "QtlwlqFIdFnbOQ4kP4yRixTueQp4tvScG3OXEkePs8Yzb";

    function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
      $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
      return $connection;
    }

    $connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

    $tweets = $connection->get("https://api.twitter.com/1.1/lists/statuses.json?slug=cf-italy-list&owner_screen_name=Crowdfund_ITALY&count=5");

    $tweets = json_encode($tweets);
  ?>

  <script src="javascripts/script.js"></script> 

  <script type="text/javascript">
    var t = <?php echo $tweets; ?>;
    twitterCB(t);
  </script>

  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38746985-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

	</script>

</body>
</html>