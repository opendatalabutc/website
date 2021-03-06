<!DOCTYPE html>
<html ng-app="datalab">
<head>
  @include("shared.head")
  <title>Data Venture</title>
</head>
<body>

  <header class="header-landing">
    @include("shared.nav")
    <section class="header-text">
      <div class="container">
        <h1 class="center bold">Data Venture</h1>
        <div class="row center">
          <h4 class="header col s12 thin center">
            Association étudiante de <b>Data Science</b>
          </h4>
        </div>
        <div class="row center">
          <a href="#presentation" class="btn-large waves-effect waves-light">En savoir plus</a>
        </div>
      </div>
    </section>
  </header>

  <main>
    <div id="presentation" class="section section-grey">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light center">
            Nous sommes un collectif d'étudiants de l'<b>Université de Technologie de Compiègne</b>, passionné par la <b>Data Science</b>.
            Nous travaillons sur des problèmes:<br>
            <b class="element"></b>
          </h5>
        </div>
      </div>
    </div>

    <div class="container section">
      <div class="row">
        <h3 class="col s12 light center header">3 axes principaux</h3>
      </div>
      <div class="row">
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">search</i>
            <p class="promo-caption">Recherche</p>
            <p class="light center">Nous souhaitons développer des idées, créer des outils ouverts et innovants en <b>Data Science</b>.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">thumb_up</i>
            <p class="promo-caption">Valorisation</p>
            <p class="light center">Nous développons nos <b>compétences</b> à travers des projets valorisants.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">business</i>
            <p class="promo-caption">Partenariats</p>
            <p class="light center">Nous souhaitons avoir un <b>lien fort</b> avec nos partenaires pour travailler sur des projets utiles et exploités.</p>
          </div>
        </div>
      </div>

      <div class="divider-30"></div>

      <div class="row">
        <h3 class="col s12 light center header">6 objectifs</h3>
      </div>

      <!--   Promo Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">perm_identity</i>
            <p class="promo-caption">Sensibiliser</p>
            <p class="light center">la sphère étudiante à l’exploitation des données (potentiel, moyens techniques, applications)</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">trending_up</i>
            <p class="promo-caption">Améliorer</p>
            <p class="light center">l’image de l’UTC dans les divers champs de la data science</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">group</i>
            <p class="promo-caption">Rassembler</p>
            <p class="light center">les profils et leurs compétences dans le domaine pour créer un collectif capable de réaliser des projets, des études</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">computer</i>
            <p class="promo-caption">Héberger</p>
            <p class="light center">les projets, les mettre en valeur, les pérenniser dans le temps</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">settings</i>
            <p class="promo-caption">Développer</p>
            <p class="light center">des idées, des concepts, des outils et des moyens valorisables et valorisants</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="center promo">
            <i class="material-icons">work</i>
            <p class="promo-caption">Nouer</p>
            <p class="light center">des liens avec des partenaires, startups et entreprises, labos de recherche, réaliser des projets avec eux</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-caption">
      <div class="container">
        <h5 class="light center">
          <b>Data Venture</b> a pour vocation de devenir un <b>point de départ</b> pour n’importe quel <b>projet data</b> à l’UTC, en apportant
          <b>moyens et compétences</b>, en proposant aux associations et entreprises de les aider dans le <b>traitement</b>
          et la <b>valorisation</b> de leurs données.</h5>
      </div>
    </div>

    <div class="space-60"></div>

    <div class="container section">
      <div class="row">
        <div class="col m6 center promo">
          <i class="material-icons">account_circle</i>
        </div>
        <div class="col m6 justify">
          <h3>Étudiants</h3>
          Tu es intéressé par la <b>Data Science</b> ou un domaine qui y rattaché (Réseaux, Graphes, Big Data, Machine Learning, Dataviz, ...) ?
          Tu souhaites développer tes compétences dans ce domaine ? Contribuer à des projets valorisants, innovants ? <b>Rejoins-nous dès maintenant</b> !
          Peu importe ton bagage technique actuel, nous sommes tous là pour apprendre et progresser.
        </div>
      </div>
      <div class="divider-60"></div>
      <div class="row">
        <div class="col m6 justify">
          <h3>Entreprises</h3>
          Confiez-nous des projets, laissez-nous construire des choses avec vous. Nous sommes un collectif pluridisciplinaire mais surtout
          passionés. Nos <b>compétences</b> et notre <b>énergie</b> peuvent vous aider. Nous serons très heureux d'en discuter avec vous, alors <b>n'hésitez pas à nous contacter</b> !
        </div>
        <div class="col m6 center promo">
          <i class="material-icons">business</i>
        </div>
      </div>
    </div>

    <div class="space-60"></div>

    <div ng-controller="newsCtrl" class="section section-grey">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h5 class="light center">Recevez des nouvelles de Data Venture directement.
              Nous vous tiendrons au courant des prochaines étapes de l'association avec notre <b>newsletter</b>.</h5>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m7 offset-m1 center">
            <input ng-model="email" placeholder="Votre email" type="email" class="validate">
          </div>
          <div class="col s12 m4 center">
            <a ng-click="add()" class="waves-effect waves-light btn"><i class="material-icons left">email</i>S'inscrire</a>
          </div>
        </div>

        <div class="col s12">
          <div ng-show="sending" class="card-alert info">
            <p><i class="material-icons">info_outline</i>@{{ msg }}</p>
          </div>
          <div ng-show="success" class="card-alert success">
            <p><i class="material-icons">check_circle</i>@{{ msg }}</p>
          </div>
          <div ng-show="error" class="card-alert error">
            <p><i class="material-icons">warning</i>@{{ msg }}</p>
          </div>
        </div>

      </div>
    </div>
  </main>

  @include("shared.footer")
  @include("shared.scripts")

</body>
</html>
