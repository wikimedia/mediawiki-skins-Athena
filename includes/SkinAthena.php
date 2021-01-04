<?php

class SkinAthena extends SkinTemplate {

	public $skinname = 'athena';

	public $template = 'AthenaTemplate';

	/**
	 * @param OutputPage &$out
	 * @param Skin &$skin
	 */
	static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		global $wgDefaultSkin;
		if ( $wgDefaultSkin === 'athena' || $wgDefaultSkin === 'Athena' ) {
			$out->addModuleStyles( 'skins.athena' );
		}
	}
}
