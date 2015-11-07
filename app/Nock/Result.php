<?php 
namespace App\Nock;

class Result {

	public function generateApiSuccessLogin($type, $status, $token){
		
		$result = [
			'data' => [ 
					'token' => $token
			],
			'status' => $status,
		];
		
		return response()->json($result, 200, [], JSON_NUMERIC_CHECK);
	}
	public function generateApiSuccess($data, $type, $status){
		
		$result = [
			'data' => $data,
			'status' => $status
		];
		
		return response()->json($result, 200, [], JSON_NUMERIC_CHECK);
	}
	public function generateApiError($status, $type){
		
		$result = [
			'status' => $status
		];
		
		return response()->json($result, 400, [], JSON_NUMERIC_CHECK);
	}

	public function generateApiSuccessTask($data, $type, $status){
		
		$results = [
			'data' => $data,
			'status' => $status
		];
		
		$result = collect($results);

		return response()->json($result, 200, [], JSON_NUMERIC_CHECK);
		
	}
}