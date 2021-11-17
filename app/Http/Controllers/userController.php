<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersTable;
use App\inquiryTable;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //ユーザー登録フォームを表示
    public function userRegister(){
        return view('userRegister');
    }

    //ユーザー登録フォームをDBに登録
    public function userInsert(Request $request){
        $users = new UsersTable;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->name = $request->name;
        $users->nameRuby = $request->nameRuby;
        $users->save();

        return redirect('home');
    }

    //お問い合わせ送信フォームを表示
    public function inquiryRegister(){
        return view('inquiryRegister');
    }

    //ユーザー登録フォームをDBに登録
    public function inquiryInsert(Request $request){
        $inquiry = new inquiryTable;
        $inquiry->email = $request->email;
        $inquiry->inquiry = $request->inquiry;
        $inquiry->telNumber = $request->telNumber;
        $inquiry->save();

        return redirect('home');
    } 

    //お問い合わせリスト表示
    public function inquiryList(){
        $inquiry = inquiryTable::orderBy('created_at', 'desc')->get();
        return view('inquiry')->with(['inquiry' => $inquiry]);
    }

    //お問い合わせ詳細
    public function inquiryEdit(Request $request){
        $inquiryEdit = $request->inquiryId;
        $inquiry = inquiryTable::where('id',$inquiryEdit)->get();
        return view('inquiryEdit')->with(['inquiry' => $inquiry]);
    }

    //ユーザーリスト表示
    public function userList(){
        $userList = UsersTable::orderBy('created_at', 'desc')->get();
        return view('userList')->with(['userList' => $userList]);
    }

    //ユーザー検索
    public function search(Request $request)
    {
        $searchEmail = $request->searchEmail;
        $searchName = $request->searchName;
;

        if($searchName){
            $userList = UsersTable::where('name','like','%'.$searchName.'%')->get();
        }

        if($searchEmail){
            $userList = UsersTable::where('email',$searchEmail)->get();
        }

        if($searchName && $searchEmail){
            $userList = UsersTable::where('name','like','%'.$searchName.'%')->where('email',$searchEmail)->get();
        }
        return view('userList')->with(['userList'=>$userList]);
    }

}
