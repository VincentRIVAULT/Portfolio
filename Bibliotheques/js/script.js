// "use strict";

// fonction JS permettant l'attente du chargement du DOM
// avant l'execution du script

document.addEventListener("DOMContentLoaded", function() {

// }

// fonction jQuery permettant l'attente du chargement du DOM
// avant l'execution du script

// $(document).ready(function() {
    
//     console.log('coucou');


    /* bouton retour en haut de page en pur JS
    ****************************************** */

    // détection de l'évènement de défilement de la page vers le bas
    window.onscroll = function(ev) {
        // si le défilement de la page est supérieur à 100px
        if (window.pageYOffset > 100) {
            // alors on rend le bouton "retour" visible
            document.getElementById("retour").className = "visible";
            // sinon on le laisse invisible
        } else {
            document.getElementById("retour").className = "invisible";
        };
    }

    
    /* mettre en couleur l'onglet du menu principal cliqué */

    // $('#menuPrincipal li a').click(function() {
        // désactiver le menu actif actuel
    //   $('#menuPrincipal li a').removeClass('violet');
    //   $('#menuPrincipal li').removeClass('active');
        
        // activer le menu cliqué  
    //   $(this).addClass('violet');
    //   $(this).parent().addClass('active');
    // });


    /* barre de recherche */

    // document.getElementById('search-input').addEventListener('keyup', function(e) {
    //     var recherche = this.value.toLowerCase();
    //     mot = document.getElementById("content");
    //     var result = mot.querySelectorAll('result');
    //     Array.prototype.forEach.call(result, function(document) {
    //       if (document.innerHTML.toLowerCase().indexOf(recherche) > -1) {
    //         document.style.display = '';
    //       } else {
    //         document.style.display = 'none';
    //       }
    //     });
    //   });


    /* 
    * Diaporama page réalisations (extraits d'images des projets sélectionnés)
    ************************************************************************** */

    var tableauMesProjets = [
        // "Extrait_code_fichier_index.php.png",
        "Cantine_CEFii_interface_menu.png",
        // "Cantine_CEFii_interface_plat.png",
        // "Cantine_CEFii_interface_calendrier.png",
        "MonSuperBlog_interface.png",
        // "MonSuperBlog_interface_connecte.png",
        // "MonSuperBlog_interface_connecte_category.png",
        "Site_WP_recettes_Pauline_accueil.png",
        // "Site_WP_recettes_Pauline_recettes.png",
        // "Site_WP_recettes_Pauline_boutique.png",
        // "Site_internet_Portfolio_page_accueil_reduit.png"
        // "Site_internet_Portfolio_page_profil_reduit.png",
        // "Site_internet_Portfolio_page_competences_reduit.png",
        // "Site_internet_Portfolio_page_realisations_reduit.png",
        // "Site_internet_Portfolio_page_realisations_detail_projet_2_reduit.png",
        // "Site_internet_Portfolio_page_contact_reduit.png",
        // "Site_internet_Portfolio_page_admin_realisations_reduit.png"
        "Site_internet_Portfolio_page_accueil_whitesmoke_reduit.png",
        // "Site_internet_Portfolio_page_profil_whitesmoke_reduit.png",
        // "Site_internet_Portfolio_page_competences_whitesmoke_reduit.png",
        // "Site_internet_Portfolio_page_realisations_whitesmoke_reduit.png",
        // "Site_internet_Portfolio_page_realisations_detail_projet_2_whitesmoke_reduit.png",
        // "Site_internet_Portfolio_page_contact_whitesmoke_reduit.png",
        // "Site_internet_Portfolio_page_admin_realisations_whitesmoke_reduit.png",
        "Extrait_CV_PHP Conceptuel_2021-02-08.png",
        "Page d'accueil zoo_exemple affichage_bis.png",
        // "Page d'accueil zoo_exemple affichage_footer.png",
        // "Page Population zoo_exemple affichage_consultation_ter.png",
        // "Page Espèce zoo_exemple affichage_consultation_bis.png",
        // "Page Espèce zoo_exemple affichage_mise à jour_bis.png",
        // "Page Profils zoo_exemple affichage_mise à jour.png"
    ];

    var compteur = 0;

    function defileProjets() {
        compteur++;
        if (compteur == tableauMesProjets.length) {
            compteur = 0;
        }
        document.getElementById("mesProjets").src = "Bibliotheques/img/diapoProjets/" + tableauMesProjets[compteur]; // typeof
    }
    setInterval(defileProjets, 2000);


    /* Diaporama page Projet1 (extraits d'images du Projet1) */

    var tableauMonProjet1 = [
        "Cantine_CEFii_interface_menu.png",
        "Cantine_CEFii_interface_plat.png",
        "Cantine_CEFii_interface_calendrier.png"
    ];

    var compteur1 = 0;

    function defileProjet1() {
        compteur1++;
        if (compteur1 == tableauMonProjet1.length) {
            compteur1 = 0;
        }
        document.getElementById("monProjet1").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet1[compteur1]; // typeof
    }
    setInterval(defileProjet1, 2000);


    /* Diaporama page Projet2 (extraits d'images du Projet2) */

    var tableauMonProjet2 = [
        "MonSuperBlog_interface.png",
        "MonSuperBlog_interface_connecte.png",
        "MonSuperBlog_interface_connecte_category.png"
    ];

    var compteur2 = 0;

    function defileProjet2() {
        compteur2++;
        if (compteur2 == tableauMonProjet2.length) {
            compteur2 = 0;
        }
        document.getElementById("monProjet2").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet2[compteur2]; // typeof
    }
    setInterval(defileProjet2, 2000);


    /* Diaporama page Projet3 (extraits d'images du Projet3) */

    var tableauMonProjet3 = [
        "Site_WP_recettes_Pauline_accueil.png",
        "Site_WP_recettes_Pauline_recettes.png",
        "Site_WP_recettes_Pauline_boutique.png"
    ];

    var compteur3 = 0;

    function defileProjet3() {
        compteur3++;
        if (compteur3 == tableauMonProjet3.length) {
            compteur3 = 0;
        }
        document.getElementById("monProjet3").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet3[compteur3]; // typeof
    }
    setInterval(defileProjet3, 2000);


    /* Diaporama page Projet4 (extraits d'images du Projet4) */

    var tableauMonProjet4 = [
        // "Extrait_code_fichier_index.php.png",
        // "Site_internet_Portfolio_page_accueil_reduit.png",
        // "Site_internet_Portfolio_page_profil_reduit.png",
        // "Site_internet_Portfolio_page_competences_reduit.png",
        // "Site_internet_Portfolio_page_realisations_reduit.png",
        // "Site_internet_Portfolio_page_realisations_detail_projet_2_reduit.png",
        // "Site_internet_Portfolio_page_contact_reduit.png",
        // "Site_internet_Portfolio_page_admin_realisations_reduit.png"
        "Site_internet_Portfolio_page_accueil_whitesmoke_reduit.png",
        "Site_internet_Portfolio_page_profil_whitesmoke_reduit.png",
        "Site_internet_Portfolio_page_competences_whitesmoke_reduit.png",
        "Site_internet_Portfolio_page_realisations_whitesmoke_reduit.png",
        "Site_internet_Portfolio_page_realisations_detail_projet_2_whitesmoke_reduit.png",
        "Site_internet_Portfolio_page_contact_whitesmoke_reduit.png",
        "Site_internet_Portfolio_page_admin_realisations_whitesmoke_reduit.png"
    ];

    var compteur4 = 0;

    function defileProjet4() {
        compteur4++;
        if (compteur4 == tableauMonProjet4.length) {
            compteur4 = 0;
        }
        document.getElementById("monProjet4").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet4[compteur4]; // typeof
    }
    setInterval(defileProjet4, 2000);


    /* Diaporama page Projet5 (extraits d'images du Projet5) */

    var tableauMonProjet5 = [
        "Extrait_CV_PHP Conceptuel_2021-02-08.png"
    ];

    var compteur5 = 0;

    function defileProjet5() {
        compteur5++;
        if (compteur5 == tableauMonProjet5.length) {
            compteur5 = 0;
        }
        document.getElementById("monProjet5").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet5[compteur5]; // typeof
    }
    setInterval(defileProjet5, 2000);


    /* Diaporama page Projet6 (extraits d'images du Projet6) */

    var tableauMonProjet6 = [
        // "Arborescence - menu principal de navigation_non connecté.png",
        // "Arborescence - menu principal de navigation_consultation.png",
        // "Arborescence - menu principal de navigation_mise à jour_avec sous-menu profil.png",
        "Page d'accueil zoo_exemple affichage_bis.png",
        "Page d'accueil zoo_exemple affichage_footer.png",
        "Page Population zoo_exemple affichage_consultation_ter.png",
        "Page Espèce zoo_exemple affichage_consultation_bis.png",
        "Page Espèce zoo_exemple affichage_mise à jour_bis.png",
        "Page Profils zoo_exemple affichage_mise à jour.png"
    ];

    var compteur6 = 0;

    function defileProjet6() {
        compteur6++;
        if (compteur6 == tableauMonProjet6.length) {
            compteur6 = 0;
        }
        document.getElementById("monProjet6").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet6[compteur6]; // typeof
    }
    setInterval(defileProjet6, 2000);


    /* Diaporama page Projet7 (extraits d'images du Projet7) */

    var tableauMonProjet7 = [
        ""
    ];

    var compteur7 = 0;

    function defileProjet7() {
        compteur7++;
        if (compteur7 == tableauMonProjet7.length) {
            compteur7 = 0;
        }
        document.getElementById("monProjet7").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet7[compteur7]; // typeof
    }
    setInterval(defileProjet7, 2000);


    /* Diaporama page Projet8 (extraits d'images du Projet8) */

    var tableauMonProjet8 = [
        ""
    ];

    var compteur8 = 0;

    function defileProjet8() {
        compteur8++;
        if (compteur8 == tableauMonProjet8.length) {
            compteur8 = 0;
        }
        document.getElementById("monProjet8").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet8[compteur8]; // typeof
    }
    setInterval(defileProjet8, 2000);


    /* Diaporama page Projet9 (extraits d'images du Projet9) */

    var tableauMonProjet9 = [
        ""
    ];

    var compteur9 = 0;

    function defileProjet9() {
        compteur9++;
        if (compteur9 == tableauMonProjet9.length) {
            compteur9 = 0;
        }
        document.getElementById("monProjet9").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet9[compteur9]; // typeof
    }
    setInterval(defileProjet9, 2000);


    /* Diaporama page Projet10 (extraits d'images du Projet10) */

    var tableauMonProjet10 = [
        ""
    ];

    var compteur10 = 0;

    function defileProjet10() {
        compteur10++;
        if (compteur10 == tableauMonProjet10.length) {
            compteur10 = 0;
        }
        document.getElementById("monProjet10").src = "Bibliotheques/img/diapoProjets/" + tableauMonProjet10[compteur10]; // typeof
    }
    setInterval(defileProjet10, 2000);


    /* 
    * validation du formulaire de contact avant envoi en jQuery
    *********************************************************** */

    $("#send").click(function() {
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        // var tel = $("#tel").val();
        var email = $("#email").val();
        var ville = $("#ville").val();
        var sujet = $("#sujet").val();
        var message = $("#message").val();
        
        if (nom == "") {
            $("#nom").next('span').show();
            return false;
        }
        else {
            $("#nom").next('span').hide();
        }
        if (prenom == "") {
            $("#prenom").next('span').show();
            return false;
        }
        else {
            $("#prenom").next('span').hide();
        }
        if (ville == "") {
            $("#ville").next('span').show();
            return false;
        }
        else {
            $("#ville").next('span').hide();
        }
        // if (isNaN(tel)) {
        //     $("#tel").next('span').show();
        //     return false;
        // }
        // else {
        //     $("#tel").next('span').hide();
        // }
        if (email.indexOf('@') < 0) {
            $("#email").next('span').show();
            return false;
        }
        else {
            $("#email").next('span').hide();
        }
        if (sujet == "") {
            $("#sujet").next('span').show();
            return false;
        }
        else {
            $("#sujet").next('span').hide();
        }
        if (message == "") {
            $("#message").next('span').show();
            return false;
        }
        else {
            $("#message").next('span').hide();
        }
    });


    /*
    * validation du formulaire de connexion avant envoi en jQuery
    ************************************************************* */
    
    $("#connexion").click(function() {
        var username = $("#username").val();
        var password = $("#password").val();
        
        if (username == "") {
            $("#username").next('span').show();
            return false;
        }
        else {
            $("#username").next('span').hide();
        }
        if (password == "") {
            $("#password").next('span').show();
            return false;
        }
        else {
            $("#password").next('span').hide();
        }
    });


    /* 
    * Utilisation d'un éditeur de texte (CKEditor)
    * pour remplir les champs dans le Back Office
    ********************************************** */

    /* CKEditor 4 */

    /* pages PAGES */

    if (document.querySelector('#titre')) {
        CKEDITOR.replace( 'titre', {
            // language: 'fr',
            // uiColor: '#9AB8F3',
            extraAllowedContent: 'section article h2 span i [*] (*)'
        } );
    }
    if (document.querySelector('#contenu')) {
        CKEDITOR.replace( 'contenu', {
            // language: 'fr',
            // uiColor: '#9AB8F3',
            // AllowedContent: 'img(left,right)[!src,alt,width,height];figure[width,height]',
            // extraAllowedContent: 'section;aside;article;p;span;ul;li;label;figure;img;progress;*[id];*(class)'
            extraAllowedContent: 'section h2 h3 h4 aside article p span i ul li label figure img progress [*] (*)'
        } );
    }

    // /* pages Realisation */ 

    if (document.querySelector('#nomProjet')) {
        CKEDITOR.replace( 'nomProjet' );
    }
    if (document.querySelector('#description')) {
        CKEDITOR.replace( 'description', {
            // extraAllowedContent: 'section;aside;article;p;span;ul;li;label;figure;img;progress;[*];(*)'
            extraAllowedContent: 'section h2 h3 h4 aside article p span i ul li label figure img progress [*] (*)'
        } );
        // CKEDITOR.replace( 'date' );
    }


    /*
    affichage message autorisation cookies
    ************************************** */

    /* avec CookieConsent */

    /* démo CookieConsent pour tester différents affichages de bandeau sur les cookies */

    // window['cookieconsent_example_util'] = {
    //   // Fill a select element with options (html can be configured using `cb`)
    //   fillSelect: function(select, options, selected, cb) {
    // 	if (typeof cb != 'function') {
    // 	  cb = this.getSimpleOption;
    // 	}
    // 	select.innerHTML = Object.keys( options ).reduce( function ( str, key ) {
    // 	  return str + cb(options[key], key, key == selected);
    // 	}, '');
    //   },

    //   getSimpleOption: function(label, value, selected) {
    // 	return '<option '+(selected ? 'selected="selected"' : '')+' value="'+value+'">'+label+'</option>'
    //   },

    //   tabularObject: function(obj, formatVal, formatKey) {
    // 	if (typeof formatKey !== 'function') formatKey = function (){ return arguments[0] };
    // 	if (typeof formatVal !== 'function') formatVal = function (){ return arguments[0] };

    // 	return Object.keys( obj ).reduce( function (str, key) {
    // 	  return str += '<li><em>'+formatKey(key, obj[key])+'</em> '+formatVal(obj[key], key)+'</li>'
    // 	}, '<ul>' ) + '</ul>';
    //   },

    //   initialisePopupSelector: function(options) {
    // 	const itemOpen = '<li><span>';
    // 	const itemClose = '</span></li>';
    // 	const instances = [];

    // 	options.selector.innerHTML =
    // 	  itemOpen +
    // 	  Object.keys(options.popups).join(itemClose + itemOpen) +
    // 	  itemClose;

    // 	options.selector.onclick = function ( event ) {
    // 	  let targ = event.target;

    // 	  // if the target is the container, exit
    // 	  if (targ.isEqualNode(options.selector)) return;

    // 	  // from this point, only the child elements of opts.selector will get through.
    // 	  // out of these child elements, we want to find the closest direct decendant <li>
    // 	  while (targ.tagName != 'LI' && targ.parentNode) {
    // 		targ = targ.parentNode;
    // 	  }

    // 	  if (!targ.parentNode.isEqualNode(options.selector)) return;

    // 	  // from this point, 'targ' will be a direct decendant of opts.selector
    // 	  const index = Array.from(options.selector.children).indexOf(targ);

    // 	  if (index >= 0 && instances[index]) {
    // 		instances[index].clearStatuses();

    // 		// We could remember the popup that's currently open, but it gets complicated when we consider
    // 		// the revoke button. Therefore, simply close them all regardless
    // 		instances.forEach(function(instance) {
    // 		  if (instance.isOpen()) {
    // 			instance.close();
    // 		  }
    // 		  instance.toggleRevokeButton(false);
    // 		});

    // 		instances[index].open();
    // 	  }
    // 	};

    // 	Object.keys( options.popups ).forEach( function ( example, index ) {
    // 	  const myOpts = options.popups[example];
    // 	  myOpts.autoOpen = false;

    // 	  instances[ index ] = new options.cookieconsent( myOpts )
    // 	  instances[ index ].on( "popupOpened", function () {
    // 		const codediv = document.getElementById('options');
    // 		if (codediv) {
    // 		  codediv.innerHTML = JSON.stringify(options, null, 2);
    // 		}
    // 	  })
    // 	  instances[ index ].on( "error", console.error );
    // 	})
    // 	window.addEventListener( "unload", () => {
    // 	  instances.forEach( instance => {
    // 		instance.clearStatuses();
    // 		instance.destroy();
    // 	  })
    // 	})    

    // 	return instances;
    //   }
    // };

    // function timeStamp() {
    //     const now = new Date();
    //     const time = [now.getHours(), now.getMinutes(), now.getSeconds()];
    //     for (let i = 1; i < 3; i++) {
    //     if (time[i] < 10) {
    //         time[i] = '0' + time[i];
    //     }
    //     }
    //     return '[' + time.join(':') + '] ';
    // }

    // const logingElem = document.getElementById('console');

    //     const log = function (message) {
    //     logingElem.innerHTML += timeStamp() + message + "<br>";
    //     logingElem.scrollTop = logingElem.scrollHeight;
    //     }


    /* affichage du bandeau pour informer & accepter les cookies */

    // const cc = new CookieConsent({
    //     type: 'opt-out',
    //     palette: {
    //     popup: { background: "#eaf7f7", text: "#5c7291" },
    //     button: { background: "#56cbdb",text: "#ffffff" }
    //     }
    // })

    /* script en lien avec la démo de CookieConsent sur les cookies */

    // cc.on( "popupOpened", function () {
    //     log('<em>popupOpened</em> event fired');
    // })
    // cc.on( "popupClose", function () {
    //     log('<em>popupClose</em> event fired');
    // })
    // cc.on( "initialized", function ( statuses ) {
    //     log( '<em>initialized</em> event fired with statuses: ' )
    // Object.keys( statuses ).forEach( status => {
    //     log('<em>' + status + ':</em> <em>' + statuses[ status ] + '</em>');
    // })
    // })
    // cc.on( "statusChanged", function ( cookieName, status, chosenBefore ) {
    //     log('<em>statusChanged</em> event fired with status <em>' + status + '</em> for cookie <em>' + cookieName + '</em>');
    // })
    // cc.on( "revokeChoice", function () {
    //     log('<em>revokeChoice()</em> event fired')
    // })
    // cc.on( "error", console.error )

    // document.getElementById('btn-dismissCookie').onclick = function () {
    //     log("Calling <em>setStatuses(CookieConsent.DISMISS)</em>");
    // cc.setStatuses(CookieConsent.DISMISS);
    //     log("Calling <em>close()</em>");
    // cc.close();
    // };

    // document.getElementById('btn-allowCookie').onclick = function () {
    //     log("Calling <em>setStatuses(CookieConsent.ALLOW)</em>");
    // cc.setStatuses(CookieConsent.ALLOW);
    //     log("Calling <em>close()</em>");
    // cc.close();
    // };

    // document.getElementById('btn-denyCookie').onclick = function () {
    //     log("Calling <em>setStatuses(CookieConsent.DISMISS)</em>");
    // cc.setStatuses(CookieConsent.DISMISS);
    //     log("Calling <em>close()</em>");
    // cc.close();
    // };

    // document.getElementById('btn-revokeChoice').onclick = function () {
    //     log("Calling <em>revokeChoice()</em>");
    // cc.revokeChoice();
    // };

    // document.getElementById('btn-open').onclick = function () {
    //     log("Calling <em>open()</em>");
    // cc.open();
    // };

    // document.getElementById('btn-close').onclick = function () {
    //     log("Calling <em>close()</em>");
    // cc.close();
    // };

    // document.getElementById('btn-destroy').onclick = function () {
    //     log("Calling <em>destroy()</em>");
    // cc.destroy();
    //     log("<span class='alert'>Cookie Consent has been destroyed and cannot be used again. Reload the page.</span>");
    // };


    /* avec CookieChoices */

    // cookieChoices.showCookieConsentBar(
    //     'Ce site utilise des cookies pour vous offrir le meilleur service. En poursuivant votre navigation, vous acceptez l’utilisation des cookies.',
    //      'J’accepte',
    //      'En savoir plus',
    //     //  'http://www.vincent.rivault.free.fr/index.php?controller=pages&id=5'
    //     //  'http://localhost/CEFii/Dossier_Projet/portfolio_vincent_rivault/index.php?controller=pages&id=5'
    //      'https://www.cefii-developpements.fr/vincent964/Dossier_Projet/portfolio_vincent_rivault/index.php?controller=pages&id=5'
    // );

    
    /* articles déroulants au click */

    // $("#identity").click(function () { 
    //     var text = $(this).children('p');
    //     $('#identity p').slideUp();

    //     if (text.is(':hidden')) { 
    //         text.slideDown(500); 
    //     } else {
    //         text.slideUp(300); 
    //     }
    // });

    // $("#qualities").click(function () { 
    //     var text = $(this).children('li');
    //     $('#qualities li').slideUp(300);
            
    //     if (text.is(':hidden')) { 
    //         text.slideDown(500); 
    //     } else {
    //         text.slideUp(300); 
    //     }
    // });

    // $("#interests").click(function () { 
    //     var text = $(this).children('li');
    //     $('#interests li').slideUp(300);
    //     if (text.is(':hidden')) { 
    //         text.slideDown(500); 
    //     } else {
    //         text.slideUp(300); 
    //     }
    // });

    // $("#career").click(function () { 
    //     var text = $(this).children('p');
    //     $('#career p').slideUp(300);
    //     if (text.is(':hidden')) { 
    //         text.slideDown(500); 
    //     } else {
    //         text.slideUp(300); 
    //     }
    // });

    // $("#shareCode").click(function () { 
    //     var text = $(this).children('p');
    //     $('#shareCode p').slideUp(300);
    //     if (text.is(':hidden')) { 
    //         text.slideDown(500); 
    //     } else {
    //         text.slideUp(300); 
    //     }
    // });


    /* methode jQuery pour fixer le footer en bas de page */

    // (function() {
    //     $('.footer').css('position', $(document).height() > $(window).height() ? "inherit" : "fixed");
    // })();

});
    
    
    