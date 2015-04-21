<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Log;
use Parsedown;
use GitWrapper\GitWrapper;

class KnowledgeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Knowledge Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth', [
			'except' => 'postRepoHook',
		]);
		$this->middleware('csrf', [
			'except' => 'postRepoHook',
		]);
	}

	/**
	 * Repo Hook, 提供给 git 库托管的 hook 接口
	 *
	 * @return Response
	 */
	public function postRepoHook()
	{
		$postInfo = Request::all();
		Log::info('Hook Post Info: ', $postInfo);

		$knowledgeDir = env('KNOWLEDGE_DIR', '/home/datartisan/knowledge');

		$gitWarpper = new GitWrapper();
		$gitRes = $gitWarpper->git('pull origin master', $knowledgeDir);

		Log::info("\n".$gitRes);
		return;
	}

	/**
	 * knowledge index 跳转到 getPage 统一 url 规则
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return redirect('knowledge/readme.md');
	}

	/**
	 * 展示 knowledge 内容
	 *
	 * @return Response
	 */
	public function getPage($page)
	{
		$knowledgeDir = env('KNOWLEDGE_DIR', '/home/datartisan/knowledge');

		// @todo: 需要缓存内容

		$sidebarNavContent = File::get($knowledgeDir.'/contents.md');
		$sidebarNavHtml = Parsedown::instance()->text($sidebarNavContent);

		$documentContent = File::get($knowledgeDir.'/'.$page);
		$documentHtml = Parsedown::instance()->text($documentContent);

		return view('knowledge', compact('sidebarNavHtml', 'documentHtml'));
	}

}
