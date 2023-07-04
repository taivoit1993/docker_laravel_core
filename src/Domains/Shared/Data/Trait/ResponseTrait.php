<?php
namespace Domains\Shared\Data\Trait;
trait ResponseTrait{
    /**
     * @param $result
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];
        return response()->json($response, 200);
    }

    /**
     * @param $error
     * @param $errorMessages
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }

    /**
     * @param $error
     * @param $errorCode
     * @param $errorMessages
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendErrorWithErrorCode($error, $errorCode, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
            'errorCode' => $errorCode
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
}
