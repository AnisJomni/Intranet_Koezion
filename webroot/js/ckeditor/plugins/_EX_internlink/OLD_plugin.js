// Ici je cr�e une action FCK qui s'appelle Internlink, et qui chargera le fichier test.html (qui sera au m�me niveau que ce fichier) lors de son appel
FCKCommands.RegisterCommand('Internlink', new FCKDialogCommand('Internlink','Ajout lien interne',FCKConfig.PluginsPath+'internlink/test.html', 300, 300 ));
 
// Ici je cr�e un bouton pour la toolbar auquel j'associe l'action pr�c�demment d�finie
FCKToolbarItems.RegisterItem( 'Internlink', new FCKToolbarButton( 'Internlink', 'Lien interne', null, FCK_TOOLBARITEM_ICONTEXT, true, true, 1 ) ) ;