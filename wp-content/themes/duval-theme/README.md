# Duval Couverture - Thème WordPress Tech Edition

Thème WordPress ultra-moderne avec esthétique **Tech/IA** - Design minimaliste futuriste créé spécialement pour Duval Couverture.

---

## 🎨 Caractéristiques du Design

### Design Signature
- **Navigation verticale flottante** sur la droite (desktop)
- **Footer flottant** arrondi qui ne touche pas les bords
- **Glassmorphism** - Effets de verre dépoli sur tous les panneaux
- **Couleurs** : Fond Slate-900 (quasi noir), accents bleu électrique (#3b82f6)
- **Typographie** : Inter / System fonts ultra-épurée

### Éléments Uniques
- Header vertical sticky avec logo, menu et CTA
- Bouton d'appel sticky (mobile uniquement)
- Bulle chatbot en bas à gauche
- Animations au scroll (Intersection Observer)
- Grille Bento-box asymétrique pour les services

---

## 📦 Installation

1. **Télécharger** le dossier `duval-theme`
2. **Placer** dans `/wp-content/themes/`
3. **Activer** depuis l'admin WordPress (Apparence > Thèmes)

---

## 🔧 Configuration Requise

- WordPress 5.8+
- PHP 7.4+
- Aucun build tool requis ✅

### Technologies Utilisées
- **Tailwind CSS 3.4** (via CDN)
- **Google Fonts** (Inter)
- **JavaScript Vanilla** (pas de jQuery)

---

## 📄 Pages & Templates

### Pages WordPress à Créer

1. **Page d'accueil** → Utilise automatiquement `front-page.php`
2. **Contact** → Créer une page et sélectionner le template "Page Contact"
3. **Services** → Créer une page et sélectionner le template "Page Services"
4. **Pages SEO Villes** → Template "SEO Landing (Ville)"

### Templates Disponibles

| Fichier | Description |
|---------|-------------|
| `front-page.php` | Page d'accueil avec hero immersif et bento-grid |
| `page-contact.php` | Formulaire de contact avec glassmorphism |
| `page-services.php` | Présentation détaillée des services |
| `page-seo-landing.php` | Template pour pages villes (SEO local) |

---

## 🎯 Configuration des Pages SEO Villes

Pour créer une page optimisée SEO pour une ville :

1. Créer une nouvelle page WordPress
2. Sélectionner le template **"SEO Landing (Ville)"**
3. Ajouter les **champs personnalisés** suivants :
   - `ville` : Nom de la ville (ex: "Évreux")
   - `code_postal` : Code postal (ex: "27000")

> **Note** : Les champs personnalisés peuvent être ajoutés via un plugin comme **Advanced Custom Fields** ou directement dans le code.

---

## 📧 Configuration du Formulaire

Le formulaire de contact utilise **FormSubmit.co** :

- Email de destination : `ziannduval@gmail.com`
- Page de redirection après envoi : `/merci/`
- Pas de captcha (configuré)

### Créer une Page "Merci"

1. Créer une page WordPress avec le slug `/merci/`
2. Contenu suggéré :
```
Merci pour votre message !
Nous vous répondrons dans les plus brefs délais.
```

---

## 🖼️ Images à Remplacer

Toutes les images sont des **placeholders Unsplash**. Remplacez-les par vos vraies photos :

**Recherchez dans les fichiers** : `<!-- [IMAGE A CHANGER] -->`

### Images Recommandées
- Hero : 1920x1080px
- Services (bento cards) : 800x600px
- Services détaillés : 800x800px

---

## 🎨 Personnalisation

### Couleurs Principales

Les couleurs sont définies avec Tailwind. Pour modifier :

```css
/* Fond principal */
bg-slate-900 → #0f172a

/* Accents bleus */
from-blue-500 to-blue-600 → #3b82f6 → #2563eb

/* Texte */
text-white → #ffffff
text-slate-400 → #94a3b8
```

### Logo

Le logo est défini dans `functions.php` :

```php
'logo' => 'https://duval-couverture27.fr/wp-content/uploads/2025/12/LOGO-FINAL-PNG.png'
```

Pour changer : Téléversez votre logo via Médias et modifiez l'URL.

---

## 🔌 Plugins Recommandés

- **Advanced Custom Fields** (pour les champs ville/code postal)
- **Yoast SEO** (optimisation SEO)
- **WP Rocket** (cache et optimisation)
- **Wordfence** (sécurité)

---

## 📱 Responsive Design

Le thème est **100% responsive** :

- **Desktop** : Navigation verticale droite + footer flottant
- **Tablet** : Navigation mobile en haut
- **Mobile** : Menu hamburger + bouton d'appel sticky

---

## ⚡ Performances

### Optimisations Incluses
- ✅ Pas de jQuery
- ✅ Tailwind CSS via CDN (mise en cache navigateur)
- ✅ Lazy loading des images (attribut `loading="lazy"`)
- ✅ Emojis WordPress désactivés
- ✅ Version WP masquée (sécurité)

---

## 🎭 Animations

### Classes d'Animation Disponibles

| Classe | Effet |
|--------|-------|
| `.glass-effect` | Animation fade-in avec glassmorphism |
| `.glow-effect` | Effet de lueur pulsante |
| `.animate-on-scroll` | Apparition au scroll (fade + translate) |

---

## 📞 Informations de Contact

Toutes les infos sont centralisées dans `functions.php` :

```php
function duval_get_contact_info() {
    return array(
        'company_name' => 'Duval Couverture',
        'address'      => '1685 Rue des Mineurs',
        'city'         => '27240 Damville',
        'phone'        => '06 37 99 63 64',
        'email'        => 'ziannduval@gmail.com',
        'logo'         => 'URL_DU_LOGO',
    );
}
```

Pour modifier, éditez uniquement cette fonction.

---

## 🚀 Déploiement

1. Activer le thème dans WordPress
2. Créer les pages (Accueil, Contact, Services)
3. Définir la page d'accueil : **Réglages > Lecture**
4. Créer les menus : **Apparence > Menus**
5. Remplacer les images placeholder
6. Tester le formulaire de contact

---

## 🐛 Troubleshooting

### Le menu ne s'affiche pas
→ Vérifier que le menu est assigné dans **Apparence > Menus** à "Menu Principal"

### Les animations ne fonctionnent pas
→ Vérifier que JavaScript est activé et qu'il n'y a pas d'erreur console

### Le formulaire ne fonctionne pas
→ Vérifier que FormSubmit n'est pas bloqué par un pare-feu

### Le design ne s'affiche pas correctement
→ Vider le cache navigateur et WordPress

---

## 📝 Support

Pour toute question ou personnalisation supplémentaire, contactez votre développeur.

---

## 📜 Licence

Ce thème est créé spécifiquement pour **Duval Couverture**.
Tous droits réservés © 2025 Duval Couverture.

---

## 🎉 Fonctionnalités Bonus

- ✅ Shortcodes téléphone : `[duval_phone]`
- ✅ Shortcodes email : `[duval_email]`
- ✅ Support SVG dans médiathèque
- ✅ Widget area footer
- ✅ SEO-friendly (structure HTML sémantique)

---

**Version** : 1.0.0
**Dernière mise à jour** : Décembre 2025
**Créé par** : Claude Code (Anthropic)
