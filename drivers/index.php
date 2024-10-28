<?php
require '../../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/admin.lib.php';

$langs->load("transportmanagement@transportmanagement");

// Security check
if (! $user->admin) accessforbidden();

$title = $langs->trans("DriversManagement");
llxHeader('', $title);

print load_fiche_titre($title, '', 'title_setup');
print '<div class="fichecenter">';
print '<table class="noborder" width="100%">';
print '<tr class="liste_titre">';
print '<td>'.$langs->trans("DriverName").'</td>';
print '<td>'.$langs->trans("DriverLicense").'</td>';
print '<td>'.$langs->trans("Actions").'</td>';
print '</tr>';

// Add your code to list drivers

print '</table>';
print '</div>';

llxFooter();
$db->close();
?>
