<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('CS CZ', 'Czech', 'Čeština', [
	'Class:ModuleInstallation/Attribute:comment' => 'Komentář',
	'Class:ModuleInstallation/Attribute:installed' => 'Installed on~~',
	'Class:ModuleInstallation/Attribute:name' => 'Jméno',
	'Class:ModuleInstallation/Attribute:version' => 'Verze',
	'Menu:iTopUpdate' => 'Upgrade aplikace',
	'Menu:iTopUpdate+' => 'Upgrade aplikace',
	'iTopUpdate:Error:BadFileContent' => 'Soubor neobsahuje data pro upgrade aplikace',
	'iTopUpdate:Error:BadFileFormat' => 'Soubor není zip',
	'iTopUpdate:Error:BadItopProduct' => 'Soubor neobsahuje kompatibilní verzi upgrade aplikace',
	'iTopUpdate:Error:Copy' => 'Chyba, nelze zkopírovat \'%1$s\' do \'%2$s\'',
	'iTopUpdate:Error:CorruptedFile' => 'Soubor %1$s je poškozen',
	'iTopUpdate:Error:FileNotFound' => 'Soubor nenalezen',
	'iTopUpdate:Error:FileUploadMaxSizeTooSmall' => 'Maximální velikost pro přenos souboru je pravděpodobně menší, než soubor který se snažíte nahrát. Bude nutné provést změnu PHP konfigurace',
	'iTopUpdate:Error:InvalidToken' => 'Invalid token~~',
	'iTopUpdate:Error:MissingFile' => 'Chybějící soubor: %1$s',
	'iTopUpdate:Error:MissingFunction' => 'Impossible to start upgrade, missing function~~',
	'iTopUpdate:Error:NoFile' => 'No file provided~~',
	'iTopUpdate:Error:UpdateFailed' => 'Upgrade skončil s chybou',
	'iTopUpdate:UI:Action' => 'Update',
	'iTopUpdate:UI:Back' => 'Zpět',
	'iTopUpdate:UI:Backup' => 'Záloha vytvořena před provedením update',
	'iTopUpdate:UI:CanCoreUpdate:Error' => 'Checking files failed (%1$s)~~',
	'iTopUpdate:UI:CanCoreUpdate:ErrorFileNotExist' => 'Checking files failed (File not exist %1$s)~~',
	'iTopUpdate:UI:CanCoreUpdate:Failed' => 'Kontrola souborů skončila s chybou',
	'iTopUpdate:UI:CanCoreUpdate:Loading' => 'Kontrola souborů',
	'iTopUpdate:UI:CanCoreUpdate:No' => 'Aplikace nemůže být updatována: %1$s',
	'iTopUpdate:UI:CanCoreUpdate:Warning' => 'Varování: update aplikace může skončit s chybou: %1$s',
	'iTopUpdate:UI:CanCoreUpdate:Yes' => 'Aplikace může být updatována',
	'iTopUpdate:UI:Cancel' => 'Storno',
	'iTopUpdate:UI:CannotUpdateUseSetup' => '<b>Some modified files were detected</b>, a partial update cannot be executed.</br>Follow the <a target="_blank" href="%2$s"> procedure</a> in order to manually upgrade your iTop. You must use the <a href="%1$s">setup</a> to update the application.~~',
	'iTopUpdate:UI:CheckInProgress' => 'Please wait during integrity check~~',
	'iTopUpdate:UI:CheckUpdate' => 'Verify upgrade file~~',
	'iTopUpdate:UI:ConfirmInstallFile' => 'You are about to install %1$s~~',
	'iTopUpdate:UI:Continue' => 'Pokračovat',
	'iTopUpdate:UI:CurrentVersion' => 'Aktuálně instalovaná verze',
	'iTopUpdate:UI:DBDiskSpace' => 'Prostor obsazený Databází',
	'iTopUpdate:UI:DiskFreeSpace' => 'Volné místo',
	'iTopUpdate:UI:DoBackup:Label' => 'Záložní soubory a databáze',
	'iTopUpdate:UI:DoBackup:Warning' => 'Backup is not recommended due to limited available disk space~~',
	'iTopUpdate:UI:DoFilesArchive' => 'Archive application files~~',
	'iTopUpdate:UI:DoUpdate' => 'Upgrade~~',
	'iTopUpdate:UI:FileUploadMaxSize' => 'File upload max size~~',
	'iTopUpdate:UI:History' => 'Versions History~~',
	'iTopUpdate:UI:ItopDiskSpace' => ITOP_APPLICATION_SHORT.' disk space~~',
	'iTopUpdate:UI:MaintenanceModeActive' => 'The application is currently under maintenance in read-only mode. You have to run a setup to return in normal mode.~~',
	'iTopUpdate:UI:NewVersion' => 'Newly installed version~~',
	'iTopUpdate:UI:PageTitle' => 'Application Upgrade~~',
	'iTopUpdate:UI:PostMaxSize' => 'PHP ini value post_max_size: %1$s~~',
	'iTopUpdate:UI:Progress' => 'Progress of the upgrade~~',
	'iTopUpdate:UI:RestoreArchive' => 'You can restore your application from the archive \'%1$s\'~~',
	'iTopUpdate:UI:RestoreBackup' => 'You can restore the database from \'%1$s\'~~',
	'iTopUpdate:UI:RunSetup' => 'Run Setup~~',
	'iTopUpdate:UI:SelectUpdateFile' => 'Select an upgrade file to upload~~',
	'iTopUpdate:UI:ServerFile' => 'Path of a package already on the server~~',
	'iTopUpdate:UI:Setup' => ITOP_APPLICATION_SHORT.' Setup~~',
	'iTopUpdate:UI:SetupLaunch' => 'Launch '.ITOP_APPLICATION_SHORT.' Setup~~',
	'iTopUpdate:UI:SetupLaunchConfirm' => 'This will launch '.ITOP_APPLICATION_SHORT.' setup, are you sure?~~',
	'iTopUpdate:UI:FastSetupLaunch' => 'Fast Setup~~',
	'iTopUpdate:UI:SetupMessage:Backup' => 'Database backup~~',
	'iTopUpdate:UI:SetupMessage:CheckCompile' => 'Check application upgrade~~',
	'iTopUpdate:UI:SetupMessage:Compile' => 'Upgrade application~~',
	'iTopUpdate:UI:SetupMessage:CopyFiles' => 'Copy new version files~~',
	'iTopUpdate:UI:SetupMessage:EnterMaintenance' => 'Entering maintenance mode~~',
	'iTopUpdate:UI:SetupMessage:ExitMaintenance' => 'Exiting maintenance mode~~',
	'iTopUpdate:UI:SetupMessage:FilesArchive' => 'Archive application files~~',
	'iTopUpdate:UI:SetupMessage:Ready' => 'Ready to start~~',
	'iTopUpdate:UI:SetupMessage:UpdateDatabase' => 'Upgrade database~~',
	'iTopUpdate:UI:SetupMessage:UpdateDone' => 'Upgrade completed~~',
	'iTopUpdate:UI:Status' => 'Status~~',
	'iTopUpdate:UI:UpdateDone' => 'Upgrade successful~~',
	'iTopUpdate:UI:UploadArchive' => 'Select a package to upload~~',
	'iTopUpdate:UI:UploadMaxFileSize' => 'PHP ini value upload_max_filesize: %1$s~~',
	'iTopUpdate:UI:WarningReadOnlyDuringUpdate' => 'During the upgrade, the application will be read-only.~~',
	'iTopUpdate:UI:WithDBBackup' => 'Database backup~~',
	'iTopUpdate:UI:WithFilesBackup' => 'Application files backup~~',
	'iTopUpdate:UI:WithoutBackup' => 'No backup is planned~~',
	'itop-core-update/Operation:ConfirmUpdate/Title' => 'Confirm Application Upgrade~~',
	'itop-core-update/Operation:SelectUpdateFile/Title' => 'Application Upgrade~~',
	'itop-core-update/Operation:UpdateCoreFiles/Title' => 'Application Upgrading~~',
	'itop-core-update/Operation:UpdateDone/Title' => 'Application Upgrade Done~~',
	'itop-core-update:UI:ConfirmUpdate' => 'Confirm Application Upgrade~~',
	'itop-core-update:UI:SelectUpdateFile' => 'Application Upgrade~~',
	'itop-core-update:UI:UpdateCoreFiles' => 'Application Upgrading~~',
	'itop-core-update:UI:UpdateDone' => 'Application Upgrade~~',
]);
