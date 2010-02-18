<?php
/**
 * @file
 * @package legacy
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
    exit();
}

/**
 * Interface of progress use delegate
**/
abstract class Legacy_AbstractProgressUseDelegate
{
    /**
     * getModuleUsingProgress
     *
     * @param mix[] &$list
     *	$list['dirname']
     *	$list['target_name']
     *
     * @return  void
     */ 
    abstract public function getTargetUsingProgress(/*** array ***/ &$list);

	/**
	 * getOriginalUrl
	 *
	 * @param string &$url
	 * @param string $dirname
	 * @param string $target_name
	 * @param int $target_id
	 *
     * @return  void
	 */	
	abstract public function getOriginalUrl(/*** string ***/ &$url, /*** string ***/ $dirname, /*** string ***/ $target_name, /*** int ***/ $target_id);

	/**
	 * updateStatus
	 *
	 * @param string 	&$result
	 * @param string 	$dirname
	 * @param string 	$target_name
	 * @param int	 	$target_id
	 * @param bool		$status
	 *
     * @return  void
	 */	
	abstract public function updateStatus(/*** string ***/ &$result, /*** string ***/ $dirname, /*** string ***/ $target_name, /*** int ***/ $target_id, /*** bool ***/ $status);
}

?>