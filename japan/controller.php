<?php  

defined('C5_EXECUTE') or die(_("Access Denied."));

class JapanPackage extends Package {

	protected $pkgHandle = 'japan';
	protected $appVersionRequired = '5.5.0';
	protected $pkgVersion = '0.0.1';
	
	public function getPackageDescription() {
		return t('Japanese Version');
	}
	
	public function getPackageName(){
		return t('Japan');
	}
	
	public function on_start() {
	}
	
	public function uninstall() {
		parent::uninstall();
	}
		
	public function install() {
		$pkg = parent::install();

		$this->on_start();
	}

}