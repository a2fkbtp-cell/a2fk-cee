# Instructions — Intégration section Blog dans a2fk-v4

## Action à effectuer

Dans le fichier `a2fk-v4 VERSION FINALE 1303.html`, ajoute une section "Actualités CEE" après la section FAQ (id="faq") et avant la section Partenaires.

La section doit avoir `id="blog"` et le même style dark que le reste du site (fond var(--bg), bordure var(--border), même typographie Figtree/IBM Plex Mono/Inter).

Ajoute aussi le lien `<a href="#blog">Blog</a>` dans le menu de navigation `.nlinks` entre FAQ et la fin des liens.

---

## Structure HTML de la section

La section contient 3 cartes d'articles. Chaque carte fonctionne en accordéon : clic sur la carte déplie le contenu complet, reclic referme. Utilise un système simple avec une classe `.blog-open` toggleée en JS.

Style des cartes :
- Fond : var(--bg2)
- Bordure : 1px solid var(--border)
- Border-radius : 16px
- Padding header : 28px 32px
- Tag coloré en haut à gauche (pill style existant)
- Date en font-family mono, couleur var(--text3)
- Titre en Figtree bold 20px, couleur var(--text)
- Extrait en 14px, couleur var(--text2)
- Chevron Font Awesome `fa-chevron-down` qui tourne 180deg à l'ouverture (transition 0.3s)
- Contenu déplié : padding 0 32px 32px, display none par défaut, display block quand .blog-open
- Dans le contenu déplié : sous-titres en `<h4>` Figtree bold 16px, paragraphes en 15px var(--text2), listes avec bullets var(--primary), strong en var(--text)

---

## Article 1

**Tag :** Réglementation — fond rgba(245,158,11,0.1) bordure rgba(245,158,11,0.3) couleur #F59E0B
**Date :** Mars 2026
**Titre :** P6 2026-2030 : ce qui change concrètement pour vos dossiers CEE tertiaires
**Extrait :** La période 6 est entrée en vigueur le 1er janvier 2026. Contrôles renforcés, fiches révisées, traçabilité accrue — voilà ce qu'on voit sur le terrain.

**Contenu complet :**

La période 6 est entrée en vigueur le 1er janvier 2026. Pour les gestionnaires de patrimoine tertiaire, ce n'est pas juste un changement de numéro — c'est un durcissement réel des règles du jeu. Voilà ce qu'on voit sur le terrain.

**Ce qui change vraiment**

L'objectif national passe à 5 250 TWh cumac sur 5 ans, en hausse significative par rapport à la P5. Sur le papier, plus de volume à distribuer. Dans les faits, les conditions pour y accéder sont plus strictes.

Trois points concrets qui impactent vos dossiers dès maintenant :

**1. Contrôles renforcés dès le dépôt**
Les taux de contrôle documentaires ont augmenté sur une quarantaine de fiches. Ce qui passait en P5 avec un dossier incomplet sera refusé en P6. Les devis doivent être irréprochables : mentions obligatoires, performances techniques, références produits — tout doit être là avant signature.

**2. Sélection plus stricte des opérations éligibles**
Certaines fiches peu efficaces ont été supprimées ou fusionnées. Les opérations restantes sont mieux encadrées mais exigent une traçabilité accrue : preuves de réalisation, attestations, fiches techniques équipements. Le volume de documents à préparer a augmenté.

**3. Valorisation ajustée aux performances réelles**
Fini les forfaits approximatifs. En P6, la valorisation des kWh cumac s'appuie davantage sur les performances réellement atteintes. Pour le tertiaire, ça signifie que le dimensionnement des équipements et les coefficients déclarés seront vérifiés.

**Ce que ça change dans notre approche**

Sur chaque dossier tertiaire que nous traitons depuis janvier 2026, nous avons renforcé l'audit initial : vérification ligne par ligne des devis, contrôle des certifications RGE, validation des fiches PNCEE applicables avant toute mise en concurrence. Ce travail en amont évite les rejets qui coûtent cher — en temps et en prime perdue.

**La bonne nouvelle**

Les acteurs sérieux — délégataires et mandataires rigoureux — sortent renforcés de ce durcissement. Moins de dossiers bidons en circulation, meilleure tenue des cours. Pour les maîtres d'ouvrage tertiaires qui anticipent et préparent correctement leurs dossiers, P6 est une opportunité réelle.

**En résumé**

Anticipez, documentez, faites vérifier. Un dossier CEE bien préparé en P6 vaut mieux que deux mal ficelés. C'est exactement là qu'intervient un mandataire technique — pas juste pour négocier le taux, mais pour sécuriser le dossier de bout en bout.

