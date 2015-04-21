<?php namespace App\Http\Controllers;

use Parsedown;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
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
		$this->middleware('auth');
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
		$documentHtml_page = $page;

		if (Cache::has('sidebarNavHtml')) {
			$sidebarNavHtml = Cache::get('sidebarNavHtml');	
		}
		else{
			$sidebarNavContent = File::get($knowledgeDir.'/contents.md');
			$sidebarNavHtml = Parsedown::instance()->text($sidebarNavContent);
			Cache::forever('sidebarNavHtml',$sidebarNavHtml);
		}


		if(Cache::has($documentHtml_page)){
			$documentHtml = Cache::get($documentHtml_page);
		}
		else{
			$documentContent = File::get($knowledgeDir.'/'.$page);
			$documentHtml = Parsedown::instance()->text($documentContent);
			Cache::forever($documentHtml_page,$documentHtml);
		}
		
		return view('knowledge', compact('sidebarNavHtml', 'documentHtml'));
	}

}
