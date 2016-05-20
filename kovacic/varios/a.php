<!DOCTYPE html><html lang=es ng-app=app ng-strict-di ng-class=$root.htmlClass><meta charset=utf-8><link rel="shortcut icon" href=https://cdn.comuniame.com/img/favicon.png><base href=/ ><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/Base64/0.3.0/base64.min.js"></script><![endif]--><link type=text/css rel=stylesheet href=https://cdn.comuniame.com/app/v322/style.min.css><link type=text/css rel=stylesheet href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800"><title>Comuniame, manager de fútbol online</title><meta name=description id=description content="Dirige un equipo de jugadores reales y compite contra tus amigos por conseguir la mejor plantilla y ganar la liga."><meta name=viewport content="initial-scale=1,maximum-scale=1,user-scalable=no,width=device-width"><meta property=og:image content=https://cdn.comuniame.com/img/icon.jpg><meta property=fb:app_id content=919678774751592><link rel=apple-touch-icon href=https://cdn.comuniame.com/img/icon.jpg><meta name=application-name content=Comuniame><meta name=apple-mobile-web-app-title content=Comuniame><meta name=mobile-web-app-capable content=yes><meta name=apple-mobile-web-app-capable content=yes><meta name=apple-mobile-web-app-status-bar-style content=black><meta name=twitter:card content=summary><meta name=twitter:site content=@comuniame><meta name=twitter:title content=Comuniame><meta name=twitter:description id=description-twitter content="Dirige un equipo de jugadores reales y compite contra tus amigos por conseguir la mejor plantilla y ganar la liga."><meta name=twitter:image content=https://cdn.comuniame.com/img/icon.jpg><meta name=theme-color content=#2a2a2a><link rel=icon sizes=500x500 href=https://cdn.comuniame.com/img/icon.jpg><link rel=manifest href=/manifest><!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--><div id=body-wrapper><header id=header ng-controller=HeaderController><div id=top><div class=container><div id=logo><a href=/ ><img src=https://cdn.comuniame.com/img/logo.png></a> <a href="http://www.eldesmarque.com?src=comuniame" target=_blank class=visible-xs><img src=https://cdn.comuniame.com/img/edm/icon.png style=width:25px;height:auto></a></div><div attach-if=::!$root.viewport.xs class="social social-buttons social-widgets text-right"><a href="http://www.eldesmarque.com?src=comuniame" target=_blank><img src=https://cdn.comuniame.com/img/edm/logo.png style="margin:-4px 5px 0 0"></a> &nbsp;<div class=fb-like data-href=https://www.facebook.com/comuniame data-width=250 data-layout=button_count data-action=like data-show-faces=false data-share=false></div>&nbsp; <a class=twitter-follow-button href=https://twitter.com/comuniame data-show-screen-name=false data-lang=es></a></div><dfp dfp=dfp class="ad collapsed hidden-handled" attach-if=::!$root.viewport.handled block=/3326118/futbol_tendencias_mega_a1 sizes=[[980,90],[728,90]] fallback="&lt;div class=&quot;ad iframe ad-horizontal hidden-handled&quot; attach-if=&quot;::!$root.viewport.handled&quot; template=&quot;header-horizontal&quot;&gt;&lt;/div&gt;"></dfp><h1 id=title-xs></h1></div></div><nav id=menu class=sticky navbar><div class=container><ul class=nav-menu id=nav-menu ng-show=session.$ready><li><a href=/ ><i class="icon icon-home"></i><span>Inicio</span></a><li id=league-menu><a href=/league/ ><i class="icon icon-prize"></i><span>Liga</span></a><li><a href=/team/ ><i class="icon icon-field"></i><span>Equipo</span></a><li><a href=/market/ ><i class="icon icon-transfer"></i><span>Mercado</span><div class="badge success ng-cloak" ng-show="session.user.status.offers>0" title="Ofertas pendientes" ng-bind="session.user.status.offers | number"></div></a><li><a href=/day/ ><i class="icon icon-calendar"></i><span>Jornada</span></a><li><a href=/players/ ><i class="icon icon-team"></i><span>Jugadores</span></a></ul><ul class=nav-menu id=nav-menu-right><li ng-hide=session.$ready><a href=/login/ ><i class="icon icon-incoming"></i><span>Iniciar sesión</span></a><li class="hamburger ng-cloak" ng-show=session.$ready><a ng-click=toggleSidebar()><span><div class="avatar sm" ng-style="{'background-image':session.user.icon?('url('+session.user.icon+')'):undefined}" ng-show=session.user.icon></div></span> <span ng-bind="session.league.name || 'Mi usuario'"></span> <i class="icon icon-hamburger"></i></a></ul></div></nav></header><div id=content loader=$root.session.$promise><div class=container><div id=view ng-view autoscroll><script>var MODE="production",APP_NAME="Comuniame",API_URL="/api/v1",DEPLOY_VERSION=322,PARTIALS_URL="/static/app/v322/es/partials",ASSETS_URL="https://cdn.comuniame.com"</script><!--[if lt IE 9]><div
class="panel message"><div
class="body"><h1>Comuniame</h1><p>
Lo sentimos, la aplicación no es compatible con el navegador que estás utilizando.</p><p>
Recomendamos utilizar alguno de los siguientes:</p><p
class="text-center">
<a
href="http://www.google.com/chrome/" target="_blank">
<img
src="https://cdn.comuniame.com/img/browsers/chrome.png"/>
Google Chrome
</a>
&nbsp;
&nbsp;
<a
href="http://www.firefox.com" target="_blank">
<img
src="https://cdn.comuniame.com/img/browsers/firefox.png"/>
Mozilla Firefox
</a></p></div></div><![endif]--><noscript><div class="panel message"><div class=body style=color:#8b0000><p>¡Necesitas un navegador con soporte Javascript para poder utilizar esta aplicación!</div></div></noscript><div class="panel message"><div class=body><div class=app-logo><img src=https://cdn.comuniame.com/img/logo.png></div><div class=loader></div><h1>¡Dirige tu propio equipo de fútbol y compite contra tus amigos!</h1><p><a href=http://www.comunia.me/ target=_blank>Comunia.me</a> es un simulador de fútbol en el que administras un equipo con jugadores reales en una liga virtual, compitiendo contra tus amigos por conseguir el mejor equipo y ganar la liga.</div></div></div><div class="ad iframe ad-vertical hidden-handled" attach-if=::!$root.viewport.handled template=sidebar-vertical></div></div><sidebar></sidebar></div><div id=body-push></div></div><footer id=footer><div class=container><div class=row><div class=col-xs-8><ul id=footer-links><li>&copy; 2016 <a href=http://www.comunia.me/ target=_blank>Comuniame</a><li><a href=http://www.comunia.me/reglas/ target=_blank rel=nofollow>Reglas</a><li><a href=http://foro.comunia.me/ target=_blank rel=nofollow>Foro</a><li><a href=http://www.comunia.me/faq/ target=_blank rel=nofollow>FAQ</a><li><a href=http://www.comunia.me/legal/ target=_blank rel=nofollow>Aviso legal</a><li><a href=http://www.comunia.me/contacto/ target=_blank rel=nofollow>Contacto</a></ul></div><div class="col-xs-4 social rounded right"><div><a class=tw href=http://www.twitter.com/comuniame target=_blank title="Síguenos en Twitter"><i class="icon icon-twitter"></i></a></div><div><a class=fb href=http://www.facebook.com/comuniame target=_blank title="Síguenos en Facebook"><i class="icon icon-facebook"></i></a></div></div></div></div></footer><script src=https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js></script><script src=https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-route.min.js></script><script src=https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-resource.min.js></script><script src=https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-touch.min.js></script><script>"undefined"==typeof window.angular&&(document.write('<script src="https://cdn.comuniame.com/vendor/angular/angular.min.js"><\/script>'),document.write('<script src="https://cdn.comuniame.com/vendor/angular-route/angular-route.min.js"><\/script>'),document.write('<script src="https://cdn.comuniame.com/vendor/angular-resource/angular-resource.min.js"><\/script>'),document.write('<script src="https://cdn.comuniame.com/vendor/angular-touch/angular-touch.min.js"><\/script>'))</script><script src=https://cdn.comuniame.com/app/v322/es/app.min.js></script>