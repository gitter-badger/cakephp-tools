<?php
App::uses('ControllerTestCase', 'TestSuite');
App::uses('Router', 'Routing');

/**
 * MyControllerTestCase Test Case
 *
 */
class MyControllerTestCase extends ControllerTestCase {

	/**
	 * Overwrite to fix issue that it always defaults to POST.
	 * That should be GET - which it now is.
	 *
	 * ### Options:
	 *
	 * - `data` Will be used as the request data. If the `method` is GET,
	 *   data will be used a GET params. If the `method` is POST, it will be used
	 *   as POST data. By setting `$options['data']` to a string, you can simulate XML or JSON
	 *   payloads to your controllers allowing you to test REST webservices.
	 * - `method` POST or GET. Defaults to GET.
	 * - `return` Specify the return type you want. Choose from:
	 *     - `vars` Get the set view variables.
	 *     - `view` Get the rendered view, without a layout.
	 *     - `contents` Get the rendered view including the layout.
	 *     - `result` Get the return value of the controller action. Useful
	 *       for testing requestAction methods.
	 *
	 * @param string $url The url to test
	 * @param array $options See options
	 * @return mixed
	 */
	protected function _testAction($url = '', $options = array()) {
		$options += array(
			'method' => 'GET',
		);
		if (is_array($url)) {
			$url = Router::url($url);
		}

		return parent::_testAction($url, $options);
	}

}
