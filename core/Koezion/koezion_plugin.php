<?php
/**
 * 
 */
class KoeZionPlugin extends Object {  

	protected function _files_copy($filesCopy) {
		
		$processResult = true;
		foreach($filesCopy as $fileCopy) {
		
			FileAndDir::createPath($fileCopy['destinationPath']); //Création du dossier de destination
		
			//Dans le cas ou on un seul fichier à copier
			if(isset($fileCopy['sourceName']) && isset($fileCopy['destinationName'])) {
		
				$sourceFile = $fileCopy['sourcePath'].DS.$fileCopy['sourceName']; //Chemin du fichier source
				$destinationFile = $fileCopy['destinationPath'].DS.$fileCopy['destinationName']; //Chemin du fichier de destination
				$processResult = FileAndDir::fcopy($sourceFile, $destinationFile); //Copie du fichier
		
				//Dans le cas ou on a le contenu d'un dossier à copier
			} else if(isset($fileCopy['sourcePath']) && isset($fileCopy['destinationPath'])) {
		
				$sourcePathContent = FileAndDir::directoryContent($fileCopy['sourcePath']);
				foreach($sourcePathContent as $v) {
		
					$processResult = FileAndDir::fcopy($fileCopy['sourcePath'].DS.$v, $fileCopy['destinationPath'].DS.$v);
				}
			}
		}
		
		return $processResult;
	}
	
	public function _test()	{
		$class_vars = get_object_vars($this);
		var_dump($class_vars);
	}
}