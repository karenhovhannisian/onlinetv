<?php
/**
 * params.php
 *
 * Holds frontend specific application parameters.
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 1:38 PM
 */

$paramsLocalFile = $frontendConfigDir . DIRECTORY_SEPARATOR . 'params-local.php';
$paramsLocalFileArray = file_exists($paramsLocalFile) ? require($paramsLocalFile) : array();

$paramsEnvFile = $frontendConfigDir . DIRECTORY_SEPARATOR . 'params-env.php';
$paramsEnvFileArray = file_exists($paramsEnvFile) ? require($paramsEnvFile) : array();

$paramsCommonFile = $frontendConfigDir . DIRECTORY_SEPARATOR  . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .
		'common' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'params.php';

$paramsCommonArray = file_exists($paramsCommonFile) ? require($paramsCommonFile) : array();

$request = explode('/', $_SERVER['REQUEST_URI']);
if ($request[1] == 'ru') {
    $db_params = array(
            'db.connectionString' => 'mysql:host=localhost;dbname=tvintern_online',
            'db.username' => 'root',
            'db.password' => '',
    );
} else {
    $db_params = array(
            'db.connectionString' => 'mysql:host=localhost;dbname=tvintern_online',
            'db.username' => 'root',
            'db.password' => '',
    );
}


return CMap::mergeArray(
	$paramsCommonArray,
	// merge frontend specific with resulting env-local merge *override by local
	CMap::mergeArray(
		array(
			'url.rules' => array(
				/* for REST please @see http://www.yiiframework.com/wiki/175/how-to-create-a-rest-api/ */
				/* other @see http://www.yiiframework.com/doc/guide/1.1/en/topics.url */
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
                                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

                                '<module:\w+>/<controller:\w+>/<id:\d+>/<action:\w+>'=>'<module>/<controller>/<action>',
                                '<module:\w+>/<controller:\w+>/<id:\d+>'=>'<module>/<controller>/view',
                                '<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
                                '<module:\w+>/<controller:\w+>'=>'<module>/<controller>',
                                '<module:\w+>'=>'<module>',
			),
                    
			// add here all frontend-specific parameters
		),
                
                $db_params,
                
		// merge environment parameters with local *override by local
		CMap::mergeArray($paramsEnvFileArray, $paramsLocalFileArray)
	)
);