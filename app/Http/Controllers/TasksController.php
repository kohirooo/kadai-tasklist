<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Task;    // 追加


class TasksController extends Controller
{
    //  // getでmessages/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
    
    // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
  public function create()
    {
        $task = new Task;
        return view('tasks.create', [
            'task' => $task,
        ]);
    }
 

    // getでmessages/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    // getでmessages/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    // putまたはpatchでmessages/idにアクセスされた場合の「更新処理」
 public function update(Request $request, $id)
    {
        $this->validate($request, [
            'content' => 'required|max:255',
            'status' => 'required|max:10',
        ]);

        $task = Task::find($id);
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();

        return redirect('/');
    }

    // deleteでmessages/idにアクセスされた場合の「削除処理」
  public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'content'=>'required|max:191',
            'status'=>'required|max:10',
        ]);
            
        $task = new Task;
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();

        return redirect('/');//自動でページを移動 viewは不要
    }
}
