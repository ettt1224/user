<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    protected $userService;

    // 依賴注入 Service
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    // GET /users
    public function index(): JsonResponse
    {
        // 這裡可以選擇性加入 Policy，例如只有 Admin 能看列表
        // $this->authorize('viewAny', User::class);

        $users = $this->userService->getAllUsers();
        return response()->json($users);
    }

    // POST /users
    public function store(StoreUserRequest $request): JsonResponse
    {
        // Request 驗證通過後，交給 Service 處理
        $user = $this->userService->createUser($request->validated());
        return response()->json($user, 201);
    }

    // GET /users/{id}
    public function show(User $user): JsonResponse
    {
        return response()->json($user);
    }

    // PUT /users/{id}
    public function update(UpdateUserRequest $request, User $user): JsonResponse
    {
        // 1. 權限檢查 (呼叫 UserPolicy)
        $this->authorize('update', $user);

        // 2. 商業邏輯 (呼叫 Service)
        $updatedUser = $this->userService->updateUser($user, $request->validated());

        return response()->json($updatedUser);
    }

    // DELETE /users/{id}
    public function destroy(User $user): JsonResponse
    {
        // 權限檢查：只有 Admin 能刪
        $this->authorize('delete', $user);

        $this->userService->deleteUser($user);
        return response()->json(['message' => 'User deleted successfully']);
    }
}
