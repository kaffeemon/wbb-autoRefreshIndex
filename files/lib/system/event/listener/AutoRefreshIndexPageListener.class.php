<?php

require_once WCF_DIR.'lib/system/event/EventListener.class.php';

/**
 * @package	com.github.kaffeemon.wbb.autoRefreshIndex
 * @license	LGPL
 * @author	Kaffeemon <http://github.com/kaffeemon>
 */
class AutoRefreshIndexPageListener implements EventListener {
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if (WCF::getUser()->autoRefreshIndex) {
			$seconds = intval(WCF::getUser()->autoRefreshIndex)*60;
			WCF::getTPL()->append('specialStyles', '<meta http-equiv="refresh" content="'.$seconds.';URL=index.php?page=Index'.SID_ARG_2ND.'" />');
		}
	}
}
