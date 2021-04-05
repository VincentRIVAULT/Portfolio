-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 avr. 2021 à 08:56
-- Version du serveur :  8.0.22
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vr_portfolio_2021`
--

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `titre`, `contenu`) VALUES
(1, '<h2 id=\"accueilH2\"><i aria-hidden=\"true\" class=\"fas fa-home\"></i> accueil</h2>\r\n', '<article id=\"messageAccueil\">\r\n						<p><span class=\"spanBold\">Bienvenue sur mon Portfolio :-)</span></p>\r\n					</article>\r\n					<article id=\"introduction\">\r\n						<h3><i class=\"fas fa-eye\"></i> Ma vision du développement WEB</h3>\r\n						<p>Je suis soucieux d\'appliquer de bonnes pratiques en matière d\'<a href=\"https://ecoconceptionweb.com/\" target=\"_blank\" title=\"éco-conception web\">éco-conception web</a> dans mes développements, je tente de réduire autant que possible l\'impact environnemental de mes applications en essayant de suivre les principes et recommandations de ce qu\'on appelle l\'<a class=\"aGreenBold\" href=\"https://fr.wikipedia.org/wiki/Informatique_durable\" target=\"_blank\" title=\"Informatique durable (Wikipédia)\">informatique durable</a> (appellation officielle en français : <span class=\"spanBold\">éco-TIC7</span>). Vous trouverez des exemples concrets d\'applications dans tous les domaines du numérique sur le site <a href=\"https://ecoinfo.cnrs.fr/\" target=\"_blank\" title=\"ecoinfo.cnrs.fr\">EcoInfo</a> du CNRS.</p>\r\n						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n					\r\n					</article>\r\n					<article id=\"dernierProjet\">\r\n						<h3><i class=\"fas fa-folder-open\"></i> Mon dernier projet !</h3>\r\n						<p><a href=\"index.php?controller=Realisation&action=lastView\" title=\"Voir le dernier projet réalisé\">Voir mon dernier projet réalisé</a></p>\r\n					</article>'),
(2, '<h2 id=\"profilH2\"><i class=\"fas fa-address-card\"></i> mon profil professionnel</h2>\r\n', '<article id=\"identity\">\r\n<h3>Qui suis-je ?</h3>\r\n\r\n<figure><img alt=\"photo VR\" src=\"Bibliotheques/img/photo/photo_VR.jpg\" /></figure>\r\n\r\n<p>Vincent RIVAULT, 41 ans, originaire d&#39;Angers.</p>\r\n\r\n<p>Apr&egrave;s 10 ann&eacute;es pass&eacute;es dans le domaine de l&#39;<a class=\"aAmenagement\" href=\"https://fr.wikipedia.org/wiki/Am%C3%A9nagement_du_territoire\" target=\"_blank\" title=\"Aménagement du territoire (Wikipédia)\">am&eacute;nagement du territoire</a> et de l&#39;<a class=\"aUrbanisme\" href=\"https://fr.wikipedia.org/wiki/Urbanisme\" target=\"_blank\" title=\"Urbanisme (Wikipédia)\">urbanisme</a>, j&#39;ai &eacute;t&eacute; sensibilis&eacute; &agrave; la notion de <a class=\"aGreenBold\" href=\"https://fr.wikipedia.org/wiki/D%C3%A9veloppement_durable\" target=\"_blank\" title=\"Développement durable (Wikipédia)\">d&eacute;veloppement durable</a>.</p>\r\n\r\n<p>Je suis actuellement en reconversion professionnelle dans le domaine de la <a class=\"aBlueBold\" href=\"https://fr.wikipedia.org/wiki/Programmation_informatique\" target=\"_blank\" title=\"Programmation informatique (Wikipédia)\">programmation informatique</a> et du <a class=\"aBlueBold\" href=\"https://fr.wikipedia.org/wiki/Programmation_web\" target=\"_blank\" title=\"Programmation web (Wikipédia)\">d&eacute;veloppement WEB</a>.</p>\r\n</article>\r\n\r\n<article id=\"qualities\">\r\n<h3>Quelles sont mes qualit&eacute;s humaines ?</h3>\r\n\r\n<ul>\r\n	<li>Rigoureux</li>\r\n	<li>Sens du travail en &eacute;quipe</li>\r\n	<li>Adaptable</li>\r\n	<li>Pers&eacute;v&eacute;rant</li>\r\n	<li>Curieux</li>\r\n	<li>Sociable</li>\r\n</ul>\r\n</article>\r\n\r\n<article id=\"interests\">\r\n<h3>Quels sont mes centres d&#39;int&eacute;r&ecirc;t ?</h3>\r\n\r\n<ul>\r\n	<li>l&#39;informatique et l&#39;actualit&eacute; digitale (voir entre autres les sites suivants : <a href=\"https://www.lesnumeriques.com/\" target=\"_blank\" title=\"Les Numériques\">&quot;Les Num&eacute;riques&quot;</a>, <a href=\"https://www.nextinpact.com/\" target=\"_blank\" title=\"Next INpact\">&quot;Next INpact&quot;</a>, <a href=\"https://afup.org/home\" target=\"_blank\" title=\"AFUP\">&quot;Association Fran&ccedil;aise des Utilisateurs de PHP&quot;</a>, <a href=\"https://www.developpez.com/\" target=\"_blank\" title=\"Developpez.com\">&quot;Developpez.com&quot;</a>)</li>\r\n	<li>la lecture, le cin&eacute;ma et les s&eacute;ries TV</li>\r\n	<li>les myst&egrave;res de l&#39;univers, la science fiction, le fantastique, la fantasy, les enqu&ecirc;tes polici&egrave;res</li>\r\n	<li>la randonn&eacute;e</li>\r\n	<li>la danse de couple</li>\r\n	<li>la musique salsa et &eacute;lectro</li>\r\n	<li>l&#39;organisation et l&#39;animation de soir&eacute;es</li>\r\n</ul>\r\n</article>\r\n\r\n<article id=\"career\">\r\n<h3>D&#39;o&ugrave; viens-je ?</h3>\r\n\r\n<p>Pour consulter mon Curriculum Vitae, <a href=\"Bibliotheques/img/cv/RIVAULT_Vincent_CV_Dev_info.pdf\" title=\"cliquez ici pour télécharger le CV\">cliquez ici</a></p>\r\n\r\n<p>Pour voir le d&eacute;tail de mes formations et de mon parcours professionnel : <a class=\"aLinkedIn\" href=\"https://www.linkedin.com/in/vincent-rivault-389105110/\" target=\"_blank\" title=\"profil LinkedIn de Vincent RIVAULT\">visitez mon profil LinkedIn</a></p>\r\n</article>\r\n\r\n<article id=\"shareCode\">\r\n<h3>Quels sont mes &eacute;changes avec le monde des d&eacute;veloppeurs ?</h3>\r\n\r\n<p>Pour voir une s&eacute;lection de mes r&eacute;alisations et partages de code : <a class=\"aGitHub\" href=\"https://github.com/VincentRIVAULT\" target=\"_blank\" title=\"espace GitHub de Vincent RIVAULT\">visitez mon espace GitHub</a></p>\r\n</article>\r\n'),
(3, '<h2 id=\"competencesH2\"><i class=\"fas fa-cogs\"></i> mes comp&eacute;tences de d&eacute;veloppeur WEB</h2>\r\n', '<article id=\"languages\">\r\n						<h3><i class=\"fas fa-code\"></i> Maîtrise des langages utilisés :</h3>\r\n							<ul>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"HT\"><a href=\"https://fr.wikipedia.org/wiki/Hypertext_Markup_Language\" target=\"_blank\" title=\"HTML (Wikipédia)\"><i class=\"fab fa-html5\"></i> HTML 5 :</a></label>\r\n									<progress id=\"HT\" max=\"100\" value=\"80\" title=\"HTML : 80%\"> 80% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"CS\"><a href=\"https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade\" target=\"_blank\" title=\"CSS (Wikipédia)\"><i class=\"fab fa-css3-alt\"></i> CSS 3 :</a></label>\r\n									<progress id=\"CS\" max=\"100\" value=\"60\" title=\"CSS : 60%\"> 60% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"JS\"><a href=\"https://fr.wikipedia.org/wiki/JavaScript\" target=\"_blank\" title=\"JavaScript (Wikipédia)\"><i class=\"fab fa-js\"></i> JavaScript :</a></label>\r\n									<progress id=\"JS\" max=\"100\" value=\"40\" title=\"JavaScript : 40%\"> 40% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"PH\"><a href=\"https://fr.wikipedia.org/wiki/PHP\" target=\"_blank\" title=\"PHP (Wikipédia)\"><i class=\"fab fa-php\"></i> PHP 7 :</a></label>\r\n									<progress id=\"PH\" max=\"100\" value=\"40\" title=\"PHP : 40%\"> 40% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"SQ\"><a href=\"https://fr.wikipedia.org/wiki/MySQL\" target=\"_blank\" title=\"MySQL (Wikipédia)\"><i class=\"fas fa-database\"></i> MySQL :</a></label>\r\n									<progress id=\"SQ\" max=\"100\" value=\"30\" title=\"MySQL : 30%\"> 30% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"ANG\"><a href=\"https://fr.wikipedia.org/wiki/Angular\" target=\"_blank\" title=\"Angular (Wikipédia)\"><i class=\"fab fa-angular\"></i> Angular :</a></label>\r\n									<progress id=\"ANG\" max=\"100\" value=\"10\" title=\"Angular : 10%\"> 10% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"WP\"><a href=\"https://fr.wikipedia.org/wiki/WordPress\" target=\"_blank\" title=\"WordPress (Wikipédia)\"><i class=\"fab fa-wordpress\"></i> WordPress :</a></label>\r\n									<progress id=\"WP\" max=\"100\" value=\"20\" title=\"WordPress : 20%\"> 20% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"JAVA\"><a href=\"https://fr.wikipedia.org/wiki/Java_(langage)\" target=\"_blank\" title=\"Java (Wikipédia)\"><i class=\"fab fa-java\"></i> JAVA :</a></label>\r\n									<progress id=\"JAVA\" max=\"100\" value=\"10\" title=\"JAVA : 10%\"> 10% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"C\"><a href=\"https://fr.wikipedia.org/wiki/C_(langage)\" target=\"_blank\" title=\"C (Wikipédia)\"><i class=\"fas fa-copyright\"></i> C :</a></label>\r\n									<progress id=\"C\" max=\"100\" value=\"10\" title=\"C : 10%\"> 10% </progress>\r\n								</li>\r\n								<li class=\"flexBetweenWrap\">\r\n									<label for=\"C2\"><a href=\"https://fr.wikipedia.org/wiki/C%2B%2B\" target=\"_blank\" title=\"C++ (Wikipédia)\"><i class=\"fas fa-closed-captioning\"></i> C++ :</a></label>\r\n									<progress id=\"C2\" max=\"100\" value=\"10\" title=\"C++ : 10%\"> 10% </progress>\r\n								</li>\r\n							</ul>\r\n					</article>\r\n					<article id=\"autresNotions\">\r\n						<h3>Autres notions dans le domaine du WEB :</h3>\r\n							<ul>\r\n								<li> <a href=\"https://fr.wikipedia.org/wiki/Bootstrap_(framework)\" target=\"_blank\" title=\"Bootstrap (Wikipédia)\"><i class=\"fab fa-bootstrap\"></i> Bootstrap (Framework)</a></li>\r\n								<li> <a href=\"https://fr.wikipedia.org/wiki/Symfony\" target=\"_blank\" title=\"Symfony (Wikipédia)\"><i class=\"fab fa-symfony\"></i> Symfony (Framework)</a></li>\r\n								<li> <a href=\"https://fr.wikipedia.org/wiki/Docker_(logiciel)\" target=\"_blank\" title=\"Docker (Wikipédia)\"><i class=\"fab fa-docker\"></i> Docker (Conteneurisation)</a></li>\r\n								<li> <a href=\"https://fr.wikipedia.org/wiki/Git\" target=\"_blank\" title=\"GIT (Wikipédia)\"><i class=\"fab fa-git-alt\"></i> GIT (logiciel de versioning)</a></li>\r\n								<li> <a href=\"https://fr.wikipedia.org/wiki/GitHub\" target=\"_blank\" title=\"GitHub (Wikipédia)\"><i class=\"fab fa-github\"></i> GitHub</a></li>\r\n							</ul>\r\n					</article>\r\n					<article id=\"compTrans\">\r\n						<h3>Autres compétences transférables :</h3>\r\n							<ul>\r\n								<li> <a href=\"https://fr.wikipedia.org/wiki/Gestion_de_projet\" target=\"_blank\" title=\"Gestion de projet (Wikipédia)\">Gestion de projet</a></li>\r\n								<li>Animation de réunions</li>\r\n								<li>Préparation de budgets prévisionnels</li>\r\n								<li>Elaboration de cahiers des charges</li>\r\n								<li>Analyse des offres</li>\r\n								<li>Recherches sur des sites et forums anglophones</li>\r\n							</ul>\r\n					</article>'),
(4, '<h3>Mes coordonn&eacute;es</h3>\r\n', '<p><strong>Vincent RIVAULT</strong></p>\r\n\r\n<p>D&eacute;veloppeur informatique</p>\r\n\r\n<p>1 square Georges Pompidou 49100 ANGERS</p>\r\n'),
(5, '<h2 id=\"mentionsLegalesH2\">mentions l&eacute;gales</h2>\r\n', '<article id=\"mentionsIntro\">\r\n        <p>Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément à l’<span class=\"spanItalicUnderline\">article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique</span>, les responsables du présent site internet <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a> sont :</p>\r\n    </article>\r\n    <article id=\"mentionsEdit\">\r\n        <h3>Editeur du Site :</h3>\r\n        <p>Nom : <span class=\"spanGreyBoldItalic\">RIVAULT</span></p>\r\n        <p>Prénom : <span class=\"spanGreyBoldItalic\">Vincent</span></p>\r\n        <p>Adresse : 1 square Georges Pompidou 49100 ANGERS</p>\r\n        <p>Email : <a href=\"#\" title=\"administrateur@vincentrivault.go.yj.fr\">administrateur@vincentrivault.go.yj.fr</a></p>\r\n        <p>Site Web : <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a></p>\r\n    </article>\r\n    <article id=\"mentionsHeb\">\r\n        <h3>Hébergement :</h3>\r\n        <p>Hébergeur : PlanetHoster</p>\r\n        <p>PLANETHOSTER inc., soit le prestataire des SERVICES, lequel est situé au 4416 Louis B. Mayer, Laval (Québec) H7P 0G1, Canada</p>\r\n        <p>Site Web :  <a href=\"https://www.planethoster.com/fr/\" target=\"_blank\" title=\"www.planethoster.com/fr/\">www.planethoster.com/fr/</a></p>\r\n    </article>\r\n    <article id=\"mentionsDev\">\r\n        <h3>Développement :</h3>\r\n        <p>Vincent RIVAULT</p>\r\n        <p>Adresse : 1 square Georges Pompidou 49100 ANGERS</p>\r\n        <p>Site Web : <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a></p>\r\n    </article>\r\n    <article id=\"mentionsCGU\">\r\n        <h3>Conditions d’utilisation :</h3>\r\n        <p>Ce site (<a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a>) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d\'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Edge, Safari, Opera, Firefox, Google Chrome, etc…</p>\r\n        <p>Les mentions légales ont été générées sur le site <a title=\"générateur de mentions légales pour site internet gratuit\" href=\"http://www.generateur-de-mentions-legales.com\" target=\"_blank\">Générateur de mentions légales</a>, offert par <a title=\"imprimerie paris, imprimeur paris\" href=\"http://welye.com\" target=\"_blank\" title=\"Welye\">Welye</a>.</p>\r\n        <p><span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> met en œuvre tous les moyens dont il dispose, pour assurer une information fiable et une mise à jour fiable de son site internet. Toutefois, des erreurs ou omissions peuvent survenir. L\'internaute devra donc s\'assurer de l\'exactitude des informations auprès de <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span>, et signaler toutes modifications du site qu\'il jugerait utile. <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> n\'est en aucun cas responsable de l\'utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>\r\n        <h4>Cookies:</h4>\r\n        <p>Le site <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a> peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d\'affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations. Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.</p>\r\n        <p><span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> se réserve la possibilité d\'implanter un \"cookie\" dans l\'ordinateur de tout Internaute visitant le site <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a> afin d\'enregistrer des informations relatives à la navigation de son ordinateur sur ce site, à savoir, et sans que cette liste soit limitative, toute information relative aux pages consultées et aux dates et heures de consultation.</p>\r\n        <p>Ces informations ont pour finalité :</p>\r\n        <p>- De faciliter l\'accès aux services et aux rubriques du site;</p>\r\n        <p>- De personnaliser les contenus publicitaires qui sont proposés par <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span>;</p>\r\n        <p>- Tout Internaute a la possibilité de s\'opposer à l\'enregistrement de ce \"cookie\" en configurant le navigateur de son ordinateur selon les modalités définies ci-dessous :</p>\r\n        <aside>\r\n            <ul>\r\n                <li>Pour <span class=\"spanBoldItalicUnderline\">Microsoft Explorer</span> : <a href=\"https://support.microsoft.com/fr-fr/help/17442/windows-internet-explorer-delete-manage-cookies\" target=\"_blank\">cliquez sur ce lien</a></li>\r\n                <ol start=\"1\">\r\n                    <li>Choisissez le menu « Outils » puis « Options Internet »</li>\r\n                    <li>Cliquez sur l\'onglet « Confidentialité »</li>\r\n                    <li>Sélectionnez le niveau souhaité à l\'aide du curseur</li>\r\n                </ol>\r\n            </ul>\r\n            <ul>\r\n                <li>Pour <span class=\"spanBoldItalicUnderline\">Microsoft Edge</span> :</li>\r\n                <ol start=\"1\">\r\n                    <li>Choisissez dans le menu « Paramètres et plus » > l\'option « Paramètres »</li>\r\n                    <li>Cliquez sur l\'onglet « Autorisations su site »</li>\r\n                    <li>Rubrique « Cookies et données de site »</li>\r\n                </ol>\r\n            </ul>\r\n            <ul>\r\n                <li>Pour <span class=\"spanBoldItalicUnderline\">Mozilla Firefox</span> : <a href=\"https://support.mozilla.org/fr/kb/cookies-informations-sites-enregistrent\" target=\"_blank\">cliquez sur ce lien</a></li>\r\n                <ol start=\"1\">\r\n                    <li>Choisissez dans le menu > « Options »</li>\r\n                    <li>Cliquez sur l\'option « Vie Privée et sécurité »</li>\r\n                    <li>Rubrique « Cookies et données de site »</li>\r\n                </ol>\r\n            </ul>\r\n            <ul>\r\n                <li>Pour <span class=\"spanBoldItalicUnderline\">Chrome</span> : <a href=\"https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DDesktop&hl=fr\" target=\"_blank\">cliquez sur ce lien</a></li>\r\n                <ol start=\"1\">\r\n                    <li>Choisissez dans le menu « Personnaliser et contrôler Google Chrome » > « Paramètres »</li>\r\n                    <li>Cliquez sur l\'option « Confidentialité et sécurité »</li>\r\n                    <li>Rubrique « Cookies et autres données de sites »</li>\r\n                </ol>\r\n            </ul>\r\n            <ul>\r\n                <li>Pour <span class=\"spanBoldItalicUnderline\">Opera</span> : <a href=\"https://help.opera.com/en/latest/web-preferences/#cookies\" target=\"_blank\">cliquez sur ce lien</a></li>\r\n                <ol start=\"1\">\r\n                    <li>Choisissez dans le menu « Personnaliser et contrôler Opera » > « Paramètres » ou « Réglages »</li>\r\n                    <li>Cliquez sur l\'option « Avancé » puis sur « Vie privée et sécurité »</li>\r\n                    <li>Dans l\'option « Confidentialité et sécurité », cliquez sur l\'option « Paramètres du site » > « Permissions » puis « Cookies et données de sites »</li>\r\n                </ol>\r\n            </ul>\r\n            <ul>\r\n                <li>Pour <span class=\"spanBoldItalicUnderline\">Safari</span> : <a href=\"https://support.apple.com/fr-fr/HT201265\" target=\"_blank\">cliquez sur ce lien</a></li>\r\n                <ol start=\"1\">\r\n                    <li>Choisissez dans le menu « Réglages généraux de Safari » > « Préférences »</li>\r\n                    <li>Cliquez sur l\'option « Confidentialité »</li>\r\n                    <li>Rubrique « Cookies »</li>\r\n                </ol>\r\n            </ul>\r\n        </aside>\r\n        <h4>Liens hypertextes :</h4>\r\n        <p>Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> ne dispose d\'aucun moyen pour contrôler les sites en connexion avec ses sites internet. <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Il ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l\'internaute, qui doit se conformer à leurs conditions d\'utilisation.</p>\r\n        <p>Les utilisateurs, les abonnés et les visiteurs des sites internet de <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> ne peuvent mettre en place un hyperlien en direction de ce site sans l\'autorisation expresse et préalable de <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span>.</p>\r\n        <p>Dans l\'hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span>, il lui appartiendra d\'adresser un email accessible sur le site afin de formuler sa demande de mise en place d\'un hyperlien. <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>\r\n        <h4>Services fournis :</h4>\r\n        <p>L\'ensemble des activités ainsi que ses informations sont présentés sur le site <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a>.</p>\r\n        <p><span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> s’efforce de fournir sur le site <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a> des informations aussi précises que possible. Les renseignements figurant sur le site <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a> ne sont pas exhaustifs et les photos non contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a> sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.</p>\r\n        <h4>Limitation contractuelles sur les données :</h4>\r\n        <p>Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à l’adresse <a href=\"#\" title=\"administrateur@vincentrivault.go.yj.fr\">administrateur@vincentrivault.go.yj.fr</a>, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).</p>\r\n        <p>Tout contenu téléchargé se fait aux risques et périls de l\'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d\'un quelconque dommage subi par l\'ordinateur de l\'utilisateur ou d\'une quelconque perte de données consécutives au téléchargement. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.</p>\r\n        <p>Les liens hypertextes mis en place dans le cadre du présent site internet en direction d\'autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span>.</p>\r\n        <h4>Propriété intellectuelle :</h4>\r\n        <p>Tout le contenu du présent sur le site <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span> à l\'exception des marques, logos ou contenus appartenant à d\'autres sociétés partenaires ou auteurs.</p>\r\n        <p>Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l\'accord exprès par écrit de <span class=\"spanGreyBoldItalic\">Vincent RIVAULT</span>. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les <span class=\"spanItalicUnderline\">articles L.335-2 et suivants du Code de la propriété intellectuelle</span>. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>\r\n        <h4>Déclaration à la CNIL :</h4>\r\n        <p>Conformément à la <span class=\"spanItalicUnderline\">loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l\'égard des traitements de données à caractère personnel) relative à l\'informatique, aux fichiers et aux libertés</span>, ce site n\'a pas fait l\'objet d\'une déclaration auprès de la Commission nationale de l\'informatique et des libertés (<a href=\"http://www.cnil.fr/\" target=\"_blank\" title=\"www.cnil.fr\">www.cnil.fr</a>).</p>\r\n        <h4>Litiges :</h4>\r\n        <p>Les présentes conditions du site <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l\'interprétation ou de l\'exécution de celles-ci seront de la compétence exclusive des tribunaux. La langue de référence, pour le règlement de contentieux éventuels, est le français.</p>\r\n        <h4>Données personnelles :</h4>\r\n        <p>De manière générale, vous n’êtes pas tenu de communiquer vos données personnelles lorsque vous visitez le site Internet <a href=\"http://www.vincentrivault.go.yj.fr/portfolio\" target=\"_blank\" title=\"www.vincentrivault.go.yj.fr\">www.vincentrivault.go.yj.fr</a>.</p>\r\n        <p>Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par ce site, vous pouvez être amenés à communiquer certaines données telles que : votre nom, votre prénom, votre ville de résidence, votre adresse électronique. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur nos activités.</p>\r\n        <p>Enfin, il se peut que soient collectées de manière automatique certaines informations vous concernant lors d’une simple navigation sur ce site Internet, notamment : des informations concernant l’utilisation de ce site, comme les zones que vous visitez et les services auxquels vous accédez. De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la <span class=\"spanItalicUnderline\">loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données</span>.</p>\r\n        <p>Vos informations personnelles telles que nom, prénom, ville de résidence ou adresse email sont nécessaires pour l\'envoi d\'un message via le formulaire de contact. Elles feront l\'objet d\'un stockage en base de données uniquement afin de garder une trace de vos messages envoyés depuis le formulaire de contact.</p>\r\n    </article>'),
(6, '<h2>Envoi de mail : succ&egrave;s</h2>\r\n', '<h3>Votre mail a bien &eacute;t&eacute; envoy&eacute;. Je vous r&eacute;pondrai dans les meilleurs d&eacute;lais.</h3>\r\n'),
(7, '<h2>Envoi de mail : erreur</h2>\r\n', '<h3>Probl&egrave;me lors de l&#39;envoi du mail. Veuillez r&eacute;essayer.</h3>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

DROP TABLE IF EXISTS `realisation`;
CREATE TABLE IF NOT EXISTS `realisation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomProjet` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisation`
--

