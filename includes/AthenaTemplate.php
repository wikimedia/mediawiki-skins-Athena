<?php

class AthenaTemplate extends BaseTemplate {

	/**
	 * Merge together the views, actions and variants
	 * and remove the current action, per useless and confusing
	 *
	 * @return array
	 */
	private function getActions() {
		$actions = array_merge(
			$this->data['content_navigation']['views'],
			$this->data['content_navigation']['actions'],
			$this->data['content_navigation']['variants']
		);
		$action = $this->getSkin()->getRequest()->getVal( 'action', 'view' );
		// Remove the current action (doesn't work with Move)
		unset( $actions[ $action ] );
		return $actions;
	}

	/**
	 * Output the page
	 */
	public function execute() {
		include __DIR__ . '/../resources/Athena.phtml';
	}
}
