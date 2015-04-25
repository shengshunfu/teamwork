<?php namespace App\Http\Controllers;

use Artisan;
use Cache;
use File;
use Log;
use Request;
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
	}

	/**
	 * Repo Hook, 提供给 git 库托管的 hook 接口
	 *
	 * @return Response
	 */
	public function postRepoHook()
	{
		$postInfo = Request::all();
		Log::info("Hook Post Info: \n", $postInfo);

		$knowledgeDir = env('KNOWLEDGE_DIR', '/home/datartisan/knowledge');

		$gitWarpper = new GitWrapper(env('GIT_BIN_PATH', '/usr/bin/git'));
		$gitRes = $gitWarpper->git('pull origin master', $knowledgeDir);
		Log::info("git info: \n".$gitRes);

		Cache::flush();

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

		$cacheKeyPrefix = 'knowledge_html:';
		
		$sidebarNavHtml = Cache::rememberForever($cacheKeyPrefix.'contents.md', function() use ($knowledgeDir)
		{
			$sidebarNavContent = File::get($knowledgeDir.'/contents.md');
			$sidebarNavHtml = Parsedown::instance()->text($sidebarNavContent);
			return $sidebarNavHtml;
		});

		$documentHtml = Cache::rememberForever($cacheKeyPrefix.$page, function() use ($knowledgeDir, $page)
		{
			$documentContent = File::get($knowledgeDir.'/'.$page);
			$documentHtml = Parsedown::instance()->text($documentContent);
			return $documentHtml;
		});

		return view('knowledge', compact('sidebarNavHtml', 'documentHtml'));
	}

}