INSERT INTO `realisation` (`id`, `nomProjet`, `description`, `date`) VALUES
(1, '<h3><strong>Application de gestion de menu</strong></h3>\r\n', '<p>Application destin&eacute;e aux restaurations collectives permettant la d&eacute;finition des plats et menus ainsi que des jours o&ugrave; ils sont pr&eacute;vus.&nbsp;</p>\r\n\r\n<p>Ce site a &eacute;t&eacute; d&eacute;velopp&eacute; en langage PHP sous la forme d&#39;un CRUD complet.</p>\r\n\r\n<p>Il a &eacute;t&eacute; r&eacute;alis&eacute; sous forme de tableau et mis en page avec le framework Bootstrap.</p>\r\n', '2019-11-18'),
(2, '<h3><strong>Site de type Blog</strong></h3>\r\n', '<p>Site internet de type Blog permettant de d&eacute;finir diff&eacute;rents types d&#39;informations et de les classer par cat&eacute;gories.&nbsp;</p>\r\n\r\n<p>Ce site a &eacute;t&eacute; d&eacute;velopp&eacute; en langage PHP orient&eacute; objet en se basant sur une structure MVC.</p>\r\n\r\n<p>Il a &eacute;t&eacute; r&eacute;alis&eacute; sous forme de tableau et mis en page avec le framework Bootstrap.</p>\r\n', '2019-12-13'),
(3, '<h3><strong>Site WordPress</strong></h3>\r\n', '<p>Site de cuisine d&eacute;velopp&eacute; avec le CMS WordPress et l&#39;extension WooCommerce.&nbsp;</p>\r\n\r\n<p>La rubrique &quot;Boutique&quot; propose diff&eacute;rents articles &agrave; la vente dont certains ont &eacute;t&eacute; param&eacute;tr&eacute;s comme des produits variables dans l&#39;extension WooCommerce (&quot;T-Shirt basique&quot;).</p>\r\n', '2020-01-10'),
(4, '<h3><strong>Site internet de type Portfolio</strong></h3>\r\n', '<p>Site internet compos&eacute; de 4 pages principales ayant pour vocation de pr&eacute;senter mon profil professionnel, mes comp&eacute;tences de d&eacute;veloppeur WEB ainsi qu&#39;une s&eacute;lection de quelques r&eacute;alisations.&nbsp;</p>\r\n\r\n<p>Ce site a &eacute;t&eacute; d&eacute;velopp&eacute; en langage PHP orient&eacute; objet en se basant sur une structure MVC.</p>\r\n\r\n<p>Il a &eacute;t&eacute; r&eacute;alis&eacute; en langage natif except&eacute; pour les pages d&#39;administration qui ont &eacute;t&eacute; mises en forme &agrave; l&#39;aide d&#39;un tableau et mises en page avec le framework Bootstrap.</p>\r\n', '2020-06-18'),
(5, '<h3><strong>CV en PHP conceptuel</strong></h3>\r\n', '<p>Le PHP conceptuel permet de coder une page en PHP en faisant appel uniquement &agrave; des fonctions. Ces fonctions sont con&ccedil;ues &agrave; l&#39;avance pour &eacute;crire certaines balises au format HTML. Ainsi, en utilisant le PHP conceptuel, la page ne contient aucun script HTML, mais seulement des fonctions qui sont d&eacute;finies dans une page annexe avec leur balises HTML correspondantes.</p>\r\n\r\n<p>Voir mon CV r&eacute;alis&eacute; en PHP conceptuel dans le cadre de la licence professionnelle &quot;Logiciels Libres&quot; de l&#39;Universit&eacute; d&#39;Angers sur <a href=\"https://vincentrivault.go.yj.fr/cv_RIVAULT\" target=\"_blank\">cette page</a>.</p>\r\n', '2021-02-08'),
(6, '<h3><strong>Application de gestion du parc zoologique de SigeanSud</strong></h3>\r\n', '<p>D&eacute;veloppement d&#39;une application en PHP Objet bas&eacute;e sur une structure MVC permettant la gestion du parc zoologique de SigeanSud.</p>\r\n\r\n<p>Ce projet a &eacute;t&eacute; r&eacute;alis&eacute; en bin&ocirc;me dans le cadre de la licence professionnelle &quot;Logiciels Libres&quot; de l&#39;Universit&eacute; d&#39;Angers.</p>\r\n\r\n<p>Cette application doit permettre de g&eacute;rer le parc autour de 4 grans th&egrave;mes :</p>\r\n\r\n<p><strong>- les animaux :</strong> rep&eacute;rer les diff&eacute;rents types d&#39;animaux et leurs esp&egrave;ces ;</p>\r\n\r\n<p><strong>- les enclos :</strong> entretenir les diff&eacute;rents types d&#39;enclos, identifier les animaux et les objets pr&eacute;sents ;</p>\r\n\r\n<p><strong>- la nourriture :</strong> d&eacute;finir diff&eacute;rents types de menus pour les animaux adapt&eacute;s &agrave; leur esp&egrave;ce ;</p>\r\n\r\n<p><strong>- le personnel :</strong> distinguer 3 types de personnel n&#39;ayant pas acc&egrave;s aux m&ecirc;mes pages de l&#39;application. Un profil avec un r&ocirc;le de <strong>&quot;soignant&quot;</strong> pour soigner et nourrir les animaux, un profil avec un r&ocirc;le de <strong>&quot;entretien&quot;</strong> pour am&eacute;nager les enclos et g&eacute;rer les objets. Enfin, un profil avec un r&ocirc;le d&#39;<strong>&quot;administrateur&quot;</strong> aura acc&egrave;s &agrave; toutes les pages, y compris le liste des diff&eacute;rents profils du personnel.</p>\r\n\r\n<p>Une <strong>authentification pr&eacute;alable</strong> est n&eacute;cessaire pour acc&eacute;der au contenu de l&#39;application.</p>\r\n\r\n<p>Pour acc&eacute;der au contenu, <strong>deux modes sont d&eacute;finis :</strong> un mode <strong>&quot;consultation&quot;</strong> pour lire le contenu des pages et un mode <strong>&quot;mise &agrave; jour&quot;</strong> pour modifier le contenu des pages selon le r&ocirc;le de chaque profil de connexion.</p>\r\n\r\n<p>Pour consulter l&#39;application, se rendre sur <a href=\"https://vincentrivault.go.yj.fr/parc_zoo_SigeanSud\" target=\"_blank\">cette page</a>.</p>\r\n', '2021-03-26');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `password`, `lastname`, `firstname`, `rank`) VALUES
(1, 'admin', '$2y$10$K1NzmjNYrQLYNXl.yv5BH.fKLGw.fIhTnRt9xXzhfauinNp69BJ0q', 'RIVAULT', 'Vincent', 'administrateur'),
(2, 'redac', '$2y$10$7DdoR4Ul/qN0Bv9qeNJ5u.7WypnU4nFk9jxhAue.AQyKUkVhjlvAi', 'RIVAULT', 'Vincent', 'redacteur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;