---

## Article 2

**Tag :** Fiches CEE — fond rgba(14,165,233,0.1) bordure rgba(14,165,233,0.3) couleur #0EA5E9
**Date :** Février 2026
**Titre :** BAT-TH-163 et BAT-TH-164 : les nouvelles fiches PAC tertiaire en P6
**Extrait :** Depuis le 1er janvier 2026, la fiche BAT-TH-113 n'existe plus. Elle a été scindée en deux fiches distinctes. Ce que ça change pour votre dossier CEE.

**Contenu complet :**

Depuis le 1er janvier 2026, la fiche BAT-TH-113 n'existe plus. Elle a été scindée en deux fiches distinctes. Si vous avez un projet de pompe à chaleur en tertiaire, voilà ce qui change concrètement pour votre dossier CEE.

**Pourquoi ce changement ?**

La fiche BAT-TH-113 couvrait jusqu'en P5 deux technologies très différentes sous le même référentiel : les PAC air/eau et les PAC eau/eau. Le 75e arrêté CEE du 6 septembre 2025 les a séparées pour mieux encadrer les performances réelles de chaque technologie.

Deux nouvelles fiches en vigueur depuis le 1er janvier 2026 :
- BAT-TH-163 — PAC de type air/eau (la plus courante en tertiaire)
- BAT-TH-164 — PAC de type eau/eau ou eau glycolée/eau (géothermie, nappe phréatique)

**BAT-TH-163 en pratique — PAC air/eau**

C'est la fiche qui concerne la majorité des projets tertiaires : hôtels, bureaux, commerces, établissements publics chauffés par pompe à chaleur air/eau.

Points de vigilance pour votre dossier :
- L'engagement doit être postérieur au 1er janvier 2026 (date de devis faisant foi) — un devis signé avant cette date relève encore de BAT-TH-113 P5
- L'installation doit être réalisée par un professionnel qualifié RGE
- Les performances COP/ETAS doivent figurer explicitement sur le devis avec références produits
- La puissance installée doit correspondre aux besoins réels du bâtiment — le surdimensionnement sera contrôlé

**Ce qu'on voit sur le terrain**

Sur les projets hôteliers et bureaux que nous traitons depuis janvier, la confusion BAT-TH-113 / BAT-TH-163 génère des erreurs sur les devis des installateurs. Beaucoup d'entreprises RGE n'ont pas encore mis à jour leurs documents types. Un devis qui mentionne encore BAT-TH-113 pour une opération engagée en 2026 sera refusé au dépôt.

**Notre conseil**

Avant de signer tout devis de PAC en tertiaire en 2026 : vérifiez que la fiche mentionnée est bien BAT-TH-163 ou BAT-TH-164 selon la technologie. Si votre installateur mentionne encore BAT-TH-113, demandez-lui de corriger avant signature — l'antériorité du devis est la condition sine qua non.

---

## Article 3

**Tag :** Conseil terrain — fond rgba(16,185,129,0.1) bordure rgba(16,185,129,0.3) couleur #10B981
**Date :** Janvier 2026
**Titre :** Décret tertiaire + CEE : comment financer votre mise en conformité OPERAT avec les primes énergie
**Extrait :** Échéance OPERAT au 30 septembre 2026. Si votre bâtiment tertiaire n'est pas en trajectoire, les CEE peuvent financer une partie significative des travaux nécessaires.

**Contenu complet :**

Échéance OPERAT au 30 septembre 2026 pour les consommations 2025. Si votre bâtiment tertiaire n'est pas en trajectoire, vous avez encore une fenêtre pour agir — et les CEE peuvent financer une partie significative des travaux nécessaires.

**Le contexte : deux obligations qui se superposent**

Le décret éco-énergie tertiaire impose aux bâtiments de plus de 1 000 m² une réduction de consommation de 40% d'ici 2030 par rapport à l'année de référence. Les CEE, eux, financent les travaux qui permettent d'atteindre cet objectif.

Le point clé que beaucoup ratent : ces deux dispositifs sont cumulables. Les travaux que vous devez faire pour respecter le décret tertiaire sont souvent les mêmes que ceux qui génèrent le plus de kWh cumac CEE.

**Les travaux qui cochent les deux cases**

Isolation de l'enveloppe — Toiture terrasse (BAT-EN-101), ITE façades (BAT-EN-102), planchers bas (BAT-EN-103) : ces opérations réduisent la consommation réelle déclarée sur OPERAT et génèrent des kWh cumac valorisables en CEE. Double bénéfice, un seul chantier.

