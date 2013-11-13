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
<title>Crowdfunding - Law Firm - Rome</title></head>
<body><?php } else { ?>
<title>Crowdfunding - Studio Legale - Lerro&amp;Partners - Roma</title></head>
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
<div id="maximage"><img src="images/bg/03b.jpg"/></div><br/><br/><br/>
<div class="row">
  <div class="eleven columns centered">
    <div class="twelve columns panel box-title-fluid"><?php if($_GET['lang'] == "en") { ?>
      <h3>PROJECTS</h3><?php } else { ?>
      <h3>PROGETTI</h3><?php } ?>
    </div>
  </div>
</div>
<div id="content" class="row">
  <div class="eleven columns centered">
    <div class="twelve columns panel box-fluid"><?php if($_GET['lang'] == "en") { ?>
  <div class="four columns">
    <ul class="side-nav">
      <li><a href="slogan-idea-impresa.php?lang=en">TURNING IDEAS INTO BUSINESS</a></li>
      <li><a href="slogan-riposizionare-azienda.php?lang=en">REPOSITIONING A COMPANY</a></li>
      <li><a href="slogan-difesa-patrimonio.php?lang=en">DEFENDING AN HERITAGE</a></li>
      <li><a href="slogan-crowdfunding.php?lang=en">CROWDFUNDING</a></li>
      <li><a href="slogan-assistere-disabile.php?lang=en">DEALING WITH DISABILITY</a></li>
      <li><a href="slogan-gestisci-vita.php?lang=en">MANAGING YOUR LIFE</a></li>
      <li> <a href="slogan-lobbying.php?lang=en">LEGISLATIVE MONITORING AND LOBBYING</a></li>
    </ul>
  </div>
<?php } else { ?>
  <div class="four columns">
    <ul class="side-nav">
      <li><a href="slogan-idea-impresa.php">DA UN’IDEA A UN’IMPRESA</a></li>
      <li><a href="slogan-riposizionare-azienda.php">RIPOSIZIONARE UN’AZIENDA</a></li>
      <li><a href="slogan-difesa-patrimonio.php">LA DIFESA DI UN PATRIMONIO</a></li>
      <li><a href="slogan-crowdfunding.php">CROWDFUNDING</a></li>
      <li><a href="slogan-assistere-disabile.php">ASSISTERE UN DISABILE</a></li>
      <li><a href="slogan-gestisci-vita.php">GESTISCI LA TUA VITA</a></li>
      <li> <a href="slogan-lobbying.php">MONITORAGGIO LEGISLATIVO</a></li>
    </ul>
  </div>
<?php } ?>
      <div class="eight columns"><?php if($_GET['lang'] == "en") { ?>
        <h3>Crowdfunding<small>&nbsp;</small></h3>
        <p>Il crowdfunding consiste nella raccolta di piccole somme di denaro da molti sottoscrittori tramite internet ed i social network. La potenzialità della rete è enorme, ed infatti nel 2012 il crowdfunding ha raccolto circa 2,7 miliardi di dollari su oltre un milione di progetti nel mondo (il 95% in USA ed Europa); per il 2013 si proiettano 5,1 miliardi di dollari di raccolta.</p>
        <p>Si tratta di un fenomeno sviluppato in quattro modelli:</p>
        <div style="padding-left:4em;">
          <ul>
            <li>donation-based: avente ad oggetto erogazioni liberali.</li>
            <li>reward-based: prevede uno scambio di valore modesto rispetto al contributo erogato.</li>
            <li>lending-based: sostanzialmente si tratta del microcredito.</li>
            <li>equity-based: finalizzato alla raccolta di capitale di rischio.</li>
          </ul>
        </div>
        <p>Nel corso del 2012 l’amministrazione Obama ha emanato il JOBS Act, per regolamentare l’equity crowdfunding con l’obiettivo di facilitare la sollecitazione del pubblico risparmio e la raccolta di capitale di rischio tramite internet, sostenere l’economia e favorire l’occupazione. Si tratta della prima regolamentazione organica di detto fenomeno.</p>
        <p>Il Decreto Crescita 2.0 nel dicembre 2012 ha fatto altrettanto, disciplinando nel diritto italiano l’equity crowdfunding per le start up innovative e dando loro una disciplina anche più favorevole rispetto a quella americana.  In questo settore, quindi, l’Italia si pone all’avanguardia e in condizioni di attrarre investimenti esteri, avendo notevolmente semplificato le procedure di capitalizzazione, ridotto molta burocrazia e soprattutto i costi dell’operazione.</p>
        <p>In Italia, dunque, è possibile costituire una apposita piattaforma web registrata presso la CONSOB, presentare progetti imprenditoriali aventi ad oggetto start up innovative e raccogliere in rete capitali. Inoltre le start up innovative possono godere di ulteriori preziosi vantaggi. Bisognerà prestare attenzione alla trasparenza dell’investimento, nonché alla regolamentazione dei rapporti tra soci fondatori, investitori istituzionali e microinvestitori.</p><?php } else { ?>
        <h3>Crowdfunding<small>&nbsp;</small></h3>
        <p>Il crowdfunding consiste nella raccolta di piccole somme di denaro da molti sottoscrittori tramite internet ed i social network. La potenzialità della rete è enorme, ed infatti nel 2012 il crowdfunding ha raccolto circa 2,7 miliardi di dollari su oltre un milione di progetti nel mondo (il 95% in USA ed Europa); per il 2013 si proiettano 5,1 miliardi di dollari di raccolta.</p>
        <p>Si tratta di un fenomeno sviluppato in quattro modelli:</p>
        <div style="padding-left:4em;">
          <ul>
            <li>donation-based: avente ad oggetto erogazioni liberali.</li>
            <li>reward-based: prevede uno scambio di valore modesto rispetto al contributo erogato.</li>
            <li>lending-based: sostanzialmente si tratta del microcredito.</li>
            <li>equity-based: finalizzato alla raccolta di capitale di rischio.</li>
          </ul>
        </div>
        <p>Nel corso del 2012 l’amministrazione Obama ha emanato il JOBS Act, per regolamentare l’equity crowdfunding con l’obiettivo di facilitare la sollecitazione del pubblico risparmio e la raccolta di capitale di rischio tramite internet, sostenere l’economia e favorire l’occupazione. Si tratta della prima regolamentazione organica di detto fenomeno.</p>
        <p>Il Decreto Crescita 2.0 nel dicembre 2012 ha fatto altrettanto, disciplinando nel diritto italiano l’equity crowdfunding per le start up innovative e dando loro una disciplina anche più favorevole rispetto a quella americana.  In questo settore, quindi, l’Italia si pone all’avanguardia e in condizioni di attrarre investimenti esteri, avendo notevolmente semplificato le procedure di capitalizzazione, ridotto molta burocrazia e soprattutto i costi dell’operazione.</p>
        <p>In Italia, dunque, è possibile costituire una apposita piattaforma web registrata presso la CONSOB, presentare progetti imprenditoriali aventi ad oggetto start up innovative e raccogliere in rete capitali. Inoltre le start up innovative possono godere di ulteriori preziosi vantaggi. Bisognerà prestare attenzione alla trasparenza dell’investimento, nonché alla regolamentazione dei rapporti tra soci fondatori, investitori istituzionali e microinvestitori.</p><?php } ?>
      </div>
    </div>
  </div>
</div><br><br><br>
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