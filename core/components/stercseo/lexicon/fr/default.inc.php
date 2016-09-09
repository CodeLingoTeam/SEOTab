<?php
/**
 * SEOTab French language file
 *
 * @author Sterc <modx@sterc.nl> - Sterc Internet & Marketing
 *
 * @package stercseo
 * @subpackage lexicon
 */

$_lang['stercseo.seo'] = 'StercSEO';
$_lang['stercseo.seotab'] = 'SEOTab';

//Tab Findability

$_lang['stercseo.findability'] = 'Trouvabilité';

$_lang['stercseo.index'] = 'Inclure dans les moteurs de recherche';
$_lang['stercseo.index_yes'] = 'Oui, cette page peut être indéxée';
$_lang['stercseo.index_no'] = 'Non, cette page ne doit pas être indéxée (noindex)';
$_lang['stercseo.index_desc'] = 'Note : certaines pages de votre site ne doivent pas être visibles dans les moteurs de recherche et plan de site (sitemap). Par exemple : disclaimer, termes & conditions d\'utilisation, politique de confidentialité.';

$_lang['stercseo.follow'] = 'Suivre les liens';
$_lang['stercseo.follow_yes'] = 'Oui, suivre les liens de cette page';
$_lang['stercseo.follow_no'] = 'Non, ne pas suivre les liens de cette page (nofollow)';
$_lang['stercseo.follow_desc'] = 'Définissez ci les moteurs de recherche doivent (ou ne doivent pas) suivre les liens de cette page';

$_lang['stercseo.searchable'] = 'Inclure les pages dans la recherche interne du site';
$_lang['stercseo.searchable_yes'] = 'Oui, inclure cette page dans la recherche interne';
$_lang['stercseo.searchable_no'] = 'Non, ne pas inclure cette page dans la recherche interne';
$_lang['stercseo.searchable_desc'] = 'Indiquez peut être inclue dans la recherche interne de votre site. Un exemple de page qui peut être superflue : la page de remerciement d\'un formulaire de contact.';

//Tab Sitemap
$_lang['stercseo.sitemap'] = 'Google Sitemap';

$_lang['stercseo.sitemap_include'] = 'Inclure les pages dans Google Sitemap';
$_lang['stercseo.sitemap_include_yes'] = 'Oui, inclure cette page dans Google Sitemap';
$_lang['stercseo.sitemap_include_no'] = 'Non, masquer cette page dans Google Sitemap';
$_lang['stercseo.sitemap_include_desc'] = 'Indiquez si vous souhaitez que cette page apparaîsse dans le plan du site (sitemap) pour Google';

$_lang['stercseo.priority'] = 'Priorité';
$_lang['stercseo.priority_important'] = '1.0 - Élevée';
$_lang['stercseo.priority_normal'] = '0.5 - Normale';
$_lang['stercseo.priority_nopriority'] = '0.25 - Faible';
$_lang['stercseo.priority_desc'] = 'En indiquant un niveau de priorité, vous indiquz aux moteurs de recherche l\'importance de la page. Veuillez noter les moteurs de recherche n\'accepteront pas "aveuglément" vos priorités.';

$_lang['stercseo.changefreq'] = 'Fréquence de mise à jour';
$_lang['stercseo.changefreq_daily'] = 'Journalière';
$_lang['stercseo.changefreq_weekly'] = 'Hebdomadaire';
$_lang['stercseo.changefreq_monthly'] = 'Mensuelle';
$_lang['stercseo.changefreq_desc'] = 'Indiquez la fréquence à laquelle vous estimez que le contenu de cette page sera modifié.';


