<?php
namespace Home\Controller;
use Think\Controller;
class ToolController extends PublicController {	
	private $user_sid='';
	private $user_name='';
	private $user_id='';
	private $status_arr=array();
	private $user_arr=array();
	public function __construct(){
		parent::__construct();
		 $this->ddos();
		$m=M('Website');
		$this->status_arr=$m->where('status_id=1')->select();
		$this->assign('key',$this->status_arr[0]['status_key']);//分配网站关键字
		$this->assign('description',$this->status_arr[0]['status_describe']);//分配网站描述
		if(isset($_COOKIE['user_sid'])){
			$this->user_sid=htmlspecialchars($_COOKIE['user_sid']);
			$m=M('User');
			$count=$m->where("user_sid='$this->user_sid'")->count();
			if($count>0){
				$this->user_arr=$m->where("user_sid='$this->user_sid'")->select();
				$this->user_name=$this->user_arr[0]['user_name'];
				$this->user_id=$this->user_arr[0]['user_id'];
			}else{	
				//$this->error('请先登录',U('Login/index'),3);
				//eixt();
				$this->user_sid='';
			}
		}else{
			$this->user_sid='';
			$this->user_name='游客';
			$this->user_id='';
		}
	}
	public function index(){
		//$this->display();
	}


	//酷狗音乐搜索
	public function kugoumusic(){
		$this->display();
	}	
	//搜索音乐
	public function searchkugoumusic(){
		$word=I('get.word','我擦，你干嘛','htmlspecialchars');
		if((!isset($_GET['pages']))||($_GET['pages']<=0)){
			$pages=1;
		}else{
			$pages=(int)I('get.pages','','htmlspecialchars');
		}	
		$w = urlencode($word);
		$url='http://mobilecdn.kugou.com/api/v3/search/song?iscorrect=1&pagesize=20&plat=0&page='.$pages.'&keyword='.$w.'&sver=3&showtype=14&version=7612&with_res_tag=1';
		$ret=file_get_contents($url);
		$ret=preg_replace('/<!--.*?-->/', '', $ret);
		$arr=json_decode($ret,true);
		//dump($arr["data"]['info']);
		$i=0;
		foreach ($arr["data"]['info'] as $m){
			$m_arr[$i]['music_name']=$m['filename'];//歌曲名称
			$m_arr[$i]['singername']=$m["singername"];
			//m4a###########################################################
			$m_arr[$i]['m4asizw']=$m["m4afilesize"];
			$m4aurl=file_get_contents("http://m.kugou.com/app/i/getSongInfo.php?hash={$m["hash"]}&cmd=playInfo");
			$m4aurl=json_decode($m4aurl,1);
			$m_arr[$i]['m4aurl']=$m4aurl['url'];
			//mp3##########################################################
			$m_arr[$i]['mp3size']=$m["320filesize"];
			$key=md5($m["320hash"].'kgcloud');
			$mp3url=file_get_contents("http://trackercdn.kugou.com/?key=$key&cmd=4&acceptmp3=1&hash={$m["320hash"]}&pid=1");
			$mp3url=json_decode($mp3url,1);
			$m_arr[$i]['mp3url']=$mp3url['url'];
			$i++;
		}
		$this->assign('word',$word);
		$this->assign('pages',$pages);
		//$this->assign('count',$count);
		$this->assign('m_arr',$m_arr);
		$this->display();
	}


	public function kuwomusic(){
		$this->display();
	}

	public function kuwosearchid(){
		if((!isset($_GET['url']))||(!isset($_GET['id']))){
			$this->error("请勿非法操作");
			exit();
		}
		if(isset($_GET['url']))
			$m = explode('MUSIC_', @$_GET['url']);
		else
			$id = @$m['1'];
		if ($id == false) {
			$id = @$_GET['url'];
		}
		$music = "http://player.kuwo.cn/webmusic/st/getNewMuiseByRid?rid=MUSIC_{$id}";
		$ch = curl_init($music);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// 获取数据返回
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		// 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		$con = curl_exec($ch);
		preg_match('/<mp3path>(.*)<\/mp3path>/', $con, $result_1);
		preg_match('/<mp3dl>(.*)<\/mp3dl>/', $con, $result_2);
		$result_url = "http://{$result_2['1']}/resource/{$result_1['1']}";
		if ($result_1) {
			/*
			* textarea禁止编辑 disabled=\"disabled\"
			 */
		$this->assign('url',$result_url);
		//echo" <div class=\"kw\"><textarea  >$result_url</textarea><a href = \"{$result_url}\" class=\"but\">下载</a></div>";	
		} else {
			//echo '<div class="error"><font color=red>转换失败，请检查你的网址</font></div>';
		$this->error("转换失败，请检查你的网址");
		}
	}


	public function kuwosearchname(){
		if(!isset($_GET['word'])){
			$this->error("请勿非法操作");
			exit();
		}
		$word = @$_GET['word'];
		$pn = @$_GET['pn'] ? @$_GET['pn'] : 1;
		$music = "http://sou.kuwo.cn/ws/NSearch?type=music&key={$word}&pn={$pn}";
		$ch = curl_init($music);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
		$con = curl_exec($ch);
		preg_match_all('/<p class="m_name">
                                        <a href="http:\/\/www.kuwo.cn\/yinyue\/(.*)\/" title="(.*)" target="_blank">/U', $con, $result);
		preg_match_all('/&pn=(.*)">尾页<\/a>/U', $con, $endPage);
		preg_match_all('/&pn=(.*)">首页<\/a>/U', $con, $homePage);
		$num = count($result['1']) - 1;
		if ($result['2']){
  
			$this->assign('arr',$result);
			$this->assign('pages',$pn);
			if (@$endPage[1][0] > 1) {
				$this->assign('count',$endPage[1][0]);
			}
			$this->assign('word',$word);
		}else{
			$this->error("error");
		}
	}

}
