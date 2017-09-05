<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class OperatorAssistantController extends JControllerLegacy

{

        

     function messages() {

     

        $file = JRequest::getVar('file');

        $searchpath = JPATH_COMPONENT . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'messages' . DIRECTORY_SEPARATOR . $file;

        readfile("$searchpath");

        exit();

     }

     

     function crea()     {

        

        $this->addModelPath( JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_operatorassistant' . DIRECTORY_SEPARATOR . 'models' );

        $model = $this->getModel('OperatorAssistant');

		    $dir = $model->getItem()->directory;

		    $mail = $model->getItem()->mail;

        $log = array();

        

        $dt = new DateTime();

        $nomeFile = $dt->format('Y_m_d_H_i_s')."_".uniqid()."_"."chat.txt";

        $message = trim(nl2br($_POST['message']));

        $file = $dir.'/'.$nomeFile;

        fwrite(fopen($file, 'a'), $message = str_replace("\n", " ", $message) . "\n");

        $log['nomeFile'] = $nomeFile; 

        $message = 'Richiesta Supporto via Chat';
        
        $message = $message . "\r\n" . JURI::root() . "index.php?option=com_operatorassistant&view=operator&layout=operator&tmpl=component";

        $subject = 'Supporto Chat'; 

        $headers = 'From: '.$mail . "\r\n" . 'X-Mailer: PHP/' . phpversion();

        mail($mail, $subject, $message, $headers);

        echo json_encode($log);

        exit();

        

     }

     

     function aggiorna() {

     

        $this->addModelPath( JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_operatorassistant' . DIRECTORY_SEPARATOR . 'models' );

        $model = $this->getModel('OperatorAssistant');

		    $dir = $model->getItem()->directory;

		    

        $log = array();

     

        $nomeFile = htmlentities(strip_tags($_POST['nomeFile']));

        $file = $dir.'/'.$nomeFile;

        if(file_exists($file)){

           $lines = file($file);

        } else {

           $lines[0] = "<span>Operatore</span>Chat Closed";

           $log['stato'] = 1;

        }

        $log['text'] = $lines;

        echo json_encode($log);

        exit();

        

     }

     

     function invia() {

     

        $this->addModelPath( JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_operatorassistant' . DIRECTORY_SEPARATOR . 'models' );

        $model = $this->getModel('OperatorAssistant');

		    $dir = $model->getItem()->directory;

		    

        $log = array();

     

        $nickname = htmlentities(strip_tags($_POST['nickname']));

			  $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

			  $message = htmlentities(strip_tags($_POST['message']));

        $nomeFile = htmlentities(strip_tags($_POST['nomeFile']));

        $file=$dir.'/'.$nomeFile;

        

    		if(($message) != "\n"){

            	

    			 if(preg_match($reg_exUrl, $message, $url)) {

           			$message = preg_replace($reg_exUrl, '<a href="'.$url[0].'" target="_blank">'.$url[0].'</a>', $message);

    				} 

    			  fwrite(fopen($file, 'a'), "<span>". $nickname . "</span>" . $message = str_replace("\n", " ", $message) . "\n"); 

    		}

    		

        echo json_encode($log);

        exit();

        

     }

     

     function aggiornaLista() {

     

        $this->addModelPath( JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_operatorassistant' . DIRECTORY_SEPARATOR . 'models' );

        $model = $this->getModel('OperatorAssistant');

		    $dir = $model->getItem()->directory;

        $log = array();

        $text[] = array();

		    if ($handle = opendir($dir)) {

            while (false !== ($entry = readdir($handle))) {

                if ($entry != "." && 
                    $entry != ".." && 
                    $entry != "index.html" && 
                    $entry != ".htaccess" && 
                    strpos($entry, '_bck') === false ) {

                    $file_path = $dir . DIRECTORY_SEPARATOR . $entry;
                    if (is_dir($file_path) === false) {
                      $text[] =  $entry;
                    }

                }

            }

            closedir($handle);

            $log['text'] = $text; 

        }

    		

        echo json_encode($log);

        exit();

        

     }

     

     function cancella() {

     

        $this->addModelPath( JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_operatorassistant' . DIRECTORY_SEPARATOR . 'models' );

        $model = $this->getModel('OperatorAssistant');

		    $dir = $model->getItem()->directory;

		    

        $log = array();

     

        $nomeFile = htmlentities(strip_tags($_POST['nomeFile']));

      	$file = $dir.'/'.$nomeFile;

      	rename($file, $file.'_bck');

    		

        echo json_encode($log);

        exit();

        

     }

}