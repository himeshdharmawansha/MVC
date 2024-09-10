<?php 

/**
 * home class
 */
class Home extends Controller
{

	public function index()
	{

		$user = new User;
		$arr['id'] = 1;
		$arr['name'] = "Himesh";
		$arr2['name'] = "D";
		//$result = $user->where($arr);

		$arr1['name'] = "Miller";
		$arr1['age'] = 45;
		//$user -> insert($arr1);

		$id = 10;
		//$result = $user -> delete($id);

		$arr3['name'] = "Dha";
		$arr3['age'] = 32; 
		$id = 5;
		//$result = $user -> update($id, $arr3);

		$result = $user -> findAll();

		show($result);

		$this->view('home');
	}

}
