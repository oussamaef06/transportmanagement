<?php
require '../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/admin.lib.php';

$langs->load("transportmanagement@transportmanagement");

// Security check
if (! $user->admin) accessforbidden();

$title = $langs->trans("TransportManagement");
llxHeader('', $title);

// Display Title
print load_fiche_titre($title, '', 'title_setup');

print '<div class="fichecenter">';
print '<table class="noborder" width="100%">';
print '<tr class="liste_titre">';
print '<td>'.$langs->trans("Section").'</td>';
print '<td>'.$langs->trans("Description").'</td>';
print '</tr>';
print '<tr class="oddeven">';
print '<td><a href="drivers/index.php">'.$langs->trans("Drivers").'</a></td>';
print '<td>'.$langs->trans("Manage drivers").'</td>';
print '</tr>';
print '<tr class="oddeven">';
print '<td><a href="vehicles/index.php">'.$langs->trans("Vehicles").'</a></td>';
print '<td>'.$langs->trans("Manage vehicles").'</td>';
print '</tr>';
print '<tr class="oddeven">';
print '<td><a href="missions/index.php">'.$langs->trans("Missions").'</a></td>';
print '<td>'.$langs->trans("Manage missions").'</td>';
print '</tr>';
print '</table>';
print '</div>';

llxFooter();
$db->close();
?>
