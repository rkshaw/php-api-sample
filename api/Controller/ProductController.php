<?php

/**
 * @OA\Tag(
 *     name="Product",
 *     description="Product related endpoints"
 * )
 */

class ProductController
{
    public function __construct(private ProductGateway $gateway)
    {
    }

    /**
     * @OA\Get(
     *     path="/php-api/help/api.php",
     *     summary="JSON for rendering swagger document without authorization",
     *     description="Returns JSON for swagger documentation",
     *     operationId="getSwaggerDocument",
     *     security={},
     *     @OA\Response(
     *         response=200,
     *         description="Successful response"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found",
     *         @OA\JsonContent(ref="#/components/schemas/DataNotFound")
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Server error",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorMessage")
     *     )
     * )
     */
    
    /**
     * @OA\Get(
     *     path="/php-api/api/v1/products",
     *     tags={"Product"},
     *     summary="To get list of all products",
     *     description="Returns collection of products",
     *     operationId="productsGetAll",
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Product")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Invalid credentials",
     *         @OA\JsonContent(ref="#/components/schemas/AuthenticationFailed")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found",
     *         @OA\JsonContent(ref="#/components/schemas/DataNotFound")
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Server error",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorMessage")
     *     )
     * )
     */
    
    /**
     * @OA\Get(
     *     path="/php-api/api/v1/products/{id}",
     *     tags={"Product"},
     *     summary="Get a product",
     *     description="Returns a product",
     *     operationId="productGetById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="The ID of the product to retrieve",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Invalid credentials",
     *         @OA\JsonContent(ref="#/components/schemas/AuthenticationFailed")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found",
     *         @OA\JsonContent(ref="#/components/schemas/DataNotFound")
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Server error",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorMessage")
     *     )
     * )
     */

    /**
     * @OA\Post(
     *     path="/php-api/api/v1/products",
     *     tags={"Product"},
     *     summary="Add a product",
     *     description="Adds a new product",
     *     operationId="productAddNew",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(ref="#/components/schemas/Success")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Invalid credentials",
     *         @OA\JsonContent(ref="#/components/schemas/AuthenticationFailed")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Invalid Input",
     *         @OA\JsonContent(ref="#/components/schemas/ValidationFailed")
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Server error",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorMessage")
     *     )
     * )
     */

    /**
     * @OA\Patch(
     *     path="/php-api/api/v1/products/{id}",
     *     tags={"Product"},
     *     summary="Modify a product",
     *     description="Updates a product",
     *     operationId="productUpdateById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="The ID of the product to retrieve",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/Product")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(ref="#/components/schemas/Success")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Invalid credentials",
     *         @OA\JsonContent(ref="#/components/schemas/AuthenticationFailed")
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Invalid Input",
     *         @OA\JsonContent(ref="#/components/schemas/ValidationFailed")
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Server error",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorMessage")
     *     )
     * )
     */

    /**
     * @OA\Delete(
     *     path="/php-api/api/v1/products/{id}",
     *     tags={"Product"},
     *     summary="Delete a product",
     *     description="Returns a product",
     *     operationId="productDeleteById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="The ID of the product to retrieve",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(ref="#/components/schemas/Success")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Invalid credentials",
     *         @OA\JsonContent(ref="#/components/schemas/AuthenticationFailed")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found",
     *         @OA\JsonContent(ref="#/components/schemas/DataNotFound")
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Server error",
     *         @OA\JsonContent(ref="#/components/schemas/ErrorMessage")
     *     )
     * )
     */
    public function processRequest(string $method, ?string $id): void
    {
        if ($id) {
            
            $this->processResourceRequest($method, $id);
            
        } else {
            
            $this->processCollectionRequest($method);
            
        }
    }
    
    private function processResourceRequest(string $method, string $id): void
    {
        $product = $this->gateway->get($id);
        
        if ( ! $product) {
            http_response_code(404);
            echo json_encode(["code" => 404, "message" => "Record not found"]);
            return;
        }
        
        switch ($method) {
            case "GET":
                echo json_encode($product);
                break;
                
            case "PATCH":
                $data = (array) json_decode(file_get_contents("php://input"), true);
                
                $errors = $this->getValidationErrors($data, false);

                if (!empty($data["id"]) && $data["id"] != $id) {
                    $errors[] = "id in path and payload mismatch";
                }
                
                if ( ! empty($errors)) {
                    http_response_code(422);
                    echo json_encode(["code" => 422, "errors" => $errors]);
                    break;
                }
                
                $rows = $this->gateway->update($product, $data);
                
                echo json_encode([
                    "status" => $rows ? true : false
                ]);
                break;
                
            case "DELETE":
                $rows = $this->gateway->delete($id);
                
                echo json_encode([
                    "status" => $rows ? true : false
                ]);
                break;
                
            default:
                http_response_code(405);
                header("Allow: GET, PATCH, DELETE");
        }
    }
    
    private function processCollectionRequest(string $method): void
    {
        switch ($method) {
            case "GET":
                echo json_encode($this->gateway->getAll());
                break;
                
            case "POST":
                $data = (array) json_decode(file_get_contents("php://input"), true);
                
                $errors = $this->getValidationErrors($data);
                
                if ( ! empty($errors)) {
                    http_response_code(422);
                    echo json_encode(["code" => 422, "errors" => $errors]);
                    break;
                }
                
                $id = $this->gateway->create($data);
                
                http_response_code(201);

                echo json_encode([
                    "status" => $id ? true : false
                ]);
                break;
            
            default:
                http_response_code(405);
                header("Allow: GET, POST");
        }
    }
    
    private function getValidationErrors(array $data, bool $is_new = true): array
    {
        $errors = [];

        if ($is_new && !empty($data["id"])) {
            $errors[] = "id must not send while adding new record";
        }
        
        if ($is_new && empty($data["name"])) {
            $errors[] = "name is required";
        }
        
        if (array_key_exists("size", $data)) {
            if (filter_var($data["size"], FILTER_VALIDATE_INT) === false) {
                $errors[] = "size must be an integer";
            }
        }
        
        return $errors;
    }
}