//Tab Redirects
$_lang['stercseo.redirects'] = 'Redirections 301';
$_lang['stercseo.uri_add'] = 'Ajouter l\'ancienne URL';
$_lang['stercseo.uri_header'] = 'Indiquez ci-dessous la liste des anciennes URLs de cette page';
$_lang['stercseo.grid_noresults'] = '<h4>Aucune redirection</h4><p>Il n\'y a aucune redirection pour cette page.</p>';
$_lang['stercseo.redirects_desc'] = 'Un changement sur votre page affecte les moteurs de recherche. Changer l\'URL d\'une page entraînera la perte de la valeur acquise auprès des moteurs de recherche. Avec des redirections 301, vous ne perdez pas cette valeur. StercSEO ajoute automatiquement des redirections 301 lorsque l\'URL d\'une page change.';
$_lang['stercseo.alreadyexists'] = '[[++site_URI]]<strong>[[+URI]]</strong> a déjà été ajouté à la page : <strong>[[+pagetitle]] ([[+id]])</strong>';
$_lang['stercseo.uri_label'] = 'Enter the full url (ex. http://www.google.com) you want to redirect';

//Tab Freeze URL
$_lang['stercseo.freeze_uri'] = 'URL fixe';
$_lang['stercseo.uri_override'] = 'Indiquez une URL fixe pour cette page';
$_lang['stercseo.uri_after'] = 'URL après ';

//Settings
$_lang['setting_stercseo.context-aware-alias'] = '301 Redirects are unique per context';
$_lang['setting_stercseo.context-aware-alias_desc'] = 'Make old urls unique to context';
$_lang['setting_stercseo.index'] = 'Default resource setting: Include in search engines';
$_lang['setting_stercseo.index_desc'] = 'Include new pages in search engines per default';
$_lang['setting_stercseo.follow'] = 'Default resource setting: Following links';
$_lang['setting_stercseo.follow_desc'] = 'Follow links on new pages per default';
$_lang['setting_stercseo.sitemap'] = 'Default resource setting: Include pages in the Google Sitemap';
$_lang['setting_stercseo.sitemap_desc'] = 'Include new pages in sitemap.xml per default';
$_lang['setting_stercseo.priority'] = 'Default resource setting: Priority';
$_lang['setting_stercseo.priority_desc'] = 'Priority of page in sitemap.xml (0.25 or 0.5 or 1)';
$_lang['setting_stercseo.changefreq'] = 'Default resource setting: Update frequency';
$_lang['setting_stercseo.changefreq_desc'] = 'Default frequency (daily, weekly, monthly)';
$_lang['setting_stercseo.hide_from_usergroups'] = 'Hide SEOTab from these usergroups';
$_lang['setting_stercseo.hide_from_usergroups_desc'] = 'Comma separated list of usergroups who are not allowed to access SEOTab';

// CMP
$_lang['stercseo.redirects.description'] = 'Here you can view and manage your 301 redirects. Redirects can also be added from the resource create and update pages.';
$_lang['stercseo.uri'] = 'Old url (url to redirect)';
$_lang['stercseo.target'] = 'Target resource / url';
$_lang['stercseo.uri_update'] = 'Update redirect';
$_lang['stercseo.uri_remove'] = 'Remove redirect';
$_lang['stercseo.uri_remove_confirm'] = 'Are you sure you want to remove this redirect?';
$_lang['stercseo.migrate'] = 'Migrate redirects';
$_lang['stercseo.migrate_desc'] = 'Here you can migrate your redirects (SEOTab version 1.2.2 and below) from resource properties to seoUrl objects. This page will automatically migrate all the redirects for you, so no action is required, but please keep this page open for SEOTab to correctly handle the migration process.';
$_lang['stercseo.migrate_alert'] = 'Your SEOTab redirects need to be migrated. Click here to visit the migration page.';
$_lang['stercseo.migrate_status'] = 'Status';
$_lang['stercseo.migrate_running'] = 'Currently running migration process. Please keep this page open in your browser.';
$_lang['stercseo.migrate_success'] = 'Migration completed';
$_lang['stercseo.migrate_success_msg'] = 'All your redirects have been successfully migrated.';
