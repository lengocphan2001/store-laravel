<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Services\Admin\PasswordService;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    protected $passwordService;

    public function __construct(PasswordService $passwordService)
    {
        $this->passwordService = $passwordService;
    }

    public function formChangePassword()
    {
        return view('admin.changePassword.changePassword');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $data = $request->except('password_comfirm');
        if ($this->passwordService->changePassword($data)) {
            return redirect()->route('admin.dashboard')->with('success', 'Thay đổi mật khẩu thành công');
        }
        return redirect()->route('admin.formChangePassword')->with('error', 'Mật khẩu hiện tại không chính xác');
    }
}
