<?php


namespace App\Http\Controllers;
use Telegram\Bot\Api;
use Laravel\Lumen\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function TelegramBot()
    {
        $telegram = new Api(config('app.telegram.api_id'), config('app.telegram.api_hash'));

    // Lấy danh sách cuộc trò chuyện
        $dialogs = $telegram->getDialogs();
        var_dump($dialogs);die;
    }
}