Remplacement des systèmes CVC — PAC air/eau (BAT-TH-163), chaudière condensation (BAT-TH-116), VMC double flux (BAT-TH-125) : ce sont les postes les plus impactants sur la consommation OPERAT et parmi les mieux valorisés en CEE tertiaire.

Pilotage et GTB — La GTB (BAT-TH-116 révisée P6) est désormais exigée sur certaines installations CVC pour obtenir les CEE. Elle est aussi l'un des leviers les plus efficaces pour tenir la trajectoire décret tertiaire sans travaux lourds.

Éclairage LED — BAT-EQ-127 : souvent sous-estimé. Sur un grand tertiaire, le remplacement LED représente 15 à 25% de l'économie d'énergie finale déclarée sur OPERAT et génère des volumes CEE significatifs.

**La mécanique financière**

Prenons un immeuble de bureaux de 3 000 m² à rénover :
- Budget travaux estimé : 400 000 €
- Prime CEE potentielle : 35 000 à 55 000 € selon le cours et les fiches
- Réduction consommation OPERAT : -35 à -45% selon les lots

La prime CEE ne finance pas tout, mais elle réduit le reste à charge et accélère le retour sur investissement — souvent de 6 à 18 mois selon l'opération.

**Quand déclencher la démarche ?**

Le plus tôt possible — l'antériorité du devis est obligatoire. Si vous planifiez des travaux pour être en règle sur OPERAT 2026, vous devez avoir signé vos devis conformes avant le début des travaux. Un audit CEE en amont de la consultation des entreprises permet d'orienter les choix techniques pour maximiser à la fois la performance OPERAT et les volumes CEE valorisables.

**En résumé**

Décret tertiaire et CEE ne sont pas deux sujets séparés. Ce sont deux leviers du même projet de rénovation. Un mandataire technique qui connaît les deux dispositifs vous permet d'optimiser le financement global — pas juste de maximiser la prime.

---

## CSS à ajouter

Ajoute ces styles dans le bloc `<style>` existant :

```css
.blog-card{background:var(--bg2);border:1px solid var(--border);border-radius:16px;overflow:hidden;margin-bottom:16px;transition:border-color 0.2s}
.blog-card:hover{border-color:var(--border2)}
.blog-card.blog-open{border-color:rgba(14,165,233,0.3)}
.blog-header{padding:28px 32px;cursor:pointer;display:flex;align-items:flex-start;justify-content:space-between;gap:20px}
.blog-meta{display:flex;align-items:center;gap:10px;margin-bottom:12px;flex-wrap:wrap}
.blog-date{font-family:var(--mono);font-size:12px;color:var(--text3)}
.blog-title{font-family:var(--disp);font-size:20px;font-weight:700;margin-bottom:8px;line-height:1.3}
.blog-excerpt{font-size:14px;color:var(--text2);line-height:1.6}
.blog-chevron{width:32px;height:32px;border-radius:50%;background:var(--surface);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--text3);font-size:12px;transition:all 0.3s;margin-top:4px}
.blog-card.blog-open .blog-chevron{background:var(--pdim);color:#0EA5E9;transform:rotate(180deg)}
.blog-body{display:none;padding:0 32px 32px;border-top:1px solid var(--border)}
.blog-card.blog-open .blog-body{display:block}
.blog-body h4{font-family:var(--disp);font-size:16px;font-weight:700;color:var(--text);margin:20px 0 8px}
.blog-body p{font-size:15px;color:var(--text2);line-height:1.75;margin-bottom:12px}
.blog-body ul{list-style:none;display:flex;flex-direction:column;gap:8px;margin-bottom:16px;padding-left:4px}
.blog-body ul li{font-size:14px;color:var(--text2);display:flex;align-items:flex-start;gap:10px;line-height:1.6}
.blog-body ul li::before{content:'';width:5px;height:5px;border-radius:50%;background:#0EA5E9;flex-shrink:0;margin-top:8px}
.blog-body strong{color:var(--text)}
```

## JS à ajouter

Ajoute cette fonction dans le bloc `<script>` existant :

```js
function toggleBlog(el){
  const card=el.closest('.blog-card');
  const isOpen=card.classList.contains('blog-open');
  document.querySelectorAll('.blog-card').forEach(c=>c.classList.remove('blog-open'));
  if(!isOpen)card.classList.add('blog-open');
}
```

## Note finale

Sauvegarde le fichier une fois toutes les modifications appliquées. Vérifie que la section blog s'affiche correctement entre la FAQ et les Partenaires, et que le lien Blog apparaît dans la navigation.
