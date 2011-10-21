<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Model for Attachments
 *
 * PHP version 5
 * LICENSE: This source file is subject to GPLv3 license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/gpl.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    Ushahidi - http://source.swiftly.org
 * @subpackage Models
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License v3 (GPLv3) 
 */
class Model_Attachment extends ORM
{
	/**
	 * An attachment has and belongs to many droplets
	 *
	 * @var array Relationhips
	 */
	protected $_has_many = array(
		'droplets' => array(
			'model' => 'droplet',
			'through' => 'attachments_droplets'
			),
		'accounts' => array(
			'model' => 'account',
			'through' => 'attachments_droplets'
			),				
		);
		
	/**
	 * Overload saving to perform additional functions on the attachment
	 */
	public function save(Validation $validation = NULL)
	{
		// Do this for first time attachments only
		if ($this->loaded() === FALSE)
		{
			// Save the date the attachment was first added
			$this->attachment_date_add = date("Y-m-d H:i:s", time());
		}

		return parent::save();
	}			
}