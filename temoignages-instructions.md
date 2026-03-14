# Instructions — Témoignages + Section "Qui sommes-nous" dans a2fk-v4

## Action à effectuer

Dans le fichier `a2fk-v4 VERSION FINALE 1303.html`, effectue deux ajouts :

1. Une section témoignages après la section Projets (id="projets") et avant la section Urgence/Opportunité
2. Une section courte "Qui sommes-nous" juste avant le footer

---

## SECTION 1 — Témoignages

ID de la section : `id="temoignages"`
Titre : Ils nous ont fait confiance
Sous-titre : Des résultats concrets, des projets réels en Occitanie et au-delà

Style : même style dark que le reste, fond var(--bg2), 3 cartes côte à côte sur desktop, empilées sur mobile.

Chaque carte :
- Fond var(--surface), bordure 1px solid var(--border), border-radius 16px, padding 32px
- Guillemets décoratifs en haut à gauche (font-size 64px, couleur var(--primary), opacity 0.3, font-family var(--disp))
- Texte du témoignage en 15px, couleur var(--text2), line-height 1.8, font-style italic
- Séparateur fin (border-top 1px solid var(--border)) avant la signature
- Signature : nom en Figtree bold 14px var(--text), poste/entreprise en mono 12px var(--text3)
- Tag coloré discret en bas à droite indiquant le type de projet

### Témoignage 1
Tag : Tertiaire mixte — couleur #0EA5E9
Texte :
"On avait déjà bouclé le DCE quand A2FK est intervenu sur Faubourg 45. En 48h ils avaient identifié 48 000 € de CEE valorisables qu'on avait complètement loupés — essentiellement sur l'enveloppe et les CVC. Les devis ont été retravaillés avec nos entreprises pour les rendre conformes sans modifier les prix. C'est du temps et de l'argent qu'on aurait laissé sur la table."
Signature : Responsable programmes
Entreprise : Neocity — Montpellier

### Témoignage 2
Tag : Copropriété — couleur #10B981
Texte :
"Personne ne nous avait jamais parlé du calorifugeage ECS. A2FK nous a expliqué le dispositif, monté le dossier, et les travaux ont été intégralement couverts par la prime CEE. Les copropriétaires n'ont rien payé. La fiche a depuis été supprimée — on a eu de la chance de ne pas avoir attendu."
Signature : Gestionnaire de copropriété
Entreprise : Cabinet L'Adresse — Sète

### Témoignage 3
Tag : Entreprise RGE — couleur #F59E0B
Texte :
"A2FK ne fait pas que ramener des dossiers CEE. Ils nous ont aidés à structurer nos rapports chantier, développé notre réseau de prescripteurs. En 8 mois on a triplé notre volume de dossiers CEE traités. C'est un partenaire, pas un intermédiaire."
Signature : Dirigeant
Entreprise : Entreprise d'isolation RGE — Occitanie

---

## SECTION 2 — Qui sommes-nous

ID de la section : `id="about"`
Position : juste avant le footer, après la section contact

Style : fond var(--bg), pas de padding excessif — section sobre, 2 colonnes sur desktop (60% texte / 40% stats), 1 colonne sur mobile.

### Colonne gauche — Texte

Badge en haut : "Mandataire CEE indépendant — Occitanie" (style pill pb existant)

Titre (Figtree 800, clamp 28px-40px) :
"Farid Khemici
A2FK"

Texte principal (16px, var(--text2), line-height 1.8) :
"Mandataire CEE technique indépendant basé en Occitanie. 15 ans de terrain BTP — gestion de chantiers, DCE, AMO sur des opérations de réhabilitation collective et tertiaire.

Je traite personnellement chaque dossier, de l'audit initial au versement de la prime. Pas de sous-traitance, pas d'intermédiaire supplémentaire — vous avez en face de vous quelqu'un qui connaît les plans, lit les devis techniques et sait ce qu'est un Uw ou un ETAS.

Ce que ça change pour vous : des dossiers conformes du premier coup, une mise en concurrence réelle des délégataires, et un interlocuteur unique du début à la fin."

Ligne de contact directe en bas :
- Icône téléphone vert : 06 50 57 83 88 (lien tel:)
- Icône email bleu : contact.a2fk@gmail.com (lien mailto:)
- Icône localisation gris : Juvignac, Hérault (34)

### Colonne droite — 4 stats visuelles

Même style que les .scard existants mais plus compact, dans un bloc avec fond var(--bg2) border var(--border) border-radius 16px padding 28px :

Stat 1 : "15 ans" — "Expérience terrain BTP"
Stat 2 : "+120" — "Dossiers CEE traités"
Stat 3 : "2,2 M€" — "Primes négociées"
Stat 4 : "100%" — "Suivi personnalisé"

Chiffres en font-family mono, gradient bleu/vert, font-size 36px.
Labels en 12px var(--text3) uppercase.

---

## Navigation

Ajoute le lien `<a href="#temoignages">Témoignages</a>` dans le menu .nlinks après "Projets".

---

## CSS à ajouter dans le bloc style existant

```css
.tcard{background:var(--surface);border:1px solid var(--border);border-radius:16px;padding:32px;position:relative;transition:all 0.25s}
.tcard:hover{border-color:rgba(14,165,233,0.3);transform:translateY(-4px);box-shadow:0 16px 48px rgba(14,165,233,0.06)}
.tquote{font-family:var(--disp);font-size:64px;line-height:0.8;color:#0EA5E9;opacity:0.25;margin-bottom:16px;display:block}
.ttext{font-size:15px;color:var(--text2);line-height:1.8;font-style:italic;margin-bottom:24px}
.tsep{border:none;border-top:1px solid var(--border);margin-bottom:16px}
.tsign-name{font-family:var(--disp);font-size:14px;font-weight:700;color:var(--text);margin-bottom:2px}
.tsign-role{font-family:var(--mono);font-size:12px;color:var(--text3)}
.tgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
@media(max-width:900px){.tgrid{grid-template-columns:1fr}}
.about-grid{display:grid;grid-template-columns:3fr 2fr;gap:60px;align-items:center;max-width:1100px;margin:0 auto}
@media(max-width:900px){.about-grid{grid-template-columns:1fr}}
.about-name{font-family:var(--disp);font-size:clamp(28px,4vw,44px);font-weight:800;letter-spacing:-1px;line-height:1.1;margin-bottom:24px}
.about-text{font-size:16px;color:var(--text2);line-height:1.8;margin-bottom:16px}
.about-contact{display:flex;flex-direction:column;gap:10px;margin-top:28px}
.about-contact a{display:flex;align-items:center;gap:10px;font-size:14px;color:var(--text2);text-decoration:none;transition:color 0.2s}
.about-contact a:hover{color:var(--text)}
.about-stats{background:var(--bg2);border:1px solid var(--border);border-radius:16px;padding:28px;display:grid;grid-template-columns:1fr 1fr;gap:20px}
.astat-num{font-family:var(--mono);font-size:36px;font-weight:700;background:linear-gradient(135deg,#0EA5E9,#10B981);-webkit-background-clip:text;-webkit-text-fill-color:transparent;line-height:1;margin-bottom:6px}
.astat-label{font-size:12px;color:var(--text3);font-weight:500;letter-spacing:0.04em;text-transform:uppercase}
```

---

## Note finale

Sauvegarde le fichier une fois toutes les modifications appliquées.
Vérifie que :
- Les témoignages s'affichent après la section Projets
- La section About s'affiche juste avant le footer
- Les liens de navigation pointent correctement vers #temoignages et #about
