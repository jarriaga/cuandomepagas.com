<?php
/**
 * Created by PhpStorm.
 * User: jbarron
 * Date: 2/10/17
 * Time: 9:59 PM
 */

namespace App\Http\Controllers\Images;

use App\Http\Controllers\ImageController;
use Intervention\Image\Facades\Image;


class ComplaintImage extends ImageController
{

	private static  $folder = '/complaint-image/';


	/**
	 *
	 * Function to save a complaint user image into the S3 amazon
	 *
	 * @param $file
	 * @param string $folder
	 * @param string $filename
	 * @return string
	 * @throws \Exception
	 */
	public static function put($file,$folder='',$filename='')
	{
		//generate the file with intervention
		$image = Image::make($file);
		//scale and encode image
		$stream = $image->fit(500)->encode('jpg',80);
		//create a random filename
		$filename=str_random().'.jpg';
		//call parent methodi in the ImageController class
		if ( parent::put($stream->getEncoded(),self::$folder,$filename)  !=true){
			throw new \Exception('Error saving image');
		}
		return $filename;
	}



	public static function getUrl($filename)
	{
		if($filename){
			return parent::getUrl(self::$folder.$filename);
		}else{
			return parent::getUrl('/default-user.png');
		}
	}


	public static function exist($filename)
	{
		return parent::exist(self::$folder.$filename);
	}

	public static function delete($filename)
	{
		return parent::delete(self::$folder.$filename);
	}

	
}